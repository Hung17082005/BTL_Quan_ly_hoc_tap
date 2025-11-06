<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/functions/helpers.php';

$currentPage = $_GET['page'] ?? 'dashboard';
$useLayout   = ($currentPage !== 'login'); // Login dùng layout riêng

function isActive($name, $current) { return $name === $current ? 'active' : ''; }

if ($useLayout) include __DIR__ . '/views/header.php';

switch ($currentPage) {
  case 'dashboard': include __DIR__ . '/views/dashboard.php'; break;
  case 'schedule' : include __DIR__ . '/views/schedule.php' ; break;
  case 'goals'    : include __DIR__ . '/views/goals.php'    ; break;
  case 'notes'    : include __DIR__ . '/views/notes.php'    ; break;
  case 'login'    : include __DIR__ . '/views/login.php'    ; break;
  default         : include __DIR__ . '/views/dashboard.php'; break;
}

if ($useLayout) include __DIR__ . '/views/footer.php';
