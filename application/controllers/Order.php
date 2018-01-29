<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{

		$data['classics'] = $this->pizza_model->getClassicPizza(); 
		$data['specials'] = $this->pizza_model->getSpecialPizza();
		$data['toppings'] = $this->pizza_model->getToppings();

		$this->load->view('templates/header');
		$this->load->view('order',$data);
		$this->load->view('templates/footer');
	}

	public function admin()
	{

		$data['classics'] = $this->pizza_model->getClassicPizza(); 
		$data['specials'] = $this->pizza_model->getSpecialPizza();
		$data['toppings'] = $this->pizza_model->getToppings();

		$this->load->view('templates/header');
		$this->load->view('admin',$data);
		$this->load->view('templates/footer');
	}



	public function setOrder(){
		$this->pizza_model->setOrder();
		$this->session->set_flashdata('order_made','Thank you! Your order has been made!');
		redirect('/');

	}

	public function getItemClassic(){
		$data = array();
		
		$item = $_POST['item_id'];
		$result = $this->pizza_model->getItemClassic($item);

		foreach($result as $row){
		$data['name'] = $row['name'];
		$data['small'] = $row['small'];
		$data['medium'] = $row['medium'];
		$data['large'] = $row['large'];
		}
		echo json_encode($data);
	}

	public function getItemSpecial(){
		$data = array();
		
		$item = $_POST['item_id'];
		$result = $this->pizza_model->getItemSpecial($item);

		foreach($result as $row){
		$data['name'] = $row['name'];
		$data['small'] = $row['small'];
		$data['medium'] = $row['medium'];
		$data['large'] = $row['large'];
		}
		echo json_encode($data);
	}

	public function getItemTopping(){
		$data = array();
		
		$item = $_POST['item_id'];
		$result = $this->pizza_model->getItemTopping($item);

		foreach($result as $row){
		$data['name'] = $row['name'];
		$data['small'] = $row['small'];
		$data['medium'] = $row['medium'];
		$data['large'] = $row['large'];
		}
		echo json_encode($data);
	}

	public function update(){
		
			
			$this->pizza_model->update($this->input->post('item_id'));
			redirect('admin');
		
	}

	public function updateSpecial(){
			$this->pizza_model->updateSpecial($this->input->post('item_idSpecial'));
			redirect('admin');
	}

	public function updateTopping(){
		$this->pizza_model->updateTopping($this->input->post('item_idTopping'));
		redirect('admin');
}

	public function getOrders(){
		$data['orders'] = $this->pizza_model->getOrders();
		$this->load->view('templates/header');
		$this->load->view('orders',$data);
		$this->load->view('templates/footer');
	}
}
