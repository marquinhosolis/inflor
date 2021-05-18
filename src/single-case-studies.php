<?php get_header(); ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main class="singleCaseStudy">
        <div class="container">
            <a href="<?php echo site_url('/case-studies/')?>" class="btn btn-default"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all case studies</a> 
            <article>
                <div class="singleCaseStudyArticleImages wow fadeInLeft">
                    <div class="singleCaseStudyArticleThumbnail" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                    </div>
                    <div class="singleCaseStudyArticleImageLogo">
                        <img src="<?php the_field('partner_logo');?>" alt="">
                    </div>
                </div>
                <div class="singleCaseStudyArticleText">
                    <h1 class="wow fadeInUpBig"><?php the_title(); ?></h1>
                    <h2 class="wow fadeInUpBig">
                        <?php
                            $post_type = get_post_type(get_the_ID());   
                            $taxonomies = get_object_taxonomies($post_type);   
                            $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
                            
                            foreach($taxonomy_names as $category) { 
                                echo $category . ' '; 
                            } 
                        ?>
                    </h2>
                    <div class="wow fadeInUp">
                        <?php the_content(); ?>
                    </div>

                </div>
                <div class="singlePostBodyFooterNextPosts wow fadeInRight">
                    <div class="previous_post_link">
                        <?php previous_post_link( '%link','<i class="fa fa-angle-left" aria-hidden="true"></i> Previous case study' ) ?>
                    </div>
                    <div class="next_post_link">
                        <?php next_post_link( '%link','Next case study <i class="fa fa-angle-right" aria-hidden="true"></i>' ) ?>
                    </div>
                </div>
            </article>
            
        </div>
        <div class="clear"></div>
        <section class="homeCta">
			<div class="homeCtaText wow fadeInLeft">
				<div class="homeCtaTextWrapper">
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
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>

