<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<main class="homePage">
		<section class="cover coverHome" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cover-home-bg-2.png);">
			<div class="container">
				<h1 class='underlineTitle wow fadeInUpBig'><?php the_field('cover_title'); ?></h1>
				<h2 class="wow fadeInUp"><?php the_field('cover_subtitle'); ?></h2>
				<a href="<?php echo site_url('/request-a-demo/'); ?>" class="btn btn-default btn-big">Request a demo</a>
			</div>
			<div class="coverHomeMask">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-cover-mask.png" alt="">
			</div>
		</section> 
		<section class="usps">
			<div class="container">
				<?php if( have_rows('usps_boxes') ): 
					$speed = 0.1;
					?>
					<?php while( have_rows('usps_boxes') ): the_row(); ?>
						<div class="uspsUnique wow fadeInLeft" data-wow-delay="<?php echo $speed; ?>s">
							<div class="uspsUniqueIcon">
								<img src="<?php the_sub_field('usps_icon'); ?>" alt="">
							</div>
							<div class="uspsUniqueTitle">
								<?php the_sub_field('usps_title'); ?>
							</div>
							<div class="uspsUniqueCopy">
								<?php the_sub_field('usps_copy'); ?>
							</div>
						</div>
					<?php 
					$speed += 0.1;
					endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<section class="solutions">
			<div class="container">
				<div class="solutionsTitle wow fadeInUp">
					<h3 class='underlineTitle'>{{Our solutions}}</h3>
				</div>
			</div>
			<div class="solutionsBoxes" style="background-image: url(<?php the_field('solutions_background_image', 'cpt_solutions'); ?>)">
				<div class="container">
					<?php if( have_rows('solutions_boxes') ): 
					$speed = 0.1;
					?>
					<?php while( have_rows('solutions_boxes') ): the_row(); ?>
						<?php 
							$solution = get_sub_field('solution_select');
							//print_r($solution);
						?>
						<div class="solutionBox wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
                            <div class="solutionBoxTitle">
                                <?php echo $solution->post_title; ?>
                            </div>
                            <div class="solutionBoxText">
                                <?php the_sub_field('solution_copy'); ?>
                            </div>
                            <a href="<?php echo $solution->guid; ?>" class="btn btn-transparent">Learn more</a>
                        </div>
					<?php 
					$speed += 0.1;
					endwhile; ?>
				<?php endif; ?>
					
					
                    <?php
					/*
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
						wp_reset_postdata(); */
					?>
				</div>
			</div>
			<div class="solustionsBtn">
				<a href="<?php echo site_url('/solutions/'); ?>" class="btn btn-big btn-default">View all solutions</a>
			</div>
		</section>
		<section class="whyInflor whyInflor--mobile wow fadeInUp">
			<div class="whyInflorTitle">
				<div class="container">
					<div class="solutionsTitle wow fadeInUp">
						<h3 class='underlineTitle'>{{Why INFLOR}}</h3>
					</div>
				</div>
			</div>
			<div class="whyInflorImages">
				<div class="whyInflorImageOne" style="background-image: url(<?php the_field('why_inflor_image_1'); ?>)">
					<div class="content"></div>
				</div>
				<div class="whyInflorImageTwo" style="background-image: url(<?php the_field('why_inflor_image_2'); ?>)">
					<div class="content"></div>
				</div>
			</div>
			<div class="whyInflorCopy">
				<?php the_field('why_inflor_box_copy'); ?>
			</div>
			<div class="whyInflorCopyButton">
				<a href="<?php echo site_url('/why-inflor/');?>" class="btn btn-big btn-default">Learn more</a>
			</div>
		</section>
		<section class="whyInflor whyInflor--desktop">
			<div class="whyInflorCopyWrapper">
				<div class="whyInflorTitle wow fadeInUpBig">
					<div class="solutionsTitle wow fadeInUp">
						<h3 class='underlineTitle'>{{Why INFLOR}}</h3>
					</div>
				</div>
				<div class="whyInflorCopy wow fadeInUp">
					<?php the_field('why_inflor_box_copy'); ?>
				</div>
				<div class="whyInflorCopyButton">
					<a href="<?php echo site_url('/why-inflor/');?>" class="btn btn-big btn-default">Learn more</a>
				</div>
			</div>
			<div class="whyInflorImages">
				<div class="whyInflorImageOne wow fadeInUp" data-wow-delay="0.1s" style="background-image: url(<?php the_field('why_inflor_image_1'); ?>)">
					<div class="content"></div>
				</div>
				<div class="whyInflorImageTwo wow fadeInUp" data-wow-delay="0.2s" style="background-image: url(<?php the_field('why_inflor_image_2'); ?>)">
					<div class="content"></div>
				</div>
			</div>
		</section>
		<section class="caseStudiesHome">
			<div class="caseStudiesHomeTitle">
				<div class="container">
					<h3>Together, we’re growing
						<span class="underline">real results</span>
					</h3>
				</div>
			</div>
			<div class="caseStudiesHomeBoxes">
				<div class="container">
					<?php
						$args = array(
							'post_type' => array( 'case-studies' ),
							'posts_per_page' => 3,
							'meta_query'	=> array(
								'relation'		=> 'AND',
								array(
									'key'		=> 'fixed_post',
									'value' => 'yes',
									'compare'	=> '='
								)
							)
						);
						
						$query = new WP_Query( $args );
						
						if ( $query->have_posts() ) {
							$speed = 0.1;
							while ( $query->have_posts() ) {
								$query->the_post();?>
								<?php 
									$count = $query->found_posts;
								?>
								<a href="<?php the_permalink(); ?>" class="caseStudyHome wow fadeInLeft" data-wow-delay="<?php echo $speed; ?>s">
									<div class="caseStudyHomeImage" style="background-image: url(<?php the_post_thumbnail_url();?>);">
										<div class="content"></div>
										<div class="caseStudyHomeLogo">
											<img src="<?php the_field('partner_logo');?>" alt="">
										</div>
									</div>
									<div class="caseStudyHomeCopy">
										<?php the_title(); ?><br>									
										<?php
											$post_type = get_post_type(get_the_ID());   
											$taxonomies = get_object_taxonomies($post_type);   
											$taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
											
											foreach($taxonomy_names as $category) { 
												echo $category . ' '; 
											} 
										?>
										<br><br>
										<?php the_excerpt(); ?>...  Continue reading <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>

									</div>
								</a>
							<?php 
							$speed += 0.1;
							}
						} 
						wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="caseStudiesBtn">
				<div class="container">
					<a href="<?php echo site_url('/case-studies/');?>" class="btn btn-big btn-default">View all case studies</a>
				</div>
			</div>
		</section>
		<section class="transformBusiness">
			<div class="transformBusinessTitle">
				<div class="container">
					<h3 class='underlineTitle'>Transform {{your business}}</h3>
				</div>
			</div>	
			<div class="transformBusinessBoxes transformBusinessBoxesHome">
				<div class="container">
					<?php if( have_rows('tranform_business_boxes') ): 
						$speed = 0.1;
						?>
						<?php while( have_rows('tranform_business_boxes') ): the_row(); ?>
							<div class="transformBusinessBox wow fadeInRight" data-wow-delay="<?php echo $speed; ?>s">
								<div class="transformBusinessBoxIcon">
									<img src="<?php the_sub_field('transform_business_icon'); ?>" alt="">
								</div>
								<div class="transformBusinessBoxTitle">
									<?php the_sub_field('transform_business_title'); ?>
								</div>
								<div class="transformBusinessBoxCopy">
									<?php the_sub_field('transform_business_copy'); ?> 
								</div>
							</div>
						<?php 
						$speed += 0.1;
						endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="blogShowcase blogShowcaseHome">
			<div class="blogShowcaseTitle">
				<div class="container">
					<h3 class='underlineTitle'>{{INFLOR blog}}</h3>
				</div>
			</div>
			
			<div class="blogShowcase">
				<div class="blogShowcaseWrapper">
					<div class="container">
						<?php
							$args = array(
								'post_type' => array( 'post' ),
								'posts_per_page' => 4
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
						<article class="blogShowcaseArticle">
						<div>
							<a href="<?php echo site_url('/news/'); ?>">
								<strong> Visit the blog <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></strong><br>
								for news, insights, and more to help you nurture your operations.
							</a>
						</div>
					</article>
					</div>
				</div>
			</div>
		</section>
		<section class="resourceHome">
			<div class="resourceHomeImage wow fadeInLeft">
				<img src="<?php the_field('free_resource_home_image'); ?>" alt="">
			</div>
			<div class="resourceHomeText wow fadeInRight">
				<div class="resourceHomeTextWrapper">
					<div id="freeResourceHomeLink" style="display: none;">
						<?php the_field('free_resource_home_file'); ?>
					</div>
					<div class="resourceHomeTextIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/download-resource-icon.png" alt="">
					</div>
					<div class="resourceHomeTextTitle">
						<p>Download the resource</p>
						<h3 class='underlineTitle'><?php the_field('free_resource_home_title'); ?></h3>
					</div>
					<div class="resourceHomeTextCopy">
						<?php the_field('free_resource_home_copy'); ?>
					</div>
					<div class="resourceHomeTextForm">
						<?php echo do_shortcode('[formidable id=3]');?>
					</div>
				</div>
			</div>
		</section>
		<section class="clientsHome">
			<div class="container wow fadeInUp">
				<div class="clientsHomeTitle">
				<div class="container">
					<h3>
						Cultivating success
						<span class="underline">for our clients</span>
					</h3>
				</div>
			</div>
			<div class="clientsHomeLogos clientsHomeLogosBlock">
				<ul class="slides">
					<?php if( have_rows('clients_logos') ): ?>
						<?php while( have_rows('clients_logos') ): the_row(); ?>
							<div class="uspsUnique">
								<li>
									<div class="clientsHomeLogoWrapper">
										<img src="<?php the_sub_field('client_logo'); ?>" alt="">
									</div>
								</li>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>					
				</ul>
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