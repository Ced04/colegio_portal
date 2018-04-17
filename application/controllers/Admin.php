<?php

	/**
	* 
	*/
	class Admin extends CI_Controller{


		//** LOAD Admin_model **//
		public function __construct(){
			parent :: __construct();
			$this->load->model("Admin_model","admin");
		}

		/** VIEWING OF PAGES **/
		public function view($page = 'index'){
			if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/'.$page, $data);
			$this->load->view('layout/footer');
		}
		

		/** ADMIN LOGIN PAGE **/
		public function login(){
			
			$this->load->view('layout/header');
			$this->load->view('admin/login');
			$this->load->view('layout/footer');
		}

		/** ADMIN LOGIN FUNCTION**/
		public function admin_login(){
			$admin_id = $this->input->post('admin_id');
			$password = $this->input->post('password');

			if ($this->admin->admin_login($admin_id, $password)) {
				$session_data = array('admin_user_id' => $admin_id);
				$this->session->set_userdata($session_data);
				echo json_encode('Successfully login.');
			}else{
				echo json_encode("Account didn't recognized.");
			}
		}

		/** ADMIN INDEX PAGE**/
		public function index(){
			if ($this->session->userdata('admin_user_id') != '') {
				$uid = $this->session->userdata('admin_user_id');
				$data['admin_user_id'] = $uid;

				$data['title'] = 'Welcome ';

				//Model Function
				if ($this->admin->get_user($uid)) {
					$data['get_user'] = $this->admin->get_user($uid);
				}else{
					
				}

				$this->load->view('layout/header');
				$this->load->view('layout/navbar');
				$this->load->view('admin/index', $data);
				$this->load->view('layout/footer');
			}else{
				redirect(base_url().'admin/login');
			}			
		}

		/** ADMIN DASHBOARD **/
		public function dashboard(){
			$data['title'] = 'Dashboard';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN SMS ANNOUNCEMENT **/
		public function sms_notification(){
			$data['title'] = 'SMS Notification';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/sms-announcement', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN ONLINE ANNOUNCEMENT **/
		public function online_announcement(){
			$data['title'] = 'Online Annoucement';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/online-announcement', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN STUDENT ACCOUNT **/
		public function acc_student(){
			$data['title'] = 'Student Account';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/acc-student', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN STUDENT ACCOUNT **/
		public function acc_employee(){
			$data['title'] = 'Employee Account';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/acc-employee', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN GRADE MANAGEMENT **/
		public function grade_management(){
			$data['title'] = 'Grade Management';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/grade-management', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN SCHOOL MANAGEMENT **/
		public function school_setup(){
			$data['title'] = 'School Setup';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/school-setup', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN SCHEDULE MANAGEMENT **/
		public function schedule_management(){
			$data['title'] = 'Schedule Management';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/schedule-management', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN TRACKS AND CURRICULUMN **/
		public function tracks_curriculumn(){
			$data['title'] = 'Tracks and Curriculumn';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/tracks-curriculumn', $data);
			$this->load->view('layout/footer');
		}		

		

		/** ADMIN BACKUP AND RESTORE **/
		public function backup_restore(){
			$data['title'] = 'Backup and Restore';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/backup-restore', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN ACCOUNT SETTINGS **/
		public function account_settings(){
			$data['title'] = 'Account Settings';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/account-settings', $data);
			$this->load->view('layout/footer');
		}

		/** ADMIN HELP CENTER **/
		public function help_center(){
			$data['title'] = 'Help Center';

			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('admin/help-center', $data);
			$this->load->view('layout/footer');
		}

		/** LOGOUT ADMIN USER **/
		public function logout(){

		    $this->session->unset_userdata('admin_user_id');
		    $this->session->sess_destroy();

		    redirect(base_url().'admin/login');
		}

		

		


			
	}
?>