<?php

/**
 * Template Name: BuddyPress - Activity Directory
 *
 * @package BuddyPress
 * @subpackage Colargentina
 */

?>
<?php get_header( 'buddypress' ); ?>
<?php do_action( 'bp_before_directory_activity_page' ); ?>

<div id="content">
  <div class="padder">
    <?php do_action( 'bp_before_directory_activity' ); ?>
    <?php if ( !is_user_logged_in() ) : ?>
    <h3 class="subtitulosh3"> 
      <?php _e( '<p>Bienvenid@! <br>Para publicar inicia  sesi&oacute;n o logueate con tu cuenta de Facebook &raquo;</p>', 'buddypress' ); ?>
    </h3>
    <?php endif; ?>
    <?php do_action( 'bp_before_directory_activity_content' ); ?>
    <?php if ( is_user_logged_in() ) : ?>
    <?php locate_template( array( 'activity/post-form.php'), true ); ?>
    
	 <menu id="bpAjaxMenu">
    <div class="item-list-tabs activity-type-tabs" role="navigation">
      <ul>
        <?php do_action( 'bp_before_activity_type_tab_all' ); ?>
        <li class="selected" id="activity-all"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/'; ?>" title="<?php _e( 'Actividad publica de todos los miembros.', 'buddypress' ); ?>"><?php printf( __( 'Todos los miembros <span>%s</span>', 'buddypress' ), bp_get_total_site_member_count() ); ?></a></li>
        <?php if ( is_user_logged_in() ) : ?>
        <?php do_action( 'bp_before_activity_type_tab_friends' ) ?>
        <?php if ( bp_is_active( 'friends' ) ) : ?>
        <?php if ( bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-friends"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_friends_slug() . '/'; ?>" title="<?php _e( 'Actividad de mis amigos.', 'buddypress' ); ?>"><?php printf( __( 'Mis amigos <span>%s</span>', 'buddypress' ), bp_get_total_friend_count( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_groups' ) ?>
        <?php if ( bp_is_active( 'groups' ) ) : ?>
        <?php if ( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-groups"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_groups_slug() . '/'; ?>" title="<?php _e( 'Actividad de grupos que pertenezco.', 'buddypress' ); ?>"><?php printf( __( 'Mis Grupos <span>%s</span>', 'buddypress' ), bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_favorites' ); ?>
        <?php if ( bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-favorites"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/favorites/'; ?>" title="<?php _e( "Marcada como favorita.", 'buddypress' ); ?>"><?php printf( __( 'My Favorites <span>%s</span>', 'buddypress' ), bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_mentions' ); ?>
        <li id="activity-mentions"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/mentions/'; ?>" title="<?php _e( 'Mensionado.', 'buddypress' ); ?>">
          <?php _e( 'Mentions', 'buddypress' ); ?>
          <?php if ( bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ) : ?>
          <strong><?php printf( __( '<span>%s new</span>', 'buddypress' ), bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ); ?></strong>
          <?php endif; ?>
          </a></li>
        <?php endif; ?>
        <?php do_action( 'bp_activity_type_tabs' ); ?>
      </ul>
    </div>
    <!-- .item-list-tabs -->
    
    <div class="item-list-tabs no-ajax" id="subnav" role="navigation">
      <ul>
        <li class="feed"><a href="<?php bp_sitewide_activity_feed_link() ?>" title="<?php _e( 'RSS Feed', 'buddypress' ); ?>">
          <?php _e( 'RSS', 'buddypress' ); ?>
          </a></li>
        <?php do_action( 'bp_activity_syndication_options' ); ?>
        <li id="activity-filter-select" class="last">
          <label for="activity-filter-by">
            <?php _e( 'Mostrar:', 'buddypress' ); ?>
          </label>
          <select id="activity-filter-by">
            <option value="-1">
            <?php _e( 'Todo', 'buddypress' ); ?>
            </option>
            <option value="activity_update">
            <?php _e( 'Actualizaciones', 'buddypress' ); ?>
            </option>
            <?php if ( bp_is_active( 'blogs' ) ) : ?>
            <option value="new_blog_post">
            <?php _e( 'Posts', 'buddypress' ); ?>
            </option>
            <option value="new_blog_comment">
            <?php _e( 'Comentarios', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'forums' ) ) : ?>
            <option value="new_forum_topic">
            <?php _e( 'Foros', 'buddypress' ); ?>
            </option>
            <option value="new_forum_post">
            <?php _e( 'Respuestas en foros', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'groups' ) ) : ?>
            <option value="created_group">
            <?php _e( 'Nuevos grupos', 'buddypress' ); ?>
            </option>
            <option value="joined_group">
            <?php _e( 'Membresias en grupos', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'friends' ) ) : ?>
            <option value="friendship_accepted,friendship_created">
            <?php _e( 'Amistades', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <option value="new_member">
            <?php _e( 'Nuevos miembros', 'buddypress' ); ?>
            </option>
            <?php do_action( 'bp_activity_filter_options' ); ?>
          </select>
        </li>
      </ul>
    </div>
    <!-- .item-list-tabs -->
    </menu>
	
	
	<?php endif; ?>
    <?php do_action( 'template_notices' ); ?>
   
  <?php /*?> <menu id="bpAjaxMenu">
    <div class="item-list-tabs activity-type-tabs" role="navigation">
      <ul>
        <?php do_action( 'bp_before_activity_type_tab_all' ); ?>
        <li class="selected" id="activity-all"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/'; ?>" title="<?php _e( 'Actividad publica de todos los miembros.', 'buddypress' ); ?>"><?php printf( __( 'Todos los miembros <span>%s</span>', 'buddypress' ), bp_get_total_site_member_count() ); ?></a></li>
        <?php if ( is_user_logged_in() ) : ?>
        <?php do_action( 'bp_before_activity_type_tab_friends' ) ?>
        <?php if ( bp_is_active( 'friends' ) ) : ?>
        <?php if ( bp_get_total_friend_count( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-friends"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_friends_slug() . '/'; ?>" title="<?php _e( 'Actividad de mis amigos.', 'buddypress' ); ?>"><?php printf( __( 'Mis amigos <span>%s</span>', 'buddypress' ), bp_get_total_friend_count( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_groups' ) ?>
        <?php if ( bp_is_active( 'groups' ) ) : ?>
        <?php if ( bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-groups"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/' . bp_get_groups_slug() . '/'; ?>" title="<?php _e( 'Actividad de grupos que pertenezco.', 'buddypress' ); ?>"><?php printf( __( 'Mis Grupos <span>%s</span>', 'buddypress' ), bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_favorites' ); ?>
        <?php if ( bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ) : ?>
        <li id="activity-favorites"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/favorites/'; ?>" title="<?php _e( "Marcada como favorita.", 'buddypress' ); ?>"><?php printf( __( 'My Favorites <span>%s</span>', 'buddypress' ), bp_get_total_favorite_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>
        <?php endif; ?>
        <?php do_action( 'bp_before_activity_type_tab_mentions' ); ?>
        <li id="activity-mentions"><a href="<?php echo bp_loggedin_user_domain() . bp_get_activity_slug() . '/mentions/'; ?>" title="<?php _e( 'Mensionado.', 'buddypress' ); ?>">
          <?php _e( 'Mentions', 'buddypress' ); ?>
          <?php if ( bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ) : ?>
          <strong><?php printf( __( '<span>%s new</span>', 'buddypress' ), bp_get_total_mention_count_for_user( bp_loggedin_user_id() ) ); ?></strong>
          <?php endif; ?>
          </a></li>
        <?php endif; ?>
        <?php do_action( 'bp_activity_type_tabs' ); ?>
      </ul>
    </div>
    <!-- .item-list-tabs -->
    
    <div class="item-list-tabs no-ajax" id="subnav" role="navigation">
      <ul>
        <li class="feed"><a href="<?php bp_sitewide_activity_feed_link() ?>" title="<?php _e( 'RSS Feed', 'buddypress' ); ?>">
          <?php _e( 'RSS', 'buddypress' ); ?>
          </a></li>
        <?php do_action( 'bp_activity_syndication_options' ); ?>
        <li id="activity-filter-select" class="last">
          <label for="activity-filter-by">
            <?php _e( 'Mostrar:', 'buddypress' ); ?>
          </label>
          <select id="activity-filter-by">
            <option value="-1">
            <?php _e( 'Todo', 'buddypress' ); ?>
            </option>
            <option value="activity_update">
            <?php _e( 'Actualizaciones', 'buddypress' ); ?>
            </option>
            <?php if ( bp_is_active( 'blogs' ) ) : ?>
            <option value="new_blog_post">
            <?php _e( 'Posts', 'buddypress' ); ?>
            </option>
            <option value="new_blog_comment">
            <?php _e( 'Comentarios', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'forums' ) ) : ?>
            <option value="new_forum_topic">
            <?php _e( 'Foros', 'buddypress' ); ?>
            </option>
            <option value="new_forum_post">
            <?php _e( 'Respuestas en foros', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'groups' ) ) : ?>
            <option value="created_group">
            <?php _e( 'Nuevos grupos', 'buddypress' ); ?>
            </option>
            <option value="joined_group">
            <?php _e( 'Membresias en grupos', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <?php if ( bp_is_active( 'friends' ) ) : ?>
            <option value="friendship_accepted,friendship_created">
            <?php _e( 'Amistades', 'buddypress' ); ?>
            </option>
            <?php endif; ?>
            <option value="new_member">
            <?php _e( 'Nuevos miembros', 'buddypress' ); ?>
            </option>
            <?php do_action( 'bp_activity_filter_options' ); ?>
          </select>
        </li>
      </ul>
    </div>
    <!-- .item-list-tabs -->
    </menu><?php */?>
    <!-- #bpAjaxMenu EOF -->
    <?php do_action( 'bp_before_directory_activity_list' ); ?>
    <div class="activity" role="main">
      <?php locate_template( array( 'activity/activity-loop.php' ), true ); ?>
    </div>
    <!-- .activity -->
    
    <?php do_action( 'bp_after_directory_activity_list' ); ?>
    <?php do_action( 'bp_directory_activity_content' ); ?>
    <?php do_action( 'bp_after_directory_activity_content' ); ?>
    <?php do_action( 'bp_after_directory_activity' ); ?>
  </div>
  <!-- .padder --> 
</div>
<!-- #content -->

<?php do_action( 'bp_after_directory_activity_page' ); ?>
<?php get_sidebar( 'buddypress' ); ?>
<?php get_footer( 'buddypress' ); ?>
