<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<div id="wrapper">
			<section id="inner-headline">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ul class="breadcrumb">
								<li><a href="<?php the_permalink(); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<article>
								<div class="post-image">
									<div class="post-heading">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="" />
								</div>
								<p>
									<?php the_content(); ?>
								</p>
								<div class="bottom-article">
									<ul class="meta-post">
										<li><i class="icon-calendar"></i><a href="<?php the_permalink(); ?>"><?php the_date('F j, Y'); ?></a></li>
										<li><i class="icon-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a></li>
										<li><i class="icon-folder-open"></i><a href="<?php the_permalink(); ?>"> Blog</a></li>
										<li><i class="icon-comments"></i><a href="<?php the_permalink(); ?>"><?php echo get_comments_number(); ?> Comments</a></li>
									</ul>
									<a href="<?php the_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
								</div>
							</article>
							<div id="pagination">
								<?php echo paginate_links(); ?>
							</div>
						</div>
						<div class="col-lg-4">
							<aside class="right-sidebar">
								<div class="widget">
									<form class="form-search">
										<input class="form-control" type="text" placeholder="Search..">
									</form>
								</div>
								<div class="widget">
									<h5 class="widgetheading">Categories</h5>
									<ul class="cat">
										<li><i class="icon-angle-right"></i><a href="<?php the_permalink(); ?>">Web design</a><span> (20)</span></li>
									</ul>
								</div>
								<div class="widget">
									<h5 class="widgetheading">Latest posts</h5>
									<ul class="recent">
										<li>
											<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
											<h6><a href="#">Lorem ipsum dolor sit</a></h6>
											<p>
												Mazim alienum appellantur eu cu ullum officiis pro pri
											</p>
										</li>
									</ul>
								</div>
								<div class="widget">
									<h5 class="widgetheading">Popular tags</h5>
									<ul class="tags">
										<li><a href="#">Web design</a></li>
									</ul>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</section>
		</div>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

		<?php
	}
}

get_footer(); 
?>
