<!DOCTYPE html>
<?php
if(!isset($_COOKIE['r'])||!isset($_COOKIE['g'])||!isset($_COOKIE['b'])) {
	setcookie("r", imgColor()['r'], time()+3600);
	setcookie("g", imgColor()['g'], time()+3600);
	setcookie("b", imgColor()['b'], time()+3600);
	?><script>window.location.href="";</script><?php
}
?>
<html>
	<script>$("#wrapper").hide();document.getElementById("box").style="display:none;";document.getElementById("bing-box").style="display:none;";</script>
<head>
	<!--设置UTF-8编码-->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
	<!--设置移动端响应式设计-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<!--网站标题-->
	<title><?php bloginfo('name');?><?php wp_title('|');?></title>
	<meta name="description" content="<?php bloginfo('description');?>"/>
	<!-- CSS  -->
	<link href="http://fonts.useso.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen,projection"/>
	<?php wp_head(); do_action('wp_head');?>
	<script>
		window.onload = function(){
			$("#preloader").fadeOut();
			$("#wrapper").fadeIn();
			document.getElementById("box-image").src = "<?php echo get_stylesheet_directory_uri().'/bing.php'?>";
			document.getElementById("box").style="";
			$("#box").fadeIn();
			if (document.getElementById("bing-box")) {
			document.getElementById("bing").src = "<?php echo get_stylesheet_directory_uri().'/bing.php'?>";
			document.getElementById("bing-box").style="text-align: center;";
			$("#bing-box").fadeIn();
			}
			}
	</script>
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
	<nav role="navigation" id="nav" style="background-color: rgb(<?php echo $_COOKIE['r'].','.$_COOKIE['g'].','.$_COOKIE['b'];?>);">
		<div class="nav-wrapper container">
		<a id="logo-container" href="<?php bloginfo('url');?>" class="brand-logo white-text"><?php bloginfo('name'); ?></a>
	      <?php
	    wp_nav_menu(array(
		'menu' => 'header-menu',
		'menu_class' => 'right hide-on-med-and-down',
		'theme_location' => 'header-menu',
		'link_before' => '<div style="color:#ffffff">',
		'link_after' => '</div>'
		));
	      ?>
		</div>
	</nav>
	<div id="box">
    	<img id="box-image" style="width: 100%;height: auto;"/>
    	<h5 class="white-text" id="box-span"><?php bloginfo('description');?></h5>
	</div>