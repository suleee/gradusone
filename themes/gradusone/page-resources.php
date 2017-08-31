<?php
/**
* The template for displaying involved page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area ">
<main id="main" class="site-main" role="main">


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-header">

               <div class="herobanner">
                   <img class="herobanner" src ="<?php echo esc_attr( CFS()->get( 'herobanner' ) ); ?>"/>
                <div class="banner-text">
                <h2 class=''><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h2>
                <div class="title-underline"></div>
                <div class="event-des"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></div>
                </div>
                </div>


        <section class="">
            <div class="">
        <h2 class=""><?php echo esc_html( CFS()->get( 'team_member' ) ); ?></h2>
        <div class="title-underline"></div>
         <?php
        // global $post;
        $args = array(
        'post_type' => 'resource',
        'order' => 'ASC',
        'posts_per_page' => 20);
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  		<!--grab from content-sigle.php-->

                <div class="team-members">
                <div class="thumbnail"><?php the_post_thumbnail( ); ?></div>
                <div class="team-content">
                <!--<h2><?php the_title( ); ?></h2>-->
                <p><?php the_content( ); ?></p>
                </div>
				</div>

				 <?php endforeach; wp_reset_postdata(); ?>
                 </div>
                 </section>





			    </div>
                </div>
                </div>


            </div>
        </article>



</main><!-- #main -->

</div><!-- #primary -->



<?php get_footer(); ?>
