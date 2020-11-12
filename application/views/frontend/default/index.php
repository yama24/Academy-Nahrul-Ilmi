<!DOCTYPE html>
<html lang="en">

<head>
	<?php if ($page_name == 'course_page') :
		$title = $this->crud_model->get_course_by_id($course_id)->row_array() ?>
		<title><?php echo $title['title'] . ' | ' . get_settings('system_name'); ?></title>
	<?php else : ?>
		<title><?php echo ucwords($page_title) . ' | ' . get_settings('system_name'); ?></title>
	<?php endif; ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

	<link rel="icon" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="././evone01/css/framework7.bundle.css">
	<link rel="stylesheet" href="././evone01/css/font-awesome.css">
	<link rel="stylesheet" href="././evone01/css/style.css">


	<?php
	$seo_pages = array('course_page');
	if (in_array($page_name, $seo_pages)) :
		$course_details = $this->crud_model->get_course_by_id($course_id)->row_array(); ?>
		<meta name="keywords" content="<?php echo $course_details['meta_keywords']; ?>" />
		<meta name="description" content="<?php echo $course_details['meta_description']; ?>" />
	<?php else : ?>
		<meta name="keywords" content="<?php echo get_settings('website_keywords'); ?>" />
		<meta name="description" content="<?php echo get_settings('website_description'); ?>" />
	<?php endif; ?>

	<link name="favicon" type="image/x-icon" href="<?php echo base_url() . 'uploads/system/favicon.png' ?>" rel="shortcut icon" />



</head>

<body>
	<?php
	// if ($this->session->userdata('user_login')) {
	// 	include 'logged_in_header.php';
	// } else {
	// 	include 'logged_out_header.php';
	// }

	if (get_frontend_settings('cookie_status') == 'active') :
		include 'eu-cookie.php';
	endif;

	include $page_name . '.php';
	// include 'footer.php';
	// include 'includes_bottom.php';
	// include 'modal.php';
	// include 'common_scripts.php';
	?>



</body>

</html>
