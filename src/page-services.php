<?php
/*
Template Name: Page Services
*/
?>

<?php get_header(); ?>
    <main class="aboutUs">
        <section class="aboutUsCover">
            <div class="aboutUsCoverCopy wow fadeInLeftBig">
                <h1 class='underlineTitle'>{{Support & Services}}</h1>
                <div class="aboutUsCoverIntroText">
                    <?php the_field('cover_text'); ?>
                </div>
            </div>
            <div class="aboutUsCoverImage wow fadeInRightBig servicesCoverImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <div class="content"></div>
            </div>
            <div class="aboutUsCoverAfter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cover-after.png" alt="">
            </div>
        </section>
        <section class="servicesWrapper">
            <?php if( have_rows('services') ): ?>
                <?php while( have_rows('services') ): the_row(); ?>
                    <div class="serviceUnique">
                        <a href="#">
                            <div class="container">
                                <div class="serviceUniqueImage" style="background-image: url('<?php the_sub_field('service_image'); ?>')">
                                    <div class="content"></div>
                                </div>
                                <div class="serviceUniqueTextWrapper">
                                    <div class="serviceUniqueText">
                                        <h2><?php the_sub_field('service_title'); ?></h2>
                                        <?php the_sub_field('service_text'); ?>
                                    </div>
                                    <p class="serviceUniqueTextMoreLess serviceUniqueTextMore">Learn more <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                    <p class="serviceUniqueTextMoreLess serviceUniqueTextLess">Show Less<i class="fa fa-angle-up" aria-hidden="true"></i></p>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <section class="homeCta">
			<div class="homeCtaText">
				<div class="homeCtaTextWrapper wow fadeInLeft">
					<h3 class='underlineTitle'>{{Ready to maximize the performance}} of your agricultural asset?</h3>
				</div>
				<div class="homeCtaBtnWrapper">
					<a href="<?php echo site_url('/request-a-demo/'); ?>" class="btn btn-default btn-big">Request a demo</a>	
				</div>
			</div>
			<div class="homeCtaImage wow fadeInRight">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cta-image.png" alt="">
			</div>
		</section>
	</main>
<?php get_footer(); ?>	
