<?php
    $id = $_POST['id'];

    require_once "connect.php";

    $sql = "DELETE FROM sinhvien WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();
?>
