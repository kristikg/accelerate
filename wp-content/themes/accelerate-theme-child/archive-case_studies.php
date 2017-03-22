<?php
/**
 * The template for displaying archive page of case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

//just a comment to repush this to staging site

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); 
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$size = "full" ?>

		<article class="case-study clearfix">
			<aside class="case-study-text">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h5><?php echo $services; ?></h5>
				<?php the_excerpt(); ?>
				<p><a class="view-project" href="<?php the_permalink(); ?>">View Project<span>&rsaquo;</span></a></p>
			</aside>

			<div class="case-study-images">
				<a href="<?php echo $link; ?>">
				<?php if('image_1') { 
					echo wp_get_attachment_image ($image_1, $size);
				} ?>
				</a>
			</div>

		</article>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>