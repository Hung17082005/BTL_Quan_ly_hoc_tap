<?php require_once __DIR__ . '/../functions/auth.php'; require_login(); ?>
<section class="page"><div class="sp-container">
  <div class="card">
    <div class="card-head">
      <h3>Lịch học (tuần)</h3>
      <div style="display:flex;gap:8px">
        <button class="btn tiny">◀</button><button class="btn tiny">Tuần này</button><button class="btn tiny">▶</button>
      </div>
    </div>
    <div class="table">
      <div class="tr th"><div>Giờ</div><div>Môn</div><div>Giảng viên</div><div>Phòng</div><div>Thao tác</div></div>
      <div class="tr"><div>07:30</div><div>CTDL &amp; GT</div><div>Nguyễn An</div><div>Lab 204</div><div><button class="btn tiny">Sửa</button> <button class="btn tiny">Xóa</button></div></div>
      <div class="tr"><div>09:45</div><div>Web nâng cao</div><div>Trần Bình</div><div>A101</div><div><button class="btn tiny">Sửa</button></div></div>
      <div class="tr"><div>14:00</div><div>Cơ sở dữ liệu</div><div>Lê Chi</div><div>B203</div><div><button class="btn tiny">Sửa</button></div></div>
    </div>
  </div>
</div></section>
