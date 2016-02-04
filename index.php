<?php get_header();?>
<?php
/**
 * 获取bing图片简介
 */
  $str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
 if(preg_match("/<copyright>(.+?)<\/copyright>/ies",$str,$matches)){
  $imgcopyright=$matches[1];
 }
?>
	<div class="row" style="text-align: center;" id="searchform">
		<div class="col m6 s12 offset-m3 input-field">
			<form method="get" action="/">
				<input type="text" id="s" name="s" class="validate">
				<label for="s">在此搜索</label>
			</form>
		</div>
	</div>
	<div class="row" style="text-align: center;" id="bing-box">
		<div class="col m6 s12 offset-m3">
		<img class="z-depth-3 materialboxed" id="bing" data-caption = "<?php echo $imgcopyright?>" width=100%/>
		</div>
	</div>
	<div id="content">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="row" id="single-post">
		<div class="col m6 s12 offset-m3">
		<div class="card hoverable" style="overflow: hidden;">
		<?php if(has_post_thumbnail()) :?>
    		<div class="card-image waves-effect waves-block waves-light" style="max-height: 500px;overflow: hidden;" onclick="javascript:window.location.href='<?php the_permalink();?>'">
			<?php echo the_post_thumbnail('',array('class' => 'responsive-img'));?>
			<span class="card-title"><?php echo the_tags('<div class="chip" style="margin-right: 5px;">','</div><div class="chip" style="margin-right: 5px;">','</div>'); ?></span>
  			</div>
  		<?php endif; ?>
    	<div class="card-content">
      		<h1 class="card-title" style="margin: 0.8rem 0px 0.8rem;"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
      		<h6 class="valign-wrapper grey-text" style="margin-bottom: 20px;">
      			<i class="material-icons tiny valign">alarm</i><?php the_time('Y-m-d')?>
      			<i class="material-icons tiny valign" style="margin-left: 10px;">face</i><?php the_author();?>
      		</h6>
      		<p><?php echo wp_trim_words(get_the_content(),200);?></p>
      	<?php if(!has_post_thumbnail()) :?>
      		<?php echo the_tags('<div class="chip" style="margin-right: 5px;margin-top:20px;">','</div><div class="chip" style="margin-right: 5px;margin-top:20px;">','</div>'); ?>
      	<?php endif;?>
    	</div>
		<div class="card-action" onclick="javascript:window.location.href='<?php the_permalink();?>'">
			<p><a title="<?php the_title();?>" href="<?php the_permalink();?>">阅读全文...</a></p>
		</div>
		</div>
		</div>
	</div>
	<?php endwhile; ?>
  	<?php endif; ?>
  	</div>
	<div style="text-align: center; margin-bottom: 20px;" class="row">
		<?php posts_nav_link(" ",'<div id="previous-page" class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="bottom" data-delay="50" data-tooltip="翻到上一页" style="margin-right: 10px;"><i class="material-icons">chevron_left</i></div>','<div id="next-page" class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="bottom" data-delay="50" data-tooltip="翻到下一页" style="margin-left: 10px;"><i class="material-icons">chevron_right</i></div>')?>
  	</div>
	<div style="position: fixed;bottom: 10px;right: 10px;z-index:99;">
		<a href="#" class="btn-floating btn-large waves-effect waves-light red" onclick="goTop();return false;"><i class="material-icons">navigation</i></a>
	</div>
<?php get_footer();?>