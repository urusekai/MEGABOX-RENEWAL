<?php
include "define.php";

$id = trim($_POST['user_id'] ?? '');
$pass = password_hash($_POST['user_pw'] ?? '', PASSWORD_DEFAULT); // 해시함수
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');

$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
$stmt = mysqli_prepare($con, "SELECT id FROM members WHERE id = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_num_rows($result);
mysqli_stmt_close($stmt);

if ($row) {
  echo ("
    <script>
      alert('중복된 아이디입니다! 다른 아이디를 사용해주세요.');
      history.go(-1);
    </script>
  ");
} else {
  $stmt = mysqli_prepare($con, "INSERT INTO members (id, pass, name, phone, email) VALUES (?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "sssss", $id, $pass, $name, $phone, $email);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  echo ("
    <script>
      alert('회원가입이 완료되었습니다!');
      location.href = 'login.php';
    </script>
  ");
}

mysqli_close($con);
?>

