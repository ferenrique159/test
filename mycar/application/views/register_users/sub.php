<?php
//============================================================+
// File name   : sub.php
// Last Update : 2012-11-15
//
// Description :Muestra Sublineas
//
// Author: Jesús Ríos
//
// (c) Copyright:
//               Jesús Ríos
//               Ing. Sistemas
//               Venezuela

//============================================================+


if ($sub!=null ) {
$i=0;
while ($i < count ($sub) ) 
{
echo"<option value='".$sub[$i]['cod']."'>".$sub[$i]['name'].$sub[$i]['last']."</option> ";
$i++;
}
}
?>