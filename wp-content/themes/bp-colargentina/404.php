<?php get_header() ?>

<div id="content">
  <div class="padder one-column">
  
    <?php do_action( 'bp_before_404' ); ?>
  
    <div id="post-0" class="post page-404 error404 not-found" role="main">
	
        <p class="senal">Ups! disculpanos, tenemos un error del tipo: <?php _e( "Page not found", 'buddypress' ); ?> 
        Usa el boton de Actividad en la parte superior o consulta en el Panel de Busqueda, arriba a la derecha :)
        </p>
        
        <?php do_action( 'bp_404' ); ?>
            
    </div>
  
    <?php do_action( 'bp_after_404' ) ?>
  
  </div>
  <!-- .padder --> 
</div>
<!-- #content -->

<?php get_footer() ?>