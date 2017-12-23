<?php
	defined('BASEPATH') OR exit('no direct script access allowed');

	class Login extends CI_Controller{
		public function index(){
			$this->load->view('login');
		}
		public function validate_login(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_email', 'User Email', 'required');
			$this->form_validation->set_rules('user_password', 'User Password','required');
			if ($this->form_validation->run()) {
				$user_email = $this->input->post('user_email');
				$user_password = $this->input->post('user_password');
				$this->load->model('main_model');
				if($this->main_model->login($user_email, $user_password)){
					$session_data = array(
						'user_email' => $user_email
					);
					$this->session->set_userdata($session_data);
					redirect(base_url().'main');
				}
				else{
					$this->session->set_flashdata('error','Invalid Username and Password');
					redirect(base_url().'login');
				}
			}
			else{
				$this->index();
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			$this->cart->destroy();
			redirect(base_url().'main');
		}

	}	
?>