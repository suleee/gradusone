<?php
/**
* The template for displaying team page
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
                <h1 class=''><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h1>
                <div class="title-underline"></div>
                <p class="banner-p"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></p>
                </div>
                </div>
<div class="team-content-container">
                   <section class="first-content-container">
                    <div class="main-content">
                    <div class="first-content">
                    <h2 class=""><?php echo esc_html( CFS()->get( 'first_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <h3 class=""><?php echo esc_html( CFS()->get( 'first_subtitle' ) ); ?></h3>
                     <p class=""><?php echo CFS()->get( 'content' ); ?></p>
                    <div class=""><?php echo CFS()->get( 'video' ); ?></div>
                     <div class="infographic-container">
                     <p class="infographic-text"><?php echo CFS()->get( 'infog_text' ); ?></p>
                     <img class="infographic" src ="<?php echo esc_attr( CFS()->get( 'infographic' ) ); ?>"/>
                     </div>
                    </div>
                    </div>
                    </section>

        <section class="team-member-section">
            <div class="team-m-container">
        <h2 class=""><?php echo esc_html( CFS()->get( 'team_member' ) ); ?></h2>
        <div class="title-underline"></div>
         <?php
        // global $post;
        $args = array(
        'post_type' => 'team',
        'order' => 'ASC',
        'posts_per_page' => 4);
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  		<!--grab from content-sigle.php-->

                <div class="team-members">
                <div class="thumbnail"><?php the_post_thumbnail( ); ?></div>
                <div class="team-content">
                <h2><?php the_title( ); ?></h2>
                    <p><?php echo esc_html( CFS()->get( 'team_members')); ?></p>
                    <p class=""><?php echo CFS()->get( 'position'); ?></p>
                    <p class=""><?php echo CFS()->get( 'postition_description'); ?></p>
                    <div> <?php echo CFS()->get( 'sns'); ?></div>
                </div>
				</div>

				 <?php endforeach; wp_reset_postdata(); ?>
                 </div>
                 </section>


 <section class="mentor-section">
            <div class="mentor-m-container">
        <h2 class=""><?php echo esc_html( CFS()->get( 'mentor' ) ); ?></h2>
        <div class="title-underline"></div>
            <div class="icon-container">
            <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon01' ) ); ?>"/>
            <div class="icon-text-container">
            <h4 class=""><?php echo esc_html( CFS()->get( 'icon01_title' ) ); ?></h4>
            <p class=""><?php echo CFS()->get( 'icon01_p' ); ?></p>
            </div>
            </div>
            <div class="icon-container">
            <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon02' ) ); ?>"/>
            <div class="icon-text-container">
            <h4 class=""><?php echo esc_html( CFS()->get( 'icon02_title' ) ); ?></h4>
            <p class=""><?php echo CFS()->get( 'icon02_p' ); ?></p>
            </div>
            </div>
            <div class="icon-container">
            <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon03' ) ); ?>"/>
            <div class="icon-text-container">
            <h4 class=""><?php echo esc_html( CFS()->get( 'icon03_title' ) ); ?></h4>
            <p class=""><?php echo CFS()->get( 'icon03_p' ); ?></p>
            </div>
            </div>
</section>

<section class="mentor-section">
        <h2 class="">Advisors</h2>
        <div class="title-underline"></div>
        <div class="mentor-container">

        <?php
        // global $post;
        $args = array(
        'post_type' => 'mentor',
        'order' => 'ASC',
        'posts_per_page' => 8);
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  		<!--grab from content-sigle.php-->

                <div class="mentors">

                <div class="thumbnail"><?php the_post_thumbnail( ); ?></div>
                <div><?php the_content( ); ?></div>
				</div>

				 <?php endforeach; wp_reset_postdata(); ?>
                 </div>
                 </div>
                 </section>

</div>


	<!-- <?php

        $args = array(
        'post_type' => 'contactus',
        'order' => 'ASC',
        'posts_per_page' => 1);
        $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?> -->
  		<!--grab from content-sigle.php-->
<!--
		<section class="posts chat_us_container">
<div class="chat-us-img"><img class="" src ="<?php echo esc_attr( CFS()->get( 'chat_us_img' ) ); ?>"/></div>
<div class="chat_us_content">
<h2 class=""><?php echo esc_html( CFS()->get( 'chat_us_title') ); ?></h2>
<div class="title-underline underline02 "></div>
<p class="sub-title"><?php echo CFS()->get( 'chat_us_subtitle' ); ?></p>
<div class=""><?php echo CFS()->get( 'chat_us_p' ); ?></div>
<div class="book-session"><?php echo CFS()->get( 'book_session' ); ?></div>
<div class="sub-title"><?php echo CFS()->get( 'contact_us' ); ?></div>
</div>

        <?php endforeach; wp_reset_postdata(); ?>
</div>
</section> -->



			    </div>
                </div>
                </div>


            </div>
        </article>



</main><!-- #main -->

</div><!-- #primary -->



<?php get_footer(); ?>
