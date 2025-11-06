<?php // views/footer.php; $BASE đã có từ header ?>
</main>

<footer class="sp-footer">
  <div class="footer-inner">
    <p>© <?= date('Y') ?> Study Planner — Built with ❤️</p>
    <p class="foot-links">
      <a href="#">Điều khoản</a> · <a href="#">Bảo mật</a>
    </p>
  </div>
</footer>

<script>
  // Toggle dropdown user
  document.querySelectorAll('.user-chip').forEach(btn => {
    btn.addEventListener('click', () => btn.parentElement.classList.toggle('open'));
  });
  document.addEventListener('click', e => {
    const dd = document.querySelector('.user-dropdown');
    if (dd && !dd.contains(e.target)) dd.classList.remove('open');
  });
</script>
</body>
</html>
