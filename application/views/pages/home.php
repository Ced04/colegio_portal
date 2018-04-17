<?php
	//Start session
	$this->load->library('session');

	//Try retriving data:
	if (isset($_SESSION['admin_user_id'])) {
		header('Location: '.base_url().'admin/');
	}else{
		
	}
?>	
	<div class="container">
		<?= $title ?>
		
