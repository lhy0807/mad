<?php get_header();?>
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