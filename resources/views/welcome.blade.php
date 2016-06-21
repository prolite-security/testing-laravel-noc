<!DOCTYPE html>
<html>
    <head>
        <title>NOC 1 Plataforma</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html, body, article, section, footer {
                height: 100%;

            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url(../assets/dist/img/signin-bg-difuse.jpg); /* Imagen normal, sin desenfoque */
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

            }

            .title {
                font-size: 96px;
            }
            button{
                opacity: 0.8;
            }
            
        </style>
    </head>
    <body>
        <article class="container">
            <section class="content">
                <div class="title">Bienvenido a NOC 1</div>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick = "location='/login'"><b>Ingresar al portal como Operador/Coordinador NOC</b></button>
                </section>
        </article>
         
    </body>
     
</html>
