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
</script>
</body>
</html>