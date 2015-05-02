            


            <?php
/* ------------------------------------------------------------------------ */
/* Theme Footer
/* ------------------------------------------------------------------------ */
global $sd_data 
?>
</div>
<!-- content end -->
<!-- footer -->


<footer id="footer">
  <div class="grey-stripe clearfix">
           
    <?php get_template_part('framework/inc/latest-tweets'); ?>
    
  </div>

  <div class="newsletter">
    <div class="newsletter-content">
      <div class="newsletter-box">
        <h4>
          <?php _e('Newsletter Sign Up', 'framework'); ?>
        </h4>
        <div class="newsletter-form">
          <!-- BEGIN: Constant Contact Email List Form Button --><a href="http://visitor.r20.constantcontact.com/d.jsp?llr=lekxtcdab&amp;p=oi&amp;m=1102820649099&amp;sit=qz7wsuteb&amp;f=46447139-0412-4b17-b8a4-226a4b704933" class="button" style="background-color: rgb(36, 56, 94); border: 1px solid rgb(36, 57, 95); color: rgb(255, 255, 255); display: inline-block; padding: 8px 10px; text-shadow: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">Join Now</a>
        </div>
      </div>
      <span class="triangle-arrow-newsletter"> </span>
      <div class="right-bg"></div>
    </div>
  </div>
  <!-- footer content -->
  <div class="container footer-middle"> 
    
    <!-- footer widgets -->
    <div class="footer-widgets clearfix">
      <div class="footer-left-column">
        <?php dynamic_sidebar( 'footer-left-sidebar' ); ?>
      </div>
      <div class="footer-middle-column">
        <?php dynamic_sidebar( 'footer-middle-sidebar' ); ?>
      </div>
      <div class="footer-right-column">
        <?php dynamic_sidebar( 'footer-right-sidebar' ); ?>
      </div>
    </div>
    <!-- footer widgets end -->
    <div class="bottom-footer clearfix">
      <div class="six columns">
        <?php /* Replace default text if option is set */
  if( $sd_data['copyright'] != '') : ?>
        <p><?php echo stripslashes($sd_data['copyright']); ?></p>
        <?php else : ?>
        <p>Copyright &copy; <?php echo the_time('Y'); ?> - <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <?php echo get_bloginfo( 'name' ); ?> </a> </p>
        <?php endif; ?>
      </div>
      
      
  <div class="nine columns alpha omega">
  <?php if ( $sd_data['social_icons_footer'] == 1) : ?>
    <!-- social bottom -->
      <div class="social-bottom">
        
        <!-- subscribe -->
        <ul>
          <?php if ( !empty($sd_data['social_twitter_footer']) ) : ?>
          <li class="twitter-icon"><a rel="nofollow" href="http://twitter.com/<?php echo $sd_data['social_twitter_footer']; ?>" title="Twitter">Twitter</a></li>
          <?php endif; ?>
          <?php if ( !empty($sd_data['social_facebook_footer']) ) : ?>
          <li class="facebook-icon"><a rel="nofollow" href="<?php echo $sd_data['social_facebook_footer']; ?>" title="Facebook">Facebook</a></li>
          <?php endif; ?>
          <?php if ( !empty($sd_data['social_flickr_footer']) ) : ?>
          <li class="flickr-icon"><a rel="nofollow" href="<?php echo $sd_data['social_flickr_footer']; ?>" title="Flickr">Flickr</a></li>
          <?php endif; ?>
          <?php if ( !empty($sd_data['social_rss_footer']) ) : ?>
          <li class="rss-icon"><a rel="nofollow" href="<?php echo $sd_data['social_rss_footer']; ?>" title="RSS">RSS</a></li>
          <?php endif; ?>

        </ul>
        <!-- subscribe end -->
      </div>
      <!-- social footer end --> 
    <?php endif; ?>
    <?php if ( $sd_data['menu_footer'] == 1) : ?>
    <div class="footer-menu">
      <?php
      // Using wp_nav_menu() to display menu
      wp_nav_menu( array(
        'menu' => 'Footer', // Select the menu to show by Name
        'class' => '',
        'menu_class' =>'',
        'menu_id' => '',
        'container' => false, // Remove the navigation container div
        'theme_location' => 'Footer Menu'
        )
      );
      ?>
    </div>
    <!-- footer menu end --> 
    <?php endif; ?>
      </div>
    </div>
    <!-- bottom footer end --> 
  </div>
  <!-- footer content end --> 
</footer>
<!-- footer end -->
</section>
<!-- wrapper end -->
<?php wp_footer(); ?>
</body></html>