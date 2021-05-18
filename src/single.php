<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>
    <main class="singlePost">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="blogShowcaseTitle">
                    <h3 class='underlineTitle'>{{INFLOR blog}}</h3>
                </div>
            </div>
            <div class="container">
                <article class="singlePostBody">
                    <div class="singlePostBodyImage wow fadeInLeft" style='background-image: url(<?php the_post_thumbnail_url(); ?>)'>
                        <div class="content">
                            <h1 class="wow fadeInUpBig"><?php the_title(); ?></h1>
                        </div>
                        <a href="<?php echo site_url('/news/')?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all blogs</a> 
                    </div>
                    <div class="singlePostBodyMain">
                        <div class="singlePostBodyContent">
                            <div class="singlePostBodyMainDate wow fadeInUp">
                                Posted on <?php the_date();  ?> |
                                <?php
                                    foreach((get_the_category()) as $category) { 
                                        echo $category->cat_name . ' '; 
                                    } 
                                ?> 
                            </div>
                            <div class="wow fadeInUp">
                                <?php the_content(); ?> 
                            </div>
                        </div>
                    </div>
                    <div class="singlePostBodyFooter">
                        <div class="singlePostBodyFooterShare wow fadeInLeft">
                            Share this blog: <br>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=minha_url" target="_blank">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=minha_url" target="_blank">
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=minha_url&title=&summary=&source=" target="_blank">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </a>
                            <a href="mailto:?body=minha_url" target="_blank">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="singlePostBodyFooterNextPosts wow fadeInRight">
                            <div class="previous_post_link">
                                <?php previous_post_link( '%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Blog' ) ?>
                            </div>
                            <div class="next_post_link">
                                <?php next_post_link( '%link','Next Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ) ?>
                            </div>
                        </div>
                    </div>
                </article>
                <?php 
                    if( get_field('related_posts') ): 
                        $relatedPosts = get_field('related_posts'); ?>
                        <aside>
                            <?php 
                                foreach ($relatedPosts as $idPost) { ?>
                                    <article class="blogShowcaseArticle">
                                        <a href="<?php echo get_the_permalink($idPost); ?>">
                                            <div class="blogShowcaseArticleImage" style="background-image: url(<?php echo get_the_post_thumbnail_url($idPost); ?>);">
                                                <div class="content">
                                                    <h4><?php echo get_the_title($idPost); ?></h4>
                                                </div>
                                            </div>
                                            <div class="blogShowcaseArticleIntro">
                                                <?php echo get_the_excerpt($idPost); ?>
                                                <div class="blogShowcaseArticleIntroDate">
                                                    Posted on <?php  echo get_the_date('F j, Y', $idPost);  ?> | 
                                                    <?php
                                                        foreach((get_the_category($idPost)) as $category) { 
                                                            echo $category->cat_name . ' '; 
                                                        } 
                                                    ?>
                                                </div>
                                                <strong>
                                                    Read more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                </strong>
                                            </div>
                                        </a>
                                    </article>
                                <?php }
                            ?>
                        </aside>
                    <?php endif; 
                ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
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
<?php get_footer(); ?>


<!-- Forest Management -->

