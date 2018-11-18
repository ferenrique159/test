<!DOCTYPE html>
<html>
<head>
    <title>BUSCAR CLIENTE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/mycar/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="http://localhost/mycar/css/alerta/jquery.msgbox.css" rel="stylesheet"/>
    <script type="text/javascript" src="http://localhost/mycar/js/data/jquery.js"></script>
    <script type="text/javascript" src="http://localhost/mycar/js/alerta/jquery.msgbox.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        h1{
            font-family: 'Comic Sans';
            color: orange;
        }
        .top {
            /* The image used */
            background-image: url("http://localhost/mycar/img/layaout/top.png");
            /* Full height */
            min-height: 100pt;
            /* Center and scale the image nicely */
            background-position: center;
            background-size: cover;
        }
        .footer {
            /* The image used */
            background-image: url("http://localhost/mycar/img/layaout/footer.png");
            /* Full height */
            min-height: 100pt;
            /* Center and scale the image nicely */
            background-position: center;
            background-size: cover;
        }
        
    </style>

    <script> 
        var arreglojs= new Array();
        var msg='';
        $(document).ready(function(){
        })

        function validacion(num)
        {
            for(i=0; i<parseInt(num); i++)
            {
                msg = msg + '&#8226;' + arreglojs[i] + '</br>'
            }
            $.msgbox(msg)
            return false;
        }

        function validacion_1(num){
            $.msgbox(num)
            return false;
        }

    </script>


<?php
if ($this->validation->error_string!=null)
{
$array = array();
$array=$this->validation->_error_array;
$num=count($this->validation->_error_array);
for($i=0; $i<$num; $i++)
{   
echo "<script>  arreglojs[".$i."] = \"".$array[$i]."\"; </script>";
}
       
echo "<script> window.onload = function()
    {validacion(".$num.");}</script>";    
}

if (@$mensaje!=null)
{
echo "<script> window.onload = function()
    {validacion_1('".$mensaje."');}</script>"; 
}
?>
</head>

<body>


    <div class="container-fluid">

        <div class="row">

        <div class="col-md-12 top"> &nbsp; </div>

            <div class="col-md-1"> &nbsp; </div>

            <div class="col-md-6">
                <h1 align="center">Datos del cliente</h1>
                 <form method="post" action="index.php?/editar_controller/editarLogin/editar3" id="register_users">

                        <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Nombre</label>
                                    <input type="text" class="form-control" name="Nombre" value="<?php echo $name = $datos[0]['a']?>">
                            </div>
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Apellido</label>
                                    <input type="text" class="form-control" name="Apellido" value="<?php echo $name = $datos[0]['c']?>">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Cedula</label>
                                    <input type="text" class="form-control" name="cedula" value="<?php echo $name = $datos[0]['b']?>" readonly>
                            </div>
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $name = $datos[0]['d']?>"> 
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">telefono</label>
                                <input type="text" class="form-control" name="telefono" value="<?php echo $name = $datos[0]['e']?>">   
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlSelect1">Concesionario</label>
                                <select class="form-control" name="concesionario" id="proconcesionario">
                                    <option value="0">Seleccione</option>
                                    <?php
                                    if ($lin!=null ) {
                                    $i=0;
                                    while ($i < count ($lin) ) {
                                    echo"<option value=".$lin[$i]['cod'].">".$lin[$i]['des']."</option> ";
                                    $i++;
                                    }
                                    }
                                    ?>
                                </select> 
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <button type="submit" class="float-right btn btn-warning">Editar</button>
                    </div>
                </form>    
            </div>
            <div class="col-md-3 "> <img src="http://localhost/mycar/img/layaout/orig.png" alt="..." class="img-responsive"></div>
            <div class="col-md-12 footer">&nbsp;</div>
        </div>
    </div>
</body>
</html>