<?php get_header();?>
	<div style="position: fixed;bottom: 10px;right: 10px;">
	<a class="btn-floating btn-large waves-effect waves-light red" onclick="javascript:$('#barcode').openModal();"><i class="material-icons">open_in_new</i></a>
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
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="red-text" style="text-align: center;font-size: 3.3rem;"><?php the_title();?></h1>
	<p style="text-align: center;" class="grey-text">
		<i class="material-icons tiny valign">alarm</i><?php the_time('Y-m-d')?>
		<i class="material-icons tiny valign" style="margin-left: 10px;">face</i><?php the_author();?>
	</p>
	<div class="row">
		<div class="col m8 offset-m2 s12" style="overflow: hidden;">
			<div class="divider"></div><?php the_content();?>
		</div>
		<div class="col m2"></div>
	</div>
	<div class="row" style="text-align: center;">
	<?php previous_post_link('%link', '<div class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="bottom" data-delay="50" data-tooltip="查看上一篇" style="margin-right: 10px;"><i class="material-icons">chevron_left</i></div>', TRUE); ?> 
	<?php next_post_link('%link', '<div class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="bottom" data-delay="50" data-tooltip="查看下一篇" style="margin-right: 10px;"><i class="material-icons">chevron_right</i></div>', TRUE); ?>
	</div>
	<div class="row">
		<div class="col m8 offset-m2 s12" style="overflow: hidden;">
			<?php comments_template(); ?>
		</div>
	</div>
	<?php endwhile; endif;?>
<?php get_footer();?>