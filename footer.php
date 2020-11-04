<footer id="footer">
	<section class="content-6">
		<div class="container container-section-7">
			<div class="row wp-section-7">
				<div class="col-md-4">
					<div class="ft-1">
						<h4>Liên hệ</h4>
						<div class="ft-1-content">
							<div class="address ct-info"><i class="fa fa-home"></i> <span>Địa chỉ: </span><?php the_field('address', 'option'); ?></div>
							<div class="phone ct-info"><i class="fa fa-phone"></i> <span>Điện thoại: </span><?php the_field('phone', 'option'); ?></div>
							<div class="email ct-info"><i class="fas fa-envelope"></i> <span>Email: </span><?php the_field('email', 'option'); ?></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h4>Hình ảnh hoạt động</h4>
					
					<div class="pic-cover">
						<div class="ft-2">
							<?php
							$rows = get_field('activity_img', 'option');
							if( $rows ) {
							foreach( $rows as $row ) {
							$image = $row['picture_activity_stream']; ?>
							<div class="ft-2">
								<figure class="image">
									<a href="<?php echo esc_url($image['url']); ?>" class="lightbox-image"><img alt="<?php echo esc_attr($image['alt']); ?>" src="<?php echo esc_url($image['url']); ?>" class="lazy-loaded"></a>
								</figure>
							</div>
							<?php }
							} ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ft-3">
						<h4>Về chúng tôi</h4>
						<p><?php the_field('our_info', 'option'); ?></p>
						<p><i class="fas fa-clock"></i><?php the_field('working_hours', 'option'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-7">
		<div class="container">
			<div class="row">
				<div class="col-md-12 bottom-footer">
					<div class="left-ft">
						<p class="copyright ft-menu">Copyright © 2014 - <?php echo date('Y'); ?> : <a href="<?php echo get_bloginfo('url') ?>" target="_blank" href="">Công Ty CP Tập Đoàn DIVA Group. All Right Reserved.</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>
<div class="backtotop" id="button"><a href="#" class="back-top back-to backtotop" style="display: flex;"><span></span></a></div>
<?php wp_footer(); ?>
</body>
</html>	