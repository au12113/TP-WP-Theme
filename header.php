<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta chatset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatiable" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Krub:300,500&display=swap&subset=thai" rel="stylesheet">
  <div class="header">
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
</div>
  <?php wp_head(); ?>
</head>
<body>