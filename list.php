<?php
require_once "connect.php";

header("Access-Control-Allow-Origin: *");
// header('Content-Type: application/json; charset=utf-8');
$result = mysqli_query($conn, "SELECT * FROM sinhvien ORDER BY id DESC");
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);
?>