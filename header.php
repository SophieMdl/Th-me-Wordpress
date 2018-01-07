<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="initial-scale=1">
      <title><?php wp_title( '|', true, 'right' ); ?></title>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
      <?php wp_head(); ?>
  </head>
  <body>