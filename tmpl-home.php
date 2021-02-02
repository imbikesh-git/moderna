<?php

/*
Template Name: Home
*/

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modern
 */

get_header();

?>
<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="flexslider">
					<?php 
					$slider = new WP_Query(array(
						'cat' => 3,
						'post_type' => 'post',
						'posts_per_page' => 3
					)); ?>
					<ul class="slides">
						<?php
						while ($slider->have_posts()){
							$slider->the_post();
							?>
							<li>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
								<div class="flex-caption">
									<h3><?php the_title(); ?></h3> 
									<p><?php the_content(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn btn-theme"><?php the_excerpt(); ?></a>
								</div>
							</li>
						<?php } wp_reset_postdata(); ?>
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
</section>	

<section class="callaction">
	<div class="container">
		<div class="row">
			<?php
			$HomePost = new WP_Query(array(
				'p' => 112,
			));
			while ($HomePost->have_posts()):
				$HomePost->the_post();
				$fname = get_post_meta(get_the_ID(),'fname',true);
				?>
				<div class="col-lg-12">
					<div class="big-cta">
						<div class="cta-text">
							<h2><?php echo $fname; ?></h2>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php
					$posts = new WP_Query(array(
						'cat' => '4',
						'posts_per_page' => -1,
					)); 
					while ($posts->have_posts()):
						$posts->the_post();
						?>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?php the_title(); ?></h4>
								<div class="icon">
									<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
									<?php the_content(); ?>
								</p>

							</div>
							<div class="box-bottom">
								<a href="<?php the_permalink(); ?>">Learn more</a>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
							<!-- Item Project and Filter Name -->
							<?php 
							$gallery = new WP_Query(array(
								'post_type' => 'gallery',
								'posts_per_page' => -1, 
							));
							while ($gallery->have_posts()){
								$gallery->the_post();

								?>
							<li class="col-lg-3 design" data-id="id-0" data-type="web">
								<div class="item-thumbs">
									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title(); ?>" href="img/works/1.jpg">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
									</a>
									<!-- Thumb Image and Description -->
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_content(); ?>">
								</div>
							</li>

						<?php } wp_reset_postdata(); ?>
							<!-- End Item Project -->
						</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();
?>