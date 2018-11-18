<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JoinLogin extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
    }

	public function join()
	{
		$this->load->view('login/join');
	}

		public function login()
	{

		$rules ['email']="trim|required";
		$rules ['pass']="trim|required";
		$this->validation->set_rules($rules);
		$campo ['email']="email";
		$campo ['pass']="password";

		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
        	$this->join();
        }
        else
        {
				$this->load->model('users_models/register_models');
				$usu = strtoupper(trim($_POST["email"]));
				$con = trim($_POST["pass"]);
				$data['datos'] = $this->register_models->valida_users($usu, $con);    
				if((count($data['datos'])>0))
				{
				
						$this->session->set_userdata('usuario',$data['datos'] [0]['a']);    
						$this->session->set_userdata('login',$data['datos'] [0]['b'].$data['datos'] [0]['c']); 
						redirect('login_controller/LoginLogin/Login');
				}
				else
				{
					$data['mensaje'] = "Nombre de cliente o Contrase&ntilde;a Incorrecta";    
					$this->load->view('login/join',$data);   
				 
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