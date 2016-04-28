
<?php
/**
 * The template for displaying case studies
 *

 * @package WordPress
 * @subpackage Accelerate_theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>
<?php $size = "full"; ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
				<?php while ( have_posts() ) : the_post();
					$services = get_field('services');
					$client = get_field('client');
					$link = get_field('site_link');
					$img_1 = get_field('img_1');
					$img_2 = get_field('img_2');
					$img_3 = get_field('img_3');?>

			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title();?></h2>
					<h5><?php echo $services;?></h5>
					<h6><?php echo $client;?></h6>
					<?php the_content(); ?>

						<p><strong><a href="<?php echo $link;?>">Site Link</a></strong></p>
				</aside>

				<div class="case-study-images">
					<?php if($img_1) { ?>
							<?php echo wp_get_attachment_image($img_1, $size); ?>
					<?php } ?>

					<?php if($img_2) { ?>
							<?php echo wp_get_attachment_image($img_2, $size); ?>
					<?php } ?>

					<?php if($img_3) { ?>
							<?php echo wp_get_attachment_image($img_3, $size); ?>
					<?php } ?>
				</div>
    	</article>
		<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>
