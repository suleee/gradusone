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
                <h1 class=''><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></h1>
                <div class="title-underline"></div>
                <p class="banner-p"><?php echo esc_html( CFS()->get( 'banner_subtext' ) ); ?></p>
                </div>
                </div>

<div class="p_under_the_herobanner"><?php echo CFS()->get( 'p_under_the_herobanner' ); ?></div>

<section class="volunteer-bg">
<div class="volunteer-container">
<div class="volunteer-left">
<p><?php echo CFS()->get( 'volunteer_img_title' ); ?></p>
<span><?php echo CFS()->get( 'volunteer_img_p' ); ?></span>
<div class="volunteer_img"><img class="" src ="<?php echo esc_attr( CFS()->get( 'volunteer_img' ) ); ?>"/></div>
</div>
<div class="volunteer-right">
<h2><?php echo CFS()->get( 'volunteer_title' ); ?></h2>
<div class="title-underline"></div>
<div class="sub-title"><?php echo CFS()->get( 'volunteer_subtitle01' ); ?></div>
<p class=""><?php echo CFS()->get( 'volunteer_p' ); ?></p>
<div class="sub-title"><?php echo CFS()->get( 'volunteer_subtitle02' ); ?></div>
<p class=""><?php echo CFS()->get( 'general_volunteer' ); ?></p>
<p class=""><?php echo CFS()->get( 'general_volunteer_p' ); ?></p>
<p class=""><?php echo CFS()->get( 'app_process' ); ?></p>
</div>
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
