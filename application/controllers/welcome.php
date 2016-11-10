<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		
		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('password','Password','required');
		


		if ($this->form_validation->run() == FALSE) {
            $data['message']="";
            $this->load->view('view_welcome',$data);
         } 

         else 
         	{

         		if($this->login_model->validate($this->input->post('name'),$this->input->post('password'))) {

                    $this->session->set_userdata("username",$this->input->post('name'));
                    $this->load->view('view_success');
                }
         		else
         		{
                    $data['message']="Wrong username or password";
         			$this->load->view('view_welcome',$data);

         		}
         	}

		
	}

	public function logout()
    {

        $this->session->sess_destroy();
        $this->index();
    }

}