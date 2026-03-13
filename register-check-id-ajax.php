<?php
header("Content-Type: application/json; charset=UTF-8");

include "define.php";

$id = trim($_GET["id"] ?? "");

if ($id === "") {
  echo json_encode([
    "available" => false,
    "message" => "아이디를 입력해주세요.",
  ], JSON_UNESCAPED_UNICODE);
  exit;
}

$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

if (!$con) {
  echo json_encode([
    "available" => false,
    "message" => "DB 연결에 실패했습니다.",
  ], JSON_UNESCAPED_UNICODE);
  exit;
}

mysqli_set_charset($con, "utf8mb4");

$sql = "SELECT id FROM members WHERE id = ? LIMIT 1";
$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {
  mysqli_close($con);
  echo json_encode([
    "available" => false,
    "message" => "중복확인 준비 중 오류가 발생했습니다.",
  ], JSON_UNESCAPED_UNICODE);
  exit;
}

mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$exists = $result && mysqli_num_rows($result) > 0;

mysqli_stmt_close($stmt);
mysqli_close($con);

if ($exists) {
  echo json_encode([
    "available" => false,
    "message" => $id . " 아이디는 이미 존재합니다. 다른 아이디를 사용해주세요.",
  ], JSON_UNESCAPED_UNICODE);
} else {
  echo json_encode([
    "available" => true,
    "message" => $id . " 아이디는 사용 가능합니다.",
  ], JSON_UNESCAPED_UNICODE);
}
?>
