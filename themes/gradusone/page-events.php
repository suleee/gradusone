<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="herobanner">
                   <img class="herobanner" src ="<?php echo esc_attr( CFS()->get( 'herobanner' ) ); ?>"/>
                <div class="banner-text">
                <h1 class="banner-title"><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h1>
                <div class="title-underline"></div>
                <p class="banner-p"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></p>
                </div>
            </div>

        <div class="content-container ">

         <?php

        $args = array(
        'post_type' => 'events',
        'order' => 'ASC',
        'posts_per_page' => 4);
        $product_posts = get_posts( $args );
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>


					<div class="posts">
                    <div class="event-content">
                    <div class="event-title-container">
                    <h3><?php echo CFS()->get( 'event_date'); ?></h3>
                    <div class="event-title">
                    <h2><?php the_title( ); ?></h2>
                    <p class="date"><?php echo CFS()->get( 'event_calendar'); ?></p>
                    <p class="time"><?php echo CFS()->get( 'event_time'); ?></p>
                    </div>
                     </div>

                    <div class="event-des"> <?php the_content(); ?> </div>
					<div class="read-more"><?php echo CFS()->get('link'); ?></div>
                    </div>

				    </div>
				 <?php endforeach; wp_reset_postdata(); ?>
                <!-- <div class="viewmore-btn"><a href="https://www.picatic.com/u/128038/events"> view more events </a></div> -->
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
