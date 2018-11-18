<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginLogin extends CI_Controller {

	
	function __construct()
	{
	      parent::__construct();
          $this->load->helper(array('form', 'url'));
          //$this->load->herper('mail');
          $this->load->library('parser'); 
          if (($this->session->userdata('usuario')==NULL) and ($this->session->userdata('login')==NULL))
          {
          redirect("/bienvenido/index");    
          }
	}
	
	public function Login()
	{
		$this->load->view('register_users/login');
	}
}