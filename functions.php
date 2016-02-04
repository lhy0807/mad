<?php 

add_action( 'after_setup_theme', 'mad_theme_setup' );
function mad_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_filter('the_content', 'addhighslideclass_replace');
	add_action( 'init', 'mad_register_menus' );
	add_action('wp_head','catch_that_image');
	add_custom_background();
	mad_register_menus();
}

function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
//获取文章中第一张图片的路径并输出
$first_img = $matches [1] [0];
//如果文章无图片，获取自定义图片
if(empty($first_img)){ //Defines a default image
$first_img = "";
}
return $first_img;
}

/**
* WordPress集成Auto-highslide图片灯箱（按需加载&无需插件）
* 文章地址：http://www.weeiy.com/wordpress-auto-highslide-code.html
*/
function addhighslideclass_replace ($content)
{   global $post;
 $pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 class="highslide-image" onclick="return hs.expand(this);"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

function mad_register_menus() {
	if(function_exists('register_nav_menus')){
	register_nav_menus(array(
	'header-menu' => ('header-menu'),
	'footer-menu' => ('footer-menu')
	));
	}
}

/**
 * 提示安装插件
 */
add_action('admin_notices', 'showAdminMessages');

function showAdminMessages()
{
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// 下载多说插件
	if(!is_plugin_active( 'duoshuo/duoshuo.php' ))
	{
		$plugin_messages[] = '本主题需要多说插件的支持， <a href="http://wordpress.org/extend/plugins/duoshuo/">可以从这里下载</a>.';
	}

	if(count($plugin_messages) > 0)
	{
		echo '<div id="message" class="error">';

			foreach($plugin_messages as $message)
			{
				echo '<p><strong>'.$message.'</strong></p>';
			}

		echo '</div>';
	}
}
//头像重置到i.leiue.com
add_filter( 'get_avatar' , 'my_custom_avatar' , 1 , 5 );
function my_custom_avatar( $avatar, $id_or_email, $size, $default, $alt) {
	if (filter_var($id_or_email, FILTER_VALIDATE_EMAIL)) {//判断是否为邮箱
		$email = $id_or_email;//用户邮箱
		$user = get_user_by( 'email', $email );//通过邮箱查询用户信息
	}else{
		$uid = (int) $id_or_email;//获取用户ID
		$user = get_user_by( 'id', $uid );//通过ID查询用户信息
	}
 
	//$user_login = $user->user_login;//用户名
	$email = $user->user_email;//用户邮箱
	$alt = $user->user_nicename;//用户昵称
	if(get_comment_author_email( $comment )){//通过评论获取邮箱
		$email = get_comment_author_email( $comment );
		$alt = get_comment_author( $comment );
	}
 
    $avatar = "http://i.leiue.com/avatar.php?email=".$email;
    $avatar = "<img alt='{$alt}' src='{$avatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
 
    return $avatar;
}
?>