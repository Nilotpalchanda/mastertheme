<?php
// Template name: Blog Page
?>
<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) :the_post(); ?> 
	<div class="container-wrap">
<aside id="fh5co-hero">
					<div class="flexslider">
						<ul class="slides">
					   	<li style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluids">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
						   				<div class="slider-text-inner text-center">
						   					<h1><?php the_title();?></h1>
												<h2><?php the_content(); ?></h2>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>		   	
					  	</ul>
				  	</div>
				</aside>
<?php endwhile;endif; ?>
		<div id="fh5co-blog">
			<div class="row">
<?php query_posts('showposts=6'); if(have_posts()) : while(have_posts()) :the_post(); ?> 

				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
						<div class="blog-text">
							<span class="posted_on"><?php the_time('F jS, Y'); ?></span>
							<h3><a href="#"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?></p>
							<ul class="stuff">
								<li><i class="icon-heart3"></i>249</li>
								<li><i class="icon-eye2"></i>1,308</li>
								<li><a href="<?php the_permalink(); ?>">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
<?php endwhile;?>
<?php endif;?>



			</div>

		</div>


	</div>
<!-- END container-wrap -->
<?php get_footer(); ?>