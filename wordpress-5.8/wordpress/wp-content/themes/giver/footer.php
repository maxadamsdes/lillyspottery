<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package giver
 */

?>

	<footer id="giver-footer" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="site-info text-center">
					&copy; 
					<?php 
						echo get_bloginfo( 'name');
					?>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'giver' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '| Proudly powered by %s', 'giver' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'giver' ), 'giver', '<a href="http://annurtheme.com/">'.esc_html__( 'AnnurTheme', 'giver' ).'</a>' );
						?>
				</div><!-- .site-info -->
			</div>	
		</div>	
	</footer><!-- #giver-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
