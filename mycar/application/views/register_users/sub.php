<?php
//============================================================+
// File name   : sub.php
// Last Update : 2012-11-15
//
// Description :Muestra Sublineas
//
// Author: Jes�s R�os
//
// (c) Copyright:
//               Jes�s R�os
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