
  <section id="main-slider" class="main-slider text-center">
    <div class="head-overlay">
      <ul class="bxslider">
        
      <?php 
      $default_image = get_template_directory_child().'/images/slider/default_1900x1200.jpg';
      for($i = 1; $i <= 6; $i++){
        $title        = get_theme_mod('slider_title'.$i, '');
        $description  = get_theme_mod('slider_description'.$i, '');
        ?>       

        <li>
          <div class="head-overlay">
            <?php $image = get_theme_mod('slider_image'.$i, $default_image);
            if( !empty($image) ){ ?>
              <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo $title;?>" >
            <?php } ?>
          </div><!-- /.head-overlay -->

          <div class="slider-text">
            <div class="slide-inner">
              <div class="slider-box-custom">
                <h2 class="slider-titlex" data-animation="wow animated bounceInDown" style="text-align: left; text-transform: uppercase; letter-spacing: -1px;">
                  <?php echo $title; ?>
                </h2>
                <p class="slide-description text-justify">
                  <?php echo $description; ?>
                </p>
              </div>
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>


        <?php 
        }//end for 
        ?>  
      </ul>
    </div><!-- /.head-overlay -->
    
    <div class="clear"></div>        

  </section><!-- /#main-slider --> 
