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
    // INICIA A SESSION
    session_start();   
    // SE NÃO ESTIVER LOGADO ESSE MENU SERA MOSTRADO 
    if(!isset($_SESSION["id"])){
    ?>    
    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="views/pagina_cadastro_adm.php" target="_blank">CADASTRO ADM</a></li>
            <li><a href="views/pagina_login.html">LOGIN</a></li>
        </ul>
    </nav>    
    <?php
    // ESTRUTURA DE ERRO
    if(!isset($_SESSION["erro"])){
    echo("SEJA BEM VINDO");
    }else{
    print_r($_SESSION["erro"]);
    }
    }else{
    // MENU MOSTRADO QUANDO ESTIVER LOGADO
    ?>
    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="views/pagina_cadastro_adm.php" target="_blank">CADASTRO ADM</a></li>
            <li><a href="views/pagina_cadastro_noticia.php" target="_blank">CADASTRO NOTICIA</a></li>
            <li><a href="models/deslogin.php">DESLOGIN</a></li>
        </ul>
    </nav>
    <?php
    }
    ?>
</body>
</html>