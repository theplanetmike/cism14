<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index($id=0)
	{
		//$this->load->helper('url');
		$this->load->model('Customers_model');
		//add title
		$this->config->set_item('title', 'Customer Title');
		$data['query'] = $this->Customers_model->get_customers($id);
		$this->load->view('customer/default', $data);
		
	}
}