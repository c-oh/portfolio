<?php
/**
 * The main template file.
 * @package dumplinghub-site_Theme
 */
get_header(); ?>
  <section class="front-content">

    <section class="welcome-video">
      <h1> Holly Cheng <br> <span>is a web developer</span></h1>
      <h2> Coding is a journey, not a destination </h2>
      <p> Based in Vancouver, BC</p>
      <i class="fa fa-arrow-down" aria-hidden="true"></i>
    </section>

    <section class="Works">
    <div class="verticalline">
 This is a vertical line
</div>
      <?php echo do_shortcode("[post_grid id='19']"); ?>
    </section>

    <section class="about">
    <h3>a little bit about me</h3>
    <div class="verticalline">
 This is a vertical line
</div>
    <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    </section>

    <section class="resume">
    <h3> resume </h3>
<div class="verticalline">
 This is a vertical line
</div>
<form method="get" action="file.doc">
<button type="submit">Download!</button>
</form>
    </section>

    <section class="contact">
    <div class="verticalline">
 This is a vertical line
</div>
    <h3> don't be shy</h3>
    <p>At vers doloribus asperiores repellat.</p>
      <?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ); ?>
    </section>

  </section> <!--end of front-content-->
  <!--footer-->
  <?php get_footer();?>