<?php
session_start();

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

require_once __DIR__ . "/../config/db.php";

$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'] ?? '';
$password = $data['password'] ?? '';

$db = (new Database())->connect();

$stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if ($user && $password === $user['password']) 
 {
    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username']
    ];

    echo json_encode([
        "success" => true,
        "user" => $_SESSION['user']
    ]);
} else {
    http_response_code(401);
    echo json_encode([
        "success" => false,
        "message" => "Sai tài khoản hoặc mật khẩu"
    ]);
}
