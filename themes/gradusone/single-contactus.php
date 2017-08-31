
<?php
/**
* The template for displaying all single posts (shop).
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area ">
<main id="main" class="site-main" role="main">


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-header">


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
</section>


            </div>
        </article>



</main><!-- #main -->

</div><!-- #primary -->



<?php get_footer(); ?>
