<?php
/**
 * template name: Tin tức
 */
?>

<?php get_header(); ?>
<section class="leap-slider-other-page">
	<?php $image = get_field('banner_others_pages', 'option'); ?>
	<div class="banner"><img class="banner_other_page" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
</section>
<section class="category-section">
	<div class="title-category">
		<ul>
			<li>
				<div class="entry-title entry-title-left">
					<h1 style="text-align: right;">Tin tức </h1>
				</div>
			</li>
			<li><div class="inner-line"></div></li>
			<li>
				<div class="subtitle-category entry-title-right">
					<h4><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a>&nbsp;<span>» </span>&nbsp;Tin tức</h4>
				</div>
			</li>
		</ul>
	</div>
	<div class="container container-contact">
		<div class="col-md-9">
			
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>

<?php get_footer(); ?>
    