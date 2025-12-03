<?php
    $codeStudent = $_POST["masv"];
    $name = $_POST["hoten"];
    $class = $_POST["lop"];

    require_once "connect.php";

    $addSql = "INSERT INTO sinhvien
    (masv,hoten,lop) VALUES ('$codeStudent','$name','$class')";
    // echo $addSql;
    // exit;

    mysqli_query($conn, $addSql);
?>