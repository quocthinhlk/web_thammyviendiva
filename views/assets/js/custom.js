
jQuery(window).scroll(function(){
	if (window.pageYOffset > 100){
		jQuery(".back-top").css("display","flex");
	} else {
		jQuery(".back-top").css("display","none");
	}
});

jQuery(document).ready(function(){
	if (jQuery(".fixed-header").length != '0') {
		hfix = jQuery(".fixed-header").offset().top;
		f_height = jQuery(".fixed-header").outerHeight();
		jQuery(window).scroll(function(){
			if (window.pageYOffset >= ( hfix + f_height) ){
				jQuery(".fixed-header").addClass("is-fixed");
				jQuery("body").css("padding-top",f_height+"px");
			} else {
				jQuery(".fixed-header").removeClass("is-fixed");
				jQuery("body").css("padding-top","0");
			}
		})
	}
});

function myFunction() {
	var x = document.getElementById("nav-menu-mobile");
	if (x.style.display === "block") {
		x.style.display = "none";
	} else {
		x.style.display = "block";
	}
}


jQuery(document).ready(function() {
	jQuery("#nav-menu-mobile .menu-item-has-children").append("<i class='fas fa-angle-right'></i>");
	jQuery("#nav-menu-mobile .menu-item-has-children > i").attr("data-active", "0");
	jQuery("#nav-menu-mobile .menu-item-has-children > i").click(function(){
		data = jQuery(this).attr("data-active");
		li = jQuery(this).closest(".menu-item-has-children");
		if(data == '0') {
			jQuery(this).attr("data-active", "1");
			jQuery(this).addClass("i-rote");
			jQuery(this).addClass("fa-angle-down");
			jQuery(this).removeClass("fa-angle-right");
			jQuery(li).children(".sub-menu").show();
			jQuery(li).children(".sub-menu").addClass("data-active");

		} else {
			jQuery(this).attr("data-active", "0");
			jQuery(li).children(".sub-menu").hide();
			jQuery(this).removeClass("i-rote");
			jQuery(this).removeClass("fa-angle-down");
			jQuery(this).addClass("fa-angle-right");
		}
	});
});

