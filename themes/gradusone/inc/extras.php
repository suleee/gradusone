<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



function gradusone_hero_image_css() {

		if ( is_front_page()  === false ) {

            $url = CFS()->get ( 'herobanner');

            $hero_css = ".herobanner{
                background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ),
                url({$url}) no-repeat center bottom;
                background-size: cover, cover;
            }";

            wp_add_inline_style( 'gradusone-style', $hero_css );
        }

        elseif ( is_front_page() === true ) {
            $url = CFS()->get ( 'herobanner');

            $hero_css = ".herobanner{
                height: 77vh;
                background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ),
                url({$url}) no-repeat center bottom;
                background-size: cover, cover;
            }";

            wp_add_inline_style( 'red-starter-style', $hero_css );
            return;
        }
    }
    add_action( 'wp_enqueue_scripts', 'gradusone_hero_image_css' );