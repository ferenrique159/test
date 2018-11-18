<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchLogin extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
    }

	public function search()
	{
		$data['datos'][0]['a']='';
		$this->load->view('register_users/searchCliente', $data);
	}

		public function search2()
	{

		$rules ['cedulab']="trim|required";
		$this->validation->set_rules($rules);
		$campo ['cedulab']="cedula";

		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
        	$this->search();
        }
        else
        {
				$this->load->model('users_models/register_models');
				$b = strtoupper(trim($_POST["cedulab"]));
				$data['datos'] = $this->register_models->consultar_cliente($b);    
				if((count($data['datos'])>0))
				{
				   
				 $this->load->view('register_users/buscarCliente',$data);
						//redirect('register_player/searchLogin/search2');
				}
				else
				{
					$data['mensaje'] = "El cliente no se encuentra registrado";    
					 $this->load->view('register_users/searchCliente',$data);  
				 
				}   
		} 

	}


	public function panel_adm()
	{
		$this->load->view('register_users/login');
	}

	public function panel_guest()
	{
		$this->load->view('register_users/loginusers');
	}


	public function logout()
    {
		$this->session->destroy();
		$this->load->view('bienvenido_views.php');
	}
}