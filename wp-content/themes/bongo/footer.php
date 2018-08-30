<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
<div id="footer_main">
  <div id="social-icons">
     <ul>
      <li><a href="https://www.facebook.com/Bongo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/may2018/facebook.png"/ target="_blank"></a></li>
      <li><a href="https://www.instagram.com/bongojeans/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/may2018/instagram.png"/></a></li>
      <li><a href="https://twitter.com/BongoJeans" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/may2018/twitter.png"/></a></li>
	<li><a href="http://bongojeans.tumblr.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/may2018/tumblr.png"/></a></li>
     </ul>
  </div> 
   <div id="mob-line"> <hr class="mob_view_line"></div>
 <div id="copyright">
       <a href="http://www.iconixbrand.com/brands/bongo/" target="_blank">&copy; <?php echo date('Y'); ?> Iconix Brand Group,Inc.</a>
 </div>
 <div id="links">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?>


  </div>	   	
</div>	

		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
    
</body>
</html>