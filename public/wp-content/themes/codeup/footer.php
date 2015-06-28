<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<div class='footer-menu'>
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
					<nav id="footer-navigation" class="footer-navigation" role="navigation">
						<?php
							// Footer navigation menu.
							wp_nav_menu( array(
								'menu_class'     => 'nav-menu',
								'theme_location' => 'secondary',							
							) );
						?>
					</nav><!-- .footer-navigation -->
				<?php endif; ?>
				<p>&#169; 2015 Jenni White</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
