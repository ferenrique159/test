<?php 
	/**
	* 
	*/
	class Register_models extends CI_Model{
		

		public function __construct()
		{
			$this->load->database();
		}

		function save(){

			 $conexion = $this->load->database();
			 $resultado = $this->db->query("INSERT INTO cliente (nombre, apellido, cedula, email, telefono, concesionario_idconcesionario, password) VALUES ('".strtoupper($_POST['Nombre'])."','".strtoupper($_POST['Apellido'])."','".$_POST['Cedula']."','".strtoupper($_POST['email'])."','".$_POST['telefono']."','".$_POST['concesionario']."','".$_POST['password']."')");
		}
		function consulta(){

			 $conexion = $this->load->database();
			 $resultado = $this->db->query("SELECT idconcesionario as cod, razon_social as des FROM concesionario ORDER BY razon_social");
			 return $resultado->result_array();

		}

		function valida_users($user,$pass){
			 
			 $conexion = $this->load->database();
			 $resultado = $this->db->query("SELECT idcliente as a, nombre as b, apellido as c FROM cliente where email = '".$user."' and password = '".$pass."'");
			 return $resultado->result_array();

		}

		function saveScore(){

		$conexion = $this->load->database();
		
		for ($i=0; $i <= $this->session->userdata('campo_num'); $i++)
		{
			
		 	if(($this->session->userdata('equipo1'.$i.'')!= '') and ($this->session->userdata('equipo1'.$i.'')!= 'undefined'))
		 	{
				$this->db->query("INSERT INTO resultado ( equipo_1, result_1, equipo_2, result_2, usuario_idusuario, idjornada_equip) 
				VALUES (".$this->session->userdata('equipo1'.$i.'').",".$this->session->userdata('score1'.$i.'').", ".$this->session->userdata('equipo2'.$i.'').",".$this->session->userdata('score2'.$i.'').", ".$this->session->userdata('usuario').",".$_POST['jornada'].")");
			}
		}
		}


		function consultar_cliente($b){

			$conexion = $this->load->database();
			$resultado = $this->db->query("SELECT nombre as a, cedula as b, apellido as c, cliente.email as d, cliente.telefono as e, concesionario.razon_social as f FROM cliente, concesionario where cliente.concesionario_idconcesionario = concesionario.idconcesionario and cedula = ".$b."");
			return $resultado->result_array();
	   }

	   function delete_cliente($b){

			$conexion = $this->load->database();
			$resultado = $this->db->query("SELECT cedula as b FROM cliente where cedula = ".$b."");
			
			if (count($resultado->result_array())>0){

			$resultado = $this->db->query("DELETE FROM cliente where cedula = ".$b."");
			return $resultado;
			}else {
			return $resultado= false;
			}
			
	   }

	   	function editar_cliente($b){

			$conexion = $this->load->database();
			$resultado = $this->db->query("SELECT nombre as a, cedula as b, apellido as c, cliente.email as d, cliente.telefono as e, concesionario.razon_social as f FROM cliente, concesionario where cliente.concesionario_idconcesionario = concesionario.idconcesionario and cedula = ".$b."");
			return $resultado->result_array();
	   }

	   	   function editar2_cliente(){

			$conexion = $this->load->database();
			$resultado = $this->db->query("SELECT cedula as b FROM cliente where cedula = ".$_POST['cedula']."");
			
			if (count($resultado->result_array())>0){

			$resultado = $this->db->query("UPDATE cliente SET nombre = '".$_POST['Nombre']."', apellido = '".$_POST['Apellido']."', email ='".$_POST['email']."', telefono = '".$_POST['telefono']."', concesionario_idconcesionario = ".$_POST['concesionario']." WHERE cedula = ".$_POST['cedula']."");

			return $resultado;
			}else {
			return $resultado= false;
			}
			
	   }
	}
?>