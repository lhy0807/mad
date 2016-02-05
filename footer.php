	<footer class="page-footer" id="footer">
	<?php wp_footer();?>
    <div class="container">
      	<div class="row">
        	<div class="col l6 s6">
          		<h5 class="white-text"><?php bloginfo('name'); ?></h5>
          		<p class="grey-text text-lighten-4"><?php echo bloginfo('description'); ?></p>
        	</div>
        	<div class="col l3 s6 offset-l3">
          		<h5 class="white-text">Links</h5>
			    <?php
			    wp_nav_menu(array(
				'menu' => 'footer-menu',
				'menu_class' => 'white-text',
				'theme_location' => 'footer-menu',
				'link_before' => '<div style="color:#ffffff">',
				'link_after' => '</div>'
				));
			      ?>
			</div>
      	</div>
    </div>
    <div class="footer-copyright">
      	<div class="container">
       	Theme By <a href="http://www.caseba.com">Chris Lee</a>
       	&nbsp;&nbsp;
       	© 2014-<?php echo date("Y")?>
      	</div>
    </div>
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
    {selector: '#wrapper', offset: 1100, callback: 'Materialize.toast("这是我自己编写的博客主题", 1500 )' },
    {selector: '#footer', offset: 0, callback: 'Materialize.toast("Enjoy it!", 2000 )' }
       ];
  Materialize.scrollFire(options);
	</script>
	<?php endif;?>
  </body>
</html>
