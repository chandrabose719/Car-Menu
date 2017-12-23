<?php
	defined('BASEPATH') OR exit('no direct script access allowed');
	class Register extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('main_model');
		}
		public function index(){
			$this->load->view('register');
		}
		public function register_validate(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha');
			$this->form_validation->set_rules('user_email', 'User Email', 'trim|required|valid_email|is_unique[user_details.user_email]');
			$this->form_validation->set_rules('user_password','User Password', 'trim|required');
			if($this->form_validation->run()){
				$user_name = $this->input->post('user_name');
				$user_email = $this->input->post('user_email');
				$user_password = $this->input->post('user_password');
				$data = array(
					'user_name' => $user_name,
					'user_email' => $user_email,
					'user_password' => $user_password
					);
				$this->main_model->register($data);
				redirect(base_url().'login');
			}
			else{
				$this->index();
			}
		}
	}
?>