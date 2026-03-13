/* ==============================================
헤더 사이트맵, 검색 토글
================================================= */
$(function () {
  const toggleButtons = document.querySelectorAll(".left-menu button");
  const targets = document.querySelectorAll("#sitemap, #search");

  toggleButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetId = btn.dataset.target;

      // 패널 토글
      targets.forEach((el) => {
        el.classList.toggle(
          "is-active",
          targetId === el.id && !el.classList.contains("is-active"),
        );
      });

      // 버튼 상태 토글 (is-active)
      toggleButtons.forEach((btn) => {
        btn.classList.toggle(
          "is-active",
          btn.dataset.target === targetId &&
            !btn.classList.contains("is-active"),
        );
      });
    });
  });
});

/* ==============================================
헤더 검색창 탭 메뉴
================================================= */
$(function () {
  const $tabButtons = $("#search .tab-menu button");
  const $tabs = $(".search-tab");

  // 탭 버튼이 클릭되면
  $tabButtons.on("click", function () {
    // 기존에 활성화된 버튼과 탭을 비활성화
    $tabButtons.removeClass("active");
    $tabs.removeClass("active");

    // 선택된 버튼을 활성화
    $(this).addClass("active");

    // data-tab에 저장된 ID값으로 탭을 찾아서 활성화
    let targetId = $(this).data("tab");
    $(targetId).addClass("active");
  });

  $(document).on("mouseenter", ".search-tab.active a", function () {
    // 바뀐 탭에도 이벤트를 바인딩 하기 위해 이벤트 위임으로 처리
    const imageSrc = $(this).data("imageSrc");
    $(".search-tab.active img").attr("src", imageSrc);
  });
});
