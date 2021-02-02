<?php 
/*
Template Name: Feature
*/
get_header();
?>

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
									<a href="<?php the_permalink(); ?>"><?php _e('Learn more', 'mordena'); ?></a>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>