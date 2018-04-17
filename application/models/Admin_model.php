<?php
	/**
	* 
	*/
	class Admin_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}


		//** FETCHING ADMIN ACCOUNT INTO DATABASE **//
		public function admin_login($admin_id, $password){
			$this->db->where('user_id', $admin_id);
			$this->db->where('password', $password);
			$this->db->where('access_type', 'admin');
			$query = $this->db->get('user_tbl');
			if ($query->num_rows() == 0 ) {
				return false;
			}else{
				return $query->row_array();
			}
		}

		/** GET ADMIN USER DATA **/
		public function get_user($user_id){
			$this->db->where('user_id', $user_id);
			$query = $this->db->get('user_info');

			if ($query->num_rows() != 0) {
				return $query->row_array();
			}else{
				return false;
			}
		}
	}
?>