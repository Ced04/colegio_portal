<?php
	//Start session
	$this->load->library('session');

	if (!isset($_SESSION['admin_user_id'])) {
		header('Location: '.base_url().'admin/login');
	}else{
		
	}
?>
<div class="container">
	
	<h2 id="title"><?= $title ?></h2>
	<hr>