<?php
/**
 * The template for displaying all single project posts.
 *
 * @package dumplinghub_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sp">
		<main id="main" class="site-mainsproject" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="sp-container">
				<div class="sp-thumbnail">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>

				<div class="sp-info">
					<h2 class="single-project-title">
						<?php the_title();?>
					</h2>
					<div class="extra-detail">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<p>
							<?php echo CFS()->get( 'extra_detail'); ?>
						</p>
					</div>
					<?php endwhile; // End of the loop. ?>
					<?php 
			$tab_one_name = CFS()->get( 'project_tab1' );
			$tab_two_name =CFS()->get( 'project_tab2' );
			$tab_three_name =CFS()->get( 'project_tab3' );
			?>
					<?php if ($tab_one_name == true || $tab_two_name == true || $tab_three_name == true ): ?>
					<div class="tabs">
						<ul class="tab-links">
							<li class="active">
								<?php if  ($tab_one_name == true): ?>
								<a href="#tab1">
									<?php echo $tab_one_name ?>
								</a>
							</li>
							<li>
								<?php endif ?>
								<?php if ($tab_two_name == true): ?>
								<a href="#tab2">
									<?php echo $tab_two_name ?>
								</a>
							</li>
							<li>
								<?php endif; ?>
								<?php if ($tab_three_name == true):?>
								<a href="#tab3">
									<?php echo $tab_three_name ?>
								</a>
							</li>
							
							<?php endif ?>
						</ul>
						<div class="tab-content">
							<div id="tab1" class="tab active">
								<p>
									<?php echo CFS()->get( 'project_tab1_content' ); ?>
							</div>
							<div id="tab2" class="tab">
								<p>
									<?php echo CFS()->get( 'project_tab2_content' ); ?>
							</div>
							<div id="tab3" class="tab">
								<p>
									<?php echo CFS()->get( 'project_tab3_content' ); ?>
							</div>
						</div>
					</div>
			</section>
			<?php endif; ?>
		</main>
		<!-- #main -->
		<!--carousel of images -->
				<div class="carousel-section">
					<div class="container">
						<?php dynamic_sidebar( 'carousels' ); ?>
						<?php $gallery_images = CFS()->get('project_picture');?>
						<?php if( !empty( $gallery_images) ): ?>
						<?php endif; ?>
					</div>
				</div>
				<!--end -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>