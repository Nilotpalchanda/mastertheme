<?php
// Template name: Contact Page
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
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Contact us</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
				<?php dynamic_sidebar('sidebar-6'); ?>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<?php echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	
<?php endwhile;endif; ?>




<?php get_footer(); ?>