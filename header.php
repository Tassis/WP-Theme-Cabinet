<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title><?php bloginfo("name") ?> | <?php bloginfo('description') ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="hidden" hidden><?php get_template_part( 'img/icon-sprite.svg' ); ?></div>
 <header id="header">
  <div class="container">
    <div class="header-logo">
      <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name') ?></a></h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </div>
  </div>
</header>
<nav id="navigation" role="navigation">
  <?php wp_nav_menu(array( 'theme-location' => 'main-menu-bar')); ?>
</nav>
