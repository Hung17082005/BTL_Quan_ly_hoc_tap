<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../functions/auth.php';
if (is_logged_in()) { header('Location: index.php?page=dashboard'); exit; }
$BASE = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME'])), '/'); if ($BASE === '/') $BASE='';
?>
<!doctype html><html lang="vi"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Đăng nhập | Study Planner</title>
<link rel="icon" href="<?= $BASE ?>/images/logo.png">
<link rel="stylesheet" href="<?= $BASE ?>/css/auth.css?v=3">
</head><body>
<div class="auth-nav"><div class="row">
  <a class="auth-brand" href="<?= $BASE ?>/index.php?page=dashboard">
    <img src="<?= $BASE ?>/images/logo.png" alt=""><strong>Study Planner</strong>
  </a>
</div></div>

<main class="auth-main">
  <div class="login-card">
    <div class="login-ill">
      <img class="ill-logo" src="<?= $BASE ?>/images/logo.png" alt="Study Planner">
      <h2 class="ill-title">Study Planner</h2>
      <p class="ill-tag">Tập trung hơn · Học hiệu quả hơn</p>
    </div>
    <div class="login-body">
      <h1>Đăng nhập</h1>
      <p class="sub">Quản lý lịch học, mục tiêu và ghi chú của bạn.</p>
      <form action="<?= $BASE ?>/handle/login.php" method="post" autocomplete="off">
        <div class="field"><label for="username">Email đăng nhập</label>
          <input id="username" name="username" type="email" required placeholder="vd: admin@gmail.com">
        </div>
        <div class="field"><label for="password">Mật khẩu</label>
          <input id="password" type="password" name="password" required placeholder="••••••••">
        </div>
        <button class="btn" type="submit">Đăng nhập</button>
      </form>
      <p style="margin-top:10px;font-size:13px;color:#555">
        Demo: <code>admin@gmail.com / 123456</code>
      </p>
    </div>
  </div>
</main>

<footer class="auth-foot">© <?= date('Y') ?> Study Planner — Built with ❤️ ·
  <a href="#">Điều khoản</a> · <a href="#">Bảo mật</a>
</footer>
</body></html>
