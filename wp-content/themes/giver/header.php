<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package giver
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'giver' ); ?></a>

	<header id="header" class="site-header site-header-s1">
		<nav id="site-navigation" class="navigation navbar navbar-default">
      	<div class="container-fluid">
          <div class="navbar-header">
          	<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h2 class="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								</h2>
								<?php
							else :
								?>
								<p class="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								</p>
								<?php
							endif;
							$giver_description = get_bloginfo( 'description', 'display' );
							if ( $giver_description || is_customize_preview() ) :
								?>
							<p class="site-description">
								<?php echo $giver_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</p>
							<?php endif; ?>
						</div><!-- .site-branding -->
              <button type="button" id="hamburger-menu" class="open-nav-btn open-btn" aria-label="<?php echo esc_attr__( 'open navigation','giver' ) ?>" aria-controls="link-list" aria-expanded="false">
                  <span class="sr-only"><?php echo esc_html__( 'Toggle navigation','giver' ) ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
				  <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder slide-content">
				      <button  type="button" id="close" class="close-btn close-navbar" aria-label="<?php echo esc_attr__( 'close navigation','giver' ) ?>">
				        <i class="fa fa-times"></i>
				      </button>
				      <?php
				        wp_nav_menu(
				          array(
				            'menu'              => 'primary',
				            'theme_location'    => 'primary',
				            'container'         => '',
				            'container_class'   => '',
				            'container_id'      => '',
				            'menu_id'           => 'link-list',
				            'menu_class'        => 'nav navbar-nav menu nav-menu',
				            'fallback_cb'       => '__return_false',
				          )
				        );
				      ?>
				  </div><!-- end of nav-collapse -->
				<?php endif; ?>
			</div>
		</nav>
	</header><!-- #masthead -->

	<!-- end of header -->
	<?php get_template_part( 'template-parts/entry', 'header' ); ?>