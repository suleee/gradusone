<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="herobanner">
			<div class="banner-text">
			<h1 class="banner-title"><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h1>
			<div class="title-underline"></div>
			<p class="banner-p"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></p>
			</div>
			</div>

	<section class="posts">
		<div class="title">
			<h2>What's Happening at GradusOne</h2>
			<div class="title-underline underline01"></div>
		</div>


		<div class="first-section">
        <div class="first-section-post">
        <h3><?php echo esc_html( CFS()->get( 'adult_program_title' ) ); ?></h3>
        <p><?php echo CFS()->get( 'adult_program' ) ; ?></p>
            <div class="view-more">
            <?php echo CFS()->get('btn01'); ?></div>
        </div>

        <div class="first-section-post">
            <h3><?php echo esc_html( CFS()->get( 'youth_program_title' ) ); ?></h3>
             <p><?php echo CFS()->get( 'youth_program' ) ; ?></p>
             <div class="view-more">
            <?php echo CFS()->get('btn02'); ?></div>
        </div>
        <div class="first-section-post">
            <h3><?php echo esc_html( CFS()->get( 'event_title' ) ); ?></h3>
             <p><?php echo CFS()->get( 'event' ) ; ?></p>
             <div class="view-more">
            <?php echo CFS()->get('btn03'); ?></div>
        </div>
		</div>
		</section>



<section class="section03">
    <div class="posts">
	<?php
        // global $post;
        $args = array(
        'post_type' => 'programs',
        'order' => 'ASC',
        'posts_per_page' => 1);
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  		<!--grab from content-sigle.php-->

		<div class="title cover">
		<h2><?php echo esc_html( CFS()->get( 'second_title' ) ); ?></h2>
                    <div class="title-underline underline02 "></div>
					</div>
                    <div class="icon-main-container">
                    <div class="icon-group1">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon01' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon01_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon01_p' ) ); ?></p>
                        </div>
                     </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon02' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon02_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon02_p' ) ); ?></p>
                        </div>
                    </div>

                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon03' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon03_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon03_p' ) ); ?></p>
                        </div>
                    </div>
                    </div>
                    <div class="icon-group2">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon04' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon04_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon04_p' ) ); ?></p>
                        </div>
                    </div>

                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon05' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon05_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon05_p' ) ); ?></p>
                        </div>
                    </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon06' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h3 class=""><?php echo esc_html( CFS()->get( 'icon06_title' ) ); ?></h3>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon06_p' ) ); ?></p>
                        </div>
                    </div>
                    </div>
                    </div>
        <?php endforeach; wp_reset_postdata(); ?>
</div></section>

<section class="testimonial">
<?php echo do_shortcode( '[rt-testimonial id="319" title="mian-page"]' ) ?>
</section>







		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>





