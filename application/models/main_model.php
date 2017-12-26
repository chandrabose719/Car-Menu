<?php
	class Main_model extends CI_Model{
		public function register($data){
			$this->db->insert('user_details', $data);
		}
		public function login($user_email, $user_password){
			$this->db->where('user_email', $user_email);
			$this->db->where('user_password', $user_password);
			$query = $this->db->get('user_details');
			if ($query->num_rows() == 1 ) {
				return true;
			}
			else{
				return false;
			}
		}
		public function get_userName($user_email){
			$query = $this->db->query("SELECT user_name FROM user_details WHERE user_email = '$user_email'");
			return $query;
		}
		public function all_product(){
			$query = $this->db->get('product_details');
			return $query;
		}
		public function get_product($product_id){
			$query = $this->db->query("SELECT * FROM product_details WHERE product_id = '$product_id'");
			return $query;	
		}
		public function insertPayment($data){
			$this->db->insert('payment_details', $data);
		}
	}
?>