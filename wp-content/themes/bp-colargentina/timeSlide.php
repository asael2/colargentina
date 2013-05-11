<menu class="timeSlide"> 
  <!--Font icon buttons-->
  <ul class= "menuControls">
    <li><a id="lupa-icon" title="Busqueda personalizada" href="#">M</a></li>
    <li><a id="calendar-icon" title="Busqueda por temporada" href="#">c</a></li>
  </ul>
  
  <ul class="menuContents">
    <!--Period Layer-->
    <li id="periodLayer">
      <div>
        <h3>Periodo de estadia</h3>
        <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary', 'fallback_cb' => 'bp_dtheme_main_nav' ) ); ?>
      </div>
    </li>

    <!--Search Layer-->
    <li id="searchLayer"> 
      <div>
        <h3>Busqueda</h3>
       	<div id="cse-search-form">Cargando</div>
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript"> 
          google.load('search', '1', {
			  language : 'es', 
			  style : google.loader.themes.V2_DEFAULT});
          google.setOnLoadCallback(function() {
            
			var customSearchOptions = {};  
			var customSearchControl = new google.search.CustomSearchControl('016038221605154116929:tfyy_0akmka', customSearchOptions);
            customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
			
            var options = new google.search.DrawOptions();
            options.enableSearchboxOnly("http://www.google.com/cse?cx=016038221605154116929:tfyy_0akmka");
            customSearchControl.draw('cse-search-form', options);
          }, true);
        </script>
      </div>
    </li>
  </ul>
  
  <!--//Sol Argentino-->
  
</menu>
