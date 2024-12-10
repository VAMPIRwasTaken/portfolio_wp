<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <nav>
      <?php wp_nav_menu( array('menu'=> 'header', 'container'=> '', 'menu_class'=> '') ); ?>
    </nav>
  </header>