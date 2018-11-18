<?php 
	/**
	* 
	*/
	class Welcome_models extends CI_Model{
		

		public function __construct()
		{
			$this->load->database();
		}

		function consulta(){

			 $conexion = $this->load->database();
			 $resultado = $this->db->query("SELECT * FROM pais");
			 return $resultado->result_array();

		}
	}
?>