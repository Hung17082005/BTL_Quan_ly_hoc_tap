<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../functions/auth.php';
$BASE = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME'])), '/'); if ($BASE === '/') $BASE='';
$u = $_SESSION['user'] ?? null;
?><!doctype html>
<html lang="vi"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Study Planner</title>
<link rel="stylesheet" href="<?= $BASE ?>/css/style.css?v=3">
<link rel="stylesheet" href="<?= $BASE ?>/css/dashboard.css?v=3">
</head><body>
<header class="sp-header">
  <div class="sp-nav topbar">
    <!-- BRAND -->
    <a class="brand" href="<?= $BASE ?>/index.php?page=dashboard">
      <img src="<?= $BASE ?>/images/logo.png" class="brand-logo" alt="">
      <div class="brand-text">
        <strong>Study</strong><div>Planner</div>
      </div>
      <span class="brand-badge">Tập trung mỗi ngày</span>
    </a>

    <!-- SEARCH PILL -->
    <div class="top-search">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 21l-4.3-4.3m1.3-5.2a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" fill="none" stroke="currentColor" stroke-width="2"/></svg>
      <input type="search" placeholder="Tìm lịch, mục tiêu, ghi chú…">
      <kbd>Ctrl + K</kbd>
    </div>

    <!-- PILL TABS -->
    <nav class="pill-nav">
      <a class="pill <?= isActive('dashboard', $currentPage) ?>" href="<?= $BASE ?>/index.php?page=dashboard">Tổng quan</a>
      <a class="pill <?= isActive('schedule', $currentPage) ?>"  href="<?= $BASE ?>/index.php?page=schedule">Lịch học</a>
      <a class="pill <?= isActive('goals', $currentPage) ?>"     href="<?= $BASE ?>/index.php?page=goals">Mục tiêu</a>
      <a class="pill <?= isActive('notes', $currentPage) ?>"     href="<?= $BASE ?>/index.php?page=notes">Ghi chú</a>
      <?php if ($u && $u['role']==='admin'): ?>
        <a class="pill" href="<?= $BASE ?>/index.php?page=dashboard">Quản trị</a>
      <?php endif; ?>
    </nav>

    <!-- USER + LOGOUT -->
    <div class="user-area">
      <button class="user-pill" type="button">
        <img src="<?= $BASE ?>/images/avatar-default.png" class="user-avatar" alt="">
        <div class="user-meta">
          <span class="hello">Xin chào</span>
          <b class="name"><?= $u ? htmlspecialchars($u['fullname'] ?: $u['email']) : 'Khách' ?></b>
        </div>
        <span class="dot"></span>
      </button>
      <?php if ($u): ?>
        <a class="user-menu-item" href="<?= $BASE ?>/logout.php">Đăng xuất</a>
      <?php else: ?>
        <a class="logout-pill" href="<?= $BASE ?>/index.php?page=login">Đăng nhập</a>
      <?php endif; ?>

      <!-- (Optional) dropdown phụ nếu muốn thêm menu sau này -->
      <div class="user-menu">
        <?php if ($u): ?>
          <div class="user-menu-item" style="cursor:default;opacity:.8"><small><?= htmlspecialchars($u['email']) ?></small></div>
          <a class="user-menu-item" href="<?= $BASE ?>/handle/logout.php">Đăng xuất</a>
        <?php else: ?>
          <a class="user-menu-item" href="<?= $BASE ?>/index.php?page=login">Đăng nhập</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>

<script>
  // Toggle dropdown khi bấm vào user-pill (để dành nếu cần)
  document.addEventListener('click', e=>{
    const area = document.querySelector('.user-area');
    if(!area) return;
    if(e.target.closest('.user-pill')) area.classList.toggle('open');
    else if(!area.contains(e.target)) area.classList.remove('open');
  });
</script>

<?php $ok=$_SESSION['flash_success']??null; $err=$_SESSION['flash_error']??null;
if($ok||$err): ?><div class="flash-wrap"><?php if($ok):?><div class="alert success"><?=htmlspecialchars($ok)?></div><?php endif; if($err):?><div class="alert error"><?=htmlspecialchars($err)?></div><?php endif;?></div><?php unset($_SESSION['flash_success'],$_SESSION['flash_error']); endif; ?>
<main class="sp-container">
