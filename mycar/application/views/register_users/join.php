<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <!--Librerias Boostrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        h1{
            font-family: 'Comic Sans';
            color: orange;
        }
        .top {
            /* The image used */
            background-image: url("../../../img/layaout/top.png");
            /* Full height */
            min-height: 100pt;
            /* Center and scale the image nicely */
            background-position: center;
            background-size: cover;
        }
        .footer {
            /* The image used */
            background-image: url("../../../img/layaout/footer.png");
            /* Full height */
            min-height: 100pt;
            /* Center and scale the image nicely */
            background-position: center;
            background-size: cover;
        }
		
    </style>
    <script>
        function validacion() {
            document.getElementById('join_users').submit();
        }
    </script>
    <!--	
				var validacion="";
			//document.getElementById('proname').value;
			if(document.getElementById('proname').value=="")
			{
				validacion='Debe indicar el Nombre \n';
			}
			if(document.getElementById('proname2').value=="")
			{
				validacion= validacion +'Debe indicar el Apellido \n';
			}
			if(document.getElementById('proci').value=="")
			{
				validacion= validacion +'Debe indicar la Cedula \n';
			}
			if(document.getElementById('proemail').value=="")
			{
				validacion= validacion + 'Debe indicar el Correo \n';
			}
			if(document.getElementById('protlf').value=="")
			{
				validacion= validacion +'Debe indicar el Movil \n';
			}
			if(document.getElementById('propass').value=="")
			{
				validacion= validacion +'Debe indicar el Password \n';
			}
			if(document.getElementById('propass2').value=="")
			{
				validacion= validacion +'Debe indicar Confirmar el Password \n';
			}
			if(document.getElementById('proequip').value=="")
			{
				validacion= validacion +'Debe indicar el Equipo de preferencia \n';
			}
			if(document.getElementById('projug').value=="")
			{
				validacion= validacion +'Debe indicar su Jugador de preferencia';
			}
			if(validacion=="")
			{
				//hacemos submit
				document.getElementById('register_users').submit();
			}
			else
			{
				alert(validacion);
			}
			}
		</script>
	-->
</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12 top"> &nbsp; </div>

            <div class="col-md-1"> &nbsp; </div>

            <div class="col-md-6">
                <h1 align="center">Ingresar</h1>
                <form method="post" action=index.php?/login/joinLogin/login" id="join_users">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control" name="email" id="proemail" placeholder="name@example.com"> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Contraseña</label>
                                <input type="password" class="form-control" name="Password" id="propass" placeholder="*****">  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><br><br><br>
                        <button type="button" class="float-right btn btn-warning" onclick="validacion()">Ingresar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 "> <img src="../../../img/layaout/carros-screen2.png" alt="..." class="img-responsive"></div>
            <div class="col-md-12 footer">&nbsp;</div>
        </div>
    </div>
</body>
</html>