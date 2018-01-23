<?php get_header(); ?>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<?php echo do_shortcode('[masterslider id="1"]	'); ?>
		
		  	</div>
		</aside>
		<div id="fh5co-services">
			<div class="row">
           

				<?php 
				$args = array( 'post_type' => 'what', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<!-- <i class="icon-diamond"></i> -->
							<?php echo get_field('icon') ?>
						</span>
						<div class="desc">
							<h3><a href="#"><?php the_title(); ?></a></h3>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
             <?php endwhile; ?>
			</div>
		</div>

		<div id="fh5co-work" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Work</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<?php
		           $args = array(
		            'post_type' => 'work', // it's default, you can skip it
		            'posts_per_page' => '3',
		            'order_by' => 'date', // it's also default
		            'order' => 'DESC', // it's also default
		                'tax_query' => array(
		                    array(
		                        'taxonomy' => 'genre',
		                        'field' => 'slug',
		                        'terms' => array ('illustration', 'brading')
		                    )
		                )
		            );
		            $query = new WP_Query( $args );
                 ?>
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			      <div class="col-md-4 text-center animate-box">
					<a href="<?php the_permalink(); ?>" class="work" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<div class="desc">
							<h3><?php the_title();?></h3>
							<span>
								<?php
							        $categories = get_the_terms( $post->ID, 'genre' );
							         foreach( $categories as $category ) {
							            echo $category->name;
							           }
							      ?>

							</span>
						</div>
					</a>
				</div>


              <?php endwhile; endif; ?>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="3452" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Cups of Coffee</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="234" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Client</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="6542" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="8687" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Done Projects</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog" class="blog-flex">
			<?php query_posts('showposts=1'); if(have_posts()) : while(have_posts()) :the_post(); ?> 
			<div class="featured-blog" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head">Featured Posts</span>
						<h3><a href="#"><?php the_title(); ?></a></h3>
						<span><a href="<?php the_permalink(); ?>" class="read-button">Learn More</a></span>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
			<div class="blog-entry fh5co-light-grey">
				<div class="row animate-box">
					<div class="col-md-12">
						<h2>Latest Posts</h2>
					</div>
				</div>
				<div class="row">
					<?php query_posts('showposts=4'); if(have_posts()) : while(have_posts()) :the_post(); ?> 
							<div class="col-md-12 animate-box">
								<a href="#" class="blog-post">
									<span class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></span>
									<div class="desc">
										<h3><?php the_title(); ?></h3>
										<span class="cat">Collection</span>
									</div>
								</a>
							</div>
				    <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

<?php get_footer(); ?>