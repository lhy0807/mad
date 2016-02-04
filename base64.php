<?php
$imgPath = get_stylesheet_directory_uri().'/bing.php';
//获得图片信息 $imgPath 可以为远程地址
list( $srcWidth, $srcHeight, $type ) = getimagesize( $imgPath );
switch( $type ) {
case 1: $imgCreate = 'ImageCreateFromGIF'; break;
case 2: $imgCreate = 'ImageCreateFromJPEG'; break;
case 3: $imgCreate = 'ImageCreateFromPNG'; break;
default: return false;
}
$orig = $imgCreate( $imgPath );
//开启缓存
ob_start();
//生成图片
switch ($type)
{
case 1: imagegif($orig); break;
case 2: imagejpeg($orig); break; // best quality
case 3: imagepng($orig); break; // no compression
default: echo ''; break;
}
//将图片存入变量
$imageCode = ob_get_contents();
ob_end_clean();
$img_base64 = base64_encode($imageCode);
?>