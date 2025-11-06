<?php
// views/goals.php
require_once __DIR__ . '/../functions/auth.php';
require_login();
?>
<section class="page">
  <div class="page-head">
    <h2 class="page-title">Mục tiêu</h2>
    <div class="page-actions">
      <button class="btn primary" type="button">+ Thêm mục tiêu</button>
      <?php if (has_role('admin')): ?>
        <button class="btn ghost" type="button">Quản lý mục tiêu của SV</button>
      <?php endif; ?>
    </div>
  </div>

  <div class="grid-3">
    <div class="card goal">
      <h4>Hoàn thành báo cáo CNPM</h4>
      <p>Deadline: 12/11/2025</p>
      <div class="goal-progress">
        <div class="bar" style="--p:65%"></div>
        <span>65%</span>
      </div>
      <div class="goal-actions">
        <button class="btn tiny">Đánh dấu tiến độ</button>
        <?php if (has_role(['teacher','admin'])): ?>
          <button class="btn tiny">Nhận xét</button>
        <?php endif; ?>
        <?php if (has_role('admin')): ?>
          <button class="btn tiny danger">Xóa</button>
        <?php endif; ?>
      </div>
    </div>

    <div class="card goal">
      <h4>Ôn tập DA Web</h4>
      <p>Deadline: 20/11/2025</p>
      <div class="goal-progress"><div class="bar" style="--p:40%"></div><span>40%</span></div>
      <div class="goal-actions">
        <button class="btn tiny">Đánh dấu tiến độ</button>
        <?php if (has_role('admin')): ?><button class="btn tiny danger">Xóa</button><?php endif; ?>
      </div>
    </div>

    <div class="card goal">
      <h4>Tăng điểm chuyên cần</h4>
      <p>Deadline: 30/11/2025</p>
      <div class="goal-progress"><div class="bar" style="--p:20%"></div><span>20%</span></div>
      <div class="goal-actions">
        <button class="btn tiny">Đánh dấu tiến độ</button>
      </div>
    </div>
  </div>
</section>
