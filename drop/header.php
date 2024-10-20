<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <?php wp_head(); ?>

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class('ct-body'); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
} else {
    do_action('wp_body_open');
} ?>
<div class='overflow-container'>
    <a class="skip-content" href="#main"><?php _e('Skip to content', 'drop'); ?></a>
<header id="site-header" class="site-header" role="banner">

	<div itemscope itemtype="http://schema.org/Organization" class="title-info">
		<?php get_template_part('logo')  ?>    
	</div>
	
	<?php get_template_part('menu', 'primary'); // adds the primary menu?>

</header>
<div id="main" class="main" role="main">