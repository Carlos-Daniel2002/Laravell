<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Informativa</title>
</head>
<body>
    <h1><center>Proyecto Laravel</center></h1>
    <p><b><big><center>Nombre del Proyecto:</big></b>“M0V1E F0R A11” </center></p>
    <h2> *Lo que espero del proyecto:*</h2>
    <p>En un futuro espero asociarme con empresas multicinemas para fomentar estrenos de nuevas películas a nivel nacional</p>

    <p><a href="<?php echo route('/welcome') ?>">Ir a la pagina principal</a></p>
    <p><a href="<?php echo route('/categorias') ?>">Ir a las categorias</a></p>
    <p><a href="<?php echo route('/objetivo') ?>">Ir a los objetivos</a></p>
    <p><a href="<?php echo route('/necesidad') ?>">Ver la necesidad</a></p>
    <p><a href="<?php echo route('/alcance') ?>">Ver el alcance</a></p>
    <p><a href="<?php echo route('/despedida') ?>">Despedida</a></p>
  
    <center><img src="https://cdn.digitalmenta.com/wp-content/uploads/2019/04/los-gran-vision-de-google-summit-para-el-futuro.jpg" width="350" height="250"></center>
    <br>
    
    <style>
            html, body {
                background-color: #000000;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
            }

        </style>
</body>
</html>