<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_customers($id = 0)
	{
		if((int)$id==0){//id is 0, show all
			return $this->db->get('test_Customers');
			
		}else{//show one customer
			return $this->db->get_where('test_Customers',array('CustomerID'=>$id));

		}
	}#end get_customers()

	public function insert()
	{

		//var_dump($_POST);
		//die;
		$data = array(
			'FirstName' => $this->input->post('FirstName'),
			'LastName' => $this->input->post('LastName'),
			'Email' => $this->input->post('Email')
		);

		$this->db->insert('test_Customers', $data);
		return $this->db->insert_id();
	}#end insert
}