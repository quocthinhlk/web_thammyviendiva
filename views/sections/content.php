<section class="section-slider">
	<div class="leap-slider slider-2 owl-carousel owl-loaded owl-drag">
		<?php 
		$rows = get_field('banner_homepage', 'option');
		if( $rows ) {
			foreach( $rows as $row ) {
				$banner = $row['banner_picture']; ?>
				<div class="banner-home slider-in" style="background-image: url(<?php echo esc_url($banner['url']); ?>);"></div>
			<? }
		} ?>
	</div>
</section>

<section class="content-1">
	<div class="container container-section-1">
		<div class="header-section">
			<h2 class="title-section-1">DỊCH VỤ NỔI BẬT</h2>
			<div class="space-line"></div>
		</div>


		<div class="wp-section-1 slider-1 owl-carousel owl-loaded owl-drag">
			<?php 
			$rows = get_field('outstanding_service');
			if( $rows ) {
				foreach( $rows as $row ) {
					$title 			= 	$row['title'];
					$url			= 	$row['outstanding_service_url'];
					$description 	= 	$row['description'];
					$avatar 		= 	$row['outstanding_service_avatar'];
					?>
					<div class="img-w-100">
						<div class="section-1">
							<h4><?php echo $title ?></h4>
							<div class="img-box">
								<a href="<?php echo $url ?>"><img alt="<?php echo $avatar['alt']; ?>" src="<?php echo $avatar['url']; ?>"></a>
							</div>
							<p><?php echo $description ?></p>
							<a class="btn-read-more" href="<?php echo $url ?>">Xem thêm</a>
						</div>
					</div>
				<?php }
			}
			?>
		</div>
	</div>
</section>
<?php $background_img = get_field('background_img'); ?>
<section class="content-2">
	<div class="container-section-2" style="background-image: url(<?php echo esc_url($background_img['url']); ?>);">
		<b class="title-section-2"><?php the_field('slogan'); ?></b>
	</div>
	<div class="container container-section-3">
		<div class="header-section-3">
			<h2 class="title-section-3"><?php the_field('why_choose_us'); ?></h2>
			<div class="space-line"></div>
		</div>
		<div class="row wp-section-2">
			<?php 
			$rows = get_field('reason');
			if( $rows ) {
				foreach( $rows as $row ) {
					$sub_title 			= 	$row['sub_title'];
					$sub_description 	= 	$row['sub_description'];
					$sub_avatar		 	= 	$row['sub_avatar']; ?>
					<div class="col-md-6 col-xs-12 col-sm-6">
						<div class="whyus">
							<div class="section-3">
								<div class="left-img">
									<img alt="<?php echo esc_attr($sub_avatar['alt']); ?>" src="<?php echo $sub_avatar['url'] ?>">
								</div>
							</div>
							<div class="right-content">
								<h4 class="h4-left-text"><?php echo $sub_title ?></h4>
								<p><?php echo $sub_description ?></p>
							</div>
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</section>
<section class="content-3">
	<div class="container container-section-4">
		<div class="header-section">
			<h2 class="title-section-3">TIN TỨC</h2>
			<div class="space-line"></div>
		</div>
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page'  =>  12,
			
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			echo '<div class="wp-section-3 slider-1 owl-carousel owl-loaded owl-drag">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post(); ?>
				<div class="img-w-100">
					<div class="section-3 ">
						<div class="img-box">
							<a href="<?php echo get_permalink() ?>"><img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>"></a>
						</div>
						<h4><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4>
						<div class="post-date"><?php echo get_the_date(); ?></div>
						<p class="short-content"><?php echo get_the_excerpt(); ?></p>
						<div class="more"><a class="more-link" href="<?php echo get_permalink() ?>">Xem thêm</a></div>
					</div>
				</div>
			<?php }
			echo '</div>';
		} else {
		}
		wp_reset_postdata(); ?>
	</div>
</section>
<section class="content-4">
	<div class="container-section-5">
		<div class="content-section-5">

			<div class="col-md-6 col-xs-12 col-sm-6">
				<div class="content-left">
					<?php $image = get_field('staff_picture'); ?>
					<img src="<?php echo esc_url($image['url']); ?>">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6">
				<div class="content-right">
					<h2><?php the_field('staff_title'); ?></h2>
				</div>
				<div class="my-team">
					<h3><?php the_field('staff_sub_title'); ?></h3>
					<p><?php the_field('staff_description'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content-5">
	<div class="container container-section-6">
		<div class="header-section">
			<h2 class="title-section-5">TIN TỨC NỔI BẬT</h2>
			<div class="space-line"></div>
		</div>
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page'  =>  4,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => 28,
				),
			),
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			echo '<div class="row wp-section-6">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post(); ?>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<div class="section-6">
						<div class="img-box">
							<a href="<?php echo get_permalink() ?>"><img alt="" src="<?php the_post_thumbnail_url(); ?>"></a>
						</div>
						<div class="section-6-content">
							<div class="post-title"><h4><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4></div>
							<div class="post-date"><?php echo get_the_date(); ?></div>
							<p class="short-content"><?php echo get_the_excerpt(); ?></p>
							<div class="more"><a class="more-link" href="<?php echo get_permalink() ?>">Xem thêm</a></div>
						</div>
					</div>
				</div>
			<?php }
			echo '</div>';
		} else {
		}
		wp_reset_postdata(); ?>
		<div class="banner-bottom">
			<div class="col-md-6 col-sm-9">
				<?php
					$pattern 		= 	'/watch\?v\=(.+)/';
					$subject 		= 	get_field('link_video');
					preg_match($pattern, $subject, $matches);
				?>
				<div class="banner-bottom-img"><?php the_field('link_video'); ?></div>
			</div>
		</div>
	</div>
	<div class="social-media">
		<p>
			<a href="<?php the_field('twitter', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-twitter"></i></span></a>
			<a href="<?php the_field('facebook', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-facebook-f"></i></span></a>
			<a href="<?php the_field('google_plus', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-google-plus-g"></i></span></a>
			<a href="<?php the_field('pinterest', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-pinterest"></i></span></a>
			<a href="<?php the_field('youtube', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-youtube"></i></span></a>
			<a href="<?php the_field('vimeo', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-vimeo-v"></i></span></a>
			<a href="<?php the_field('dribbble', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-dribbble"></i></span></a>
			<a href="<?php the_field('flickr', 'option'); ?>"><span class="fa-stack fa-2x"><i class="fab fa-flickr"></i></span></a>
		</p>
	</div>
</section>