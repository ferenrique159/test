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


    <script language="JavaScript" type="text/javascript">
        function busca_sub() {
            if ($("#proequip").val() != "") {
                var dato = $("#proequip").val();
                $("#imgsub").show();
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "index.php?/users_controller/registro_controller/concesionario",
                    data: "equip=" + dato,
                    success: function(msg) {
                        $("#projug").empty().removeAttr("disabled").append(msg);
                        $("#imgsub").hide();
                    }
                });
            } else {
                $("#projug").empty().attr("disabled", "disabled");
            }
        };
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

                        <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Nombre: <?php echo $name = ($datos[0]['a']!= null) ? $datos[0]['a'] : '' ?> </label>
                            </div>
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Apellido: <?php echo $name = ($datos[0]['c']!= null) ? $datos[0]['c'] : '' ?> </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Cedula: <?php echo $name = ($datos[0]['b']!= null) ? $datos[0]['b'] : '' ?></label>
                            </div>
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">email: <?php echo $name = ($datos[0]['d']!= null) ? $datos[0]['d'] : '' ?></label> 
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">telefono: <?php echo $name = ($datos[0]['e']!= null) ? $datos[0]['e'] : '' ?></label>   
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlSelect1">Concesionario: <?php echo $name = ($datos[0]['f']!= null) ? $datos[0]['f'] : '' ?></label>
                            </div>
                        </div>
                    </div>
               
            </div>
            <div class="col-md-3 "> <img src="http://localhost/mycar/img/layaout/orig.png" alt="..." class="img-responsive"></div>
            <div class="col-md-12 footer">&nbsp;</div>
        </div>
    </div>
</body>
</html>