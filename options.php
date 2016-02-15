<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'mad';
}

function optionsframework_options() {

	$options = array();

	$options[] = array(
		'name' => __( '基础设置'),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( '站点起始年份'),
		'desc' => __( '显示在页脚和归档页面'),
		'id' => 'start_year',
		'std' => '2014',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '站点Banner图片'),
		'desc' => __( '留空即为显示Bing每日一图'),
		'id' => 'banner_img',
		'std' => '',
		'type' => 'text'
	);
	
	return $options;
}