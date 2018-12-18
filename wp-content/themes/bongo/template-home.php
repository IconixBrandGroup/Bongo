<style type="text/css">
.bongo-content{
	max-width:1800px;
}
  
</style>

<?php
/**
 * Template Name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 

function my_wp_is_mobile() {
    static $is_mobile;

    if ( isset($is_mobile) )
        return $is_mobile;

    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}
?>
<?php
    $featured_image = get_field('featured_image');
    $featured_link = get_field('featured_link');    
    $home_image1 = get_field('home_image1');
    $home_image1_link = get_field('home_image1_link');
    $home_image2 = get_field('home_image2');
    $home_image2_link = get_field('home_image2_link');
	$social_content= get_field('social_content');
	$instagram_title= get_field('instagram_title');
	$instagram_link= get_field('instagram_link');
    $featured_mob_image = get_field('mobile_hero_image');
	$featured_mob_link = get_field('mob_link');
	$mobile_join_title = get_field('mobile_join_title');
	$mobile_join_text1 = get_field('mobile_join_text1');
	$mobile_join_text2 = get_field('mobile_join_text2');

?>

<!--Mobile Layout-->
<?php if ( my_wp_is_mobile() ) { ?>
<div id="mob-featured" align="center">
    <a href="<?php print $featured_mob_link;?>" target="_blank"><img src="<?php print $featured_mob_image['url']; ?>" /></a>
</div>
<div class="site-container">
    <div align="center" class="site-container-main">
    <?php if( have_rows('mobile_content') ):
	$i = 1;
	while ( have_rows('mobile_content') ) : the_row();
	$slider_image_mob = get_sub_field('mobile_images');
	$ext_link = get_sub_field('external_link');
	$link_ex = get_sub_field('link_ex');
	$link_in = get_sub_field('link_in');
	$link = $ext_link ? $link_ex : $link_in;
	if ($link):
	    $before = '<a href="'.esc_url($link).'" target="_blank">';
	    $after = '</a>';
	else:
	    $before = '';
	    $after = '';
	endif;
    ?>
<div class="img_format">
    <?php echo $before; ?>
    <img src="<?php print $slider_image_mob['url']; ?>" style="cursor:pointer; " />
    <?php echo $after; ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
	
	<div id="mob-join">
	<div id="mob-join-title"><?php echo $mobile_join_title; ?></div>
	<div id="mob-join-text1"><?php echo $mobile_join_text1; ?></div>
	<div id="mob-join-text1"><?php echo $mobile_join_text2; ?></div>
	<?php echo do_shortcode('[contact-form-7 id="403" title="Join Form"]');?>
	</div>
	
    </div>
</div>
<?php } else {?>
<!--DesktopLayout-->
<div class="bongo-content">
<div align="center">
    <a href="<?php print $featured_link;?>" target="_blank">
    <img src="<?php print $featured_image['url']; ?>"usemap="#hero_img_link"/>
    <map name="hero_img_link" id="hero_img_link">
	<area alt="" title="" href="<?php print $featured_link;?>" shape="rect" coords="123,789,432,877" target="_blank"/>
    </map>
    </a>
</div>

<div class="site-container">
    <div align="center" class="site-container-main">
    
    <div class="img_format">
	<a href="<?php print $home_image1_link;?>" target="_blank">
	    <img src="<?php print $home_image1['url']; ?>"usemap="#home_img1_link" style="cursor:pointer;" />
	    <map name="home_img1_link" id="home_img1_link">
		<area alt="" title="" href="<?php print $home_image1_link;?>" shape="rect" coords="337,741,638,822" target="_blank"/> 
	    </map>
	</a>
    </div>
    <div class="img_format">
	<a href="<?php print $home_image2_link;?>" target="_blank">
	    <img src="<?php print $home_image2['url']; ?>"usemap="#home_img2_link" style="cursor:pointer;" />
	    <map name="home_img2_link" id="home_img2_link">
		<area alt="" title="" href="<?php print $home_image2_link;?>" shape="rect" coords="80,946,427,1043" target="_blank" /> 
	    </map>
	</a>
    </div>
    </div>
</div>
   
</div>
<!--Instagram Section Added-->
   <div id="social-footer"> 
         <div id="let-social"><?php echo $social_content; ?></div>
		 <div id="instagram-title"> <a href="<?php print $instagram_link; ?>" target="_blank"><?php echo $instagram_title; ?></a></div>
     <div id="icons">
       <div id="insta"><?php echo do_shortcode('[instagram-feed]');?></div>
     </div>
   </div>

<?php }?>

	
<?php get_footer(); ?>