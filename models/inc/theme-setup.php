<?php 

/*hàm thiết lập chức năng*/

if (!function_exists('themedemo_setup')) {
	function themedemo_setup(){
		/*tạo 1 text domain */
		$language= theme_url .'/language';
		load_theme_textdomain( 'themedemo',$language);
		/*khai báo ảnh đại diện */
		add_theme_support( 'post_thumbnail' );
		/*them chuc7c1 năng title text cho web */
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size(400,400,true);
		add_image_size( 'banner', $width = 1500, $height = 0, $crop = false );
		add_image_size( '255', $width = 0, $height = 255, $crop = true );
		add_image_size( '60', $width = 60, $height = 30, $crop = false );
		// khai báo menu 
		register_nav_menu( 'primary',__('Primary menu','themedemo') );
		register_nav_menu( 'left-menu',__('Left menu','themedemo') );
		register_nav_menu( 'right-menu',__('Right menu','themedemo') );
		register_nav_menu( 'mobile-menu',__('Mobile menu','themedemo') );

		// đăng kí 1 side bar 
		$sidebar=array(
			'name'=>__('Main sidebar','themedemo'),
			'id' =>'main-sidebar',
			'description'=>__('This is main sidebar','themedemo'),
			'class'=>'main-sidebar',
			'before_title'=> '<h3 class="title_sidebar">',
			'after_title'=>'</h3>',
		);
		register_sidebar( $sidebar );

		/*hàm tạo 1 menu */
		if (!function_exists('themedemo_menu')) {
			function themedemo_menu($menu,$container_id,$menu_class,$menu_id){
				$menu=array(
					'theme_location'=> $menu,
					'container'=>'nav',
					'container_id'=>$container_id,
					'menu_class'=>$menu_class,
					'menu_id'=>$menu_id,
				);
				wp_nav_menu($menu);
			}
		}


	}
	add_action('init','themedemo_setup');
}

