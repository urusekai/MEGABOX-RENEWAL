<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./favicon.ico" />
  <title>아이디 중복확인 - 메가박스</title>
  <style>
    body {
      background-color: black;
      color: white;
      text-align: center;
    }

    button {
      padding: 5px 20px;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <?php
  include "define.php";

  $id = $_GET['id'];

  if (!$id) {
    echo "<p>아이디를 입력해주세요</p>";
  } else {
    $con = mysqli_connect('localhost', DBuser, DBpass, DBname);

    $sql = "SELECT id FROM members WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);

    if ($row) {
      echo "<p>" . $id . "아이디는 이미 존재합니다.</p>";
      echo "<p>다른 아이디를 사용해주세요.</p>";
    } else {
      echo "<p>" . $id . "아이디는 사용 가능합니다.<p>";
    }

    mysqli_close($con);
  }
  ?>

  </p>
  <div id="close">
    <button onclick="javascript:self.close()">닫기</button>
  </div>
</body>

</html>
