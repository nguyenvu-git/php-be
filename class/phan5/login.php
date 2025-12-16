<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php");

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Trang đăng nhập</h2>
    <form method="post">
        <label>Nhập tên:</label><br>
        <input type="text" name="username" required><br><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
