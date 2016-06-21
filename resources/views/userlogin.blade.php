<!DOCTYPE html>
<html>
<head>
	<title>NOC 1 Login</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
            html, body {
                height: 100%;

            }

            body {
            	color:#000;
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url(../assets/dist/img/login-bg.jpg); /* Imagen normal, sin desenfoque */
                background-attachment:fixed;
                
            }

            article {
            	text-align: center;
                display: table-cell;
                vertical-align: middle;
                font-weight: bold;
               }

            section {
                text-align: center;
                display: inline-block;
                font-weight: bold;
 				opacity: 1;

            }

            .titulo {
                font-size: 46px;
            }
            form{
            	background-color: #6E6E6E;
            	top: 0;
            	bottom: 0;
            	padding: 20px;
            	opacity: 0.8;
            	border-radius: 7px;
              }
            .footer {
				  position: absolute;
				  right: 0;
				  bottom: 0;
				  left: 0;
				  padding: 1rem;
				  background-color: #6E6E6E;
				  text-align: center;
				  font-weight: bold;
				  color: #FFF;
				  opacity: 0.8;
				}
        </style>
</head>
<body>
<article>
	<section>
		<form class="form-inline">
		<div class="titulo"><b>Inicio de sesión</b></div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Contraseña">
  </div>
  <button type="button" class="btn btn-primary"><b>Iniciar sesión</b></button>
</form>
	</section>
</article>
<!--<footer>Desarollo: Wilson Delgado - 2016 - CEO Prolite Security - GNU GENERAL PUBLIC LICENSE</footer>-->
<div class="footer">Desarollo: Wilson Delgado - 2016 - CEO Prolite Security - <strong>GNU GENERAL PUBLIC LICENSE</strong>.</div>
</body>
</html>