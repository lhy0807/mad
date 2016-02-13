<!DOCTYPE html>
<html>
	<script>$("#wrapper").hide();document.getElementById("box").style="display:none;";document.getElementById("bing-box").style="display:none;";</script>
<head>
	<!--设置UTF-8编码-->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
	<!--设置移动端响应式设计-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta property="og:type" content="article"/> 
	<meta property="article:published_time" content="<?php the_time('Y-m-j')?>T<?php the_time('g:h:00');?>+08:00" />
	<meta property="article:author" content="<?php bloginfo('name');?>" />  
	<!--网站标题-->
	<title><?php bloginfo('name');?><?php wp_title('|');?></title>
	<meta name="description" content="<?php bloginfo('description');?>"/>
	<!-- CSS  -->
	<link href="http://fonts.useso.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen,projection"/>
	<?php wp_head();?>
	<?php
	$str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
	if(preg_match("/<url>(.+?)<\/url>/ies",$str,$matches)){
 	$imgurl='http://cn.bing.com'.$matches[1];
	if(strstr($imgurl,'1366x768')) {
	$imgurl = @str_replace('1366x768', '1920x1080', $imgurl);
	}}
	?>
	<script>
		window.onload = function(){
			$("#preloader").fadeOut();
			$("#wrapper").fadeIn();
			document.getElementById("box-image").src = "<?php echo $imgurl?>";
			document.getElementById("box").style="";
			$("#box").fadeIn();
			if (document.getElementById("bing-box")) {
			document.getElementById("bing").src = "<?php echo $imgurl?>";
			document.getElementById("bing-box").style="text-align: center;";
			$("#bing-box").fadeIn();
			}
			}
	</script>
	<link href="favicon.ico" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" />
	<link href="favicon.ico" mce_href="favicon.ico" rel="icon" type="image/x-icon" />
	<link href="favicon.ico" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
</head>
<body>
    <div class="preloader-wrapper big active" id="preloader" style="position: fixed;margin:auto;left: 0;right: 0;top: 0;bottom: 0;z-index: 99;">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
<div id="wrapper">
	<div id="box">
	    	<img id="box-image" style="width: 100%;height: auto;"/>
	    	<div id="box-span" onclick="javascript:window.location.href='<?php echo home_url();?>'">
	    		<h2 class="white-text"><?php bloginfo('name'); ?></h2>
	    		<hr />
	    		<h5 class="white-text"><?php bloginfo('description');?></h5>
	    	</div>
	</div>
	<nav class="center-align" role="navigation" id="nav" style="background-color: transparent;box-shadow: none;">
		<div class="nav-wrapper container center-align">
	      <?php
	    wp_nav_menu(array(
		'menu' => 'header-menu',
		'theme_location' => 'header-menu'
		));
	      ?>
		</div>
	</nav>
<div class="divider" style="margin-bottom: 10px;"></div>