<?php
/*
 * Template Name: Plantilla pagina
 *
 * A custom page template without sidebar.
 *
 * @package BuddyPress
 * @subpackage BP_Colargentina
 * @since 1.5
 */
?>
<?php get_header() ?>

<?php get_sidebar() ?>
<div id="content" class="padder">


<?php do_action( 'bp_before_blog_page' ) ?>
  <div class="page" id="blog-page" role="main"> 
      
      
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2 class="pagetitle"><?php the_title(); ?></h2>
        
      <!--PostBox-->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry">
            <?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'buddypress' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
            <?php edit_post_link( __( 'Edit this page.', 'buddypress' ), '<p class="edit-link">', '</p>'); ?>
          </div>
      </div>
    <?php comments_template(); ?>
    <!--PostBox EOF-->
      
    <?php endwhile; endif; ?>
  </div>
  <!-- .page -->
    
  <?php do_action( 'bp_after_blog_page' ) ?>
  <!-- .padder --> 
</div>
<!-- #content -->


<?php get_footer(); ?>
