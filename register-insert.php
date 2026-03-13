<?php
include "define.php";

$id = $_POST['user_id'];
$pass = password_hash($_POST['user_pw'], PASSWORD_DEFAULT); // 해시함수
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$con = mysqli_connect('localhost', DBuser, DBpass, DBname);
$sql = "SELECT id FROM members WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);

if ($row) {
  echo ("
    <script>
      alert('중복된 아이디입니다! 다른 아이디를 사용해주세요.');
      history.go(-1);
    </script>
  ");
} else {
  $sql = "INSERT INTO members (id, pass, name, phone, email) VALUES ('$id', '$pass', '$name', '$phone', '$email')";
  mysqli_query($con, $sql);
  echo ("
    <script>
      alert('회원가입이 완료되었습니다!');
      location.href = 'login.php';
    </script>
  ");
}

mysqli_close($con);
?>

