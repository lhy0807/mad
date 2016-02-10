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
       	Theme By <a href="http://www.caseba.com" style="color: #F44336;">Chris Lee</a>
       	&nbsp;&nbsp;
       	© 2014-<?php echo date("Y")?> 			
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
    {selector: '#bing', offset: 1000, callback: 'Materialize.toast("最上方的这张图片来自必应每日一图", 1500 )' },
    {selector: '#footer', offset: 0, callback: 'Materialize.toast("Enjoy it!", 2000 )' }
       ];
  Materialize.scrollFire(options);
	</script>
	<?php endif;?>
  </body>
</html>
