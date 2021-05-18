<?php
/*
Template Name: solutions Archive
*/
?>

<?php get_header(); ?>
    <main class="aboutUs">
        <section class="aboutUsCover">
            <div class="aboutUsCoverCopy wow fadeInLeftBig">
                <h1 class='underlineTitle'>{{Solutions}}</h1>
                <div class="aboutUsCoverIntroText">
                    <?php the_field('cover_text', 'cpt_solutions'); ?>
                </div>
            </div>
            <div class="aboutUsCoverImage wow fadeInRightBig servicesCoverImage" style="background-image: url(<?php the_field('cover_image', 'cpt_solutions'); ?>);">
                <div class="content"></div>
            </div>
            <div class="aboutUsCoverAfter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cover-after.png" alt="">
            </div>
        </section>
        <section class="solutions solutionsPage">
			<div class="container">
				<div class="solutionsTitle wow fadeInUp">
                    <h3 class='underlineTitle'><?php the_field('solutions_intro_title', 'cpt_solutions'); ?></h3>
                    <?php the_field('solutions_intro_text', 'cpt_solutions'); ?> 
                </div> 
			</div>
			<div class="solutionsBoxes" style="background-image: url(<?php the_field('solutions_background_image', 'cpt_solutions'); ?>)">
				<div class="container">
                    <?php
						$args = array(
							'post_type' => array( 'solutions' ),
							'posts_per_page' => 3,
						);
						
						$query = new WP_Query( $args );
						
						if ( $query->have_posts() ) {
							$speed = 0.1;
							while ( $query->have_posts() ) {
								$query->the_post();?>
								<?php 
									$count = $query->found_posts;
                                ?>
                                <div class="solutionBox wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
                                    <div class="solutionBoxTitle">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="solutionBoxText">
                                        <?php the_field('box_intro_copy'); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-transparent">Learn more</a>
                                </div>
							<?php 
							$speed += 0.1;
							}
						} 
						wp_reset_postdata();
					?>
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
