<?php
	defined('BASEPATH') OR exit('No Derict script access allowed');

	class Home extends CI_Controller{
		
		public function index(){
			$this->load->view('home');
		}
	}

?>

