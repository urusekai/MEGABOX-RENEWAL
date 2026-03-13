<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MEET PLAY SHARE, 메가박스</title>
  <link rel="icon" href="./favicon.ico" />
  <!-- 공통 CSS -->
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/layout.css" />
  <link rel="stylesheet" href="./css/widgets.css" />
  <!-- 페이지 CSS -->
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <!-- 공통 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="./js/common.js" type="module"></script>
  <script src="./js/widgets.js" type="module"></script>
  <!-- 페이지 JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="./js/main.js" type="module"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <?php include "header.php"; ?>
  </header>
  <!-- Main -->
  <main>
    <?php include "widgets.php"; ?>
    <?php include "main.php"; ?>
  </main>
  <!-- Footer -->
  <footer>
    <?php include "footer.php"; ?>
  </footer>

  <!-- 팝업창 -->
  <div id="main-popup">
    <div class="main-popup-content">
      <div class="swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <img src="./assets/images/popup-1.jpg" alt="트릴로지 마라톤 상영회" />
          </li>
          <li class="swiper-slide">
            <img src="./assets/images/popup-2.jpg" alt="직장상사 길들이기" />
          </li>
          <li class="swiper-slide">
            <img src="./assets/images/popup-3.jpg" alt="짧은영화 EP.06 그녀의연기" />
          </li>
          <li class="swiper-slide">
            <img src="./assets/images/popup-4.jpg" alt="2026 메가박스 아카데미 기획전" />
          </li>
        </ul>
      </div>
      <div class="popup-bottom">
        <div class="swiper-pagination"></div>
        <label for="ignore-today">하루동안 보지 않기</label>
        <input type="checkbox" name="ignore-today" id="ignore-today" />
      </div>
      <button type="button">
        <svg viewBox="0 0 24 24" class="icon-close">
          <circle cx="12" cy="12" r="12" />zzzzzzz
          <path d="M15.293 7.293 12 10.586 8.707 7.293 7.293 8.707
       10.586 12 7.293 15.293 8.707 16.707
       12 13.414 15.293 16.707 16.707 15.293
       13.414 12 16.707 8.707 15.293 7.293Z" fill="black" />
        </svg>
      </button>
    </div>
  </div>
  <!-- SVG 아이콘 -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="icon-arrow-double-left" viewBox="0 0 24 24">
      <path
        d="m2.146,12.354l10.827,10.827-.707.707L1.439,13.061c-.283-.283-.439-.66-.439-1.061s.156-.777.439-1.061L12.267.112l.707.707L2.146,11.646c-.095.095-.146.22-.146.354s.052.259.146.354ZM22.354.819l-.707-.707-11.418,11.418c-.258.259-.258.681,0,.941l11.417,11.417.707-.707-11.181-11.181L22.354.819Z" />
    </symbol>
    <symbol id="icon-arrow-double-right" viewBox="0 0 24 24">
      <path
        d="m11.733,23.888l-.707-.707,10.827-10.827c.094-.095.146-.22.146-.354s-.052-.259-.146-.354L11.026.819l.707-.707,10.827,10.827c.283.283.439.66.439,1.061s-.156.777-.439,1.061l-10.827,10.827Zm2.037-11.417c.126-.126.195-.293.195-.471s-.069-.345-.195-.471L2.354.112l-.707.707,11.181,11.181L1.646,23.181l.707.707,11.417-11.417Z" />
    </symbol>
    <symbol id="icon-link" viewBox="0 0 24 24">
      <path
        d="M24,1.5V10h-1V1.707L8.854,15.854l-.707-.707L22.293,1H14V0h8.5c.827,0,1.5,.673,1.5,1.5Zm-5,21.5H1V6.5c0-.827,.673-1.5,1.5-1.5H15.464l1-1H2.5c-1.378,0-2.5,1.122-2.5,2.5V24H20V7.536l-1,1v14.464Z" />
    </symbol>
    <symbol id="icon-arrow-circle-right" viewBox="0 0 24 24">
      <path
        d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Zm5.522-12.154c.636,.636,.636,1.671,0,2.308l-4.803,4.803-.707-.707,4.75-4.75H6v-1h10.762l-4.75-4.75,.707-.707,4.803,4.803Z" />
    </symbol>
  </svg>
</body>

</html>


