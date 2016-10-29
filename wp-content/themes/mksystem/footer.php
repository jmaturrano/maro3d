<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mksystem
 */

?>


<!-- Footer Section -->

<footer id="colophon" class="footer site-footer" role="contentinfo">

	<div class="footer-top" style="display: none;">
		<div class="section-padding">
			<div class="container">
				<div class="row">

					<?php 
					/*
					if ( is_active_sidebar( 'footer-sidebar' ) ) { 
						dynamic_sidebar('footer-sidebar'); 
					} else{
						get_sidebar();
					}
					*/
					?>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.section-padding -->
	</div><!-- /.footer-top -->

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-menu pull-left">
				<?php 
				//if ( is_active_sidebar( 'footer-menu' ) ) { 
					dynamic_sidebar('footer-menu'); 
				//}
				?>

			</div><!-- /.footer-menu -->
			
			<?php echo mksystem_footer_credit();?>

		</div><!-- /.container -->
	</div><!-- /.footer-bottom -->
</footer><!-- /#colophon -->

<!-- Footer Section -->

<?php
	$check_socialhide = get_theme_mod('check_socialhide', '1');
	if( $check_socialhide == ''){
?>
	<div class="social-links" style="display: block;">
		<ul>
			<?php if(get_theme_mod('social_facebook') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('social_twitter') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('social_instagram') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('social_youtube') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_youtube'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('social_linkedin') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(get_theme_mod('social_vimeo') != ''){ ?>
				<li><a target="_blank" href="<?= get_theme_mod('social_vimeo'); ?>"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
			<?php } ?>
		</ul>
	</div>
<?php
	}
?>



<div id="scroll-to-top" class="scroll-to-top">
	<span>
		<i class="fa fa-chevron-up"></i>    
	</span>
</div><!-- /#scroll-to-top -->


<?php wp_footer(); ?>

</body>
</html>
