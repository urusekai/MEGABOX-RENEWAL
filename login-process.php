<?php
include "define.php";

$con = mysqli_connect('localhost', DBuser, DBpass, DBname);
$id = $_POST['user_id'];
$pass = $_POST['user_pw'];
$sql = "SELECT * FROM members WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);

if (!$row) {
  echo ("
    <script>
      alert('등록되지 않은 아이디 입니다.')
      history.go(-1);
    </script>
  ");
} else {
  $row = mysqli_fetch_array($result);
  $db_pass = $row['pass'];
  mysqli_close($con);

  if (!password_verify($pass, $db_pass)) {
    echo ("
      <script>
        alert('비밀번호가 틀립니다');
        history.go(-1);
      </script>
    ");
  } else {
    session_start();

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];

    echo ("
      <script>
        location.href = 'index.php'
      </script>
    ");
  }
}
