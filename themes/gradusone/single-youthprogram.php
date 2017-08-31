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
                <div class="">
                      <div class="herobanner topbanner">
                <?php if ( has_post_thumbnail() ) : ?>

                    <?php the_post_thumbnail( ); ?>
                    </div>


                   <section class="content-container">
                      <nav class="sidebar">
                        <ul>
                            <a href="#overview" class="overview"><li>Overview</li></a>
                            <a href="#uncover" class="menu-list"><li>What you will uncover</li></a>
                            <a href="#access"><li>What you will access</li></a>
                            <a href="#gain" class="gain"><li>What You Will Gain</li></a>
                            <a href="#itinerary"><li> Bootcamp Itinerary</li></a>
                            <a href="#motivators"><li>Motivators</li></a>
                            <a href="#price"><li>Pricing</li></a>
                            <a href="#location"><li>Location</li></a>
                            <a href="#faq"><li>FAQ's</li></a>
                        </ul>
                    </nav>

                    <section class="main-content">
                    <a name="overview"><section class="section01"></a>
                    <div class="first-content">
                    <h2 class="title"><?php echo esc_html( CFS()->get( 'overview' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <div class=""><?php echo CFS()->get( 'overview_content' ); ?></div>

                    <h5 class="application"><?php echo esc_html( CFS()->get( 'youth_application_text' ) ); ?></h5>
                    <div class="application app-btn"><?php echo CFS()->get( 'youth_application_btn'); ?><div>

                    </div>
                    </section>



                    <a name="uncover"><section class="section02"></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'second_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <div class="icon-main-container">
                    <div class="icon-group1">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon01' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon01_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon01_p' ) ); ?></p>
                        </div>
                     </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon02' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon02_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon02_p' ) ); ?></p>
                        </div>
                    </div>

                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon03' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon03_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon03_p' ) ); ?></p>
                        </div>
                    </div>
                    </div>
                    <div class="icon-group2">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon04' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon04_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon04_p' ) ); ?></p>
                        </div>
                    </div>

                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon05' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon05_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon05_p' ) ); ?></p>
                        </div>
                    </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon06' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon06_title' ) ); ?></h4>
                        <p class=""><?php echo esc_html( CFS()->get( 'icon06_p' ) ); ?></p>
                        </div>
                    </div>
                    </div>
                    </div>
                    </section>




                    <a name="access"> <section class="section03"></a>
                   <h2 class=""><?php echo esc_html( CFS()->get( 'third_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <div class="icon-main-container">
                    <div class="icon-group1">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon07' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon07_title' ) ); ?></h4>
                        <div class=""><?php echo esc_html( CFS()->get( 'icon07_p' ) ); ?></div>
                        </div>
                     </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon08' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon08_title' ) ); ?></h4>
                        <div class=""><?php echo esc_html( CFS()->get( 'icon08_p' ) ); ?></div>
                        </div>
                    </div>
                    </div>
                    <div class="icon-group2">
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon09' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon09_title' ) ); ?></h4>
                        <div class=""><?php echo esc_html( CFS()->get( 'icon09_p' ) ); ?></div>
                        </div>
                    </div>
                    <div class="icon-container">
                        <img class="icon" src ="<?php echo esc_attr( CFS()->get( 'icon10' ) ); ?>"/>
                        <div class="icon-text-container">
                        <h4 class=""><?php echo esc_html( CFS()->get( 'icon10_title' ) ); ?></h4>
                        <div class=""><?php echo esc_html( CFS()->get( 'icon10_p' ) ); ?></div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </section>





                    <a name="gain"><section class="gain"></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'youth_gain' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <div class=""><?php echo CFS()->get( 'youth_gain_content'); ?></div>
                    </section>


                    <a name="itinerary"><section class="itinerary"></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'bootcamp_itinerary' ) ); ?></h2>
                    <div class="title-underline"></div>
                <div class=""><?php echo CFS()->get( 'bootcamp_itinerary01_date' ); ?></div>
                <div class=""><?php echo CFS()->get( 'day01' ); ?></div>
                <div class=""><?php echo CFS()->get( 'bootcamp_itinerary02_date' ); ?></div>
                    <div class=""><?php echo CFS()->get( 'day02' ); ?></div>
                    </section>


                    <a name="motivators"><section class=""></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'motivators_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <h3 class=""><?php echo esc_html( CFS()->get( 'motivators_sub_title' ) ); ?></h3>

                    <div class="ins-container">
                     <?php
                    // global $post;
                    $args = array(
                    'post_type' => 'instructors',
                    'order' => 'DSC',
                    'posts_per_page' => 6);
                    $product_posts = get_posts( $args ); // returns an array of posts
                    ?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                    <div class="instructor">
                    <?php the_post_thumbnail( 'large' ); ?>
                    <?php the_content( '<p>', '</p>' ); ?>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </div>

                    <p class=""><?php echo CFS()->get( 'motivators_p'); ?></p>
                    </section>


                    <a name="price"><section class="price"></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'price_title' ) ); ?></h2>
                    <div class="title-underline"></div>

                    <div class="price-t"><?php echo CFS()->get( 'price_t' ); ?></div>
                    <div class="price-container">
                    <div class="price-fee youth-price-fee"><?php echo CFS()->get( 'price' ); ?></div>
                    <div class="price-content"><?php echo CFS()->get( 'price_content' ); ?></div>
                    </div>
                    <div class="price-p"><?php echo CFS()->get( 'price_p' ); ?></div>
                    </section>


                     <a name="location"><section class=""></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'location_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <h4 class=""><?php echo esc_html( CFS()->get( 'location_sub_title' ) ); ?></h4>
                    <img class="" src ="<?php echo esc_attr( CFS()->get( 'location_image' ) ); ?>"/>
                    <div class="location-content">
                    <div class="location-address"><?php echo CFS()->get( 'location_address' ); ?></div>
                    <div><?php echo CFS()->get( 'location_p' ); ?></div>
                    </div>
                    </section>


                    <a name="faq"><section class="faq"></a>
                    <h2 class=""><?php echo esc_html( CFS()->get( 'faq_title' ) ); ?></h2>
                    <div class="title-underline"></div>
                    <div class="faq-list">
                        <?php echo CFS()->get( 'faq01' ); ?>
                        <?php echo CFS()->get( 'faq02' ); ?>
                        <?php echo CFS()->get( 'faq03' ); ?>
                        <?php echo CFS()->get( 'faq04' ); ?>
                        <?php echo CFS()->get( 'faq05' ); ?>
                        <?php echo CFS()->get( 'faq06' ); ?>
                        <?php echo CFS()->get( 'faq07' ); ?>
                    </div>
                    <div class="faq-contact"><?php echo CFS()->get( '12_contact' ); ?></div>

                    </section>









                    </section>
                    </section>
                </div>
            <?php endif; ?>


            </div>
        </article>



</main><!-- #main -->

</div><!-- #primary -->



<?php get_footer(); ?>
