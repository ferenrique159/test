<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro_controller extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
          
	}
	public function index()
	{
		$this->load->model('users_models/register_models');
		$data['lin'] = $this->register_models->consulta();
		$this->load->view('register_users/registro', $data);
		
	}
	public function register()

	{
		
		$rules ['Nombre']="trim|alpha_numeric|required";
		$rules ['Apellido']="trim|alpha_numeric|required";
		$rules ['Cedula']="trim|numeric|required";
		$rules ['email']="trim|valid_email|required";
		$rules ['telefono']="trim|numeric|required";
		$rules ['password']="trim|required";
		$rules ['password2']="trim|required";
		$rules ['concesionario']="trim|numeric|required";
		$this->validation->set_rules($rules);
		$campo ['Nombre']="Nombre de cliente";
		$campo ['Apellido']="apellido de usuario";
		$campo ['Cedula']="cedula de usuario";
		$campo ['email']="correo de usuario";
		$campo ['telefono']="movil de usuario";
		$campo ['password']="contraseña de usuario";
		$campo ['password2']="contraseña de usuario";
		$campo ['concesionario']="Concesionario de cliente";
		$this->validation->set_fields($campo);    
		
		if($this->validation->run()== FALSE)
        {
        // LAS CONDICIONES NO SE CUMPLIERON
		$this->load->model('users_models/register_models');
		$data['lin'] = $this->register_models->consulta();
		$this->load->view('register_users/registro', $data);
        } 
        else
        {
        // LAS CONDICIONES SE CUMPLEN

		$this->load->model('users_models/register_models');
		$data['prueba'] = $this->register_models->save();
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

}
