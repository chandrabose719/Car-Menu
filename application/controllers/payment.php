<?php
	defined('BASEPATH') OR exit('no direct script access allowed');
	class Payment extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('user_email') == '') {
				redirect(base_url().'login');
			}
			$this->load->library('paypal_lib');
			$this->load->model('main_model');
			$cart_total;
			$cart_qty;
		}
		public function index(){
			$cart_total = 0;
			$cart_qty = 0;
			$user_email = $this->session->userdata('user_email');
			$data['user_name'] = $this->main_model->get_userName($user_email);
			$cart_product = $this->cart->contents();
			foreach ($cart_product as $row) {
				$cart_total += $row['subtotal'];
				$cart_qty += $row['qty'];
			}
			$data['name'] = 'My Site Product';
			$data['cart_total'] = $cart_total;
			$data['cart_qty'] = $cart_qty;
			$this->load->view('payment', $data);
		}
		public function paypal(){
	    	$successUrl = base_url().'payment/success';
			$cancelUrl = base_url().'payment';
			$notifyUrl = base_url().'payment/ipn';
	        $userID = 1;
	        $name = 'My Site Product';
	        $item_number = $this->input->post('item_number');
	        $amount = $this->input->post('amount');
	        $logo = base_url().'assets/images/header-title.png';
	        $this->paypal_lib->add_field('return', $successUrl);
	        $this->paypal_lib->add_field('cancel_return', $cancelUrl);
	        $this->paypal_lib->add_field('notify_url', $notifyUrl);
	        $this->paypal_lib->add_field('item_name', $name);
	        $this->paypal_lib->add_field('custom', $userID);
	        $this->paypal_lib->add_field('item_number', $item_number);
	        $this->paypal_lib->add_field('amount', $amount);        
	        $this->paypal_lib->image($logo);
	        $this->paypal_lib->paypal_auto_form();
	    }
	    public function success(){
	    	$paypalInfo = $this->input->get();
          
	        $data['item_number'] = $paypalInfo['item_number']; 
	        $data['txn_id'] = $paypalInfo["tx"];
	        $data['payment_amt'] = $paypalInfo["amt"];
	        $data['currency_code'] = $paypalInfo["cc"];
	        $data['status'] = $paypalInfo["st"];
	        $this->load->view('success', $data);
	    }
	    function ipn(){
	        $paypalInfo    = $this->input->post();

	        $data['user_id'] = $paypalInfo['custom'];
	        $data['product_id']    = $paypalInfo["item_number"];
	        $data['txn_id']    = $paypalInfo["txn_id"];
	        $data['payment_gross'] = $paypalInfo["mc_gross"];
	        $data['currency_code'] = $paypalInfo["mc_currency"];
	        $data['payer_email'] = $paypalInfo["payer_email"];
	        $data['payment_status']    = $paypalInfo["payment_status"];

	        $paypalURL = $this->paypal_lib->paypal_url;        
	        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
	        if(preg_match("/VERIFIED/i",$result)){
	            $this->main_model->insertPayment($data);
	        }
	    }    
	}	
?>