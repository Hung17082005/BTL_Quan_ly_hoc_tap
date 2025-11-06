<?php
if (session_status() === PHP_SESSION_NONE) session_start();

function is_logged_in(): bool { return !empty($_SESSION['user']); }
function current_user() { return $_SESSION['user'] ?? null; }
function user_role(): string { return $_SESSION['user']['role'] ?? 'guest'; }

function can(string $role): bool {
  $map = ['admin'=>3,'teacher'=>2,'student'=>1,'guest'=>0];
  $me  = $map[user_role()] ?? 0;
  return $me >= ($map[$role] ?? 99);
}

function require_login() {
  if (!is_logged_in()) {
    $_SESSION['flash_error'] = 'Vui lòng đăng nhập.';
    header('Location: index.php?page=login'); exit;
  }
}

function require_role(string $role) {
  require_login();
  if (!can($role)) {
    $_SESSION['flash_error'] = 'Bạn không đủ quyền truy cập.';
    header('Location: index.php?page=dashboard'); exit;
  }
}
