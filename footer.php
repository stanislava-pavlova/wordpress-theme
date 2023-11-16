<!-- footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
        $settings = [
          'theme_location' => 'footer-menu',
          'container_class' => 'footer-menu',
          'menu_class' => 'footer-menu-ul',
        ];
        wp_nav_menu($settings);
        ?>
        <p>
          <?php echo 'Copyright © ' . date('Y') . ' DigiMedia Co., Ltd. All Rights Reserved.'; ?>
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
        </p>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->
<script src="<?= get_template_directory_uri() ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/owl-carousel.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/animation.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/imagesloaded.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/custom.js"></script>

<?php
wp_footer();
?>

</body>

</html>