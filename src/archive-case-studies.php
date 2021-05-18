<?php
/*
Template Name: Case Studies Page
*/
?>
<?php
    $limit = 3;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
        $posts = '-1';
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        $posts = '-1';
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>
<?php get_header(); ?>
    <main class="blogPage caseStudiesPage">
        <section class="blogPageTitle caseStudiesBlog">
            <div class="container">
                <h1 class='underlineTitle wow fadeInUpBig'>
                    {{Together}}, we’re growing real results.
                </h1>
                <div class="blogPageForms wow fadeInUp">
                    <div class="blogShowcaseTitle ">
                        <h2 class='underlineTitle'>
                            Explore our selection of case studies to learn how some of the world’s leading companies cultivate success with INFLOR.
                        </h2>

                    </div>
                    
                    <form action="" method="get">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    
                    <div class="selectWrapper">
                        <form action="" method="get">
                            <select id="cat" name="cat">
                                <option value="0" selected="selected">Filter by Category</option>
                                
                                <?php
                                    $tax_terms = get_terms('case-studies', array('hide_empty' => '0'));   
                                    print_r($tax_terms);   
                                    foreach ($tax_terms as $tax){ ?>
                                        <option value="<?php echo $tax->slug; ?>"><?php echo $tax->name; ?></option>; 
                                    <?php }
                                ?>
                            </select> 
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="caseStudiesShowcase">
            <div class="container">
                <?php
                    if($cat){
                        $args = array(
                            'post_type' => array( 'case-studies' ),
                            'posts_per_page' => '-1',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'case-studies',
                                    'field' => 'slug',
                                    'terms' => $cat,
                                )
                            )
                        );
                    }elseif($search){
                        $args = array(
                            'post_type' => array( 'case-studies' ),
                            'posts_per_page' => '-1',
                            's'              => $search,
                        );
                    }else{
                        $args = array(
                            'post_type' => array( 'case-studies' ),
                            'posts_per_page' => $posts,
                        );
                    }

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        $speed = 0.1;
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="wow fadeInUp" data-wow-delay="<?php echo $speed; ?>s">
                                <div class="caseStudiesShowcaseArticle">
                                    <div class="caseStudiesShowcaseArticleImages">
                                        <div class="caseStudiesShowcaseArticleThumbnail" style="background-image: url(<?php the_post_thumbnail_url();?>);">
                                            <div class="content"></div>
                                        </div>
                                        <div class="caseStudiesShowcaseArticleImageLogo">
                                            <img src="<?php the_field('partner_logo');?>" alt="">
                                        </div>
                                    </div>
                                    <div class="caseStudiesShowcaseArticleCopy">
                                        <h2><?php the_title(); ?></h2>
                                        <h3>
                                            <?php
                                                $post_type = get_post_type(get_the_ID());   
                                                $taxonomies = get_object_taxonomies($post_type);   
                                                $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
                                                
                                                foreach($taxonomy_names as $category) { 
                                                    echo $category . ' '; 
                                                } 
                                            ?>
                                        </h3>
                                        <div class="caseStudiesShowcaseArticleIntro">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <p class="readmore">
                                            Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                
                            </a>
                        <?php 
                        $speed += 0.1;
                        }
                    } 
                    wp_reset_postdata();
                ?>
            </div>
            <?php 
                    if($query->found_posts > $limit && $posts != '-1'){ ?>
                        <div class="loadMore">
                            <a href="<?php echo site_url('/case-studies/'); ?>?all=1" class="">Load more <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    <?php }
                ?>
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