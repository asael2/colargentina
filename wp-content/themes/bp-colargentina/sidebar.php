<?php do_action( 'bp_before_sidebar' ) ?>

<div id="sidebar" role="complementary">
  <div class="padder">
    <?php do_action( 'bp_inside_before_sidebar' ) ?>
    
    <!--//LogedIn-->
    <?php if ( is_user_logged_in() ) : ?>
    <?php do_action( 'bp_before_sidebar_me' ) ?>
    <div id="sidebar-me"> <a href="<?php echo bp_loggedin_user_domain() ?>">
      <?php bp_loggedin_user_avatar( 'type=thumb&width=40&height=40' ) ?>
      </a>
      <h4><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></h4>
      <a class="button logout" href="<?php echo wp_logout_url( bp_get_root_domain() ) ?>">
      <?php _e( 'Log Out', 'buddypress' ) ?>
      </a>
      <?php do_action( 'bp_sidebar_me' ) ?>
    </div>
    
	<?php do_action( 'bp_after_sidebar_me' ) ?>
    
	<?php dynamic_sidebar( 'sidebar-1' ) ?>
    
	<?php /* if ( bp_is_active( 'messages' ) ) : ?>
	<?php bp_message_get_notices(); // Site wide notices to all users  
	?>
    
	<?php endif;  */?>
    
    <!--//LogedOut-->
    <?php else : ?>
    <?php do_action( 'bp_before_sidebar_login_form' ) ?>
    
	<?php if ( bp_get_signup_allowed() ) : ?>
    
	<?php do_action( 'bp_after_sidebar_login_form' ) ?>
    
    <p id="login-text"> <?php printf( __( '<p class="mensaje">Si no tienes una cuenta o no quieres usar Facebook para entrar, puedes <a href="%s" title="Crear una nueva cuenta"> crear una nueva cuenta</a>.</p>', 'buddypress' ), site_url( bp_get_signup_slug() . '/' ) ) ?> </p>
    <?php endif; ?>
    <form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
      <label>
        <?php _e( 'Username', 'buddypress' ) ?>
        <br />
        <input type="text" name="log" id="sidebar-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" />
      </label>
      <label>
        <?php _e( 'Password', 'buddypress' ) ?>
        <br />
        <input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" />
      </label>
      <p class="forgetmenot">
        <label>
          <input name="rememberme" type="checkbox" id="sidebar-rememberme" value="forever" tabindex="99" />
          <?php _e( 'Remember Me', 'buddypress' ) ?>
        </label>
      </p>
      <?php do_action( 'bp_sidebar_login_form' ) ?>
      <input type="submit" name="wp-submit" id="sidebar-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" />
      <input type="hidden" name="testcookie" value="1" />
    </form>
   
    <?php endif; ?>
    
    <?php /* Show forum tags on the forums directory 
	if ( bp_is_active( 'forums' ) && bp_is_forums_component() && bp_is_directory() ) : ?>
    <div id="forum-directory-tags" class="widget tags">
      <h3 class="widgettitle">
        <?php _e( 'Forum Topic Tags', 'buddypress' ) ?>
      </h3>
      <div id="tag-text">
        <?php bp_forums_tag_heat_map(); ?>
      </div>
    </div>
    <?php endif; */?>
    
    
    
    <?php do_action( 'bp_inside_after_sidebar' ) ?>
  </div>
  <!-- .padder --> 
</div>
<!-- #sidebar -->

<?php do_action( 'bp_after_sidebar' ) ?>
