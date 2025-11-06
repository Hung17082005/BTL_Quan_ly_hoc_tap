<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/functions/helpers.php'; // có base_url()

// Xóa session
$_SESSION = [];
session_destroy();

// Quay về đúng trang login trong đúng thư mục app
header('Location: ' . base_url() . '/index.php?page=login');
exit;
