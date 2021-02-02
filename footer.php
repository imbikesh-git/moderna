<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modern
 */

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <?php echo get_theme_mod('default_textarea'); ?>
                </div>
            </div>
            <div class="col-lg-3">
              <div class="widget">
                <h5 class="widgetheading"><?php _e( 'Pages', 'mordena' ); ?></h5>
                  <?php

                  if(has_nav_menu('footer')){

                    wp_nav_menu(array(
                      'theme_location' => 'footer',
                      'menu_class'     => 'link-list',

                    )); 
                  }                   
                  ?>
              </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading"><?php _e( 'Latest posts', 'mordena' ); ?></h5>
                    <?php 
                    $post = array(
                        'orderby' => 'title',
                        'order'   => 'DESC',
                        'orderby'=>'ID',
                        'posts_per_page'=>3,
                    );
                    $posts = new WP_Query( $post );
                    ?>
                    <?php
                    while ($posts->have_posts()){
                        $posts->the_post();
                        ?>
                        <ul class="link-list">
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading"><?php echo get_theme_mod('mordern_footer'); ?></h5>
                    <div class="flickr_badge">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sub-footer">
  <div class="container">
     <div class="row">
        <div class="col-lg-6">
           <div class="copyright">
              <p>
                 <?php echo get_theme_mod( 'mordern_text_footer' ); ?>
             </p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
                    </div>
                </div>
                <div class="col-lg-6">
                	<ul class="social-network">
                		<?php 
                		$facebook = get_theme_mod('mordern_fb_url');
                		$twitter = get_theme_mod('mordern_twitter_url');
                		$linkedin = get_theme_mod('mordern_linkedin_url');
                		$pinterest = get_theme_mod('mordern_pinterest_url');
                		$gooleplus = get_theme_mod('mordern_googleplus_url');

                		?>
                		<?php if ($facebook != "") { ?>
                          <li><a href="<?php echo esc_url($facebook); ?>" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li> <?php } ?>

                          <?php if ($twitter != "") { ?>
                              <li><a href="<?php echo esc_url($twitter); ?>" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li><?php } ?>

                              <?php if ($linkedin != "") { ?>
                                  <li><a href="<?php echo esc_url($linkedin); ?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li><?php } ?>

                                  <?php if ($pinterest != "") { ?>
                                      <li><a href="<?php echo esc_url($pinterest); ?>" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li><?php } ?>

                                      <?php if ($gooleplus != "") { ?>
                                          <li><a href="<?php echo esc_url($gooleplus); ?>" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </footer>
              </div>

              <?php wp_footer(); ?>

          </body>
          </html>
