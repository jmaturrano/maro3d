<?php 

  $hide_aboutus = get_theme_mod('hide_aboutus', '1');
  
  if( $hide_aboutus == ''){ ?> 

<section id="about" class="about">

  <?php if( get_theme_mod('aboutus-page1',false) ) { ?>
    <div class="about-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                <?php 
                  $aboutusquery1 = new wp_query('page_id='.get_theme_mod('aboutus-page1',true)); 
                  if( $aboutusquery1->have_posts() ) {   while( $aboutusquery1->have_posts() ) { $aboutusquery1->the_post(); ?>
                  <h2 class="section-title">
                    <?php the_title(); ?>
                  </h2><!-- /.section-title -->
                  <span class="description">
                    <?php the_content();/*the_excerpt()*/ ?>
                  </span>
                  <div class="btn-container">
                    <a href="javascript:;" class="btn purple-more">
                      <?php echo esc_html__(bloginfo( 'name' ),'polmo-lite'); ?>
                    </a>
                  </div><!-- /.btn-container -->
                  <?php } } wp_reset_postdata(); ?>
              </div><!-- /.know-about-us -->
            </div>

            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.about-top -->
  <?php } ?>
  
<?php if( get_theme_mod('aboutus-page2',false) ) { ?>
    <div class="about-bottom">
      <div class="section-padding" style="padding-top: 0;">
        <div class="container">
          <div class="row">
        <?php 
        $aboutusquery2 = new wp_query('page_id='.get_theme_mod('aboutus-page2',true)); 
        if( $aboutusquery2->have_posts() ) {   while( $aboutusquery2->have_posts() ) { $aboutusquery2->the_post(); 
          $aboutus_bg_image2 = wp_get_attachment_url( get_post_thumbnail_id($aboutusquery2->ID, 'full'));
          ?>
          <div class="col-sm-6">
            <div class="tab-image wow animated fadeInLeft" data-wow-delay=".5s">
              <?php if( !empty($aboutus_bg_image2) ){ ?>
                <img src="<?php echo esc_url( $aboutus_bg_image2 ); ?>" alt="<?php the_title();?>">
              <?php } else {?>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slider/default.jpg" title="<?php the_title(); ?>" />
              <?php } ?>
            </div><!-- /.tab-image -->
          </div>
          <div class="col-sm-6">
            <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
              <h2 class="section-title">
                <?php the_title(); ?>
              </h2><!-- /.section-title -->
              <span class="description text-justify">
                <?php the_content(); ?>
              </span><!-- /.description -->
            </div><!-- /.about-work -->
          </div>
        <?php } } wp_reset_postdata();?>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.about-bottom -->
<?php } ?>

  </section><!-- /#about -->


<?php } else { 
    if ( current_user_can( 'edit_theme_options' ) ){

        printf( __( '<br><center>No hay contenido para mostrar. Usted puede crear una <a href="%s">Nueva Página</a>?</center><br>', 'polmo-lite' ), esc_url( admin_url( 'post-new.php?post_type=page' ) ));
    }
  }
?>