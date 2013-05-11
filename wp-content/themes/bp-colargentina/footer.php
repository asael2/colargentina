</div>
<!-- #container -->

<?php do_action( 'bp_after_container' ) ?>

<a href="#" id="back2topHome" class="back2top" title="Back to top of page">Volver arriba</a>

<?php do_action( 'bp_before_footer' ) ?>
<div id="footer">
  <?php if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' ) || is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
  <div id="footer-widgets">
    <?php get_sidebar( 'footer' ) ?>
  </div>
  <?php endif; ?>
  <div id="site-generator" role="contentinfo">
    <?php do_action( 'bp_dtheme_credits' ) ?>
    <p>ColombianosEnArgentina.com, Colargentina.com.ar, Colargentina.com, Colargentina.co</span> licenciados con <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a> &hearts; by  <a href="http://artyficial.net" title="powered by">||artyficial|</a></p>      
  </div>
  <?php do_action( 'bp_footer' ) ?>
</div>
<!-- #footer -->
<?php do_action( 'bp_after_footer' ) ?>

<!--G.Analitycs -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32638585-1']);
  _gaq.push(['_setDomainName', 'colombianosenargentina.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!--G.Analitycs EOF--> 

<!--JS LOAD-->
<script type="text/javascript" src="/js/prefixfree.min.js"></script>
<script type="text/javascript" src="/js/bp-colargentina.js"></script>
<?php wp_footer(); ?>
</body></html>
