<footer>
	<div class="container">
		<div class="logoFooter wow fadeInUp" data-wow-delay="0.1s">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inflor-logo-white.png" alt="">
			</a>
			<div class="logoFooterLegalTerms">
				<!-- <a href="#">Privacy Policy</a><br>
				<a href="#">Terms and Conditions</a> -->
			</div>
		</div>
		<div class="footerAddress wow fadeInUp" data-wow-delay="0.2s">
			<address>
				<a href="https://maps.gooogle.com">
					<?php theme_variables('address_US'); ?>
				</a><br>
				<a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
			</address>
			<div class="socialLinks">
				<a href="<?php theme_variables('facebook'); ?>" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
				<a href="<?php theme_variables('linkedin'); ?>" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
				<!-- <a href="<?php theme_variables('twitter'); ?>" target="_blank">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
				<a href="<?php theme_variables('instagram'); ?>" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="<?php theme_variables('youtube'); ?>" target="_blank">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
				</a> -->
			</div>
			<div class="addressLegalTerms">
				<!-- <a href="#">Privacy Policy</a><br>
				<a href="#">Terms and Conditions</a> -->
			</div>
		</div>
		<div class="footerForm wow fadeInUp" data-wow-delay="0.3s">
			<p>
				<strong>Grow your knowledge, grow your investment.</strong>
				Subscribe for news, insights, and more to help you nurture your operation.
			</p>
			<div class="footerForWrapper">
				<?php echo do_shortcode('[formidable id=4]');?>
			</div>
			
		</div>
	</div>
	<div class="logoDppa">
		<?php require_once('partials/logo-dppa-footer.php'); ?>
	</div>
	
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flipster.min.js"></script>
<script src="https://use.fontawesome.com/37d8e8fa0a.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?> 
</body>
</html>