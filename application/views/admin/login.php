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
		<div class="row col-md-4 col-md-offset-4">
			<div class="panel panel-default" id="admin-panel">
				<div class="panel-heading" id="admin-panel-heading">
					<h4 class="text-center">ADMINISTRATOR LOGIN</h4>
				</div>
				<div class="panel-body">
					<form id="adminLogin">
						<div>
							<input type="text" id="admin_id" required>
							<small id="id-alert"></small>
							<label>Admin ID</label>
						</div>
						<div>
							<input type="password" id="password" required>
							<small id="pass-alert"></small>
							<label>Password</label>
						</div>
						<button class="btn btn-default" name="submit"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
					</form>
				</div>
			</div>
		</div>