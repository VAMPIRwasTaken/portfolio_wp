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
    <nav class="navbar">
        <ul>
            <li><a href="#first-info">Home</a></li>
            <li><a href="#second-info">About</a></li>
            <li><a href="#skills-section">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
        </ul>
    </nav>
  </header>