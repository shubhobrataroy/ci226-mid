<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller{
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('product_model');
	}
	public function index(){
	  		$this->load->view('view_product');
	}
	public function addproduct(){
	  	
			if(!$this->input->post('buttonSubmit'))
			{		
				$data['message'] = '';
				$this->load->view('view_addpro', $data);
			}
			
			else
			{
				if($this->form_validation->run('addpro'))
				{
					$data['name']=$this->input->post('pname');
					$data['cat']=$this->input->post('cat');
					$data['qty']=$this->input->post('qty');
					$data['price']=$this->input->post('price');
				
					$this->product_model->insert($data['name'],$data['price'],$data['qty'],$data['cat']);
					redirect('http://localhost/ci226/product');		
				}
				else
				{
					$data['message'] = validation_errors();
					$this->load->view('view_addpro', $data);
				}
			}
					
	}
	public function showallproducts(){
	  		$data['pros'] = $this->product_model->getAll();
			$this->load->view('view_allproducts', $data);
	}
	public function searchproduct(){

			$data['name']=$this->input->post('pname');
			$data['searchresult'] = $this->product_model->search($data['name']);
			$this->load->view('view_searchproduct', $data);
	}
	public function edit(){

			$data['name']=$this->input->post('pname');
			$data['searchresult'] = $this->product_model->search($data['name']);
			$this->load->view('view_searchproduct', $data);
	}
	public function delete(){

			$data['name']=$this->input->post('pname');
			$data['searchresult'] = $this->product_model->delete($data['name']);
            redirect('http://localhost/ci226/product');
	}
	
}
