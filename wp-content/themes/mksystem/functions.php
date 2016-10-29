<?php
/**
 * Mksystem functions and definitions
 *
 * @package Mksystem
 */



function get_template_directory_child(){
	$directory_template = get_template_directory_uri();
	$directory_child = str_replace('polmo-lite', '', $directory_template).'mksystem';
	return $directory_child;
}

function mksystem_customizer_register( $wp_customize ) {

	/*
	*
	* Nuevo tamaño de imagen
	*
	*/
	add_image_size( 'mksystem-slide', '1900', '1200', true );



	/*
	*
	* Cambios de colores
	*
	*/
	$wp_customize->add_setting('color_mksystem_theme',array(
		'default'	=> '#6f2a43',
		'transport'	=> 'refresh'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
		'label'        => __( 'Color Theme', 'mksystem' ),
		'section'    => 'colors',
		'settings'   => 'color_mksystem_theme',
	)));

	$wp_customize->add_setting('color_slider_box',array(
		'default'	=> '#2d1a26',
		'transport'	=> 'refresh'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control( $wp_customize, 'color_slider_box', array(
		'label'        => __( 'Color Slider Box', 'mksystem' ),
		'section'    => 'colors',
		'settings'   => 'color_slider_box',
	)));





	/*
	*
	* Descripción personalizada del header image
	*
	*/
	$wp_customize->get_section('header_image')->description = __( '<style>.customizer-section-intro{ display: none; }</style>Recommends a header size of <strong>185x195px</strong>', 'polmo-lite' );

	$wp_customize->add_setting('logo_custom_2' , array(
			'default' => get_template_directory_child().'/images/logo/logo3_maro3d.png'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_custom_2' , array(
		'label' => __('Logo responsive' , 'mksystem'),
		'section' => 'header_image',
		'settings' => 'logo_custom_2'
	)));


	/*
	*
	* Quitando la opción: background image
	*
	*/
	$wp_customize->remove_section('background_image');


	/*
	*
	* Quitando la opción: static front page
	*
	*/
	$wp_customize->remove_section('static_front_page');


	/*
	*
	* Agregando opción: imágenes de slider
	*
	*/
	$wp_customize->add_section(
        'slider_section2',
        array(
            'title' => __('Slider Section', 'mksystem'),
            'priority' => null,
			'description'	=> __('Recommended size (1900x1200px)','mksystem'),	
        )
    );
	$wp_customize->add_setting('slider_title1',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title1',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title1',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description1',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description1',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description1',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image1' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_1.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image1' , array(
		'label' => __('Slider 1' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image1'
	)));


	$wp_customize->add_setting('slider_title2',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title2',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title2',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description2',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description2',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description2',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image2' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_2.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image2' , array(
		'label' => __('Slider 2' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image2'
	)));


	$wp_customize->add_setting('slider_title3',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title3',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title3',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description3',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description3',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description3',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image3' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_3.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image3' , array(
		'label' => __('Slider 3' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image3'
	)));


	$wp_customize->add_setting('slider_title4',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title4',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title4',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description4',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description4',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description4',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image4' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_4.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image4' , array(
		'label' => __('Slider 4' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image4'
	)));


	$wp_customize->add_setting('slider_title5',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title5',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title5',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description5',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description5',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description5',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image5' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_5.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image5' , array(
		'label' => __('Slider 5' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image5'
	)));


	$wp_customize->add_setting('slider_title6',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_title6',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_title6',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('slider_description6',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('slider_description6',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'slider_section2',
		'setting'	=> 'slider_description6',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('slider_image6' , array(
			'default' => get_template_directory_child().'/images/slider/slider_1900x1200_6.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slider_image6' , array(
		'label' => __('Slider 6' , 'mksystem'),
		'section' => 'slider_section2',
		'settings' => 'slider_image6'
	)));


	/*
	*
	* Agregando opción: Título, descripcion -> services box section
	*
	*/
	$wp_customize->add_setting('section_title',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('section_title',array(
		'label'	=> __('Title','mksystem'),
		'section'	=> 'service_section',
		'setting'	=> 'section_title',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('section_description',array(
		'default'	=> __('Lorem ipsum dolor sit amet','mksystem')
	));
	$wp_customize->add_control('section_description',array(
		'label'	=> __('Description','mksystem'),
		'section'	=> 'service_section',
		'setting'	=> 'section_description',
		'type'		=> 'textarea'
	));



	/*
	*
	* Agregando opción: category blog -> blog section
	*
	*/
    // =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
	$cats = array();
	$i = 0;
	$cats['seleccione'] = 'Seleccione';
	foreach($categories as $category){
		if($i==0){
			$default = 'seleccione';
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}//end foreach
	$wp_customize->add_setting('category_blog', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'category_blog', array(
		'settings' => 'category_blog',
		'label'   => 'Category',
		'section'  => 'jeweltheme_polmo_blog_section',
		'type'    => 'select',
		'choices' => $cats
	));

	/*
	*
	* Agregando opción: Teléfono, email -> contact section
	*
	*/
	$wp_customize->add_setting('contact_phone',array(
		'default'	=> __('277 - 7777','mksystem')
	));
	$wp_customize->add_control('contact_phone',array(
		'label'	=> __('Phone','mksystem'),
		'section'	=> 'jeweltheme_polmo_contact_section',
		'setting'	=> 'contact_phone',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('contact_email',array(
		'default'	=> __('informes@maro3d.com','mksystem')
	));
	$wp_customize->add_control('contact_email',array(
		'label'	=> __('Email','mksystem'),
		'section'	=> 'jeweltheme_polmo_contact_section',
		'setting'	=> 'contact_email',
		'type'		=> 'text'
	));


	$wp_customize->add_setting('contact_image' , array(
			'default' => get_template_directory_child().'/images/slider/default_1900x1200.jpg'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'contact_image' , array(
		'label' => __('Contact image' , 'mksystem'),
		'section' => 'jeweltheme_polmo_contact_section',
		'settings' => 'contact_image'
	)));



	/*
	*
	* Agregando opción: social links
	*
	*/
	$wp_customize->add_section(
        'social_links',
        array(
            'title' => __('Social links', 'mksystem'),
            'priority' => 100
        )
    );
	$wp_customize->add_setting('social_facebook',array(
		'default'	=> __('http://facebook.com','mksystem')
	));
	$wp_customize->add_control('social_facebook',array(
		'label'	=> __('Facebook','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_facebook',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('social_twitter',array(
		'default'	=> __('http://twitter.com','mksystem')
	));
	$wp_customize->add_control('social_twitter',array(
		'label'	=> __('Twitter','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_twitter',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('social_instagram',array(
		'default'	=> __('http://instagram.com','mksystem')
	));
	$wp_customize->add_control('social_instagram',array(
		'label'	=> __('Instagram','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_instagram',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('social_youtube',array(
		'default'	=> __('http://youtube.com','mksystem')
	));
	$wp_customize->add_control('social_youtube',array(
		'label'	=> __('Youtube','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_youtube',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('social_linkedin',array(
		'default'	=> __('http://linkedin.com','mksystem')
	));
	$wp_customize->add_control('social_linkedin',array(
		'label'	=> __('Linkedin','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_linkedin',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('social_vimeo',array(
		'default'	=> __('http://vimeo.com','mksystem')
	));
	$wp_customize->add_control('social_vimeo',array(
		'label'	=> __('Vimeo','mksystem'),
		'section'	=> 'social_links',
		'setting'	=> 'social_vimeo',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('check_socialhide',array(
			'default' => true
	));
	$wp_customize->add_control( 'check_socialhide', array(
		   'settings' => 'check_socialhide',
    	   'section'   => 'social_links',
    	   'label'     => __('Uncheck This Option To Display This Section','mksystem'),
    	   'type'      => 'checkbox'
    ));

}
add_action('customize_register','mksystem_customizer_register');


/*
*
* Imagen por defecto
*
*/
function mksystem_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'mksystem_custom_header_args', array(
		'default-image'          =>  get_template_directory_child() . '/images/background/logo_maro3d.png',
		'width'                  => 185,
		'height'                 => 195
	)));
}
add_action('after_setup_theme', 'mksystem_custom_header_setup' );



function mksystem_slider_scripts(){
	?>
		<script>
				! function(e) {
					"use strict";
					e(".bxslider").bxSlider({
						auto: !0,
						preloadImages: "all",
						mode: 'fade',
						captions: !1,
						controls: !0,
						pause: 4e3,
						speed: 1200,
						onSliderLoad: function() {
							e(".bxslider>li .slide-inner").eq(1).addClass("active-slide"), e(".slide-inner.active-slide .slider-title").addClass("wow animated bounceInDown"), e(".slide-inner.active-slide .slide-description").addClass("wow animated bounceInRight"), e(".slide-inner.active-slide .btn").addClass("wow animated zoomInUp")
						},
						onSlideAfter: function(i, n, t) {
							console.log(t), e(".active-slide").removeClass("active-slide"), e(".bxslider>li .slide-inner").eq(t + 1).addClass("active-slide"), e(".slide-inner.active-slide").addClass("wow animated bounceInRight")
						},
						onSlideBefore: function() {
							e(".slide-inner.active-slide").removeClass("wow animated bounceInRight"), e(".one.slide-inner.active-slide").removeAttr("style")
						}
					}), e(document).ready(function() {
						function i() {
							return "ontouchstart" in document.documentElement
						}


						e("#masthead #main-menu").onePageNav(), n()
					}), e("#contactform").on("submit", function(i) {
						i.preventDefault(), $this = e(this), e.ajax({
							type: "POST",
							url: $this.attr("action"),
							data: $this.serialize(),
							success: function() {
								alert("Message Sent Successfully")
							}
						})
					})
				}(jQuery);
		</script>
	<?php 
}
// Slider Footer Scripts
add_action('wp_footer','mksystem_slider_scripts',100);


function mksystem_scripts() {
	wp_enqueue_style( 'animate', JWCSS . 'animate.min.css');
	wp_enqueue_style( 'magnific-popup', JWCSS . 'magnific-popup.css');
}
add_action( 'wp_enqueue_scripts', 'mksystem_scripts' );


function mksystem_footer_credit(){ ?>
	<div class="copy-right pull-right">&copy; <?php echo bloginfo('name');?> <?php echo date_i18n('Y'); ?>
		<?php echo esc_html__(" - Desarrollado por","polmo-lite");?> 
		<a href="<?php echo esc_url("javascript:;","polmo-lite");?>" target="_blank"><?php echo esc_html__("MK System","polmo-lite");?></a> 
	</div>
<?php }



function mksystem_styles() {
?>
	<style type="text/css">
		#masthead.bg-change{
			/*border-bottom: 2px solid #6f2a43;*/
			/*background: rgba(111, 42, 67, 0.99) none repeat scroll 0 0;*/
			background: <?= get_theme_mod('color_mksystem_theme'); ?>;
			opacity: 0.99;
		}
		.custom-header {
			border-bottom: 6px solid <?= get_theme_mod('color_mksystem_theme'); ?>;
		}
		.slider-box-custom{
			background: <?= get_theme_mod('color_slider_box'); ?>;
		}
		#ascrail2000 div, 
		#scroll-to-top{
			background-color: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
		.purple-more{
			color: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
		.latest-projects .btn, .blog .btn{
			border: 2px solid <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
		.latest-projects .btn:hover, .blog .btn:hover{
			background-color: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
		.footer-bottom{
			background: #fff !important;
			border-top: 2px solid <?= get_theme_mod('color_mksystem_theme'); ?> !important;
			border-bottom: 0 none !important;
		}
		.social-links{
			background-color: <?= get_theme_mod('color_slider_box'); ?>;
		}
		.search-custom .search-field{
			border: 1px solid <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
		.post-head .entry-date{
			background: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
		}
	</style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_styles' );


/*
*
*	Renombrando los tabs de productos
*
*/
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Descripción' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Comentarios' );				// Rename the reviews tab
	// $tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );


/*
*
*	Removiendo el related products de su posición inicial
*
*/
function woocommerce_after_single_product__datatabs(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
}
add_action('woocommerce_after_single_product_summary', 'woocommerce_after_single_product__datatabs');


/*
*
*	Agregando solo el related products
*
*/
function woocommerce_output_related_products() {
	$args = array(
	  'posts_per_page'   => 4,
	  'columns'       => 4,
	  'orderby'       => 'rand'
	);
	woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}



// ********* Get all products and variations and sort alphbetically, return in array (title, sku, id)*******
function get_woocommerce_product_list() {
	$full_product_list = array();
	$loop = new WP_Query( array( 'post_type' => array('product', 'product_variation'), 'posts_per_page' => -1 ) );
 	$i = 0;
	while ( $loop->have_posts() ) : $loop->the_post();
		$i++;
		$theid = get_the_ID();
		$product = new WC_Product($theid);

		// its a variable product
		if( get_post_type() == 'product_variation' ){
			$parent_id = wp_get_post_parent_id($theid );
			$sku = get_post_meta($theid, '_sku', true );
			$thetitle = get_the_title( $parent_id);
			$post_name = get_post()->post_name;
 
    // ****** Some error checking for product database *******
            // check if variation sku is set
            if ($sku == '') {
                if ($parent_id == 0) {
            		// Remove unexpected orphaned variations.. set to auto-draft
            		$false_post = array();
                    $false_post['ID'] = $theid;
                    $false_post['post_status'] = 'auto-draft';
                    wp_update_post( $false_post );
                    if (function_exists(add_to_debug)) add_to_debug('false post_type set to auto-draft. id='.$theid);
                } else {
                    // there's no sku for this variation > copy parent sku to variation sku
                    // & remove the parent sku so the parent check below triggers
                    $sku = get_post_meta($parent_id, '_sku', true );
                    if (function_exists(add_to_debug)) add_to_debug('empty sku id='.$theid.'parent='.$parent_id.'setting sku to '.$sku);
                    update_post_meta($theid, '_sku', $sku );
                    update_post_meta($parent_id, '_sku', '' );
                }
            }
 	// ****************** end error checking *****************
 
        // its a simple product
        } else {
            $sku = get_post_meta($theid, '_sku', true );
            $thetitle = get_the_title();
            $post_name = get_post()->post_name;

        }
        // add product to array but don't add the parent of product variations
        // echo $i.".-".$thetitle."-".$sku."-".$theid."-".get_post_type()."-".$thepost->post_name."<br>";
        // if (!empty($sku)) $full_product_list[] = array($thetitle, $sku, $theid, $post_name);
        $full_product_list[] = array($thetitle, $sku, $theid, $post_name);
    endwhile; wp_reset_query();
    // sort into alphabetical order, by title
    sort($full_product_list);
    return $full_product_list;
}



?>