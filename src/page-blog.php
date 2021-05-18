<?php
/*
Template Name: Blog Page
*/
?>
<?php
    $limit = 5;
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
    <main class="blogPage">
        <section class="blogPageTitle">
            <div class="container">
                <div class="blogPageForms">
                    <div class="blogShowcaseTitle">
                        <a href="<?php echo site_url('/news/'); ?>">
                            <h3 class='underlineTitle'>{{INFLOR blog}}</h3>
                        </a>
                    </div>
                    
                    <form action="" method="get">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    
                    <div class="selectWrapper">
                        <form action="" method="get">
                            <?php
                                wp_dropdown_categories( array(
                                    'show_option_all'    => 'Filter by Category',
                                    'orderby'            => 'name', 
                                    'hierarchical'       => 1, 
                                    'depth'              => 1,
                                ) );
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogShowcase">
            <div class="blogShowcaseWrapper">
                <div class="container">
                    <?php
                        $args = array(
                            'post_type' => array( 'post' ),
                            'posts_per_page' => $posts,
                            'cat'            => $cat,
                            's'              => $search
                        );

                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
								$speed = 0.1;
                            while ( $query->have_posts() ) {
                                $query->the_post();?>
                                <?php 
                                    $count = $query->found_posts;
                                ?>
                                <article class="blogShowcaseArticle wow fadeInUp" data-wow-delay="<?php echo $speed; ?>s">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="blogShowcaseArticleImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                            <div class="content">
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                        </div>
                                        <div class="blogShowcaseArticleIntro">
                                            <?php the_excerpt(); ?>
                                            <div class="blogShowcaseArticleIntroDate">
                                                Posted on <?php the_date(); ?> | 
                                                <?php
                                                    foreach((get_the_category()) as $category) { 
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
                            <a href="<?php the_permalink(); ?>?all=1" class="">Load more blogs <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    <?php }
                ?>
            </div>
        </section>
        
    </main>
	
<?php get_footer(); ?>
