<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>로그인 - 메가박스</title>
  <link rel="icon" href="./favicon.ico" />
  <!-- 공통 CSS -->
  <link rel="stylesheet" href="./css/font.css" />
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/layout.css" />
  <!-- 페이지 CSS -->
  <link rel="stylesheet" href="./css/login.css" />
  <!-- 공통 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="./js/common.js" type="module"></script>
  <!-- 페이지 JS -->
  <script src="./js/login.js" type="module"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <?php include "header.php"; ?>
  </header>
  <main>
    <div id="login-wrap">
      <section class="login-card">
        <h2>로그인</h2>
        <form name="login-form" id="login-form" action="login-process.php" method="post">
          <label for="user-id" class="input-label">아이디</label>
          <input type="text" name="user_id" id="user-id" placeholder="아이디를 입력하세요" />
          <label for="user-pw" class="input-label">비밀번호</label>
          <input type="password" name="user_pw" id="user-pw" placeholder="비밀번호를 입력하세요" />
          <div class="login-option">
            <div class="remember-id">
              <input type="checkbox" name="remember_id" id="remember-id" />
              <label for="remember-id">아이디 저장</label>
            </div>
            <a href="javascript:void(0);">비밀번호를 잊으셨나요?</a>
          </div>
          <button type="submit" id="login-submit">로그인</button>
        </form>
        <p class="register">
          계정이 없으신가요?
          <a href="./register.php">회원가입</a>
        </p>
      </section>
    </div>
  </main>
  <!-- Footer -->
  <footer>
    <?php include "footer.php"; ?>
  </footer>
</body>

</html>
