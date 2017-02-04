<?php
/**
 * The main template file.
 * @package dumplinghub-site_Theme
 */
get_header(); ?>
  <section class="front-content">
   <section class= "welcome-video">
   <h1> Holly Cheng <br> <span>is a web developer</span></h1>
     </section>
      
    
    <section class="projects">
      <?php echo do_shortcode("[post_grid id='19']"); ?>
    </section>

   <section class="about">
        </section>

      <section class="resume">
        </section>

        <section class="contact">
 <?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ); ?>
          
        </section>
        
  </section>
  <!--footer-->
  <?php get_footer();?>