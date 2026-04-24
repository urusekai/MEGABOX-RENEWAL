<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>주토피아 2 - 메가박스</title>
  <link rel="icon" href="favicon.ico" />
  <!-- 공통 CSS -->
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/layout.css" />
  <link rel="stylesheet" href="./css/widgets.css" />
  <!-- 페이지 CSS -->
  <link rel="stylesheet" href="./css/movie-detail.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <!-- 공통 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="./js/common.js" type="module"></script>
  <script src="./js/widgets.js" type="module"></script>
  <!-- 페이지 JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="./js/movie-detail.js" type="module"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1WQEW7LEWV"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-1WQEW7LEWV');
  </script>
</head>

<body>
  <div class="page-bg"></div>
  <!-- Header -->
  <header>
    <?php include "header.php"; ?>
  </header>
  <!-- Main -->
  <main>
    <?php include "widgets.php"; ?>
    <!-- 영화 오버뷰 -->
    <section id="movie-overview">
      <h2 class="visually-hidden">영화 오버뷰</h2>
      <div class="inner">
        <div class="movie-info">
          <h3 class="en-title">Zootopia 2</h2>
            <h3 class="ko-title">주토피아 2</h2>
              <div class="info-action">
                <button class="add-favorite">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="M17.5.917a6.4,6.4,0,0,0-5.5,3.3A6.4,6.4,0,0,0,6.5.917,6.8,6.8,0,0,0,0,7.967c0,6.775,10.956,14.6,11.422,14.932l.578.409.578-.409C13.044,22.569,24,14.742,24,7.967A6.8,6.8,0,0,0,17.5.917ZM12,20.846c-3.253-2.43-10-8.4-10-12.879a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,7.967h2a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,7.967C22,12.448,15.253,18.416,12,20.846Z" />
                  </svg>
                  <span>2.5k</span>
                  <button class="share">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                      <path
                        d="M19.333,14.667a4.66,4.66,0,0,0-3.839,2.024L8.985,13.752a4.574,4.574,0,0,0,.005-3.488l6.5-2.954a4.66,4.66,0,1,0-.827-2.643,4.633,4.633,0,0,0,.08.786L7.833,8.593a4.668,4.668,0,1,0-.015,6.827l6.928,3.128a4.736,4.736,0,0,0-.079.785,4.667,4.667,0,1,0,4.666-4.666ZM19.333,2a2.667,2.667,0,1,1-2.666,2.667A2.669,2.669,0,0,1,19.333,2ZM4.667,14.667A2.667,2.667,0,1,1,7.333,12,2.67,2.67,0,0,1,4.667,14.667ZM19.333,22A2.667,2.667,0,1,1,22,19.333,2.669,2.669,0,0,1,19.333,22Z" />
                    </svg>
                  </button>
              </div>
              <p class="movie-meta">
                <span class="date">2025.11.26</span><span class="seperator">|</span><span
                  class="runtime">108분</span><span class="seperator">|</span><span class="rating all">전체관람가</span>
              </p>
              <div class="movie-stats">
                <p class="title">실관람 평점</p>
                <p class="value">9.4</p>
                <p class="title">예매율</p>
                <p class="value">2<span class="unit">위 (9.9%)</span></p>
                <p class="title">누적관객수</p>
                <p class="value">5,370,942<span class="unit">명</span></p>
              </div>
        </div>
        <div class="movie-card">
          <img src="./assets/images/주토피아2.jpg" alt="주토피아2" />
          <a href="javascript:void(0)">예매하기</a>
        </div>
      </div>
    </section>
    <!-- 영화 요약 -->
    <section id="movie-summary">
      <h2 class="visually-hidden">영화 요약</h2>
      <div class="inner">
        <strong>더 화려해진 세계, 더 넓어진 주토피아!<br>
          디즈니의 가~~장 사랑스러운 콤비 '주디'와 '닉'이 돌아온다!</strong>
        <p>미스터리한 뱀 ‘게리’가 나타난 순간,<br>
          주토피아가 다시 흔들리기 시작했다!</p>

        <p>
          혼란에 빠진 도시를 구하기 위해<br>
          환상의 콤비 ‘주디’ & ‘닉’이 잠입 수사에 나서고<br>
          상상 그 이상의 진실과 위협을 마주하게 되는데...!
        </p>

        <strong>11월, 초특급 추적 어드벤처가 펼쳐진다!</strong>
      </div>
    </section>
    <!-- 탭 메뉴 -->
    <div id="tab-menu" class="tab-menu">
      <ul>
        <li><button type="button" data-target-id="movie-detail">상세정보</button></li>
        <li><button type="button" data-target-id="movie-review">관람평</button></li>
      </ul>
    </div>
    <section id="movie-detail" class="tab-section">
      <div class="inner">
        <h2 class="visually-hidden">상세정보</h2>
        <div class="info">
          <h3>영화정보</h3>
          <p class="title">상영타입</p>
          <p class="value">D ATMOS(더빙), 2D ATMOS(자막), 2D Dolby V+A(자막), 2D Dolby(자막), 2D MX4D(더빙), 2D
            MX4D(자막), 2D(더빙),
            2D(자막), 디지털영문자막</p>
          <p class="title">감독</p>
          <p class="value">지니퍼 굿윈, 제이슨 베이트먼, 키 호이 콴</p>
          <p class="title">장르</p>
          <p class="value">애니메이션 / 108 분</p>
          <p class="title">등급</p>
          <p class="value">전체관람가</p>
          <p class="title">개봉일</p>
          <p class="value">2025.11.26</p>
        </div>
        <div class="trailer">
          <h3>예고편 <span class="num-items">(6)</span></h3>
          <div class="swiper trailer-swiper">
            <ul class="swiper-wrapper">
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-1.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-1-thumb.jpg" alt="주토피아예고편1">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-2.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-2-thumb.jpg" alt="주토피아예고편2">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-3.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-3-thumb.jpg" alt="주토피아예고편3">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-4.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-4-thumb.jpg" alt="주토피아예고편4">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-5.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-5-thumb.jpg" alt="주토피아예고편5">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
              <li class="swiper-slide" data-video-src="./assets/videos/주토피아-예고편-6.mp4">
                <div class="thumb">
                  <img src="./assets/images/주토피아-예고편-6-thumb.jpg" alt="주토피아예고편6">
                  <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                      d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,22c-5.514,0-10-4.486-10-10S6.486,2,12,2s10,4.486,10,10-4.486,10-10,10Zm-4-4.353l10.04-5.647-10.04-5.647v11.295Zm2-7.875l3.96,2.228-3.96,2.228v-4.455Z" />
                  </svg>
                </div>
              </li>
            </ul>
            <div class="swiper-scrollbar"></div>
            <!-- 예고편 오버레이 창 -->
            <div id="trailerOverlay" class="overlay">
              <button class="overlay-close" type="button">×</button>
              <video id="trailerVideo" class="trailer-overlay-video" controls playsinline></video>
            </div>
          </div>
        </div>
        <div class="still">
          <h3>스틸컷 <span class="num-items">(19)</span></h3>
          <ul class="still-list">
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-1-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-1.jpg" alt="주토피아-스틸컷-1">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-2-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-2.jpg" alt="주토피아-스틸컷-2">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-3-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-3.jpg" alt="주토피아-스틸컷-3">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-4-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-4.jpg" alt="주토피아-스틸컷-4">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-5-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-5.jpg" alt="주토피아-스틸컷-5">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-6-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-6.jpg" alt="주토피아-스틸컷-6">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-7-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-7.jpg" alt="주토피아-스틸컷-7">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-8-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-8.jpg" alt="주토피아-스틸컷-8">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-9-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-9.jpg" alt="주토피아-스틸컷-9">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-10-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-10.jpg" alt="주토피아-스틸컷-10">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-11-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-11.jpg" alt="주토피아-스틸컷-11">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-12-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-12.jpg" alt="주토피아-스틸컷-12">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-13-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-13.jpg" alt="주토피아-스틸컷-13">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-14-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-14.jpg" alt="주토피아-스틸컷-14">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-15-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-15.jpg" alt="주토피아-스틸컷-15">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-16-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-16.jpg" alt="주토피아-스틸컷-16">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-17-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-17.jpg" alt="주토피아-스틸컷-17">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-18-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-18.jpg" alt="주토피아-스틸컷-18">
              </a>
            </li>
            <li class="still-item">
              <a href="./assets/images/주토피아-스틸컷-19-full.jpg">
                <img src="./assets/images/주토피아-스틸컷-19.jpg" alt="주토피아-스틸컷-19">
              </a>
            </li>
          </ul>
          <button type="button" class="still-more-btn">더보기<svg xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down"
              viewBox="0 0 24 24" width="512" height="512">
              <path
                d="M12,24A12,12,0,1,1,24,12,12.013,12.013,0,0,1,12,24ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2Zm1.414,13.414L18.126,10.7,16.712,9.289,12,14,7.327,9.327,5.913,10.741l4.673,4.673a2,2,0,0,0,2.828,0Z" />
            </svg></button>
          <!-- 스틸컷 오버레이 창 -->
          <div id="stillOverlay" class="overlay">
            <button class="overlay-close" type="button">×</button>
            <img id="stillImage" class="still-overlay-image"></img>
          </div>
        </div>
      </div>
    </section>
    <section id="movie-review" class="tab-section">
      <div class="inner">
        <h2>관람평</h2>
        <p class="review-title">
          <span class="movie-title">주토피아 2</span>에 대한 <span class="review-count">9502</span>개의 이야기가 있어요!
        </p>
        <div class="review-write">
          <form name="review-form" id="review-form" action="review-submit.php" method="post">
            <div class="review-header">
              <div class="rating">
                <input type="radio" name="rating" id="star5" value="5" required>
                <label for="star5">★</label>
                <input type="radio" name="rating" id="star4" value="4">
                <label for="star4">★</label>
                <input type="radio" name="rating" id="star3" value="3">
                <label for="star3">★</label>
                <input type="radio" name="rating" id="star2" value="2">
                <label for="star2">★</label>
                <input type="radio" name="rating" id="star1" value="1">
                <label for="star1">★</label>
              </div>
              <span id="review-text-count">0 / 100</span>
            </div>
            <textarea name="text" placeholder="관람평을 작성해주세요.&#10;관람일 기준 7일 이내 등록 시 50P가 적립됩니다." rows="2"
              maxlength="500"></textarea>
            <button type="submit">관람평 등록</button>
          </form>
        </div>
        <ul class="review-list">
          <li>
            <div class="review-header">
              <span class="user">movie_lover92</span>
              <span class="rating">★★★★★</span>
              <span class="date">2025.11.27</span>
            </div>
            <p>주디랑 닉 케미 여전히 최고라서 보는 내내 웃었어요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">zoo_fan</span>
              <span class="rating">★★★★☆</span>
              <span class="date">2025.11.27</span>
            </div>
            <p>전작 감성 그대로인데 스케일은 확실히 커졌네요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">닉덕후</span>
              <span class="rating">★★★★★</span>
              <span class="date">2025.11.26</span>
            </div>
            <p>닉 캐릭터 매력이 진짜 폭발하는 편입니다.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">family_trip</span>
              <span class="rating">★★★★☆</span>
              <span class="date">2025.11.26</span>
            </div>
            <p>아이랑 같이 보기 좋은 가족 영화로 딱이에요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">cinema_day</span>
              <span class="rating">★★★★★</span>
              <span class="date">2025.11.26</span>
            </div>
            <p>스토리랑 메시지 둘 다 좋아서 만족도 높았습니다.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">animation_k</span>
              <span class="rating">★★★★☆</span>
              <span class="date">2025.11.25</span>
            </div>
            <p>색감이랑 연출이 좋아서 보는 재미가 있었어요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">popcorn_time</span>
              <span class="rating">★★★★☆</span>
              <span class="date">2025.11.25</span>
            </div>
            <p>가볍게 보기 좋고 몰입감도 생각보다 괜찮았어요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">disney_fan</span>
              <span class="rating">★★★★★</span>
              <span class="date">2025.11.24</span>
            </div>
            <p>전편 팬이라면 무조건 만족할 후속작입니다.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">late_movie</span>
              <span class="rating">★★★☆☆</span>
              <span class="date">2025.11.24</span>
            </div>
            <p>조금 뻔하긴 했지만 전체적으로는 재밌었어요.</p>
          </li>

          <li>
            <div class="review-header">
              <span class="user">ending_scene</span>
              <span class="rating">★★★★★</span>
              <span class="date">2025.11.23</span>
            </div>
            <p>엔딩 여운이 좋아서 한동안 기억에 남을 듯합니다.</p>
          </li>
        </ul>


      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer>
    <?php include "footer.php"; ?>
  </footer>

</body>

</html>
