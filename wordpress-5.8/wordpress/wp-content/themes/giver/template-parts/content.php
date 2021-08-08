<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giver
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta-wrapper">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				giver_posted_on();
				giver_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php giver_post_thumbnail(); ?>

	<?php 
		if ( !is_single() && 'post' == get_post_type() ) { ?>
		<div class="entry-title">
			<h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a></h3>
		</div>
	<?php	}
	?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'giver' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'giver' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php giver_entry_footer(); ?>
	</div><!-- .entry-footer -->

	<?php 
		if ( !is_single() && 'post' == get_post_type() ) { ?>
	<div class="entry-more">
		 <a href="<?php echo esc_url( get_permalink() ); ?>" class="reammore-btn">
		   <?php echo esc_html__( 'Read More', 'giver' ); ?>
		  </a> 
	</div><!-- .entry-more -->
	<?php	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
