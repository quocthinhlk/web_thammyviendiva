<div class="col-md-3">
	<div class="sidebar-content">
		<div class="posts-list-title">
			<h4 class="widget-title">Bài viết gần đây</h4>
			<div class="space-line-slidebar"></div>
		</div>
		<div class="wp-widget-content">
		<?php 
		$args = array(
			'post_type' => 'post',
			'posts_per_page'	=>	3,
		);
		$the_query = new WP_Query( $args );
		$count = 0;
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
				<div class="widget-content">
					<div class="thumbnail-picture">
						<a href="<?php echo get_permalink() ?>"><div class="img-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
					</div>
					<div class="thumb-content">
						<div class="wdg-posttitle"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></div>
						<small class="small-date"><?php echo get_the_date(); ?></small>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>
</div>
	<div class="newsletter-signup">
		<div class="wid-head">
			<h4 class="widget-title">Đăng ký nhận email</h4>
		</div>
		<div class="wid-content">
			<form action="" method="get">
			    <input id="email" name="email" type="text" value="">
			    <input id="submit" type="submit" name="submit" value="Gửi" />
			</form> 
		</div>
	</div>
</div>
