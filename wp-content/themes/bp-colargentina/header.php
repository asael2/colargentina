<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="description" content="Colargentina, colombianosenargentina.com, es la comunidad de los colombianos en Argentina. Buscamos compartir informacion que sea util para todos los compatriotas que residimos o planeamos residir en la Republica Argentina." />
<meta name="keywords" content="Colargentina, colombianos en argentina, viajar a argentina, vivir en argentina, informacion de argentina, colombia, colombianos, argentina, buenos aire, capital federal, estudiar, vivir, trabajar, en argentina, red solcial, amigos colombianos, amiagas colombianas, social, twitter, facebook, google plus" />
<meta name="Generator" content="Todos los derechos son reservados y pertenecen a sus dueños respectivos. El material aqui publicado es responsabilidad de su autor y no tiene relacion directa con nuestro nombre" />
<meta name="robots" content="index, follow" />
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ) ?>; charset=<?php bloginfo( 'charset' ) ?>" />
<title>
<?php /*?>Colombianos en Argentina | <?php wp_title( '|', true, 'right' ); bloginfo( 'name' );?> | <?php bloginfo( 'description' ); ?>          <?php */?>
<?php wp_title( '|', true, 'right' ); bloginfo( 'description' ); ?>          
</title>
<?php do_action( 'bp_head' ) ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Voces|Droid+Serif:400,700,400italic|Pontano+Sans|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://colombianosenargentina.com/wp-content/themes/bp-colargentina/fonts/heydings_icons.css' rel='stylesheet' type='text/css'>
<meta property="fb:admins" content="100003705131269" />

<?php
	if ( is_singular() && bp_is_blog_page() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head();
	$site_description = get_bloginfo( 'description', 'display' );
	//$site_description = get_bloginfo( 'description', 'display' );
?>

</head>

<!--Mensaje Beta >>> --><div class="message"><!--From Document.ready defined--></div>
<img src="/ajax-loader.gif" class="coloader" />
        
<body <?php body_class() ?> id="bp-colargentina">
<?php do_action( 'bp_before_header' ) ?>
<div id="header">  

  	<div class="fGrounder"> 
    
        <!--Logotypo-->
        <h1 id="logo" role="banner">
        <img class="escudo" src="/wp-content/themes/bp-colargentina/images/escudo.png" alt="Colargentina. Colombianos en Argentina" /> 
        <a href="<?php echo home_url(); ?>" title="<?php _ex( 'Colombianos en Argentina', 'Home page banner link title', 'buddypress' ); ?>">
            <?php bp_site_name(); ?>
        </a> 
        
        <!--SubTitulo--> 
        <span class="subtit"><?php echo $site_description; ?></span> </h1>
	</div>
    
    <!--Go Home Button--> 
	<a id="goHomeBtn" href="<?php echo home_url(); ?>" title="Actividad">Actividad</a> 
         
<?php do_action( 'bp_header' ) ?>  
</div>

<!-- #header -->

<?php do_action( 'bp_after_header' ) ?>

	    <!--timeSlide menu-->
        <?php include("timeSlide.php"); ?>
        
        <meta property="fb:admins" content="100003705131269" />
<?php do_action( 'bp_before_container' ) ?>
<div id="container">


<script>
// Load the FACEBOOK SDK Asynchronously
(function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
   ref.parentNode.insertBefore(js, ref);
 }(document));
</script>
