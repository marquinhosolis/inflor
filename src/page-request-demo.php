<?php
/*
Template Name: Request a Demo Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="contactPageAddresses">
        <div class="contactPageAddressesImage wow fadeInLeft" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
            <div class="content"></div>
        </div>
        <div class="contactPageAddressesCopy wow fadeInUp" data-wow-delay="0.5s">
            <address>
                <strong>US</strong> <br>
                <a href="<?php theme_variables('google_maps_link_US'); ?>" target="_blank">
                    <?php theme_variables('address_US'); ?>
                </a>
                <br><br>
                <a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
            </address>
            <address>
                <strong>Brazil</strong> <br>
                <a href="<?php theme_variables('google_maps_link_BR'); ?>" target="_blank">
                    <?php theme_variables('address_BR'); ?>
                </a>
                <br><br>
                <a href="tel:<?php theme_variables('phone_BR'); ?>"><?php theme_variables('phone_BR'); ?></a>
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
        </div>
    </div>
    <div class="contactPageForms wow fadeInUp" data-wow-delay="0.5s">
        <div class="contactPageTitle">
            <h1 class='underlineTitle'><?php the_field('page_title'); ?></h1>
            <h2><?php the_field('intro_text'); ?></h2>
        </div>
        <div class="contactPageFormsMobileImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
            <div class="content"></div>
        </div>
        <div class="contactPageFormsMobileAddress">
            <address>
                <strong>US</strong> <br>
                <a href="<?php theme_variables('google_maps_link_US'); ?>" target="_blank">
                    <?php theme_variables('address_US'); ?>
                </a>
                <br><br>
                <a href="tel:<?php theme_variables('phone_US'); ?>"><?php theme_variables('phone_US'); ?></a>
            </address>
            <address>
                <strong>Brazil</strong> <br>
                <a href="<?php theme_variables('google_maps_link_BR'); ?>" target="_blank">
                    <?php theme_variables('address_BR'); ?>
                </a>
                <br><br>
                <a href="tel:<?php theme_variables('phone_BR'); ?>"><?php theme_variables('phone_BR'); ?></a>
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
        </div>
        <div class="contactPageForm requestDemoForm">
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </div>
    </div>
</main>	
<?php get_footer(); ?>