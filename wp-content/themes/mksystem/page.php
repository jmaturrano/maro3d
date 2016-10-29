<?php
/**
 * The template for displaying all Page posts.
 *
 * @package Mksystem
 */


get_header(); ?>

<section>
	<div class="section-padding categories">
		<div id="padding_product" class="section-padding quotelist" style="padding-bottom: 0px ! important;">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">
						<?php 
							if ( have_posts() ) { while ( have_posts() ) { the_post(); 
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
									get_template_part( 'template-parts/content', get_post_format() );
								}
								
								the_posts_navigation();
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								} else { 
									get_template_part( 'template-parts/content', 'none' ); 
								}
						?>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

