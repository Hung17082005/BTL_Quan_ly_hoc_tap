<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../functions/db.php';
require_once __DIR__ . '/../functions/helpers.php';

$email    = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($email==='' || $password==='') { flash_error('Vui lòng nhập email và mật khẩu.'); header('Location: '.base_url().'/index.php?page=login'); exit; }

$conn = db_connect();
$sql  = "SELECT id, fullname, email, password_hash, role FROM users WHERE email=? LIMIT 1";
$stmt = $conn->prepare($sql);
if (!$stmt) die('SQL prepare failed: '.$conn->error);
$stmt->bind_param('s', $email);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$ok = false;
if ($user) {
  // Cho phép cả plain-text (để phù hợp dữ liệu bạn đang có) lẫn bcrypt
  $ok = ($password === $user['password_hash']) || password_verify($password, $user['password_hash']);
}

if ($ok) {
  $_SESSION['user'] = [
    'id'       => (int)$user['id'],
    'fullname' => $user['fullname'],
    'email'    => $user['email'],
    'role'     => $user['role']
  ];
  flash_success('Đăng nhập thành công.');
  header('Location: '.base_url().'/index.php?page=dashboard'); exit;
}

flash_error('Sai email hoặc mật khẩu.');
header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/../index.php?page=login');
exit;
