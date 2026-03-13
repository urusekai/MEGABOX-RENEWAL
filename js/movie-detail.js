$(function () {
  initTabMenu();
});

/* ===============================
            탭 메뉴
=============================== */
function initTabMenu() {
  // 탭 메뉴 El 등록
  const tabMenu = document.querySelector("#tab-menu");
  if (!tabMenu) return;

  // 첫번째 버튼 활성화
  tabMenu.querySelector("button").classList.add("active");

  // 탭 활성화
  const targetId = tabMenu.querySelector("button.active").dataset.targetId;
  document.getElementById(targetId).classList.add("active");

  // 이벤트 바인딩
  tabMenu.addEventListener("click", onTabMenuClick);
}

function onTabMenuClick(e) {
  if (!e.target.matches("button")) return;

  const targetBtn = e.target;
  const targetId = targetBtn.dataset.targetId;
  const targetTab = document.getElementById(targetId);

  document.querySelectorAll("#tab-menu button").forEach((btn) => {
    btn.classList.remove("active");
  });

  document.querySelectorAll(".tab-section").forEach((tab) => {
    tab.classList.remove("active");
  });

  e.target.classList.add("active");
  targetTab.classList.add("active");
}

/* ===============================
              예고편
=============================== */
$(function () {
  let swiper = new Swiper(".trailer-swiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    touchReleaseOnEdges: true,

    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });

  const $overlay = $("#trailerOverlay");
  const videoEl = document.getElementById("trailerVideo");

  $(".trailer .swiper-slide").on("click", function () {
    const src = $(this).data("videoSrc");
    if (!src) return; // 영상 없는 슬라이드는 무시

    videoEl.src = src;
    videoEl.load();

    $overlay.addClass("is-open");
    document.body.style.overflow = "hidden"; // 오버레이 열렸을때 뒤쪽 화면 스크롤 안되게함

    videoEl.play().catch(() => {});
  });

  $("#trailerOverlay .overlay-close").on("click", close);

  $overlay.on("click", function (e) {
    if (e.target === this) close();
  });

  $(document).on("keydown", function (e) {
    if (e.key === "Escape") close();
  });

  function close() {
    $overlay.removeClass("is-open");
    document.body.style.overflow = "";
    videoEl.pause();
    videoEl.removeAttribute("src");
    videoEl.load();
  }
});

/* ===============================
              스틸컷
=============================== */
$(function () {
  const $grid = $(".still-list");
  const $btn = $(".still-more-btn");

  const INITIAL = 8;
  let shown = 0;

  // 전체 아이템 확보 후 리스트 비우기
  const $allItems = $grid.children(".still-item").detach();
  const total = $allItems.length;

  $grid.masonry({
    itemSelector: ".still-item",
    columnWidth: ".still-item",
    percentPosition: true,
    gutter: 20,
  });

  const $first = $allItems.slice(0, INITIAL);
  $grid.append($first);

  $grid.imagesLoaded(function () {
    $grid.masonry("appended", $first);
    $grid.masonry("layout");
  });

  shown = $first.length;

  if (shown >= total) $btn.addClass("is-hidden");

  $btn.on("click", function () {
    const $rest = $allItems.slice(shown);
    if (!$rest.length) return;

    $grid.append($rest);

    $grid.imagesLoaded(function () {
      $grid.masonry("appended", $rest);
      $grid.masonry("layout");
    });

    $btn.addClass("is-hidden");
    shown = total;
  });

  $grid.on("click", "a", function (e) {
    e.preventDefault();
    $("#stillImage").attr("src", this.href);
    $("#stillOverlay").addClass("is-open");
    document.body.style.overflow = "hidden";
  });

  $("#stillOverlay .overlay-close").on("click", close);

  $("#stillOverlay").on("click", function (e) {
    if (e.target === this) close();
  });

  $(document).on("keydown", function (e) {
    if (e.key === "Escape") close();
  });

  function close() {
    $("#stillOverlay").removeClass("is-open");
    $("#stillImage").attr("src", "");
    document.body.style.overflow = "";
  }
});
