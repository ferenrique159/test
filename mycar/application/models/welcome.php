<?php 
	/**
	* 
	*/
	class Welcome extends CI_Model{
		

		public function __construct(argument)
		{
			$this->load->database();
		}

		function consulta(){

			$conexion = $this->load->database();
			$resultado = $conexion->query('SELECT * FROM pais');
			return $resultado-> result_array();

		}
	}
?>