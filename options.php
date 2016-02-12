<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

function optionsframework_options() {
    	$options = array();
    $options[] = array(
    'name' => '基本设置',
    'type' => 'heading'
    );
	
	$options[] = array(
    "name" =>'首页Banner', //选项的名称
    "desc" =>'设置Banner图片的URL，不填即为Bing每日一图', //介绍
    "id" =>'bannerurl', //必填，唯一标示
    "type" =>'text' //表单元素类型
    );
	
	$options[] = array(
    "name" =>'测试数据',//选项的名称
    "desc" =>'test', //介绍
    "id" =>'test', //必填，唯一标示
    "type" =>'text' //表单元素类型
    );
	return $options;
}
?>