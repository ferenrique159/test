<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class deleteLogin extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
    }

	public function delete()
	{
		$data['datos'][0]['a']='';
		$this->load->view('register_users/deleteCliente', $data);
	}

		public function delete2()
	{

		$rules ['cedulab']="trim|required";
		$this->validation->set_rules($rules);
		$campo ['cedulab']="cedula";

		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
        	$this->delete();
        }
        else
        {
				$this->load->model('users_models/register_models');
				$b = strtoupper(trim($_POST["cedulab"]));
				$data['datos'] = $this->register_models->delete_cliente($b); 
				if($data['datos'])
				{
				   $data['mensaje'] = "El cliente ha sido eliminado correctamente"; 
				}
				else
				{
					$data['mensaje'] = "El cliente indicado no exite";      
				} 
				$this->load->view('register_users/deleteCliente',$data);  
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