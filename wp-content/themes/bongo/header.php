<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 function isMobile() {
    return preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']));
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
     <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KR6Q5DX');</script>
<!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="7PgRnFqn3XqOyWcuSv5FY3jkwK-zv-G9tlzCOVyNprw" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<script src="https://action.dstillery.com/orbserv/nsjs?adv=cl1013861&ns=1875&nc=Bongo_HP&ncv=47&dstOrderId=[OrderId]&dstOrderAmount=[OrderAmount]" type="text/javascript"></script>

	<?php
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	
	<![endif]-->
	
	
	<?php wp_head(); ?>
	
	
	<?php
	if(!isMobile())
	{
	?>
	<link rel='stylesheet' id='twentythirteen-style-css'  href='<?php echo get_template_directory_uri(); ?>/footer-desk-style.css' type='text/css' media='all' />
	<?php } ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.maphilight.min.js"></script>
      

</head>


<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR6Q5DX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

 <div id="page" class="hfeed site" align="center">
   <header id="masthead" class="site-header" role="banner">
     <div id="header_container">
	  
		  <?php if( isMobile() ) { ?>
		   <div id="logo">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/may2018/mobile-logo.png" alt="logo" />
			</a>
		   </div>	
		<?php } else { ?>
		   <div id="logo">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/may2018/Logo.png" alt="op" />
			</a>
		   </div>	
		<?php } ?>
	  </div>
		
		<div id="navbar" class="navbar">				
				 <div id="site-header-menu" class="main-menu-container">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
						</nav><!-- .main-navigation -->
					<?php endif; ?>

				</div><!-- .site-header-menu -->				   
				 	

</div>
<div style="display:none" class="fancybox-hidden">
  <div id="contact_form_pop"><center>
<?php echo do_shortcode('[contact-form-7 id="403" title="Join Form"]');?>

				<!--	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?> -->
					<!-- <?php get_search_form(); ?> -->

				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
</div></center>

		</header><!-- #masthead -->

		<div id="main" class="site-main">
