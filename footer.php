<footer id="footer">
  <div id="site-info">
    <span class="title">Copyright©<a href="http://learnlog.me/"> GameLife學習誌</a></span> /
    <span class="powerd">本站採用<a href="http://wordpress.org/"> Wordpress </a>建置</span>
  </div>
  <!--footer bar-->
  <div id="footer-bar">
    <div id="footer-bar-left" class="footer-bar-unit">
      <?php dynamic_sidebar('footer-bar-left'); ?>
    </div>
    <div id="footer-bar-center" class="footer-bar-unit">
      <?php dynamic_sidebar('footer-bar-center'); ?>
    </div>
     <div id="footer-bar-right" class="footer-bar-unit">
      <?php dynamic_sidebar('footer-bar-right'); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
