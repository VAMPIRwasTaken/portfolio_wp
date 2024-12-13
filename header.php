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
            <li><a href="#first-info"><?php echo get_field('domek_1','user_1')?></a></li>
            <li><a href="#second-info"><?php echo get_field('about','user_1')?></a></li>
            <li><a href="#skills-section"><?php echo get_field('skills','user_1')?></a></li>
            <li><a href="#projects"><?php echo get_field('projects','user_1')?></a></li>
        </ul>
    </nav>
  </header>