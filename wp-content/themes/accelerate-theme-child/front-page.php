<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>



<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
		<div class="site-content-featured-work">
				<h5>FEATURED WORK</h5>

					<ul class="homepage-featured-work">
						<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
							<?php while ( have_posts() ) : the_post();
								$img_1 = get_field("img_1");
								$size = "medium" ?>
						<li class="individual-featured-work">
							<figure>
								<?php echo wp_get_attachment_image($img_1, $size); ?>
							</figure>

							<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</ul>

		</div>
</section>

<br>
<br>

<section class="recent-posts">
	<div class="site-content">
			<div class="blog-post">
				<h4><strong>FROM THE BLOG</strong></h4>
				<?php query_posts('posts_per_page=1'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>"
class="read-more-link"><h4 color>Read More<span>&rsaquo;</span></h4></a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
	</div>
</section>
<?php get_footer(); ?>
