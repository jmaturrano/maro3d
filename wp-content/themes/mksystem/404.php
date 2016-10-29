<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Polmo
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="section-padding categories">
					<div id="padding_product" class="section-padding" style="padding-bottom: 0px ! important;">
						<div class="container">
							<div class="row">
							

								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e( 'Lo sentimos. Esta página no está disponible.', 'polmo-lite' ); ?></h1>
								</header><!-- .page-header -->

								<div class=" page-content col-md-12">
									<p><?php esc_html_e( 'Parece que la página indicada no existe. Intente regresando a la vista principal.', 'polmo-lite' ); ?></p>
								</div><!-- .page-content -->
								<div class="col-md-6 search-custom">
									<?php get_search_form(); ?>
								</div>

							</div>

							<div class="row">
								<div class="col-md-12 woocommerce">
									<?php 
										$products = get_woocommerce_product_list(); 
										if(count($products) > 0){
											$products_all = array();
											foreach ($products as $product) {
												$products_all[] = $product[2];
											}//end foreach

											$args = apply_filters( 'woocommerce_related_products_args', array(
												'post_type'            => 'product',
												// 'ignore_sticky_posts'  => 1,
												// 'no_found_rows'        => 1,
												'posts_per_page'       => 8,
												'orderby'              => 'ASC',
												'post__in'             => $products_all
												// 'post__not_in'         => array( $product->id )
											) );

											$productsx                    = new WP_Query( $args );
											// $woocommerce_loop['name']    = 'related';
											// $woocommerce_loop['columns'] = apply_filters( 'woocommerce_related_products_columns', $columns );
											if ( $productsx->have_posts() ) : ?>

												<?php
													/**
													 * woocommerce_before_shop_loop hook.
													 *
													 * @hooked woocommerce_result_count - 20
													 * @hooked woocommerce_catalog_ordering - 30
													 */
													do_action( 'woocommerce_before_shop_loop' );
												?>
													<?php woocommerce_product_loop_start(); ?>
														<?php woocommerce_product_subcategories(); ?>
														<?php while ( $productsx->have_posts() ) : $productsx->the_post(); ?>
															<?php wc_get_template_part( 'content', 'product' ); ?>
														<?php endwhile; // end of the loop. ?>
													<?php woocommerce_product_loop_end(); ?>

												<?php
													/**
													 * woocommerce_after_shop_loop hook.
													 *
													 * @hooked woocommerce_pagination - 10
													 */
													do_action( 'woocommerce_after_shop_loop' );
												?>
												<?php
													/**
													 * woocommerce_after_main_content hook.
													 *
													 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
													 */
													do_action( 'woocommerce_after_main_content' );
												?>
											<?php endif;

										}//end if
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
