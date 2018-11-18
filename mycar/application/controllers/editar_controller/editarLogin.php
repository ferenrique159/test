<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editarLogin extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
    }

	public function editar()
	{
		$this->load->view('register_users/editarCliente');
	}

		public function editar2()
	{

		$rules ['cedulab']="trim|required";
		$this->validation->set_rules($rules);
		$campo ['cedulab']="cedula";

		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
        	$this->editar();
        }
        else
        {
				$this->load->model('users_models/register_models');
				$b = strtoupper(trim($_POST["cedulab"]));
				$data['datos'] = $this->register_models->editar_cliente($b);    
				if($data['datos'])
				{
				   
				$this->load->model('users_models/register_models');
				$data['lin'] = $this->register_models->consulta();
				$this->load->view('register_users/editarCliente2', $data);
				}
				else
				{
					$data['mensaje'] = "El cliente no se encuentra registrado";    
					 $this->load->view('register_users/editarCliente',$data);  
				 
				}   
		} 

	}


public function editar3()

	{
		var_dump($_POST['cedula']);
		$rules ['Nombre']="trim|alpha_numeric|required";
		$rules ['Apellido']="trim|alpha_numeric|required";
		$rules ['email']="trim|valid_email|required";
		$rules ['telefono']="trim|numeric|required";
		$rules ['concesionario']="trim|numeric|required";
		$this->validation->set_rules($rules);
		$campo ['Nombre']="Nombre de cliente";
		$campo ['Apellido']="apellido de usuario";
		
		$campo ['email']="correo de usuario";
		$campo ['telefono']="movil de usuario";
		$campo ['concesionario']="Concesionario de cliente";
		$this->validation->set_fields($campo);    
		
		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
		$this->load->model('users_models/register_models');
		$data['lin'] = $this->register_models->consulta();
		$this->load->view('register_users/editarCliente2', $data);
        } 
        else
        {
        // LAS CONDICIONES SE CUMPLEN

		$this->load->model('users_models/register_models');
		$data['prueba'] = $this->register_models->editar2_cliente();
		redirect('users_controller/registro_controller/ok');
		}
	
	}

	function ok ()
     {
        
        $data['mensaje'] = "Los Datos se han Guardados Correctamente";
        $data['mensaje_1']= "Para regresar a la pantalla de inicio presione";
        $data['ruta']= "index.php?/bienvenido/index";
		$data['ruta_1']= "index.php?/bienvenido/index";
        $this->load->view('ok',$data);  
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