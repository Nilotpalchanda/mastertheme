<?php 
// Template name: About page
?>

<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) :the_post(); ?>
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
									<h2></h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-work">
			<div class="row">
				<div class="col-md-12 fh5co-project-detail">

					<?php the_content(); ?>

				</div>
				
				
			</div>
		</div>

	</div><!-- end container-wrap -->
<?php endwhile;endif; ?>

<?php get_footer(); ?>
