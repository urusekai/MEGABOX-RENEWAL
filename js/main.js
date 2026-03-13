/* ==============================================
Movie Hero 섹션
================================================= */
$(function () {
  const $radios = $('input[name="movie-tabs"]');
  const $prev = $(".button-movies-left");
  const $next = $(".button-movies-right");
  const index = {
    "box-office": 0,
    soon: 0,
  };

  checkIndex(getActiveTab());

  $radios.on("change", function () {
    const selected = this.value;
    $(".movie-list").removeClass("active");
    $(`.movie-list[data-tab="${selected}"]`).addClass("active");
    checkIndex(getActiveTab());
  });

  $next.on("click", function () {
    index[getActiveTab()]++;
    moveList();
  });

  $prev.on("click", function () {
    index[getActiveTab()]--;
    moveList();
  });

  function moveList() {
    const $movieList = $(".movie-list.active");
    $movieList.css("transform", `translateX(${getMoveX()}px)`);
    checkIndex(getActiveTab());
  }

  function getMoveX() {
    const $movieList = $(".movie-list.active");
    const itemWidth = $movieList.find("li").outerWidth();
    const gap = ($movieList.width() - itemWidth * 4) / 3;

    return (gap + itemWidth) * -index[getActiveTab()];
  }

  function checkIndex(activeTab) {
    if (index[activeTab] == 0) {
      $prev.prop("disabled", true);
    } else {
      $prev.prop("disabled", false);
    }

    if (index[activeTab] >= $(".movie-list.active").find("li").length - 4) {
      $next.prop("disabled", true);
    } else {
      $next.prop("disabled", false);
    }
  }

  function getActiveTab() {
    return $(".movie-list.active").data("tab");
  }
});

/* ==============================================
Event 섹션
================================================= */
$(function () {
  const itemWidth = $(".event-content .slider").width();
  const total = $(".event-content #event-list").children("li").length;
  const $list = $(".event-content #event-list");
  const $prev = $(".event-controls .prev");
  const $next = $(".event-controls .next");
  const $pause = $(".event-controls .pause");
  const $current = $(".event-controls .scroll-counter .current");
  const $total = $(".event-controls .scroll-counter .total");
  const $indicator = $(".event-controls .scroll-indicator");
  const indicatorWidth = $(".event-controls .scroll").width() / total;
  const transitionTime = 0.5;

  let index = 1;
  let isAnimating = false;
  let intervalId;

  init();

  $next.on("click", function () {
    if (isAnimating) return;
    clearInterval(intervalId);
    moveNext();
    if (!$pause.hasClass("paused")) intervalId = setInterval(moveNext, 2500);
  });

  $prev.on("click", function () {
    if (isAnimating) return;
    clearInterval(intervalId);
    movePrev();
    if (!$pause.hasClass("paused")) intervalId = setInterval(moveNext, 2500);
  });

  $pause.on("click", function () {
    if ($pause.hasClass("paused")) {
      intervalId = setInterval(moveNext, 2500);
      $pause.removeClass("paused");
    } else {
      $pause.addClass("paused");
      clearInterval(intervalId);
    }
  });

  function init() {
    cloneItem();
    $indicator.css("width", `${indicatorWidth}px`);
    updateCounter();
    intervalId = setInterval(moveNext, 2500);
  }

  function cloneItem() {
    let firstClone = $list.children("li").eq(0).clone();
    let lastClone = $list
      .children("li")
      .eq(total - 1)
      .clone();
    $list.append(firstClone);
    $list.prepend(lastClone);
  }

  function moveNext() {
    if (isAnimating) return;
    isAnimating = true;

    index++;
    $list.css("transform", `translateX(${-(index * itemWidth)}px)`);
    updateCounter();

    if (index === total + 1) {
      setTimeout(function () {
        $list.css("transition", "none");
        index = 1;
        $list.css("transform", `translateX(${-(index * itemWidth)}px)`);

        $list[0].offsetHeight;
        $list.css("transition", `transform ${transitionTime}s ease`);

        isAnimating = false;
      }, transitionTime * 1000);
    } else {
      setTimeout(function () {
        isAnimating = false;
      }, transitionTime * 1000);
    }
  }

  function movePrev() {
    if (isAnimating) return;
    isAnimating = true;

    index--;
    $list.css("transform", `translateX(${-(index * itemWidth)}px)`);
    updateCounter();

    if (index === 0) {
      setTimeout(function () {
        $list.css("transition", "none");
        index = total;
        $list.css("transform", `translateX(${-(index * itemWidth)}px)`);

        $list[0].offsetHeight;
        $list.css("transition", `transform ${transitionTime}s ease`);

        isAnimating = false;
      }, transitionTime * 1000);
    } else {
      setTimeout(function () {
        isAnimating = false;
      }, transitionTime * 1000);
    }
  }

  function updateCounter() {
    let current;

    if (index === 0) current = total;
    else if (index === total + 1) current = 1;
    else current = index;

    $current.text(current);
    $total.text(total);
    updateIndicator(current);
  }

  function updateIndicator(current) {
    const moveX = indicatorWidth * (current - 1);
    $indicator.css("transform", `translateX(${moveX}px)`);
  }
});

/* ==============================================
Curation 섹션
================================================= */
$(function () {
  const $list = $(".curation-list");
  const $prev = $(".curation-controls .prev");
  const $next = $(".curation-controls .next");
  const $curationTitle = $(".curation-title");
  const $curationStory = $(".curation-story");
  const gap = parseFloat($list.css("gap")) || 0;
  const moveX = $list.children("li").first().outerWidth() + gap;
  const DURATION = 0.2;
  let isAnimating = false;

  updateActive($list.children("li").eq(0));
  $next.on("click", moveNext);
  $prev.on("click", movePrev);

  function updateActive($item) {
    $list.children("li").removeClass("active");
    $item.addClass("active");

    const storyId = $item.find(".curation-card").data("storyId");

    $curationTitle.empty().append($(storyId).find(".title").children().clone());
    $curationStory.empty().append($(storyId).find(".desc").children().clone());
  }

  function rotateItems(direction) {
    switch (direction) {
      case "next":
        $list.append($list.children("li").first());
        break;
      case "prev":
        $list.prepend($list.children("li").last());
        break;
    }
  }

  function moveNext() {
    if (isAnimating) return;
    isAnimating = true;

    updateActive($list.children("li").eq(1));
    $list.css("transform", `translateX(${-moveX}px)`);

    $list.one("transitionend", function () {
      rotateItems("next");
      $list.css("transition", "none");
      $list.css("transform", "translateX(0)");
      $list[0].offsetHeight;
      $list.css("transition", `transform ${DURATION}s ease`);

      isAnimating = false;
    });
  }

  function movePrev() {
    if (isAnimating) return;
    isAnimating = true;

    rotateItems("prev");
    updateActive($list.children("li").eq(0));
    $list.css("transition", "none");
    $list.css("transform", `translateX(${-moveX}px)`);
    $list[0].offsetHeight;

    $list.css("transition", `transform ${DURATION}s ease`);
    $list.css("transform", "translateX(0)");

    $list.one("transitionend", function () {
      isAnimating = false;
    });
  }
});

/* ==============================================
Theater 섹션
================================================= */
$(function () {
  const $list = $(".theater-list");
  const $detailList = $(".theater-detail-list");
  const $prev = $(".button-theaters-left");
  const $next = $(".button-theaters-right");
  const DURATION = 0.2;
  let isAnimating = false;

  init();

  $next.on("click", function () {
    if (isAnimating) return;
    isAnimating = true;

    setTimeout(function () {
      updateActive("next");
      updateDetail();
    }, DURATION * 500);

    $list.css("transform", `translateX(${getMoveX()}px)`);
    $list.one("transitionend", function () {
      rotateItems("next");
      $list.css("transition", "none");
      $list.css("transform", "translateX(0)");
      $list[0].offsetHeight;

      $list.css("transition", `transform ${DURATION}s ease`);

      isAnimating = false;
    });
  });

  $prev.on("click", function () {
    if (isAnimating) return;
    isAnimating = true;

    setTimeout(function () {
      updateActive("prev");
      updateDetail();
    }, DURATION * 500);

    $list.css("transition", "none");
    rotateItems("prev");
    $list.css("transform", `translateX(${getMoveX()}px)`);
    $list[0].offsetHeight;

    $list.css("transition", `transform ${DURATION}s ease`);
    $list.css("transform", "translateX(0)");
    $list.one("transitionend", function () {
      isAnimating = false;
    });
  });

  function getMoveX() {
    const gap = parseFloat($list.css("gap")) || 0;
    return -($list.children("li").first().outerWidth() + gap);
  }

  function updateActive(direction) {
    let $target;

    switch (direction) {
      case "next":
        $target = $list.children("li.active").next();
        break;
      case "prev":
        $target = $list.children("li.active").prev();
        break;
    }

    $list.children("li").removeClass("active");
    $target.addClass("active");
  }

  function updateDetail() {
    const targetId = $list.children("li.active").data("detail");
    $detailList
      .children("li")
      .removeClass("active")
      .filter(`[data-detail-id="${targetId}"]`)
      .addClass("active");
  }

  function rotateItems(direction) {
    switch (direction) {
      case "next":
        $list.append($list.children("li").first());
        break;
      case "prev":
        $list.prepend($list.children("li").last());
        break;
    }
  }

  function init() {
    $list.children("li").eq(2).addClass("active");
    updateDetail();
  }
});

/* ==============================================
Notice 섹션
================================================= */
$(function () {
  const scrollbar = document.querySelector(".notice-scrollbar");
  let swiper = new Swiper("#support .notice", {
    slidesPerView: 2.2,
    spaceBetween: 20,
    touchReleaseOnEdges: true,

    scrollbar: {
      el: scrollbar,
      draggable: true,
      hide: false,
    },
  });
});

/* ==============================================
Main Popup
================================================= */
$(function () {
  let swiper = new Swiper("#main-popup .swiper", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    effect: "fade",
    speed: 700,
    fadeEffect: {
      crossFade: true,
    },

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    pagination: {
      el: "#main-popup .swiper-pagination",
      clickable: true,
    },
  });
});

$(function () {
  const POPUP_COOKIE = "popup_ignore";
  const $popup = $("#main-popup");
  const $closeBtn = $("#main-popup button");
  const $ignoreCheck = $("#ignore-today");
  const $body = $("body");

  function getBodyScrollbarWidth() {
    return window.innerWidth - document.documentElement.offsetWidth;
  }

  function getCookie(name) {
    return (
      document.cookie
        .split("; ")
        .find((row) => row.startsWith(name + "="))
        ?.split("=")[1] || null
    );
  }

  function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value}; expires=${expires.toUTCString()}; path=/`;
  }

  $closeBtn.on("click", function () {
    if ($ignoreCheck.is(":checked")) {
      setCookie(POPUP_COOKIE, "yes", 1);
    }
    $popup.removeClass("is-open");
    $body.css({
      overflow: "",
      paddingRight: 0,
    });
  });

  $(document).on("keydown", function (e) {
    if (e.key === "Escape") {
      $popup.removeClass("is-open");
      $body.css({
        overflow: "",
        paddingRight: 0,
      });
    }
  });

  if (getCookie(POPUP_COOKIE) === "yes") {
    return;
  } else {
    $popup.addClass("is-open");
    $body.css({
      overflow: "hidden",
      paddingRight: getBodyScrollbarWidth(),
    });
  }
});

