<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>sample</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"/> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <title>Template</title>
  </head>
  <body class="top slidebar-init">
  <?php get_template_part('/template/mixin/_slidebar');?>

  <!-- ↓どちらかから1つを選択 -->
  <?php get_template_part('template/layout/_header-normal');?>
  <!-- <?php get_template_part('template/layout/_header-variable');?> -->
