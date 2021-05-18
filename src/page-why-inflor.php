<?php
/*
Template Name: Page Why Inflor
*/
?>

<?php get_header(); ?>
    <main class="aboutUs whyInflorPage">
        <section class="aboutUsCover">
            <div class="aboutUsCoverCopy wow fadeInLeftBig">
                <h1 class='underlineTitle'>{{Why INFLOR?}}</h1>
                <div class="aboutUsCoverIntroText">
                    <?php the_field('cover_text'); ?>
                </div>
            </div>
            <div class="aboutUsCoverImage wow fadeInRightBig" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <div class="content"></div>
            </div>
            <div class="aboutUsCoverAfter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cover-after.png" alt="">
            </div>
        </section>
        <section class="aboutVision">
            <div class="aboutVisionCopy wow fadeInLeft">
                <h2 class='underlineTitle'><?php the_field('take_charge_title'); ?></h2>
                <div>
					<?php the_field('take_charge_copy'); ?>
				</div>
            </div>
            <div class="aboutVisionImageWrapper wow fadeInRight">
                <div class="aboutVisionImage" style="background-image: url(<?php the_field('take_charge_image'); ?>);" >
                    <div class="content"></div>
                </div>
            </div>
        </section>
        <section class="solutions">
			<div class="container">
				<div class="solutionsTitle wow fadeInUp">
                    <h3 class='underlineTitle'>Take advantage of our knowledge and best practices for {{better results}}:</h3>
				</div>
			</div>
			<div class="solutionsBoxes" style="background-image: url(<?php the_field('our_solutions_background_image'); ?>)">
				<div class="container">
                    <?php if( have_rows('advantages_boxes') ): 
                        $speed = 0.1;
                        ?>
						<?php while( have_rows('advantages_boxes') ): the_row(); ?>
							<div class="solutionBox wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
                                <div class="solutionBoxImage" style="background-image: url(<?php the_sub_field('advantage_image'); ?>);">
                                    <div class="content"></div>
                                </div>
                                <div class="solutionBoxTextWrapper">
                                    <div class="solutionBoxTitle">
                                        <?php the_sub_field('advantage_title'); ?>
                                    </div>
                                    <div class="solutionBoxText">
                                        <?php the_sub_field('advantage_copy'); ?>
                                    </div>
                                </div>
							</div>
                        <?php 
                        $speed += 0.1;
                        endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
        </section>
        <section class="transformBusiness">
			<div class="transformBusinessTitle">
				<div class="container wow fadeInUp">
                    <h3 class='underlineTitle'>{{Our process}}</h3>
                    <h4>Streamlining and scaling your operations is simple with INFLOR. Once we start working together, we’ll go through our onboarding process to set you up for success.</h4>
				</div>
			</div>	
			<div class="transformBusinessBoxes">
				<div class="container">
                    <?php if( have_rows('our_process_boxes') ): 
                        $speed = 0.1;
                        ?>
						<?php while( have_rows('our_process_boxes') ): the_row(); ?>
							<div class="transformBusinessBox wow fadeInLeft" data-wow-delay="<?php echo $speed; ?>s">
								<div class="transformBusinessBoxIcon">
									<img src="<?php the_sub_field('our_process_icon'); ?>" alt="">
								</div>
								<div class="transformBusinessBoxTitle">
									<?php the_sub_field('our_process_title'); ?>
								</div>
								<div class="transformBusinessBoxCopy">
									<?php the_sub_field('our_process_copy'); ?> 
								</div>
							</div>
                        <?php 
                        $speed += 0.1;
                        endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
        <section class="testimonials">
            <div class="container">
                <div class="testimonialsTitle wow fadeInUp">
                    <h3 class='underlineTitle'>The clients and industries {{we serve}}</h3>
                    <h4><?php the_field('testimonial_copy'); ?></h4>
                </div>
                <div class="testimonialsWrapper wow fadeInUp">
                    <ul class="flip-items">
                        <?php if( have_rows('testimonials') ): ?>
                            <?php while( have_rows('testimonials') ): the_row(); ?>
                                <li>
                                    <div class="testimonialBox" data-wow-delay="<?php echo $speed; ?>s">
                                        <div class="testimonialBoxImage" style="background-image: url(<?php the_sub_field('testimonial_image'); ?>);">
                                            <div class="content"></div>
                                        </div>
                                        <div class="testimonialBoxCopy">
                                            “<?php the_sub_field('testimonial_copy'); ?>”
                                            <strong><?php the_sub_field('testimonial_name'); ?>,</strong>
                                            <?php the_sub_field('testimonial_title'); ?>
                                        </div>
                                        
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="solustionsBtn">
                    <a href="<?php echo site_url('/case-studies/'); ?>" class="btn btn-big btn-default">View our success stories</a>
                </div>
            </div>
        </section>
        
        <!--<section class="certifications">
            <div class="container">
                <div class="certificationsTitle wow fadeInUp">
                    <h3 class='underlineTitle'>{{Certifications}}</h3>
                </div>
                <div class="certificationsWrapper">
                    <?php if( have_rows('certifications') ): 
                        $speed = 0.1;
                        ?>
                        <?php while( have_rows('certifications') ): the_row(); ?>
                            <div class="certificationsBox wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
                                <div class="certificationsBoxImage">
                                    <img src="<?php the_sub_field('certification_image'); ?>" alt="">
                                </div>
                                <div class="certificationsBoxCopy">
                                    <div class="certificationsBoxTitle">
                                        <?php the_sub_field('certification_title'); ?>
                                    </div>
                                    <div class="certificationsBoxText">
                                        <?php the_sub_field('certification_copy'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        $speed += 0.1;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>-->

        <section class="partnerships" 
            style="
                background-image: url(<?php the_field('partnership_background_image_1'); ?>),
                url(<?php the_field('partnership_background_image_2'); ?>);
            ">
            <div class="container">
                <div class="partnershipsTitle wow fadeInUp">
                    <h3 class='underlineTitle'>{{Strategic partnerships}}</h3>
                    <h4><?php the_field('partnerships_copy'); ?></h4>
                </div>
                <div class="partnershipsWrapper">
                    <div class="partnershipWrapper  wow fadeInLeft">
                        <h5>Technology partnerships</h5>
                        <div class="partnershipBox">
                            <?php if( have_rows('technology_partnerships') ): ?>
                                <?php while( have_rows('technology_partnerships') ): the_row(); ?>
                                    <div class="partnershipRow">
                                        <div class="partnershipLogo">
                                            <img src="<?php the_sub_field('partnership_logo'); ?>" alt="">
                                        </div>
                                        <div class="partnershipText">
                                            <?php the_sub_field('partnership_copy'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="partnershipWrapper wow fadeInRight">
                        <h5>Service partnerships</h5>
                        <div class="partnershipBox">
                            <?php if( have_rows('service_partnerships') ): ?>
                                <?php while( have_rows('service_partnerships') ): the_row(); ?>
                                    <div class="partnershipRow">
                                        <div class="partnershipLogo">
                                            <img src="<?php the_sub_field('partnership_logo'); ?>" alt="">
                                        </div>
                                        <div class="partnershipText">
                                            <?php the_sub_field('partnership_copy'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
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









