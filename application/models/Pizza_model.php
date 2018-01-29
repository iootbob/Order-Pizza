<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pizza_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getClassicPizza(){
		$this->db->select('*');
		$this->db->from('classic');
		 $this->db->join('classic_price','classic_price.product_id = classic.product_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getSpecialPizza(){
		$this->db->select('*');
		$this->db->from('special');
		$this->db->join('special_price','special_price.product_id = special.product_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function setOrder(){
		

		foreach($this->pizza_model->check_order_id() as $check_id){
			$max_count = $check_id['order_id'];
		}
		

		foreach($this->cart->contents() as $item){

			$data = array(
			"name" => $item['name'] ,
			"quantity" => $item['qty'],
			"price" => $item['price'],
			"subtotal" => $item['subtotal'],
			"order_id" => (int)$max_count + 1
			);

			$this->db->insert('order_pizza',$data);
		}

		$this->cart->destroy();
	}

	public function check_order_id(){
		
		
		$this->db->select_max('order_id');
		
		
		//$increment = $query + 1;
		$query = $this->db->get('order_pizza');
		return $query->row_array();

	}

	public function getItemClassic($item){
		$this->db->from('classic_price');
		
		$this->db->where('product_id ',$item);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getToppings(){
		$this->db->select('*');
		$this->db->from('toppings');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getItemSpecial($item){
		$this->db->from('special_price');
		
		$this->db->where('product_id ',$item);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getItemTopping($item){
		$this->db->from('toppings');
		
		$this->db->where('product_id ',$item);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update($id){

		$data = array(
			'small' => $this->input->post('small'),
			'medium' => $this->input->post('medium'),
			'large' => $this->input->post('large')
		);


		$this->db->where('product_id',$id);
		$this->db->update('classic_price', $data);
	}

	public function updateSpecial($id){

		$data = array(
			'small' => $this->input->post('small'),
			'medium' => $this->input->post('medium'),
			'large' => $this->input->post('large')
		);


		$this->db->where('product_id',$id);
		$this->db->update('special_price', $data);
	}

	public function updateTopping($id){

		$data = array(
			'small' => $this->input->post('small'),
			'medium' => $this->input->post('medium'),
			'large' => $this->input->post('large')
		);


		$this->db->where('product_id',$id);
		$this->db->update('toppings', $data);
	}

	public function getOrders(){
		$this->db->order_by('order_id',"DESC");
		$query = $this->db->get('order_pizza');
		return $query->result_array();
	}
}
