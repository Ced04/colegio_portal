<?php
	//Start session
	$this->load->library('session');

	//Try retriving data:
	if (isset($_SESSION['admin_user_id'])) {
?>
<nav class="navbar navbar-m2p sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin">
                <small id="brandname">Colegio de Sto. Domingo de Silos</small>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Dashboard -->
                <li class="active open">
                  <a href="<?php echo base_url(); ?>admin/dashboard">
                      <span class="pull-right hidden-xs showopacity glyphicon material-icons">dashboard</span> Dashboard
                  </a>
                </li>
                <li class="separator">Annoucement</li>
                <!-- SMS Notification -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/sms_notification">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">textsms</span> SMS Notification
                    </a>
                </li>
                <!-- Online Annoucement -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/online_announcement">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">laptop_chromebook</span> Online Annoucement
                    </a>
                </li>
                <li class="separator">Management</li>
                <!-- Account Manager -->
                <li class="#">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">group</span>
                        Account Manager <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="<?php echo base_url(); ?>admin/acc_student"> Student</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/acc_employee"> Employee</a></li>
                    </ul>
                </li>
                <!-- Grade -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/grade_management">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">grade</span> Grade Management
                    </a>
                </li>
                <!-- Schedule Management -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/school_setup">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">settings_applications</span> School Setup
                    </a>
                </li>
                <li class="separator">System</li>
                
                <!-- Backup and Restore -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/backup_restore">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">settings_backup_restore</span> Backup and Restore
                    </a>
                </li>
                <!-- Account Settings -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/account_settings">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">settings</span> Account Settings
                    </a>
                </li>
                <!-- Help Center -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/help_center">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">help</span> Help Center
                    </a>
                </li>
                <!-- Exit -->
                <li>
                    <a href="<?php echo base_url(); ?>admin/logout">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">exit_to_app</span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php		
	}else{ 
?>
<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">       
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">          
				<span class="sr-only">Toggle navigation</span>          
				<span class="icon-bar"></span>          
				<span class="icon-bar"></span>          
				<span class="icon-bar"></span>       
			</button>       
			<a class="navbar-brand" href="<?php echo base_url(); ?>">CSDS</a>    
		</div>    
		<div class="collapse navbar-collapse" id="example-navbar-collapse">       
			<ul class="nav navbar-nav">
				<li class="dropdown">             
				 	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> About <b class="caret"></b></a>             
				 	<ul class="dropdown-menu">                
				 		<li><a href="<?php echo base_url(); ?>vision-mission">Vision, Mission and Goals</a></li>                
				 		<li><a href="<?php echo base_url(); ?>school-history">School History</a></li>
				 	</ul>          
				</li>
				<li class="dropdown">             
				 	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admission <b class="caret"></b></a>             
				 	<ul class="dropdown-menu">                
				 		<li><a href="<?php echo base_url(); ?>admission-registration">Admission and Registration</a></li>                
				 		<li><a href="<?php echo base_url(); ?>schedule-of-fees">Schedule of Fees</a></li>
				 	</ul>          
				</li>
				<li class="dropdown">             
				 	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Academics <b class="caret"></b></a>             
				 	<ul class="dropdown-menu">                
				 		<li><a href="<?php echo base_url(); ?>office-services">Office and Services</a></li>                
				 		<li><a href="<?php echo base_url(); ?>school-college">Schools and Colleges</a></li>
				 	</ul>          
				</li>
				<li><a href="<?php echo base_url(); ?>students">Students</a></li>
				<li><a href="<?php echo base_url(); ?>calendar">Collegiate Calendar</a></li>
				<li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
			</ul>    
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">             
				 	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services and Application <b class="caret"></b></a>             
				 	<ul class="dropdown-menu">                
				 		<li><a href="#">Student Portal</a></li>                
				 		<li><a href="#">Faculty Portal</a></li>
				 		<li><a href="#">Online Enrollment</a></li>
				 	</ul>          
				</li>
			</ul>
		</div> 
	</nav> 
<?php		
	}
?>
