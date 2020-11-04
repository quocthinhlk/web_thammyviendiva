<?php
/**
 * template name: Liên hệ
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
					<h1 style="text-align: right;">Liên hệ </h1>
				</div>
			</li>
			<li><div class="inner-line"></div></li>
			<li>
				<div class="subtitle-category entry-title-right">
					<h4><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a>&nbsp;<span>» </span>&nbsp;Liên hệ</h4>
				</div>
			</li>
		</ul>
	</div>
	<div class="container container-contact">
		<div class="col-md-12">
			<div class="col-md-8">
				<div class="contact-us">
					<form class="leap-contact-form" action="" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input id="name" class="form-control" type="text" name="leap_name" value="" placeholder="Tên (bắt buộc)" required="required">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input id="inputEmail" class="form-control" type="email" name="leap_email" value="" placeholder="Email (bắt buộc)" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input id="inputSubject" class="form-control" type="text" name="leap_subject" value="" placeholder="Tiêu đề (bắt buộc)" required="required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<textarea id="message" class="form-control" name="leap_message" rows="5" placeholder="Nội dung" required="required"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="btn-submit-form">
									<input id="submit-form" class=" btn btn-leap" type="submit" name="leap_submit" value="Gửi">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-info">
					<p><strong>Địa chỉ: </strong><?php the_field('address', 'option'); ?></p>
					<p><strong>Điện thoại: </strong><?php the_field('phone', 'option'); ?></p>
					<p><strong>Email: </strong><a href="mailto:mail@example.com"><?php the_field('email', 'option'); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="campus">
	<div class="container">
		<div class="header-section" style="width: 100%">
			<h2 class="title-section-3">LIÊN HỆ</h2>
			<div class="space-line"></div>
		</div>
		<div class="page-content" style="width: 100%">
			<?php
			if( have_rows('region') ):
				while( have_rows('region') ) : the_row();
					$province = get_sub_field('province'); ?>
					<div class="wp-contact">
						<div class="region region-province">
							<h3 class="contact-item-title"><?php echo $province; ?></h3>
						</div>
						<div class="row region contact-item-des">
							<?php if( have_rows('store') ):
								while( have_rows('store') ) : the_row();
									$branch_store_name 	= 	get_sub_field('branch_store_name');
									$branch_address 	=	 get_sub_field('branch_address');
									$hotline 			= 	get_sub_field('hotline'); ?>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="contact-item-dess">
											<div class="contact-innerline"></div>
											<div class="contact-item-detail">
												<?php 
												if(!empty($branch_store_name)){
													echo '<p><b class="text--primary">Tên cơ sở:&nbsp;</b>'.$branch_store_name.'</p>';
												}
												?>
												<p><b class="text--primary">Địa chỉ:&nbsp;</b><?php echo $branch_address; ?></p>
												<p><b class="text--primary">Hotline:&nbsp;</b><?php echo $hotline; ?></p>
											</div>
										</div>
									</div>
								<?php endwhile;
							endif;
							?>
						</div>
					</div>
					<?php
				endwhile;
			endif; ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>