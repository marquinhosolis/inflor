<?php get_header(); ?>
    <main class="singleSolutions">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <section class="aboutUsCover singleSolutionCover">
            <div class="aboutUsCoverCopy wow fadeInLeftBig">
                <h1 class='underlineTitle'>{{<?php the_title(); ?>}}</h1>
                <div class="aboutUsCoverIntroText">
                    <?php the_content(); ?>
                    <h2><?php the_field('cover_text_subtitle'); ?></h2>
                    <?php the_field('cover_subtext'); ?>
                </div>
            </div>
            <div class="aboutUsCoverImage wow fadeInRightBig servicesCoverImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <div class="content"></div>
            </div>
            <div class="aboutUsCoverAfter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cover-after.png" alt="">
            </div>
        </section>
        <section class="keyBenefits">
            <div class="container">
                <h3 class='underlineTitle'>{{Key benefits}}</h3>
                <p class="pageSubtitle">
                    <?php the_field('key_benefits_intro_text'); ?>
                </p>
                <div class="keyBenefitsBoxes flexslider">
                    <ul class="slides"> 
                        <?php if( have_rows('key_benefits_boxes') ): 
                            $speed = 0.1;
                            ?>
                            <?php while( have_rows('key_benefits_boxes') ): the_row(); ?>
                                <li>
                                    <div class="slideWrapper" data-wow-delay="<?php echo $speed; ?>s">
                                        <h4><?php the_sub_field('key_benefit_title'); ?></h4>
                                        <p><?php the_sub_field('key_benefit_text'); ?></p>
                                    </div>
                                </li>
                            <?php 
                            $speed += 0.1;
                            endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="solutionBullets">
            <div class="container">
                <div class="solutionBulletsImage" style="background-image: url(<?php the_field('bullets_image'); ?>);">
                    <div class="content"></div>
                </div>
                <div class="solutionBulletsText">
                    <h4><?php the_field('bullets_title'); ?></h4>
                    <?php the_field('bullets_text'); ?>
                </div>
            </div>
        </section>
        <section class="keyBenefits">
            <div class="container">
                <h3 class='underlineTitle'>{{Technical Features}}</h3>
                <p class="pageSubtitle">
                    <?php the_field('technical_features_intro_text'); ?>
                </p>
                <div class="keyBenefitsBoxes flexslider">
                    <ul class="slides"> 
                        <?php if( have_rows('technical_features_boxes') ): 
                            $speed = 0.1;
                            ?>
                            <?php while( have_rows('technical_features_boxes') ): the_row(); ?>
                                <li>
                                    <div class="slideWrapper" data-wow-delay="<?php echo $speed; ?>s">
                                        <h4><?php the_sub_field('technical_features_title'); ?></h4>
                                        <p><?php the_sub_field('technical_features_text'); ?></p>
                                    </div>
                                </li>
                            <?php 
                            $speed += 0.1;
                            endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php if( get_field('case_studies') ): ?>
            <section class="caseStudiesShowcase">
                <h3 class='underlineTitle'>Learn how <?php the_title(); ?> helps grow {{real results}}</h3>
                <div class="container">
                    <?php 
                        $caseStudies = get_field('case_studies');
                        foreach($caseStudies as $case){
                            $caseId = $case->ID;
                            $caseThumb = get_the_post_thumbnail_url($caseId,'full');
                            $casePartnerLogo = get_field('partner_logo', $caseId );
                            $caseTitle = $case->post_title;
                            $caseContent = get_the_excerpt($caseId);
                            $caseLink = $case->guid;
                            
                            $post_type = get_post_type($caseId);   
                            $taxonomies = get_object_taxonomies($post_type);   
                            $taxonomy_names = wp_get_object_terms($caseId, $taxonomies,  array("fields" => "names")); 

                            ?>

                            <a href="<?php echo $caseLink; ?>" class="wow fadeInUp">
                                <div class="caseStudiesShowcaseArticle">
                                    <div class="caseStudiesShowcaseArticleImages">
                                        <div class="caseStudiesShowcaseArticleThumbnail" style="background-image: url(<?php echo $caseThumb; ?>);">
                                            <div class="content"></div>
                                        </div>
                                        <div class="caseStudiesShowcaseArticleImageLogo">
                                            <img src="<?php echo $casePartnerLogo; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="caseStudiesShowcaseArticleCopy">
                                        <h2><?php echo $caseTitle; ?></h2>
                                        <h3>
                                            <?php
                                                foreach($taxonomy_names as $category) { 
                                                    echo $category . ' '; 
                                                } 
                                            ?>
                                        </h3>
                                        <div class="caseStudiesShowcaseArticleIntro">
                                            <?php echo $caseContent; ?>
                                        </div>
                                        <p class="readmore">
                                            Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        <?php }
                    ?>
                </div>
            </section>
        <?php endif; ?>
        <section class="servicesFaq">
            <h3 class='underlineTitle'>Frequently asked questions {{about <?php the_title(); ?>}}</h3>
            <div class="faqsWrapper">

                <?php if( have_rows('solution_faqs') ): 
                    $speed = 0.1;
                    ?>
                    <?php while( have_rows('solution_faqs') ): the_row(); ?>
                        <div class="faq">
                            <div class="container">
                                <div class="faqQuestion">
                                    <?php the_sub_field('faq_question'); ?>
                                </div>
                                <div class="faqAnswer">
                                    <?php the_sub_field('faq_answer'); ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                    $speed += 0.1;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <section class="homeCta">
			<div class="homeCtaText">
				<div class="homeCtaTextWrapper wow fadeInLeft">
					<?php if(get_field('cta_message')){ ?>
                        <h3 class='underlineTitle'><?php the_field('cta_message'); ?></h3>
                    <?php } 
                        else{?>
                            <h3 class='underlineTitle'>{{Ready to maximize the performance}} of your agricultural asset?</h3>
                    <?php } ?>
				</div>
				<div class="homeCtaBtnWrapper">
					<a href="<?php echo site_url('/request-a-demo/'); ?>" class="btn btn-default btn-big">Request a demo</a>	
				</div>
			</div>
			<div class="homeCtaImage wow fadeInRight">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/home-cta-image.png" alt="">
			</div>
		</section>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>

