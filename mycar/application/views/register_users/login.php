<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <!--Librerias Boostrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

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
</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12 top"> &nbsp; </div>

            <div class="col-md-1"> &nbsp; </div>

            <div class="col-md-6">
                <h1 align="center">MENU</h1>
                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="col">
                            <a href="index.php?/editar_controller/editarLogin/editar" class="btn btn-outline-primary" role="button" aria-pressed="true"><i class="fas fa-user-circle fa-10x"></i><br>EDITAR CLIENTE</a>
                        </div>
                    </div>
                </div>
                 <div class="col order -12">
                    <br><br>
                    <div class="row">
                        <div class="col">
                            <a href="index.php?/search_controller/searchLogin/search" class="btn btn-outline-primary" role="button" aria-pressed="true"><i class="fas fa-user-circle fa-10x"></i><br>BUSCAR CLIENTE</a>
                        </div>
                    </div>
                </div>
                <div class="col order -12">
                    <br><br>
                    <div class="row">
                        <div class="col">
                            <a href="index.php?/delete_controller/deleteLogin/delete" class="btn btn-outline-primary" role="button" aria-pressed="true"><i class="fas fa-align-center fa-10x"></i><br>ELIMINAR CLIENTE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 "> 
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      		<div class="container">
        		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        		</button>
			</div>	
        	<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            		<li class="nav-item">
						Bienvenido Sr(a) <?php echo $this->session->userdata('login'); ?> <a href="index.php?/login/joinLogin/logout"><i class="fas fa-fast-backward"></i>SALIR</a>
            		</li>
          		</ul>
        	</div>
      		</nav>
            <img src="http://localhost/mycar/img/mustangcoupe.png" alt="..." class="img-responsive"></div>
            <div class="col-md-12 footer">&nbsp;</div>
        </div>
    </div>
</body>
</html>