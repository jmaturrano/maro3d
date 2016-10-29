<?php
/**
 * The template for displaying search results pages.
 *
 * @package Polmo
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="section-padding categories">
					<div id="padding_product" class="section-padding" style="padding-bottom: 0px ! important;">
						<div class="container">
							<div class="row">
								<div class="col-md-12">


									<?php if ( have_posts() ) : ?>

										<header class="page-header">
											<h1 class="page-title"><?php printf( esc_html__( 'Resultados de búsqueda para: %s', 'polmo-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
										</header><!-- .page-header -->

										<?php /* Start the Loop */ ?>
										<?php while ( have_posts() ) : the_post(); ?>

											<?php
											/**
											 * Run the loop for the search to output the results.
											 * If you want to overload this in a child theme then include a file
											 * called content-search.php and that will be used instead.
											 */
											get_template_part( 'template-parts/content', 'search' );
											?>

										<?php endwhile; ?>

										<?php the_posts_navigation(); ?>

									<?php else : ?>

										<?php get_template_part( 'template-parts/content', 'none' ); ?>

									<?php endif; ?>

								</div>
								<div class="col-md-6 search-custom">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
