<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
.estilo_2
{
color: #3366DD; 
font-weight: bold; 
font-size: 14px;
}

.estilo_2 a{
color: #333333; 
text-decoration: none;
}
</style>

</head>
<body>
<div id="Contenedor">
<div id="Contenido">
<p align="center">
<img src="/mycar/img/aceptar.png"/>
</a>
</p>

<p align="center" class="estilo">
<?php if(isset($mensaje)){echo $mensaje;}?>
</p>
<br />

<p align="center" class="estilo_2">
<?php if(isset($mensaje_1)){echo $mensaje_1;}?>
<?php if(isset($ruta)){echo "<a href='".$ruta."'> aqui</a>";}?>
</p>

</div>
</div>
</body>
</html>