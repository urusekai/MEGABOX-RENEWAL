<?php
session_start();

if (isset($_SESSION['user_id'])) {
  $id = $_SESSION['user_id'];
  $name = $_SESSION['user_name'];
}
?>

<!-- GNB -->
<div class="header-inner">
  <nav id="gnb">
    <ul class="gnb-list">
      <li><a href="javascript:void(0)">VIP LOUNGE</a></li>
      <li><a href="javascript:void(0)">멤버쉽</a></li>
      <li><a href="javascript:void(0)">고객센터</a></li>
      <!-- 중간 영역 비우기 위한 요소 -->
      <li class="spacer" aria-hidden="true"></li>
      <?php if (isset($id)): // 로그인 상태일때 ?>
        <li><a href="mypage.php"><?= $name ?>님 (<?= $id ?>)</a></li>
        <li><a href="logout.php">로그아웃</a></li>
      <?php else: // 로그아웃 상태일때 ?>
        <li><a href="login.php">로그인</a></li>
        <li><a href="register.php">회원가입</a></li>
      <?php endif ?>
      <li><a href="javascript:void(0)">빠른예매</a></li>
    </ul>
  </nav>

  <!-- 로고 -->
  <h1 id="logo">
    <a href="./index.php">
      <img src="./assets/images/megabox.png" width="150" height="50" alt="MEET PLAY SHARE, 메가박스" />
    </a>
  </h1>

  <!-- LNB -->
  <div class="lnb-area">
    <!-- 왼쪽 메뉴 -->
    <div class="left-menu">
      <button data-target="sitemap"><span>사이트맵</span></button>
      <button data-target="search"><span>검색</span></button>
    </div>
    <!-- 중앙 메뉴 -->
    <nav id="lnb">
      <ul class="lnb_main">
        <li class="has-sub">
          <a href="javascript:void(0)">영화</a>
          <ul class="lnb_sub">
            <li><a href="javascript:void(0)">전체영화</a></li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="javascript:void(0)">예매</a>
          <ul class="lnb_sub">
            <li><a href="javascript:void(0)">빠른예매</a></li>
            <li><a href="javascript:void(0)">상영시간표</a></li>
            <li>
              <a href="javascript:void(0)">더 부티크 프라이빗 예매</a>
            </li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="javascript:void(0)">극장</a>
          <ul class="lnb_sub">
            <li><a href="javascript:void(0)">전체극장</a></li>
            <li><a href="javascript:void(0)">특별관</a></li>
            <li>
              <a href="javascript:void(0)">더 부티크 프라이빗 예매</a>
            </li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="javascript:void(0)">이벤트</a>
          <ul class="lnb_sub">
            <li><a href="javascript:void(0)">진행중이벤트 </a></li>
            <li><a href="javascript:void(0)">지난 이벤트</a></li>
            <li><a href="javascript:void(0)">당첨자 발표</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0)">스토어</a>
        </li>
        <li class="has-sub">
          <a href="javascript:void(0)">혜택</a>
          <ul class="lnb_sub">
            <li><a href="javascript:void(0)">메가박스 멤버쉽</a></li>
            <li><a href="javascript:void(0)">제휴/할인</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- 오른쪽 메뉴 -->
    <div class="right-menu">
      <a href="javascript:void(0)"><img height="22" src="./assets/icons/calendar.png" alt="상영시간표" /></a>
      <a href="javascript:void(0)"><img height="22" src="./assets/icons/user.png" alt="마이페이지" /></a>
    </div>
  </div>

  <!-- 토글영역 -->
  <!-- 사이트맵 토글-->
  <div id="sitemap">
    <div class="sitemap-inner">
      <div class="list">
        <p>영화</p>
        <ul>
          <li><a href="javascript:void(0)">전체영화</a></li>
        </ul>
      </div>
      <div class="list">
        <p>예매</p>
        <ul>
          <li><a href="javascript:void(0)">빠른예매</a></li>
          <li><a href="javascript:void(0)">상영시간표</a></li>
          <li>
            <a href="javascript:void(0)">더 부티크 프라이빗 예매</a>
          </li>
        </ul>
      </div>
      <div class="list">
        <p>극장</p>
        <ul>
          <li><a href="javascript:void(0)">전체극장</a></li>
          <li><a href="javascript:void(0)">특별관</a></li>
        </ul>
      </div>
      <div class="list">
        <p>이벤트</p>
        <ul>
          <li><a href="javascript:void(0)">진행중 이벤트</a></li>
          <li><a href="javascript:void(0)">지난 이벤트</a></li>
          <li><a href="javascript:void(0)">스토어</a></li>
        </ul>
      </div>
      <div class="list">
        <p>스토어</p>
        <ul>
          <li><a href="javascript:void(0)">새로운 상품</a></li>
          <li><a href="javascript:void(0)">메가티켓</a></li>
          <li><a href="javascript:void(0)">팝콘/음료/굿즈</a></li>
          <li><a href="javascript:void(0)">포인트몰</a></li>
        </ul>
      </div>
      <div class="list">
        <p>나의 메가박스</p>
        <ul>
          <li><a href="javascript:void(0)">나의 메가박스 홈</a></li>
          <li><a href="javascript:void(0)">예매/구매내역</a></li>
          <li><a href="javascript:void(0)">영화관람권</a></li>
          <li><a href="javascript:void(0)">스토어교환권</a></li>
          <li><a href="javascript:void(0)">할인/제휴쿠폰</a></li>
          <li><a href="javascript:void(0)">멤버쉽포인트</a></li>
          <li><a href="javascript:void(0)">나의 무비스토리</a></li>
          <li><a href="javascript:void(0)">나의 이벤트 응모내역</a></li>
          <li><a href="javascript:void(0)">나의 문의내역</a></li>
          <li><a href="javascript:void(0)">자주쓰는 할인카드</a></li>
          <li><a href="javascript:void(0)">회원정보</a></li>
        </ul>
      </div>
      <div class="list">
        <p>혜택</p>
        <ul>
          <li><a href="javascript:void(0)">멤버쉽 안내</a></li>
          <li><a href="javascript:void(0)">VIP LOUNGE</a></li>
          <li><a href="javascript:void(0)">제휴/할인</a></li>
        </ul>
      </div>
      <div class="list">
        <p>고객센터</p>
        <ul>
          <li><a href="javascript:void(0)">고객센터 홈</a></li>
          <li><a href="javascript:void(0)">자주묻는질문</a></li>
          <li><a href="javascript:void(0)">공지사항</a></li>
          <li><a href="javascript:void(0)">1:1문의</a></li>
          <li><a href="javascript:void(0)">단체/대관문의</a></li>
          <li><a href="javascript:void(0)">분실물문의</a></li>
        </ul>
      </div>
      <div class="list">
        <p>회사소개</p>
        <ul>
          <li><a href="javascript:void(0)">메가박스소개</a></li>
          <li><a href="javascript:void(0)">사회공헌</a></li>
          <li><a href="javascript:void(0)">홍보자료</a></li>
          <li><a href="javascript:void(0)">제휴/부대사업문의</a></li>
          <li><a href="javascript:void(0)">온라인제보센터</a></li>
          <li><a href="javascript:void(0)">IR자료</a></li>
          <li><a href="javascript:void(0)">인재채용</a></li>
          <li><a href="javascript:void(0)">윤리경영</a></li>
        </ul>
      </div>
      <div class="list">
        <p>이용정책</p>
        <ul>
          <li><a href="javascript:void(0)">이용약관</a></li>
          <li>
            <a href="javascript:void(0)">위치기반서비스 이용약관</a>
          </li>
          <li><a href="javascript:void(0)">개인정보처리방침</a></li>
          <li><a href="javascript:void(0)">스크린수배정에관한기준</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 영화검색 토글 -->
  <div id="search">
    <div class="tab-menu">
      <button class="active" data-tab="#booking">예매율 순</button>
      <button data-tab="#audience">메가박스 관객 순</button>
    </div>
    <div class="search-tabs">
      <div class="search-tab active" id="booking">
        <img src="./assets/images/주토피아2.jpg" alt="주토피아2" />
        <ul>
          <li>
            <span class="rank">1</span><a href="javascript:void(0)" data-image-src="./assets/images/주토피아2.jpg">주토피아
              2</a>
          </li>
          <li>
            <span class="rank">2</span><a href="javascript:void(0)" data-image-src="./assets/images/체인소맨.jpg">극장판 체인소맨:
              레제편</a>
          </li>
          <li>
            <span class="rank">3</span><a href="javascript:void(0)" data-image-src="./assets/images/만약에우리.jpg">만약에
              우리</a>
          </li>
          <li>
            <span class="rank">4</span><a href="javascript:void(0)" data-image-src="./assets/images/룩백.jpg">룩백</a>
          </li>
          <li>
            <span class="rank">5</span><a href="javascript:void(0)" data-image-src="./assets/images/철도원.jpg">철도원</a>
          </li>
        </ul>
      </div>
      <div class="search-tab" id="audience">
        <img src="./assets/images/체인소맨.jpg" alt="체인소맨" />
        <ul>
          <li>
            <span class="rank">1</span><a href="javascript:void(0)" data-image-src="./assets/images/체인소맨.jpg">극장판 체인소맨
              : 레제편</a>
          </li>
          <li>
            <span class="rank">2</span><a href="javascript:void(0)" data-image-src="./assets/images/주토피아2.jpg">주토피아
              2</a>
          </li>
          <li>
            <span class="rank">3</span><a href="javascript:void(0)" data-image-src="./assets/images/룩백.jpg">룩백</a>
          </li>
          <li>
            <span class="rank">4</span><a href="javascript:void(0)" data-image-src="./assets/images/윗집사람들.jpg">윗집
              사람들</a>
          </li>
          <li>
            <span class="rank">5</span><a href="javascript:void(0)" data-image-src="./assets/images/만약에우리.jpg">만약에
              우리</a>
          </li>
        </ul>
      </div>
    </div>
    <form action="javascript:void(0)" class="search-form">
      <input type="search" placeholder="영화를 검색하세요" />
      <button type="submit">
        <img width="25" src="./assets/icons/search.png" alt="검색하기" />
      </button>
    </form>
  </div>
</div>
