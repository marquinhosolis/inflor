<?php
/*
Template Name: Page About Us
*/
?>

<?php get_header(); ?>
    <main class="aboutUs">
        <section class="aboutUsCover">
            <div class="aboutUsCoverCopy wow fadeInLeftBig">
                <h1 class='underlineTitle'>{{About us}}</h1>
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
        <section class="aboutUsStats" style="background-image: url(<?php the_field('stats_background_image'); ?>);">
            <div class="container">
				<?php if( have_rows('stats') ): 
					$speed = 0.1;
					?>
					<?php while( have_rows('stats') ): the_row(); ?>
						<div class="aboutUsStatBox wow fadeInLeft" data-wow-delay="<?php echo $speed; ?>s">
							<h2><?php the_sub_field('stat_title'); ?></h2>
							<p><?php the_sub_field('stat_copy'); ?></p>
						</div>
					<?php 
					$speed += 0.1;
					endwhile; ?>
				<?php endif; ?>
            </div>
        </section>
        <section class="aboutMission">
            <div class="aboutMissionCopy wow fadeInRight">
				<h2 class='underlineTitle'>Our {{mission}}</h2>
                <div>
					<?php the_field('our_mission_copy'); ?>
				</div>
            </div>
            <div class="aboutMissionImageWrapper wow fadeInLeft">
                <div class="aboutMissionImage" style="background-image: url(<?php the_field('our_mission_image'); ?>);" >
                    <div class="content"></div>
                </div>
            </div>
        </section>
        <section class="aboutVision">
            <div class="aboutVisionCopy wow fadeInLeft">
                <h2 class='underlineTitle'>Our {{strategic vision}}</h2>
                <div>
					<?php the_field('strategic_vision_copy'); ?>
				</div>
            </div>
            <div class="aboutVisionImageWrapper wow fadeInRight">
                <div class="aboutVisionImage" style="background-image: url(<?php the_field('our_vision_image'); ?>);" >
                    <div class="content"></div>
                </div>
            </div>
        </section>
        <section class="aboutOurValues">
            <div class="container">
				<div class="aboutOurValuesTitle wow fadeInUpBig">
					<h2 class='underlineTitle'>The values that {{unite us}}</h2>
				</div>
			</div>
				<div class="aboutOurValuesTitleBoxes wow fadeInUp">
					<ul>
						<?php if( have_rows('values_boxes') ): ?>
							<?php while( have_rows('values_boxes') ): the_row(); ?>
								<li>
									<div class="aboutOurValuesTitleBox">
										<div class="aboutOurValuesTitleBoxIcon">
											<object data="<?php the_sub_field('value_icon'); ?>" type="image/svg+xml" class="svg"></object>
										</div>
										<div class="aboutOurValuesTitleBoxTitle">
											<?php the_sub_field('value_title'); ?>
										</div>
										<div class="aboutOurValuesTitleBoxCopy">
											<?php the_sub_field('value_copy'); ?> 
										</div>
									</div>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div><div class="aboutOurValuesBg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-our-values-bg.png" alt="">
			</div>
		</section>
		<section class="aboutCompanyCulture">
			<div class="aboutCompanyCultureCopy wow fadeInRight">
				<h2 class='underlineTitle'>Our  {{company culture}}</h2>
				<div class="aboutCompanyCultureCopyText">
					<?php the_field('company_culture_copy'); ?>
				</div>
			</div>
			<div class="aboutCompanyCultureImage  wow fadeInLeft" style="background-image: url(<?php the_field('company_culture_image'); ?>);">
				<div class="content"></div>
			</div>
		</section>
		<section class="aboutLeadership">
			<div class="container">
				<h2 class='underlineTitle wow fadeInUp'>{{Leadership}} team</h2>
				<h3><?php the_field('leadership_intro_copy'); ?></h3>
				<div class="aboutLeadershipWrapper">
					<?php if( have_rows('leadership_member') ): 
						$speed = 0.1;
						?>
						<?php while( have_rows('leadership_member') ): the_row(); ?>
							<div class="aboutLeadershipMember wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
								<div class="aboutLeadershipMemberImage" style="background-image: url(<?php the_sub_field('leadership_member_photo'); ?> );" >
									<div class="content"></div>
								</div>
								<div class="aboutLeadershipMemberName">
									<?php the_sub_field('leadership_member_name'); ?> 
								</div>
								<div class="aboutLeadershipMemberTitle">
									<?php the_sub_field('leadership_member_title'); ?> 
								</div>
							</div>
						<?php 
						$speed += 0.1;
						endwhile; ?>
					<?php endif; ?>
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
