<?php get_header(); ?>

<?php $image = get_field('banner_others_pages', 'option'); ?>
<section class="leap-slider-other-page">
	<div class="banner"><img class="banner_other_page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
</section>
<section class="category-section">
	<div class="title-category">
		<ul>
			<li>
				<div class="entry-title entry-title-left">
					<h1 style="text-align: right;"><?php the_title(); ?></h1>
				</div>
			</li>
			<li><div class="inner-line"></div></li>
			<li>
				<div class="subtitle-category entry-title-right">
					<p>
						<a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a>
						<span>»</span>
						<span><?php the_title(); ?></span>
					</p>
				</div>
			</li>
		</ul>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="category-content-detail">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="entry-meta">
								<small class="entry-author small"><i class="fa fa-user"></i> &nbsp;
									<?php the_author(); ?>
								</small>
								<small class="entry-date small"><i class="fa fa-calendar"></i>&nbsp;<?php echo get_the_date(); ?></small>
								<small class="entry-category small"><i class="fa fa-align-left"></i>&nbsp;<?php //get_all_category_by_post(); ?></small> 
							</div>
							<p><?php the_content() ?></p>
							<div class="entry-footer">
								<div class="entry-tags small">
									<i class="fa fa-tags"></i> Tags: <?php
									$posttags = get_the_tags();
									if ($posttags) {
										foreach($posttags as $tag) {
											echo $tag->name . ', '; 
										}
									}
									?>
								</div> 
								<div class="leap-share-buttons">
									<div class="pull-left">Chia sẻ</div>
									<div class="pull-right">
										<a href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook-f"></i></a>
										<a href="<?php the_field('twitter', 'option'); ?>"><i class="fab fa-twitter"></i></a>
										<a href="<?php the_field('linkedin', 'option'); ?>"><i class="fab fa-linkedin-in"></i></a>
										<a href="<?php the_field('google_plus', 'option'); ?>"><i class="fab fa-google-plus-g"></i></a>
										<a href="<?php the_field('pinterest', 'option'); ?>"><i class="fab fa-pinterest"></i></a> 
									</div>
								</div>
							</div>
						<?php endwhile; else : ?>
						<p>Đang cập nhật</p>
					<?php endif; ?>
				</div>

				<div class="related-posts-title"><h4>Bài viết liên quan</h4></div>
				<div class="related-posts">
					<?php
				/*
				    Hiển thị bài viết liên quan theo post tags
				 */
				    $tags = wp_get_post_tags(get_the_ID());
				    if ($tags){
				    	$tag_ids = array();
				    	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				    	$args=array(
				    		'tag__in' => $tag_ids,
				    		'post__not_in' => array(get_the_ID()),
				    		'posts_per_page' => 3,
				    	);
				    	$my_query = new wp_query($args);
				    	if( $my_query->have_posts() ):
				    		while ($my_query->have_posts()):$my_query->the_post();
				    			?>
				    			<div class="img">
				    				<a href="<?php the_permalink() ?>"><img class="img-thumb" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
				    				<div class="txt">
				    					<a href="<?php the_permalink() ?>"><p style="color: #fff;"><?php the_title(); ?></p></a>
				    				</div>
				    			</div>
			    				<?php
				    		endwhile;
				    	endif;
				    	wp_reset_query();
				    }
				    ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>