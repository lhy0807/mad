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
  <script src="https://sdn.geekzu.org/ajax/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
	<div class="fixed-action-btn horizontal" style="position: fixed;bottom: 15px;right: 15px;z-index:99;">
    <a id="back_top" href="#" class="btn-floating btn-large waves-effect waves-light red hoverable" onclick="goTop();return false;"><i class="material-icons">navigation</i></a>
    <ul>
      <li><a class="btn-floating waves-effect waves-light blue" onclick="javascript:$('#barcode').openModal();"><i class="small material-icons">open_in_new</i></a></li>
    </ul>
  	</div>
 	 <div id="barcode" class="modal" style="width: 30%;">
	    <div class="modal-content" style="text-align: center;">
	      <img class="responsive-img" src="http://qr.topscan.com/api.php?text=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"/>
	    </div>
	    <div class="modal-footer">
	    	<div style="text-align: center;">
	    		<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
	    			<img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
	    		</a><br />
	    		本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。
	    	</div>
	      	<a href="#!" class=" modal-action modal-close waves-effect waves-blue btn-flat">关闭</a>
	    </div>
	</div>
  </body>
</html>
