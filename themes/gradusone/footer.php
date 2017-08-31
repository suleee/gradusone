<?php
/**
 * The template for displaying the footer.
 *
 * @package Catalyst_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer">
					<div class="widget-menu">
						<?php if ( function_exists('dynamic_sidebar') || dynamic_sidebar('Footer') ) : ?>
						<?php endif; ?>
						<?php dynamic_sidebar( 'Footer' ); ?>

						<!-- <div class="sns-icon">
						<img src="../img/facebook.png" alt="">
						<img src="img/instagram.png" alt="">
						</div> -->
					</div>
					<div class="footer-menu submit">
					<p>Sign up for our mailing list to stay connected and receive updates about our events, programs, and resources</p>
					<div class="input-container">
					<input type="text" name="" placeholder="Email">
					<div class="join-btn"><a href="">Join Now!</a></div>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
