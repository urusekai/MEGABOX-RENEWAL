const KAKAO_JS_KEY = "08bf5a6bd5054f17528f5b5a7b947336";

function loadKakaoSdk() {
  return new Promise((resolve, reject) => {
    if (window.kakao?.maps?.services) {
      resolve();
      return;
    }

    const script = document.createElement("script");
    script.src = `https://dapi.kakao.com/v2/maps/sdk.js?appkey=${KAKAO_JS_KEY}&autoload=false&libraries=services`;
    script.async = true;
    script.onload = () => {
      if (!window.kakao?.maps?.load) {
        reject(new Error("Kakao maps not available"));
        return;
      }
      window.kakao.maps.load(resolve);
    };
    script.onerror = () => reject(new Error("Kakao SDK load failed"));
    document.head.appendChild(script);
  });
}

function resolveKoreanLocationLabel(lat, lon) {
  return loadKakaoSdk()
    .then(
      () =>
        new Promise((resolve) => {
          const geocoder = window.kakao?.maps?.services
            ? new kakao.maps.services.Geocoder()
            : null;

          if (!geocoder) {
            resolve(null);
            return;
          }

          geocoder.coord2Address(lon, lat, (result, status) => {
            if (
              status !== kakao.maps.services.Status.OK ||
              !Array.isArray(result) ||
              !result.length
            ) {
              resolve(null);
              return;
            }

            const address = result[0].road_address || result[0].address;
            const label = [
              address?.region_1depth_name,
              address?.region_2depth_name,
            ]
              .filter(Boolean)
              .join(" ");

            resolve(label || null);
          });
        })
    )
    .catch(() => null);
}

/* ==============================================
Weather Info
================================================= */
$(function () {
  const weatherEl = document.getElementById("weather-info");
  if (!weatherEl) return;

  const apiKey = "a6f75dd39da457b2482284ce4a6d5df9";
  const FALLBACK_POS = { lat: 37.5172, lon: 127.0473 };
  const fallbackLabel = "서울 강남";

  const airQualityMap = {
    1: "좋음",
    2: "보통",
    3: "나쁨",
    4: "매우 나쁨",
    5: "매우 나쁨",
  };

  function renderWeatherInfo(parts) {
    weatherEl.innerHTML = `
      <span class="weather-location">${parts.location}</span>
      <span class="weather-meta">
        <span class="weather-item">${parts.weather}</span>
        <span class="weather-sep" aria-hidden="true">|</span>
        <span class="weather-item">${parts.temp}</span>
        <span class="weather-sep" aria-hidden="true">|</span>
        <span class="weather-item">${parts.air}</span>
      </span>
    `;
  }

  function formatWeatherInfo(weatherData, airData, locationLabel, isFallback) {
    const weatherText = weatherData?.weather?.[0]?.description || "날씨 정보 없음";
    const temperature = weatherData?.main?.temp;
    const aqi = airData?.list?.[0]?.main?.aqi;
    const tempText = Number.isFinite(temperature)
      ? `${Math.round(temperature)}°C`
      : "--°C";
    const airQualityText = airQualityMap[aqi] || "정보 없음";

    return {
      location: isFallback ? `${locationLabel} (기본)` : locationLabel,
      weather: weatherText,
      temp: tempText,
      air: `미세먼지 ${airQualityText}`,
    };
  }

  function getCurrentPosition() {
    return new Promise((resolve) => {
      if (!("geolocation" in navigator)) {
        resolve({ ...FALLBACK_POS, isFallback: true });
        return;
      }

      navigator.geolocation.getCurrentPosition(
        (pos) => {
          resolve({
            lat: pos.coords.latitude,
            lon: pos.coords.longitude,
            isFallback: false,
          });
        },
        () => resolve({ ...FALLBACK_POS, isFallback: true }),
        { enableHighAccuracy: true, timeout: 7000, maximumAge: 60000 }
      );
    });
  }

  getCurrentPosition()
    .then(async (position) => {
      const weatherUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${position.lat}&lon=${position.lon}&appid=${apiKey}&units=metric&lang=kr`;
      const airUrl = `https://api.openweathermap.org/data/2.5/air_pollution?lat=${position.lat}&lon=${position.lon}&appid=${apiKey}`;

      const [weatherRes, airRes, koreanLabel] = await Promise.all([
        fetch(weatherUrl),
        fetch(airUrl),
        resolveKoreanLocationLabel(position.lat, position.lon),
      ]);

      if (!weatherRes.ok || !airRes.ok) {
        throw new Error("OpenWeather request failed");
      }

      const [weatherData, airData] = await Promise.all([
        weatherRes.json(),
        airRes.json(),
      ]);

      const locationLabel = koreanLabel || weatherData?.name || fallbackLabel;
      renderWeatherInfo(
        formatWeatherInfo(weatherData, airData, locationLabel, position.isFallback)
      );
    })
    .catch(() => {
      weatherEl.textContent = `${fallbackLabel} | 날씨 정보를 불러오지 못했습니다`;
    });
});

/* ==============================================
Nearby Megabox (Kakao Map)
================================================= */
$(function () {
  const panelEl = document.getElementById("nearby-cinema-panel");
  const statusEl = panelEl?.querySelector(".nearby-cinema-status");
  const mapEl = document.getElementById("nearby-cinema-map");
  const listEl = document.getElementById("nearby-cinema-list");

  if (!panelEl || !statusEl || !mapEl || !listEl) return;

  const FALLBACK_POS = { lat: 37.4979, lng: 127.0276 };

  function setStatus(text) {
    statusEl.textContent = text;
  }

  function formatDistance(distance) {
    const meter = Number(distance);
    if (!Number.isFinite(meter)) return "거리 정보 없음";
    if (meter >= 1000) return `${(meter / 1000).toFixed(1)}km`;
    return `${Math.round(meter)}m`;
  }

  function filterMegaboxPlaces(places) {
    return places.filter((place) => {
      const name = String(place.place_name || "").toLowerCase();
      const categoryName = String(place.category_name || "").toLowerCase();
      const isMegabox = name.includes("메가박스") || name.includes("megabox");
      const isCinemaCategory = categoryName.includes("영화관");

      return isMegabox && isCinemaCategory;
    });
  }

  function renderPlaces(places) {
    listEl.innerHTML = "";
    if (!places.length) {
      setStatus("근처 메가박스 정보를 찾지 못했습니다.");
      return;
    }

    const topPlaces = places.slice(0, 5);
    topPlaces.forEach((place) => {
      const item = document.createElement("li");
      const link = document.createElement("a");
      const distance = document.createElement("span");

      link.href = place.place_url;
      link.target = "_blank";
      link.rel = "noopener noreferrer";
      link.textContent = place.place_name;

      distance.className = "distance";
      distance.textContent = formatDistance(place.distance);

      item.append(link, distance);
      listEl.appendChild(item);
    });

    setStatus("현재 위치 기준 가까운 메가박스입니다.");
  }

  function initMapAndSearch(position) {
    const center = new kakao.maps.LatLng(position.lat, position.lng);
    const map = new kakao.maps.Map(mapEl, {
      center,
      level: 5,
    });

    const currentMarker = new kakao.maps.Marker({
      map,
      position: center,
    });
    currentMarker.setMap(map);

    const places = new kakao.maps.services.Places(map);
    places.keywordSearch(
      "메가박스",
      (data, status) => {
        if (status !== kakao.maps.services.Status.OK || !Array.isArray(data)) {
          renderPlaces([]);
          return;
        }

        const megaboxPlaces = filterMegaboxPlaces(data);
        if (!megaboxPlaces.length) {
          renderPlaces([]);
          return;
        }

        const bounds = new kakao.maps.LatLngBounds();
        bounds.extend(center);

        megaboxPlaces.slice(0, 5).forEach((place) => {
          const markerPos = new kakao.maps.LatLng(place.y, place.x);
          const marker = new kakao.maps.Marker({
            map,
            position: markerPos,
          });
          marker.setMap(map);
          kakao.maps.event.addListener(marker, "click", () => {
            if (place.place_url) {
              window.open(place.place_url, "_blank", "noopener,noreferrer");
            }
          });
          bounds.extend(markerPos);
        });

        map.setBounds(bounds);
        renderPlaces(megaboxPlaces);
      },
      {
        location: center,
        sort: kakao.maps.services.SortBy.DISTANCE,
        radius: 12000,
      }
    );
  }

  function getCurrentPosition() {
    return new Promise((resolve) => {
      if (!("geolocation" in navigator)) {
        resolve(FALLBACK_POS);
        return;
      }

      navigator.geolocation.getCurrentPosition(
        (pos) => {
          resolve({
            lat: pos.coords.latitude,
            lng: pos.coords.longitude,
          });
        },
        () => resolve(FALLBACK_POS),
        { enableHighAccuracy: true, timeout: 7000, maximumAge: 60000 }
      );
    });
  }

  setStatus("카카오 지도를 불러오는 중입니다...");
  loadKakaoSdk()
    .then(() => {
      setStatus("현재 위치를 확인하는 중입니다...");
      return getCurrentPosition();
    })
    .then((position) => {
      setStatus("가까운 메가박스를 찾는 중입니다...");
      initMapAndSearch(position);
    })
    .catch(() => {
      setStatus("지도를 불러오지 못했습니다.");
    });
});

$(function () {
  const topButtonEl = document.getElementById("nearby-top-button");
  if (!topButtonEl) return;

  topButtonEl.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
