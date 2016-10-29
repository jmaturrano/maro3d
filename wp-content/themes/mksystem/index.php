<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mksystem
 */


get_header(); ?>


<?php
	get_template_part( 'sections/sections-slider' );
	get_template_part( 'sections/sections-about' );
	get_template_part( 'sections/sections-service' );
	get_template_part( 'sections/sections-sponsors' );
	get_template_part( 'sections/sections-blog' );
	get_template_part( 'sections/sections-testimonial' );
	get_template_part( 'sections/sections-contact' );
?>

<?php get_footer(); ?>
