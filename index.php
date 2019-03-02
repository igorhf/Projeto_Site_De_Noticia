<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="views/css/logo.css">
    <link rel="stylesheet" type="text/css" href="views/css/menu.css">
    <link rel="stylesheet" type="text/css" href="views/css/descricao.css">
    <link rel="stylesheet" type="text/css" href="views/css/destaque_noticia.css">
    <link rel="stylesheet" type="text/css" href="views/css/noticia.css">
    <title>Pagina Principal</title>
</head>
<body>
    <?php
    require_once("controllers/controle_index.php"); // traz as funções para modela o site
    logo(); // logo
    menu(); // menu
    if (isset($_GET['categoria'])) { // tipo de categoria selecionado  no menu      
        categoria();  
    }
    elseif (isset($_GET['noticia'])) { // ao clicar na noticia mostrara a noticia detalhada
        noticia();
    }
    else{
    destaque(); // mostra a noticia em destaque e o historico de noticia
    }    
    descricao(); // mostra a descrição do site e rede social
    ?>   
</body>
</html>