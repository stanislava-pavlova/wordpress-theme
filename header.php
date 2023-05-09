<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title><?= bloginfo('name') ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/templatemo-digimedia-v1.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animated.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/owl.css">
  <?php
  wp_head();
  ?>

</head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="<?= get_option('logo') ?>" alt="logo">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <?php
            $settings = [
              'theme_location' => 'main-menu',
              'container' => 'nav',
              'container_class' => 'main-nav',
              'menu_class' => 'nav',
            ];
            wp_nav_menu($settings);
            ?>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->