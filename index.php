<?php
require_once 'global-library/database.php';
require_once 'include/functions.php';

	if(isset($_SESSION['user_id'])){ $userId = $_SESSION['user_id']; 
	} else{}
	
	checkUser();
	
	$content = 'home.php';
	$pageTitle = $sett_data['system_title'];
	$script = array('main.js');

	require_once 'include/template.php';
	
?>