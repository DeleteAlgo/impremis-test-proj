<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package impremis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="mt-html-0">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php wp_head(); ?>
</head>

<body>
	<?php 
		$header_titles = get_field('header_title', 'option');
	?>
    <div class="banner-cont grid grid-cols-1 mt-10 mx-5 md:mx-5 lg:mx-10  px-5 md:px-10 lg:mx-10">
        <p><?php
				foreach($header_titles as $header){
					if($header['strong']){
			?> <strong><?php echo $header['title'];?></strong><?php }else{ echo trim($header['title']); }
				}
			?></p>
    </div>

    <?php get_template_part( 'template-parts/content', 'calendly' ); ?>
	<?php get_template_part( 'template-parts/content', 'partners' ); ?>
