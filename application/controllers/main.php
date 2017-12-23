<?php
	defined('BASEPATH') OR exit('no direct script access allowed');
	class Main extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('main_model');
		}
		public function index(){
			$count = 0;
			if (empty($this->cart->contents())) {
				$data['count'] = $count;
			}
			else{
				$cart_data = $this->cart->contents();
				foreach ($cart_data as $row) {
					$count += $row['qty']; 
				}
				$data['count'] = $count;
			}
			$data['all_product'] = $this->main_model->all_product();
			$this->load->view('main', $data);
		}
		public function add_cart(){
			$product_id = $this->input->post('product_id');
			$product_quantity = $this->input->post('product_quantity');
			$data['product_detail'] = $this->main_model->get_product($product_id);
			foreach($data['product_detail']->result() as $row){
				$product_cart = array(
					'id' => $row->product_id,
					'name' => $row->product_name,
					'price' => $row->product_cost,
					'qty' => $product_quantity
				);
				$this->cart->insert($product_cart);
				$this->index();
			}	
		}
	}
?>