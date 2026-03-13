<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>회원가입 - 메가박스</title>
  <link rel="icon" href="./favicon.ico" />
  <!-- 공통 CSS -->
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/layout.css" />
  <!-- 페이지 CSS -->
  <link rel="stylesheet" href="./css/register.css" />
  <!-- 공통 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="./js/common.js" type="module"></script>
  <!-- 페이지 JS -->
  <script src="./js/register.js" type="module"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <?php include "header.php"; ?>
  </header>
  <main>
    <div id="register-wrap">
      <section class="register-card">
        <h2>회원가입</h2>
        <form name="register" id="register-form" action="register-insert.php" method="post">
          <label for="user-id" class="input-label">아이디</label>
          <div class="input-with-btn">
            <input type="text" name="user_id" id="user-id" placeholder="4~12 자리의 아이디를 입력하세요" />
            <button type="button" id="check-id">중복확인</button>
          </div>

          <label for="user-pw" class="input-label">비밀번호</label>
          <input type="password" name="user_pw" id="user-pw" placeholder="8~20 자리의 비밀번호를 입력하세요" />
          <label for="user-pw-confirm" class="input-label">비밀번호 확인</label>
          <input type="password" name="user_pw_confirm" id="user-pw-confirm" placeholder="비밀번호를 다시 입력하세요" />
          <label for="name" class="input-label">이름</label>
          <input type="text" name="name" id="name" placeholder="이름을 입력하세요" />
          <label for="phone" class="input-label">전화번호</label>
          <input type="tel" name="phone" id="phone" placeholder="전화번호를 입력하세요" />
          <label for="email" class="input-label">이메일</label>
          <input type="email" name="email" id="email" placeholder="이메일을 입력하세요" />
          <div class="terms">
            <input type="checkbox" name="terms_agree" id="terms-agree" />
            <label for="terms-agree" class="input-label"><span class="required">(필수)</span>메가박스 이용약관
              동의</label>
            <a>(보기)</a>
          </div>
          <div class="marketing">
            <input type="checkbox" name="marketing_agree" id="marketing-agree" />
            <label for="marketing-agree" class="input-label"><span class="optional">(선택)</span>마케팅 정보 수신
              동의</label>
          </div>
          <button type="submit" id="register-submit">회원가입</button>
        </form>
      </section>
    </div>
  </main>
  <!-- Footer -->
  <footer>
    <?php include "footer.php"; ?>
  </footer>
</body>

</html>
