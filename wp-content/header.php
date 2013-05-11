<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ) ?>; charset=<?php bloginfo( 'charset' ) ?>" />
<title>
<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>
</title>
<?php do_action( 'bp_head' ) ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
<!--gOOGLE fONTS-->
<link href='http://fonts.googleapis.com/css?family=Voces|Droid+Serif:400,700,400italic|Pontano+Sans|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
<?php
	if ( is_singular() && bp_is_blog_page() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head();
	$site_description = get_bloginfo( 'description', 'display' );
?>
</head>

<body <?php body_class() ?> id="bp-default">
<?php do_action( 'bp_before_header' ) ?>
<div id="header">
	<!--Titulo--> 
  	<h1 id="logo" role="banner"> 
    <a href="<?php echo home_url(); ?>" title="<?php _ex( 'Home', 'Home page banner link title', 'buddypress' ); ?>">
    	<?php bp_site_name(); ?>
    </a> 
  </h1>
  <!--SubTitulo--> 
  <h2>
    <span class="subtit"><?php echo $site_description; ?></span> 
   </h2>
  <?php do_action( 'bp_search_login_bar' ) ?>
  <!-- .padder --> <!-- #search-bar -->
  
  <menu class="timeSlide">
    <h3>Periodo de estadia</h3>
    <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary', 'fallback_cb' => 'bp_dtheme_main_nav' ) ); ?>
    <h4>Meses</h4>
  </menu>
  <?php do_action( 'bp_header' ) ?>
</div>
<!-- #header -->

<?php do_action( 'bp_after_header' ) ?>
<?php do_action( 'bp_before_container' ) ?>
<div id="container">
