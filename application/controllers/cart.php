<?php
	defined('BASEPATH') OR exit('no direct script access allowed');
	class Cart extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$check_cart = $this->cart->contents();
			if (empty($check_cart)) {
				redirect(base_url().'main');
			}
			$this->load->model('main_model');
		}
		public function index(){
			$data['cart_product'] = $this->cart->contents();
			$this->load->view('cart', $data);
		}
		public function productDecreament($id){
			$cart_product = $this->cart->contents();
			foreach ($cart_product as $key) {
				if ($key['id'] == $id) {		
					$name = $key['name'];
					$price = $key['price'];
					$qty = $key['qty']-1;
				}
			}
			if($qty>0){
				$update_cart = array(
					'id' => $id,
					'name' => $name,
					'price' => $price,
					'qty' => $qty
					
				);
				$this->cart->update($update_cart);
			}
			else{
				$this->cart->delete($id);	
			}
			redirect(base_url().'cart');
		}
		public function productIncreament($id){
			$cart_product = $this->cart->contents();
			foreach ($cart_product as $key) {
				if ($key['id'] == $id) {		
					$name = $key['name'];
					$price = $key['price'];
					$qty = $key['qty']+1;
				}
			}
			$update_cart = array(
				'id' => $id,
				'name' => $name,
				'price' => $price,
				'qty' => $qty
				
			);
			$this->cart->update($update_cart);
			redirect(base_url().'cart');
		}
	}
?>