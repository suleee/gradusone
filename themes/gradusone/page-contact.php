
<?php
/**
 *
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div class="herobanner">
                <img class="" src ="<?php echo esc_attr( CFS()->get( 'herobanner' ) ); ?>"/>
                <div class="banner-text">
                <h1 class="banner-title"><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h1>
                <div class="title-underline"></div>
                <p class="banner-p"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></p>
                </div>
                </div>

  <?php while ( have_posts() ) : the_post(); ?>

				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
	            </div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>