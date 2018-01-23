<?php 
// Template name: Work Page
?>
<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1><?php the_title(); ?></h1>
									<h2><?php the_content(); ?></h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>	
<?php endwhile;endif; ?>

		<div id="fh5co-work">
			<div class="row">
				<?php
		           $args = array(
		            'post_type' => 'work', // it's default, you can skip it
		            'posts_per_page' => '6',
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
	</div><!-- END container-wrap -->





<?php get_footer(); ?>