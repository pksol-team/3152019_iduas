<div class="clear"></div>
</div>

<div class="bottom_sitemap">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php wp_nav_menu( array( 'theme_location' => 'bottom-menu' ) ); ?>
			</div>
		</div>
	</div>
</div>
<footer id="footer" role="contentinfo">
<div class="footer-main">
	<div class="row">
		<div class="col-sm-12 col-md-6"><?php dynamic_sidebar( 'footer-copy-right' ); ?></div>
		<div class="col-sm-12 col-md-6"><?php dynamic_sidebar( 'footer-contact-form' ); ?></div>
	</div>
</div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
<script>
// jQuery(".pt-cv-ifield .pt-cv-meta-fields").insertAfter("h4.pt-cv-title");
jQuery(document).ready(function($) {
	$(".search-link").click(function(){	  
	  event.stopPropagation(), "none" == $(".search-area").css("display") ? ($(".search-area").slideDown(), $(".search-area .search-col-bg").slideDown(), $(".search-area #DeltaPlaceHolderSearchArea").slideDown(), $(".search-link").addClass("search-link-opened")) : ($(".search-area .search-col-bg").slideUp(), $(".search-area #DeltaPlaceHolderSearchArea").slideUp(), $(".search-area").slideUp(), $(".search-link").removeClass("search-link-opened"))
	    $(".accountBox").slideUp(), $(".useraccount-link").removeClass("useraccount-link-opened")
	});

	$(".useraccount-link").click(function(){
	  event.stopPropagation(), "none" == $(".accountBox").css("display") ? ($(".accountBox").slideDown(), $(".useraccount-link").addClass("useraccount-link-opened")) : ($(".accountBox").slideUp(), $(".useraccount-link").removeClass("useraccount-link-opened"))
	    $(".search-area").slideUp(), $(".search-link").removeClass("search-link-opened");
	});
});
</script>
</body>
</html>