<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultra
 * @since ultra 0.9
 * @license GPL 2.0
 */
?>

		</div><!-- .container -->

	</div><!-- #content -->

	<div id="custom-footer" style="text-align: left; background-color: #000; height: 180px; padding-left: 40px; position: relative;">
		<div style="max-width: 1150px; margin: auto;">
			<div style="padding-top: 24px; text-align: center;">
				<div style="width: 33.3333%; text-align: center; float: left;">
					<div>
						<a href="http://ez-reno.com/">Home</a>
					</div>
					<div>
						<a href="http://ez-reno.com/?page_id=59">All Services</a>
					</div>
					<div>
						<a href="http://ez-reno.com/?page_id=120">Book Service</a>
					</div>
				</div>
				<div style="width: 33.3333%; text-align: center; float: left;">
					<div>
						<a href="http://ez-reno.com/?page_id=2">EZ Blog</a>
					</div>
					<div>
						<a href="http://ez-reno.com/?page_id=48">FAQs</a>
					</div>
				</div>
				<div style="width: 33.3333%; text-align: center; float: left;">
					<div>
						<a href="http://ez-reno.com/?page_id=221">About Us</a>
					</div>
					<div>
						<a href="http://ez-reno.com/?page_id=21">Contact Us</a>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<a href="http://ez-reno.com/?page_id=120" class="book-service-btn" style="position: absolute; bottom: 0; right: 0; z-index: 20; padding: 0 30px; line-height: 80px; background-color: #d48e29; height: 80px; box-sizing: border-box; color: #fff">BOOK SERVICE</a>
			<div style="padding-top: 12px; text-align: center;">
				<div>
					Copyright 2015 EZ-Reno.com
				</div>
				<div>
					<a href="https://www.facebook.com/EZRenoCanada" target="_blank" style="padding: 0 5px;">
						<i class="fa fa-facebook-square fa-2x"></i>
					</a>
					<a href="https://twitter.com/EZRenoCanada" target="_blank" style="padding: 0 5px;">
						<i class="fa fa-twitter-square fa-2x"></i>
					</a>
					<a href="https://instagram.com/ezrenocanada/" target="_blank" style="padding: 0 5px;">
						<i class="fa fa-instagram fa-2x"></i>
					</a>
					<!--<a href="https://www.linkedin.com/ezreno" target="_blank" style="padding: 0 5px;">
						<i class="fa fa-linkedin-square fa-2x"></i>
					</a>-->
				</div>
			</div>
			<div class="site-counter" style="display: none;"><script language="JavaScript">var fhs = document.createElement('script');var fhs_id = "5129674";
	var ref = (''+document.referrer+'');var pn =  window.location;var w_h = window.screen.width + " x " + window.screen.height;
	fhs.src = "http://freehostedscripts.net/ocounter.php?site="+fhs_id+"&e1=Online User&e2=Online Users&r="+ref+"&wh="+w_h+"&a=1&pn="+pn+"";
	document.head.appendChild(fhs);document.write("<span id='o_"+fhs_id+"'></span>");
	</script></div>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-main">

			<div class="container">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<div class="clear"></div>
			</div><!-- .container -->
		
		</div><!-- .main-footer -->

		<?php
		if ( siteorigin_setting( 'footer_copyright_text' ) || siteorigin_setting( 'footer_attribution' ) ) {
			get_template_part( 'parts/bottom-bar' );
		}
		?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>