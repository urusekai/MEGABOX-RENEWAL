<!-- Movie Hero Section -->
<section id="movie-hero">
  <h2>영화</h2>

  <!-- 상단 메뉴 -->
  <div class="top-menu">
    <form action="javascript:void(0)" class="movie-search">
      <input type="search" placeholder="영화명을 입력해 주세요" />
      <button type="submit">
        <img src="./assets/icons/search.png" width="20" alt="검색" />
      </button>
    </form>
    <div id="movie-tabs">
      <input type="radio" name="movie-tabs" id="box-office" value="box-office" checked />
      <label for="box-office">박스오피스</label>
      <input type="radio" name="movie-tabs" id="soon" value="soon" />
      <label for="soon">상영예정작</label>
      <span class="indicator"></span>
    </div>
    <a href="javascript:void(0)" class="all-movies">전체 영화 보기&nbsp;&nbsp;&nbsp;></a>
  </div>

  <!-- 콘텐츠 -->
  <div class="movies-wrap">
    <button class="button-movies-left">
      <svg class="icon">
        <use href="#icon-arrow-double-left"></use>
      </svg>
    </button>
    <button class="button-movies-right">
      <svg class="icon">
        <use href="#icon-arrow-double-right"></use>
      </svg>
    </button>

    <!-- 영화 리스트 보여지는곳 : 리스트가 영역 벗어나면 숨겨지도록 -->
    <div class="movies">
      <ol class="movie-list active" data-tab="box-office">
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/주토피아2.jpg" alt="주토피아2" class="poster-img" />
              <div class="movie-detail">
                <p class="title">더 화려해진 세계, 더 넓어진 주토피아!</p>
                <p>
                  디즈니의 가~~장 사랑스러운 콤비 '주디'와 '닉'이
                  돌아온다!<br /><br />
                  미스터리한 뱀 ‘게리’가 나타난 순간, 주토피아가 다시
                  흔들리기 시작했다!<br /><br />혼란에 빠진 도시를 구하기
                  위해 환상의 콤비 ‘주디’ & ‘닉’이 잠입 수사에 나서고 상상
                  그 이상의 진실과 위협을 마주하게 되는데<br /><br />11월,
                  초특급 추적 어드벤처가 펼쳐진다!
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>주토피아 2</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 34.1%</span><span class="rating">9.5</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/체인소맨.jpg" alt="체인소맨" class="poster-img" />
              <div class="movie-detail">
                <p class="title">
                  인기 애니메이션 '체인소 맨' 첫 공식 극장판 국내 상륙!
                </p>
                <p>
                  압도적 배틀 액션이 스크린에서 폭발한다!<br /><br />데블
                  헌터로 일하는 소년 ‘덴지’는 조직의 배신으로 죽음에
                  내몰린 순간 전기톱 악마견 ‘포치타’와의 계약으로 하나로
                  합쳐져 누구도 막을 수 없는 존재 ‘체인소 맨’으로 다시
                  태어난다.<br /><br />악마와 사냥꾼, 그리고 정체불명의
                  적들이 얽힌 잔혹한 전쟁 속에서 ‘레제’라는 이름의
                  미스터리한 소녀가 ‘덴지’ 앞에 나타나는데… ‘덴지’는
                  사랑이라는 감정에 이끌려 지금껏 가장 위험한 배틀에 몸을
                  던진다!
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>극장판 체인소맨: 레제편</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 18.3%</span><span class="rating">9.3</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/만약에우리.jpg" alt="만약에우리" class="poster-img" />
              <div class="movie-detail">
                <p class="title">가장 초라했던 그때,</p>
                <p>
                  가장 눈부시던 우리<br /><br />고향 가는 고속버스에
                  올라탄 은호(구교환)와 휴학 후 어디론가 떠날 결심을 한
                  정원(문가영), 나란히 앉게 된 두 사람은 뜻밖의 인연을
                  맺는다.<br /><br />서로의 꿈을 응원하며 의지하던 두
                  사람은 어느새 일상 깊숙이 스며들어 연인으로 발전한다.<br /><br />웃고,
                  싸우고, 화해하며 세상을 다 가진 듯 뜨겁게 사랑하지만,
                  현실의 벽 앞에 두 사람은 결국 다른 길을 선택하게
                  된다.<br /><br />그렇게 10년이 지난 후, 다시 마주한 순간
                  은호는 정원에게 오랫동안 묻어두었던 한마디를 꺼낸다.<br /><br />“만약에
                  우리...”
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>만약에 우리</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 8.6%</span><span class="rating">8.9</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/룩백.jpg" alt="룩백" class="poster-img" />
              <div class="movie-detail">
                <p class="title">“만화를 그려서 다행이라고 생각해”</p>
                <p>
                  그림에 대한 자신감으로 가득한 ‘후지노’ “세상에 나와서
                  다행이라고 생각해” 세상과의 단절 속에 그림만이 전부였던
                  ‘쿄모토’<br /><br />만화를 향한 한결 같은 마음으로 잊지
                  못할 사계절을 함께한 두 소녀의 아름다운 우정 이야기가
                  시작된다!
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>룩백</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 5.9%</span><span class="rating">9.6</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/철도원.jpg" alt="철도원" class="poster-img" />
              <div class="movie-detail">
                <p class="title">하얀 눈으로 뒤덮인 종착역, 호로마이</p>
                <p>
                  그곳에는 평생 역을 지켜온 철도원 ‘오토’가 있다 눈이
                  내리는 날이면, ‘오토’는 고개를 들어 먼 하늘을 바라본다
                  잃어버린 소중한 것들을 생각하면서 …<br /><br />17년전
                  어느 겨울 날, 눈송이처럼 그에게 왔다가, 눈 녹듯이
                  떠나버린 딸 ‘유키코’ 그리고 딸을 따라 떠난 아내
                  ‘시즈에’…<br /><br />‘오토’는 그들과의 인연을, 얼굴을
                  마주하지도 못한 채 이 호로마이 역에서 떠나보냈다<br /><br />공허한
                  세월 속, 어김없이 자신의 책임을 다하던 ‘오토’ 정년
                  퇴임을 앞둔 새해의 아침, 눈 쌓인 플랫폼에서 낯선 소녀가
                  천진한 인사를 건네오는데…
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>철도원</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 5.3%</span><span class="rating">8.6</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/누벨바그.jpg" alt="누벨바그" class="poster-img" />
              <div class="movie-detail">
                <p class="title">계속 찍어요 우리만 할 수 있으니까</p>
                <p>
                  1959년 파리,<br /><br />젊은 비평가 ‘고다르’가 올해
                  최악의 영화이자 세기의 데뷔작이 될<br /><br />&lt;네
                  멋대로 해라&gt;를 찍는 미친 모험의 시간으로 점프하는<br /><br />리처드
                  링클레이터의 시네마 매직
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>누벨바그</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 2.6%</span><span class="rating">8.3</span>
            </div>
          </article>
        </li>
      </ol>
      <ol class="movie-list" data-tab="soon">
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/하트맨.jpg" alt="하트맨" class="poster-img" />
              <div class="movie-detail">
                <p class="title">
                  돌아온 남자 승민(권상우)이 다시 만난 첫사랑을 놓치지
                  않기 위해 고군분투하지만, 그녀에게
                </p>
                <p>절대 말할 수 없는 비밀이 생기며 벌어지는 코미디</p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>하트맨</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 6.4%</span><span class="dday">D-7</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/신비아파트10주년극장판.jpg" alt="신비아파트10주년극장판" class="poster-img" />
              <div class="movie-detail">
                <p class="title">일곱 개의 빛이 하나로 모일 때,</p>
                <p>
                  비로소 어둠의 군주가 다시 깨어난다!<br /><br />10년 후,
                  20살이 된 하리는 대학생활에 적응하느라 알바하느라 바쁜
                  시간을 보낸다. 예전과는 달라진 상황에 서운해 하던 신비는
                  결국 하리와 크게 다투게 된다. 그런 신비 앞에 나타난
                  ‘귀신헌터’ 채널의 안 PD가 신비를 스타로 만들어 주겠다고
                  유혹하고, 예상치 못한 반응과 함께 신비는 하루아침에 유명
                  스타가 된다. 신비가 세상에 모습을 드러내자 숨어살던 전
                  세계의 도깨비들이 하나 둘 세상 밖으로 나오고, 도깨비들은
                  광화문에 모여 ‘세계 도깨비 축제’를 연다. 화려한 축제를
                  즐기던 그 순간, 오랜 시간 잠들어 있던 어둠의 군주
                  ‘지하국대적’이 부활하고, 모두가 위험에 빠지고 마는데..!
                  과연 하리는 신비와의 우정을 되찾고, 세상을 구할 수
                  있을까?!
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>신비아파트 10주년 극장판 : 한 번 더, 소환</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 1%</span><span class="dday">D-3</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/더퍼스트슬램덩크.jpg" alt="더퍼스트슬램덩크" class="poster-img" />
              <div class="movie-detail">
                <p class="title">
                  전국 제패를 꿈꾸는 북산고 농구부 5인방의 꿈과 열정,
                  멈추지 않는 도전을 그린 영화
                </p>
                <p></p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>더 퍼스트 슬램덩크</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 0.9%</span><span class="dday">D-11</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/광장.jpg" alt="광장" class="poster-img" />
              <div class="movie-detail">
                <p class="title">
                  북한 평양으로 파견을 온 스웨덴 대사관의 1등 서기관
                  ‘보리’.
                </p>
                <p>
                  그는 외교관이라는 신분 덕분에 보호를 받지만, 한편으로 늘
                  주변의 감시를 받는 이방인에 불과하다.<br /><br />그런
                  ‘보리’가 기댈 수 있는 사람은 평양 시민인 교통보안원
                  ‘복주’. 하지만 이별이 정해져 있기에 두 사람은 남은
                  시간을 더욱 소중하게 보내려고 노력한다.<br /><br />그러던
                  어느 날 ‘복주’가 어딘가로 사라졌고, 돌아갈 날이 얼마
                  남지 않은 ‘보리’는 그녀를 찾아 바깥을 온종일 헤맨다.<br /><br />결국
                  ‘보리’는 아무 말 없이 상황을 지켜봤던 자신의 통역관
                  ‘명준’에게 도움을 요청하고, ‘명준’은 자신도 모르게
                  꿈틀거리는 마음 때문에 갈등하게 되는데…<br /><br />영원히
                  함께할 수 없어도 누군가의 내일을 묻고 싶은 관계가 있다.
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>광장</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 0.2%</span><span class="dday">D-9</span>
            </div>
          </article>
        </li>
        <li>
          <article class="movie-card">
            <div class="movie-poster">
              <img src="./assets/images/나이트플라워.jpg" alt="나이트플라워" class="poster-img" />
              <div class="movie-detail">
                <p class="title">
                  두 아이를 키우며 빚에 시달린 여자가 생계를 위해
                </p>
                <p>
                  격투기 선수와 팀을 이루어 마약 판매를 하면서 발생하는
                  이야기
                </p>
                <a href="movie-detail.php">상세정보</a>
              </div>
            </div>
            <h3>나이트 플라워</h3>
            <a href="javascript:void(0)" class="ticketing">예매하기</a>
            <div class="movie-meta">
              <span>예매율 0.2%</span><span class="dday">D-2</span>
            </div>
          </article>
        </li>
      </ol>
    </div>
  </div>
</section>
<!-- Quick Menu Section -->
<section id="quick-menu">
  <h2 class="sr-only">퀵 메뉴</h2>
  <ul class="quick-menu-box">
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/calendar.png" alt="상영시간표" />
        <span>상영시간표</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/film.png" alt="박스오피스" />
        <span>박스오피스</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/tickets.png" alt="빠른예매" />
        <span>빠른예매</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/store.png" alt="스토어" />
        <span>스토어</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/user.png" alt="멤버쉽" />
        <span>멤버쉽</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="./assets/icons/vip.png" alt="VIP" />
        <span>V I P</span>
      </a>
    </li>
  </ul>
</section>
<!-- Event Section -->
<section id="event">
  <h2>
    <a href="javascript:void(0)">이벤트<img src="./assets/icons/arrow-right.png" alt="이동하기" /></a>
  </h2>

  <div class="event-inner">
    <div class="event-content">
      <div class="slider">
        <ul id="event-list">
          <li>
            <a href="javascript:void(0)">
              <img src="./assets/images/토스퀵계좌이체.png" alt="토스 퀵 계좌이체 이벤트" />
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <img src="./assets/images/토스페이1월결제혜택.png" alt="토스 1월 결제혜택 이벤트" />
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <img src="./assets/images/현대오일뱅크포인트X메가박스.jpg" alt="현대오일뱅크포인트 X 메가박스 이벤트" />
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <img src="./assets/images/굿즈이벤트주술회전시부야사변.jpg" alt="굿즈이벤트 주술회전 시부야사변" />
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <img src="./assets/images/내통장결제경품추천프로모션.jpg" alt="내통장결제 경품추천 프로모션" />
            </a>
          </li>
        </ul>
      </div>

      <!-- 하단 컨트롤 바 -->
      <div class="event-controls">
        <span class="scroll">
          <span class="scroll-indicator"></span>
        </span>
        <button class="prev">
          <img src="./assets/icons/arrow-left.png" alt="왼쪽이동 버튼" />
        </button>
        <span class="scroll-counter">
          <span class="current"></span>/<span class="total"></span>
        </span>
        <button class="next">
          <img src="./assets/icons/arrow-right.png" alt="오른쪽이동 버튼" />
        </button>
        <button class="pause">
          <img src="./assets/icons/pause.png" alt="일시정지" />
          <img src="./assets/icons/play.png" alt="일시정지" />
        </button>
      </div>
    </div>

    <!-- 오른쪽 네비게이션 메뉴 -->
    <nav class="event-menu">
      <ul>
        <li>
          <a href="javascript:void(0)">메가 Pick</a>
        </li>
        <li>
          <a href="javascript:void(0)">영화</a>
        </li>
        <li>
          <a href="javascript:void(0)">극장</a>
        </li>
        <li>
          <a href="javascript:void(0)">제휴/할인</a>
        </li>
        <li>
          <a href="javascript:void(0)">시사회/무대인사</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<!-- Curation Section -->
<section id="curation">
  <h2>
    <a href="javascript:void(0)">큐레이션<img src="./assets/icons/arrow-right.png" alt="이동하기" /></a>
  </h2>
  <div class="curation-inner">
    <article class="curation-detail">
      <div class="curation-heading">
        <span class="curation-tag">#필름소사이어티</span>
        <h3 class="curation-title">큐레이션 제목</h3>
      </div>
      <div class="curation-story"></div>
      <div class="curation-story-templates">
        <div id="curation-story-0">
          <div class="title"><span>여행과 나날</span></div>
          <div class="desc">
            <p>“이렇게 즐거웠던 건 오랜만이에요”</p>
            <p>
              슬럼프에 빠진 각본가 '이'는 어쩌면 끝이라는 생각으로
              말로부터 도망치듯 설국의 작은 마을로 떠난다
            </p>
            <p>
              지도에는 없는 깊은 산 속 여관을 찾은 '이'는 수상할 만큼
              무심한 주인 '벤조'와 머물게 되고 ...
            </p>
          </div>
        </div>
        <div id="curation-story-1">
          <div class="title"><span>신의악단</span></div>
          <div class="desc">
            <p>대북제재로 돈줄이 막힌 북한.</p>
            <p>
              국제사회의 2억 달러 지원을 얻기 위한 마지막 방법은 단 하나!
            </p>
            <p>
              보위부는 당의 명령을 받고, 북한 최초의 가짜 찬양단을 만드는
              임무를 맡는다.
            </p>
          </div>
        </div>
        <div id="curation-story-2">
          <div class="title"><span>세계의 주인</span></div>
          <div class="desc">
            <p>
              반장, 모범생, 학교 인싸인 동시에 연애가 가장 큰 관심사인
              열여덟 ‘이주인’.
            </p>
            <p>
              어느 날, 반 친구 ‘수호’가 제안한 서명운동에 전교생이
              동참하던 중 오직 ‘주인’만이 내용에 동의할 수 없다며 나 홀로
              서명을 거부한다.
            </p>
          </div>
        </div>
        <div id="curation-story-3">
          <div class="title"><span>어리석은 자는 누구인가</span></div>
          <div class="desc">
            <p>어둠에 잠식되기 전에 도망쳐라,</p>
            <p>세 개의 삶이 교차하는 운명의 3일</p>
            <p>
              열악한 환경에서 자라 범죄 집단의 말단 조직원이 된
              타쿠야(키타무라 타쿠미)와 마모루(하야시 유타)는 SNS에서
              의지할 곳 없는 남성들을 속여서 호적을 사고 파는 일을 한다.
            </p>
            <p>
              의형제처럼 서로 의지하고 지내는 두 사람은 누구보다 평범한
              청춘이었고, 언제나 함께였다. 타쿠야는 이 세계에 발을 들이게
              한 형님 같은 존재 카지타니(아야노 고)의 도움을 받아 마모루와
              함께 이 세계에서 벗어나려 하는데…
            </p>
          </div>
        </div>
        <div id="curation-story-4">
          <div class="title"><span>자전거 도둑</span></div>
          <div class="desc">
            <p>2차 대전 직후 이탈리아의 수도 로마의 거리</p>
            <p>
              오랫동안 일자리를 구하지 못하고 거리를 배회하던 안토니오는
              오랜 기다림 끝에 직업 소개소를 통해 거리에서 벽보를 붙이는
              일을 맡는다.
            </p>
            <p>
              그러나 그 일을 하기 위해선 자전거가 필요했고 이 사실을 안
              아내 마리아는 남편의 일을 위해 자신이 소중하게 간직했던 침대
              시트를 전당포에 맡기고 자전거를 되찾는다.
            </p>
          </div>
        </div>
      </div>
      <div class="curation-controls">
        <button class="prev">
          <img src="./assets/icons/arrow-left.png" alt="왼쪽 이동" />
        </button>
        <a href="javascript:void(0)">예매하기</a>
        <button class="next">
          <img src="./assets/icons/arrow-right.png" alt="오른쪽 이동" />
        </button>
      </div>
    </article>
    <div class="curation-slider">
      <ul class="curation-list">
        <li class="curation-item active">
          <article class="curation-card" data-story-id="#curation-story-0">
            <a href="javascript:void(0)"><img src="./assets/images/여행과나날.jpg" alt="여행과나날" /></a>
            <h3>여행과 나날</h3>
          </article>
        </li>
        <li class="curation-item">
          <article class="curation-card" data-story-id="#curation-story-1">
            <a href="javascript:void(0)">
              <img src="./assets/images/신의악단.jpg" alt="신의악단" />
            </a>
            <h3>신의악단</h3>
          </article>
        </li>
        <li class="curation-item">
          <article class="curation-card" data-story-id="#curation-story-2">
            <a href="javascript:void(0)"><img src="./assets/images/세계의주인.jpg" alt="세계의주인" /></a>
            <h3>세계의 주인</h3>
          </article>
        </li>
        <li class="curation-item">
          <article class="curation-card" data-story-id="#curation-story-3">
            <a href="javascript:void(0)">
              <img src="./assets/images/어리석은자는누구인가.jpg" alt="어리석은자는누구인가" />
            </a>
            <h3>어리석은 자는 누구인가</h3>
          </article>
        </li>
        <li class="curation-item">
          <article class="curation-card" data-story-id="#curation-story-4">
            <a href="javascript:void(0)">
              <img src="./assets/images/자전거도둑.jpg" alt="자전거도둑" />
            </a>
            <h3>자전거 도둑</h3>
          </article>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- Theater Section -->
<section id="theater">
  <h2>
    <a href="javascript:void(0)">상영관<img src="./assets/icons/arrow-right.png" alt="이동하기" /></a>
  </h2>
  <div class="theater-inner">
    <button class="button-theaters-left">
      <svg class="icon">
        <use href="#icon-arrow-double-left"></use>
      </svg>
    </button>
    <button class="button-theaters-right">
      <svg class="icon">
        <use href="#icon-arrow-double-right"></use>
      </svg>
    </button>
    <div class="theater-carousel">
      <ul class="theater-list">
        <li class="theater-item" data-detail="theater-comfort">
          <img src="./assets/images/theater-comfort.png" alt="theater-comfort" />
        </li>
        <li class="theater-item" data-detail="theater-dva">
          <img src="./assets/images/theater-dva.png" alt="theater-dva" />
        </li>
        <li class="theater-item" data-detail="theater-boutique">
          <img src="./assets/images/theater-boutique.png" alt="theater-boutique" />
        </li>
        <li class="theater-item" data-detail="theater-boutique-suite">
          <img src="./assets/images/theater-boutique-suite.png" alt="theater-boutique-suite" />
        </li>
        <li class="theater-item" data-detail="theater-boutique-private">
          <img src="./assets/images/theater-boutique-private.png" alt="theater-boutique-private" />
        </li>
        <li class="theater-item" data-detail="theater-mega-dolby-atmos">
          <img src="./assets/images/theater-mega-dolby-atmos.png" alt="theater-mega-dolby-atmos" />
        </li>
        <li class="theater-item" data-detail="theater-mega-led">
          <img src="./assets/images/theater-mega-led.png" alt="theater-mega-led" />
        </li>
        <li class="theater-item" data-detail="theater-mega-mx4d">
          <img src="./assets/images/theater-mega-mx4d.png" alt="theater-mega-mx4d" />
        </li>
        <li class="theater-item" data-detail="theater-le-recliner">
          <img src="./assets/images/theater-le-recliner.png" alt="theater-le-recliner" />
        </li>
      </ul>
    </div>
    <div class="theater-detail">
      <ul class="theater-detail-list">
        <li data-detail-id="theater-dva">
          <h3 class="theater-title">Dolby Vision+Atmos</h3>
          <p class="theater-summary">
            돌비 시네마에 적용된 돌비 비전과 돌비 애트모스,<br />
            리클라이너를 더한 프리미엄 클래스
          </p>
          <p class="theater-description">
            Dolby Vision+Atmos는 돌비 비전과 돌비 애트모스 기술로 제작된
            영화를<br />
            새로운 방식으로 경험할 수 있는 프리미엄 상영관입니다.<br />
            이제 더 많은 상영관에서 돌비가 전하는 감동을 경험해보세요.
          </p>
        </li>
        <li data-detail-id="theater-dolby-cinema">
          <h3 class="theater-title">DOLBY CINEMA</h3>
          <p class="theater-summary">
            극강의 선명함과 압도적인 사운드로<br />
            현존 최고의 영화 관람 경험
          </p>
          <p class="theater-description">
            Dolby Vision, Dolby Atmos, Real Black 기술로<br />
            어떤 장면도 더 선명하게, 더 몰입감 있게 표현합니다.<br />
            돌비의 엄격한 기준이 적용된 하이엔드 시네마를 경험해보세요.
          </p>
        </li>
        <li data-detail-id="theater-mega-mx4d">
          <h3 class="theater-title">MEGA : MX4D</h3>
          <p class="theater-summary">
            다이내믹 이펙트가 선사하는 새로운 영화 체험<br />
            모션 체어와 환경 효과로 장면을 ‘몸으로’ 느끼다
          </p>
          <p class="theater-description">
            부드러운 모션 체어와 장면에 맞춘 임팩트 효과로 몰입을
            높입니다.<br />
            좌우·앞뒤 움직임과 다양한 특수효과가 재미를 더해줍니다.<br />
            환경 효과로 한층 풍부한 체험형 관람을 제공합니다.
          </p>
        </li>
        <li data-detail-id="theater-mega-led">
          <h3 class="theater-title">MEGA : LED</h3>
          <p class="theater-summary">
            무한대의 명암비, 완벽한 컬러 재현력<br />
            반사된 색이 아닌 ‘진짜 컬러’를 마주하다
          </p>
          <p class="theater-description">
            픽셀 하나하나가 스스로 빛을 내는 자발광 LED 스크린으로<br />
            깊은 블랙과 탁월한 컬러 표현을 구현합니다.<br />
            기존과는 전혀 다른 혁신적인 극장 경험을 제공합니다.
          </p>
        </li>
        <li data-detail-id="theater-boutique-private">
          <h3 class="theater-title">BOUTIQUE PRIVATE by MEGA</h3>
          <p class="theater-summary">
            오직 나와 소중한 사람들을 위한<br />
            프라이빗한 극장 경험
          </p>
          <p class="theater-description">
            독립된 상영관과 전용 공간 구성으로 프라이버시를
            강화했습니다.<br />
            보다 여유롭고 편안한 분위기에서 영화를 즐길 수 있습니다.<br />
            특별한 날을 위한 프리미엄 관람을 제안합니다.
          </p>
        </li>
        <li data-detail-id="theater-boutique-suite">
          <h3 class="theater-title">BOUTIQUE SUITE by MEGA</h3>
          <p class="theater-summary">
            웰컴패키지가 더해진<br />
            럭셔리한 공간 경험
          </p>
          <p class="theater-description">
            넓은 개인 공간과 프리미엄 좌석으로 안락함을 극대화합니다.<br />
            고급스러운 서비스 구성으로 특별한 관람 경험을 제공합니다.<br />
            한 단계 높은 프리미엄 시네마를 경험해보세요.
          </p>
        </li>
        <li data-detail-id="theater-mega-dolby-atmos">
          <h3 class="theater-title">MEGA : DOLBY ATMOS</h3>
          <p class="theater-summary">
            차원이 다른 공간감과 디테일한 사운드<br />
            공간 음향 시스템으로 영화가 더욱 생생해집니다
          </p>
          <p class="theater-description">
            머리 위 공간까지 확장된 3차원 공간 음향으로<br />
            소리의 움직임을 정확하게 배치해 사실감을 높입니다.<br />
            프리미엄 사운드로 한층 깊은 몰입을 경험해보세요.
          </p>
        </li>
        <li data-detail-id="theater-boutique">
          <h3 class="theater-title">BOUTIQUE by MEGA</h3>
          <p class="theater-summary">
            섬세하게 디자인된 감각적인 극장 경험<br />
            프리미엄 좌석과 음향, 편의 서비스의 조합
          </p>
          <p class="theater-description">
            감각적인 인테리어와 양팔걸이 좌석으로 편안함을 높였습니다.<br />
            프리미엄 사운드 시스템으로 한층 깊은 몰입을 제공합니다.<br />
            보다 완성도 높은 관람 환경을 경험해보세요.
          </p>
        </li>
        <li data-detail-id="theater-le-recliner">
          <h3 class="theater-title">LE RECLINER by MEGA</h3>
          <p class="theater-summary">
            맞춤형 리클라이닝 시스템이 구현하는<br />
            극강의 편안함
          </p>
          <p class="theater-description">
            등받이와 발 받침 조절로 체형과 취향에 맞춘 자세를 찾을 수
            있습니다.<br />
            넉넉한 좌석 간격과 쿠션감으로 장시간 관람에도 편안합니다.<br />
            더 편안한 몰입을 위한 리클라이너 특별관입니다.
          </p>
        </li>
        <li data-detail-id="theater-comfort">
          <h3 class="theater-title">COMFORT by MEGA</h3>
          <p class="theater-summary">
            컴포트 체어로 누리는<br />
            더 안락한 영화 경험
          </p>
          <p class="theater-description">
            FRONT TABLE로 두 손을 자유롭게 하고 관람 편의를 높였습니다.<br />
            양팔걸이 좌석과 개인 테이블로 쾌적함을 더합니다.<br />
            넓은 좌석으로 한층 여유로운 관람 환경을 제공합니다.
          </p>
        </li>
      </ul>
      <div class="theater-actions">
        <a href="javascript:void(0)">
          상영시간표
          <svg class="icon">
            <use href="#icon-link"></use>
          </svg>
        </a>
        <a href="javascript:void(0)">
          자세히보기
          <svg class="icon">
            <use href="#icon-link"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Support Section -->
<section id="support">
  <h2>
    <a href="javascript:void(0)">이용안내<img src="./assets/icons/arrow-right.png" alt="이동하기" /></a>
  </h2>
  <div class="support-inner">
    <nav class="support-menu">
      <ul>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-customer.png" alt="" /><span>고객센터</span></a>
        </li>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-faq.png" alt="" /><span>자주묻는질문</span></a>
        </li>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-qna.png" alt="" />
            <span>1:1문의</span></a>
        </li>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-group.png" alt="" /><span>단체/대관
              문의</span></a>
        </li>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-lost.png" alt="" /><span>분실물
              문의/접수</span></a>
        </li>
        <li>
          <a href="javascript:void(0)"><img src="./assets/icons/ico-main-boutique.png" alt="" />
            <span>더 부티크 프라이빗<br />대관예매</span></a>
        </li>
      </ul>
    </nav>
    <div class="swiper notice">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>구의이스트폴</p>
              <h3>
                [구의이스트폴지점]&lt;아바타:불과재&gt; 개봉에 따른 무료
                주차시간 확대 적용 안내
              </h3>
              <p class="post-date">2025.12.09</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>메가박스</p>
              <h3>[컬쳐랜드] 시스템 점검 공지 안내 (12/15)</h3>
              <p class="post-date">2025.12.07</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>메가박스</p>
              <h3>[안내] 멤버십 포인트 적립 기준 변경 안내</h3>
              <p class="post-date">2025.12.05</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>강남점</p>
              <h3>
                [강남점] 주말 혼잡 시간대 매표소 운영 방식 변경 안내
              </h3>
              <p class="post-date">2025.12.04</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>메가박스</p>
              <h3>[시스템] 모바일 앱 업데이트 관련 이용 안내</h3>
              <p class="post-date">2025.12.02</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>메가박스</p>
              <h3>[안내] 설 연휴 기간 고객센터 운영 시간 안내</h3>
              <p class="post-date">2025.12.01</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
        <li class="swiper-slide">
          <article>
            <a href="javascript:void(0)">
              <p>홍대점</p>
              <h3>[홍대점] 상영관 리뉴얼 공사 일정 안내</h3>
              <p class="post-date">2025.11.29</p>
              <svg class="icon">
                <use href="#icon-arrow-circle-right"></use>
              </svg>
            </a>
          </article>
        </li>
      </ul>
    </div>
    <div class="notice-actions">
      <div class="swiper-scrollbar notice-scrollbar"></div>
      <div class="more-notice">
        <a href="javascript:void(0)">
          공지 더보기<svg class="icon">
            <use href="#icon-link"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

