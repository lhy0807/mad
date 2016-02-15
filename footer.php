	<div class="divider"></div>
	<footer class="page-footer" id="footer" style="padding-top: 0;background-color: transparent;">
	<?php wp_footer();?>
	<nav class="center-align" role="navigation" id="nav" style="background-color: transparent;box-shadow: none;">
		<div class="nav-wrapper container">
	      <?php
			    wp_nav_menu(array(
				'menu' => 'footer-menu',
				'menu_class' => 'left',
				'theme_location' => 'footer-menu',
				));
			      ?>
		<div class="right" style="color: #000000;">
       	Theme By <a href="http://lhy.xyz" style="color: #F44336;">Chris Li</a>
       	&nbsp;&nbsp;
       	© <?php echo get_option('mad')['start_year']?>-<?php echo date("Y")?>
       	&nbsp;&nbsp;
       	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
       		<img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
       	</a>		
      	</div>
		</div>
	</nav>
  	</footer>
</div>
  <!--  Scripts-->
  <script src="http://libs.useso.com/js/jquery/2.1.1-rc2/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri().'/js/materialize.min.js';?>"></script>
  <script src="<?php echo get_stylesheet_directory_uri().'/js/init.js';?>"></script>
  	<?php if(is_home()) :?>
  	<script>
  var options = [
    {selector: '#nav', offset: 100, callback: 'Materialize.toast("欢迎来到Case吧!", 1500 )' },
    {selector: '#footer', offset: 0, callback: 'Materialize.toast("Enjoy it!", 2000 )' }
       ];
  Materialize.scrollFire(options);
	</script>
	<?php endif;?>
  </body>
</html>
