	
	<div id="footer-bg">
	
		<?php do_action( 'momentous_before_footer' ); ?>
		
		<div id="footer-wrap">
		
			<footer id="footer" class="container clearfix" role="contentinfo">
			    <?php 
				    //echo __("&copy; 2008 - " . date('Y'));
				    echo __('
				    [:de]<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" align="middle" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>&nbsp;<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Hanis Sammelsurium <blog.hani-ibrahim.de></span> steht unter der <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International Lizenz CC-BY-SA 4.0</a> | <a href="../impressum.html#copy_de">Copyright-Info</a>.
				    [:en]<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" align="middle" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />&nbsp;</a><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"> Hani\'s Omnium-Gatherum <blog.hani-ibrahim.de></span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License CC-BY-SA 4.0</a> | <a href="../en/impressum.html#copy_en">Copyright-Info</a>.
				    '); 
				?>
				<!--
				<span id="footer-text"><?php momentous_display_footer_text(); ?></span>
				
				<div id="credit-link"><?php do_action( 'momentous_credit_link' ); ?></div>
				-->
			
			</footer>
		
		</div>

	</div>
	
</div><!-- end #wrapper -->

<?php wp_footer(); ?>


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  // tracker methods like "setCustomDimension" should be called before "trackPageView"
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.hani-ibrahim.de/piwikstat/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- Piwik tracking with image --> 
<noscript>
<img src="http://www.hani-ibrahim.de/piwikstat/piwik.php?idsite=1&rec=1" style="border:0" alt="" />
</noscript>
<!-- End Piwik -->

</body>
</html>
