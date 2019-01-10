<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="views/css/menu_pagina_adm.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    
    if(!isset($_SESSION["login"])){
    ?>    
    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="views/pagina_cadastro_adm.php">CADASTRO ADM</a></li>
            <li><a href="#">LOGIN</a></li>
        </ul>
    </nav>
    <?php
    }else{
    ?>
    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="views/pagina_cadastro_adm.php">CADASTRO ADM</a></li>
            <li><a href="#">CADASTRO NOTICIA</a></li>
            <li><a href="models/deslogin.php">DESLOGIN</a></li>
        </ul>
    </nav>
    <?php
    }
    ?>
</body>
</html>