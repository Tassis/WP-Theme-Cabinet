<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <title><?php bloginfo("name") ?> | <?php bloginfo('description') ?></title>
</head>
<body>
<?php wp_head(); ?>
<header id="header">
  <div id="banner">
    <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name') ?></a></h1>
    <p class="description"><?php bloginfo('description'); ?></p>
  </div>
</header>

<nav id="navigation" role="navigation">
  <?php wp_nav_menu(array( 'theme-location' => 'main-menu-bar')); ?>
</nav>
