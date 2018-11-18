<?php 
	//echo count($prueba);
	//var_dump($prueba);

	for ($i=0; $i <count($prueba) ; $i++) { 
		echo $prueba [$i] ['idpais'];
		echo $prueba [$i]['descripcion'];
		echo "<br/>";
	}
?>