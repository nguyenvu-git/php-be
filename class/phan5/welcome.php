<?php
session_start();
print_r($_SESSION);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>

    <form method="post" action="logout.php">
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>
