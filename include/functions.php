<?php
function my_login_logo_one() { ?> 
    <style type="text/css"> 
    body.login div#login h1 a {
        background-image: url(<?php echo GT_GRATECH_USER_IMG_URL ?>/dashlogo.png);
		background-size: auto;
		width: auto;
    } 
    </style>
<?php 
}
add_action('login_enqueue_scripts', 'my_login_logo_one');

add_action('admin_bar_menu', 'gt_gratech_toolbar_link_to_mypage', 999);
function gt_gratech_toolbar_link_to_mypage($wp_admin_bar) {
	$args = array(
		'id'    => 'finance_report_menu',
		'title' => 'سامانه پشتیبانی شرکت گراتک',
		'href'  => "http://cp.gratech.ir/",
		'meta'  => array('class' => 'my-toolbar-page', 'target' => '_blank')
	);
	$wp_admin_bar->add_node($args);
}