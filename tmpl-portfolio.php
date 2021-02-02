<?php 
/*
Template Name: Portfolio
*/
get_header();
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">Web design</a></li>
					<li class="icon"><a href="#" title="">Icons</a></li>
					<li class="graphic"><a href="#" title="">Graphic design</a></li>
				</ul>
				<div class="clearfix">
				</div>
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


<?php get_footer(); ?>