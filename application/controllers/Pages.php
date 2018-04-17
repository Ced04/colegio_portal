<?php

	/**
	* 
	*/
	class Pages extends CI_Controller{

		/** VIEWING OF PAGES **/
		public function view($pages = 'home'){
			if (!file_exists(APPPATH.'views/pages/'.$pages.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($pages);
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('pages/'.$pages, $data);
			$this->load->view('layout/footer');
		}

		
		public function student(){
			$data['title'] = '';
		}
	}
?>