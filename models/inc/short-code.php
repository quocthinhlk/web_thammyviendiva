<?php
/*Short code*/
function short_code_session_3($args, $content){
	$cat = $args['cat'];
	ob_start();
	?>	
	<div class="sc-rposts style-3">
		<div class="row">
			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page'	=>	4, 
			// 'tax_query' => array(
			// 	array(
			// 		'taxonomy' => 'category',
			// 		'field'    => 'term_id',
			// 		'terms'    => $cat,
			// 	),
			// ),
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
					<div class="col-sm-3">
						<div class="leap-post-entry post-standard ">
							<div class="leap-overlay item-img one">
								<img width="1140" height="450" itemprop="image" src="<?php the_post_thumbnail_url(); ?>" class=" img-h-450 attachment-leap-portfolio-1col size-leap-portfolio-1col wp-post-image" alt="" loading="lazy" />
								<div class="item-overlay">
									<div class="item-img-color"></div>
									<div class="item-details">
										<div class="item-links">
											<a class="item-icon" href="<?php echo get_permalink() ?>"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="sc-rposts-title-comment">
								<h6 class="post-title">
									<a href="https://themes.leap13.com/wiz/spa/2015/08/06/etiam-porta-sem-malesuada-magna-mollis/"><?php the_title(); ?></a>
								</h6>
								<small class="date small"><?php the_date(); ?></small>
							<!-- <small class="separator small">|</small>
							<span class="post-comment">
								<p class="comments" href="https://themes.leap13.com/wiz/spa/2015/08/06/etiam-porta-sem-malesuada-magna-mollis/#comments"><small class="small">2 Comments</small></a>
								</span> -->
							</div>
							<div class="sc-rposts-image-content">
								<div class="sc-rposts-content">
									<?php the_excerpt() ?>
									<div class="more">
										<a class="more-link" href="<?php echo get_permalink() ?>">
											<span>Xem thêm</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- <div class="col-lg-6 col-md-6 col-sm-12">
					<div class="img-scale-animate mb-2 img-mh-4">
						<div class="mask-content-xs">
							<div class="post-meta-light d-none d-sm-block">
								<ul>
									<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by admin" rel="author"><?php echo get_the_author() ?></a></li>
									<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>September 20, 2018</li>
								</ul>
							</div>
							<h3 class="title-medium-light">
								<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
							</h3>
						</div>
						<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-240 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" alt="" data-was-processed="true" width="555" height="370">			
						</a>
						<div class="topic-box-top-sm">
						</div>
					</div>
				</div> -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="row"></div>
	</div>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}
add_shortcode('short_code_session_3', 'short_code_session_3');