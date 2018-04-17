<?php
	//Start session
	$this->load->library('session');

	if (!isset($_SESSION['admin_user_id'])) {
		header('Location: '.base_url().'admin/login');
	}else{
		
	}

	extract($get_user);
?>
<div class="container">
	
	<h2 id="title"><?= $title.', '.$fname.' '.$mname[0].'. '.$lname  ?></h2>
	<hr>