<?php
    require_once "connect.php";

    $id = $_POST["id"];
    $masv = $_POST["masv"];
    $name = $_POST["hoten"];
    $class = $_POST["lop"];

    $updateSql = "UPDATE sinhvien 
                SET masv = ?, hoten = ?, lop = ?
                WHERE id = ?";

    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssi", $masv, $name, $class, $id);

    $stmt->execute();

    
    // $codeStudent = $_POST["masv"];
    // $name = $_POST["hoten"];
    // $class = $_POST["lop"];


    // require_once "connect.php";

    // $updateSql = "UPDATE sinhvien 
    //               SET masv = '$codeStudent', hoten = '$name', lop = '$class'
    //               WHERE masv = '$codeStudent'";

    // mysqli_query($conn, $updateSql);


?>
