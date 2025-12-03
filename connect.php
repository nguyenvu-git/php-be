<?php
header("Access-Control-Allow-Origin: *");
    $conn = mysqli_connect("localhost","root","","qlsv");
if (!$conn) {
    die(json_encode(["success" => false, "message" => "Kết nối thất bại: " . mysqli_connect_error()]));
}
?>