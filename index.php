<?php 
/*
Slience is golden
*/
get_header();
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php _e('Blog','mordern'); ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php 
				while (have_posts()){
					the_post(); ?>
					<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
						</div>
						<p>
							<?php the_content(); ?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="<?php the_permalink(); ?>"><?php the_date('F j, Y'); ?></a></li>
								<li><i class="icon-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a></li>
								<li><i class="icon-folder-open"></i><a href="<?php the_permalink(); ?>"> <?php wp_title(''); ?>
							</a></li>
							<li><i class="icon-comments"></i><a href="<?php the_permalink(); ?>"><?php echo get_comments_number(); ?> Comments</a></li>
						</ul>
						<a href="<?php the_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
					</div>
				</article>
			<?php 	}  ?>
			<div id="pagination">
				<?php echo paginate_links(); ?>
			</div>
		</div>
		<div class="col-lg-4">
			<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">

						<input class="form-control" type="text" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search', 'mordern' ); ?>">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading"><?php _e('Categories', 'mordena') ?></h5>

					<ul class="cat">
						<?php $cat = wp_list_categories(['show_count'=> true,'title_li'=> __( '' )]); ?>
						<li><i class="icon-angle-right"></i><a href="<?php the_permalink(); ?>"><?php echo $cat; ?></li>
						</ul>
					</div>
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
						<ul class="recent">
							<?php
							while ($posts->have_posts()){
								$posts->the_post();
								?>
								<li>
									<img src="<?php the_post_thumbnail_url(); ?>" class="pull-left" alt="<?php the_title(); ?>" />
									<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
									<p>
										<?php echo wp_trim_words( the_content(), 10); ?>
									</p>
								</li>
							<?php } wp_reset_postdata(); ?>
						</ul>
					</div>
					<div class="widget">
						<h5 class="widgetheading"><?php _e( 'Popular tags', 'mordena' ); ?></h5>
						<?php
    						$tags = get_tags('post_tag'); ?>
    								
    								<ul class="tags">
    									<?php
    									if ( $tags ) :
    										foreach ( $tags as $tag ) : ?>
    									<li><a href="<?php the_permalink(); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
    								<?php endforeach; ?>
    							<?php endif; ?>
    						</ul>
    					</div>
    				</aside>
    			</div>
    		</div>
    	</div>
    </section>
    <?php
    get_footer(); 
    ?>