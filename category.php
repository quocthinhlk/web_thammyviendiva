
<?php get_header() ?>
<section class="leap-slider-other-page">
	<?php $image = get_field('banner_others_pages', 'option'); ?>
	<div class="banner"><img class="banner_other_page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
</section>
<section class="category-section">
	<div class="title-category">
		<ul>
			<li>
				<div class="entry-title entry-title-left">
					<h1 style="text-align: right;"><?php single_cat_title(); ?></h1>
				</div>
			</li>
			<li><div class="inner-line"></div></li>
			<li>
				<div class="subtitle-category entry-title-right">
					<p><a href="<?php echo get_bloginfo('url') ?>">Trang chủ </a><span>» </span> <span><?php single_cat_title(); ?></span></p>
				</div>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="row cate-wrapper">
			<div class="col-md-9">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();  ?>
						<div class="col-md-6">
							<div class="category-content">
								<div class="thumbnail-img">
									<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
								</div>
								<h2 class="sub-title-category"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
								<div class="entry-meta">
									<small class="entry-category small">
										<i class="fa fa-align-left"></i>&nbsp;<?php single_cat_title(); ?>
									</small>
								</div>
								<p><?php the_excerpt(); ?></p>
								<div class="more-buttons">
									<a class="read-more btn btn-default btn-leap" href="<?php echo get_permalink() ?>">Xem thêm</a>
								</div>
							</div>
						</div>
					<?php endwhile; else : ?>
				<?php endif; ?>
				<div class="col-md-12">
					<div class="pagination">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('&laquo;'),
							'next_text'    => __('&raquo;'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						?>
					</div>
				</div>

			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer() ?>