<?php
require_once __DIR__ . '/../functions/auth.php'; 
require_login();
$u = $_SESSION['user'] ?? null;
$displayName = $u ? ($u['fullname'] ?: ($u['email'] ?? 'Bạn')) : 'Bạn';
$role = $u['role'] ?? 'student';
if (!isset($BASE)) {
  $BASE = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
  if ($BASE === '/') $BASE = '';
}
?>
<section class="page">
  <div class="dashboard-wrap">

    <!-- KHỐI THỐNG KÊ -->
    <div class="stat-row" style="margin-top:10px;">
      <div class="stat">Hoàn thành <b>0 / 0</b> nhiệm vụ ✅</div>
      <div class="stat">Còn thiếu <b>0</b> bài tập 📘</div>
      <div class="stat">Sắp kiểm tra <b>0 ngày</b> ⏳</div>
    </div>

    <!-- GRID CHÍNH -->
    <div class="grid-2">

      <!-- CỘT TRÁI -->
      <div>
        <div class="card">
          <div class="card-head">
            <div>
              <div style="font-weight:800">Tiến độ tuần này</div>
              <small class="muted">Bạn đã hoàn thành 0 / 0 nhiệm vụ</small>
            </div>
            <span class="chip">—</span>
          </div>

          <div class="progress-bar"><div class="v" style="width:0%"></div></div>

          <div class="metrics">
            <div class="metric"><b>0</b><div>môn cần ôn</div></div>
            <div class="metric"><b>0</b><div>bài tập thiếu</div></div>
            <div class="metric"><b>0 ngày</b><div>tới kiểm tra</div></div>
          </div>
        </div>

        <div class="card" style="margin-top:12px">
          <div class="card-head">
            <h3>Thời khóa biểu hôm nay</h3>
            <?php if($role!=='student'): ?>
              <a class="btn tiny" href="#">+ Thêm lịch</a>
            <?php endif; ?>
          </div>
          <div class="lesson">
            <div class="time">—</div>
            <div class="subject">
              <div style="font-weight:700">Chưa có lịch</div>
              <small class="muted">Thêm lịch để bắt đầu</small>
            </div>
            <span class="tag">—</span>
          </div>
        </div>
      </div>

      <!-- CỘT PHẢI -->
      <aside>
        <div class="card">
          <div class="card-head">
            <h3>Mục tiêu sắp tới</h3>
            <a class="btn tiny" href="<?= $BASE ?>/index.php?page=goals">Xem thêm</a>
          </div>

          <div style="display:flex;gap:10px;align-items:center;margin:8px 0">
            <div style="flex:1">
              <div><b>—</b> <span class="chip">0%</span></div>
              <small class="muted">Deadline: —</small>
            </div>
            <div style="width:46%">
              <div class="progress-bar"><div class="v" style="width:0%"></div></div>
            </div>
          </div>

          <div style="display:flex;gap:10px;align-items:center;margin:8px 0">
            <div style="flex:1">
              <div><b>—</b> <span class="chip">0%</span></div>
              <small class="muted">Deadline: —</small>
            </div>
            <div style="width:46%">
              <div class="progress-bar"><div class="v" style="width:0%"></div></div>
            </div>
          </div>

          <div style="display:flex;gap:10px;align-items:center;margin:8px 0">
            <div style="flex:1">
              <div><b>—</b> <span class="chip">0%</span></div>
              <small class="muted">Deadline: —</small>
            </div>
            <div style="width:46%">
              <div class="progress-bar"><div class="v" style="width:0%"></div></div>
            </div>
          </div>
        </div>

        <div class="card" style="margin-top:12px">
          <div class="card-head">
            <h3>Ghi chú nhanh</h3>
            <button class="btn tiny">Lưu</button>
          </div>
          <textarea style="width:100%;min-height:140px;border:1px solid #e5e7eb;border-radius:12px;padding:10px;font:inherit" placeholder="Chưa có ghi chú…"></textarea>
        </div>
      </aside>
    </div>
  </div>
</section>
