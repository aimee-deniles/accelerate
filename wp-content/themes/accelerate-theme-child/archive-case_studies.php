<?php
/**
 * The template for displaying case study archive page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *  @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">


			<?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $img_1 = get_field("img_1");
        $size = "large"
         ?>

  <article class="case-study">
          <aside class="case-study-sidebar">
            <h2><?php the_title();?></h2>
            <figure class="case-study-sidebar-services">
              <p><?php echo $services;?><p>
            </figure>  

            <?php the_excerpt(); ?>

              <p><strong><a href="<?php echo $link;?>">View Project<span>&rsaquo;</span></a></strong></p>
          </aside>



            <?php if($img_1) { ?>
                <?php echo wp_get_attachment_image($img_1, $size); } ?>


        </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
