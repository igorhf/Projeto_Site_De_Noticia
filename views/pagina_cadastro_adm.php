<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro ADM</title>
</head>
<body>
    <form action="../models/dados_cadastro_adm.php" method="POST" enctype="multipart/form-data">
    <label>NOME:</label><input type="text" name="nome"><br><br>
    <label>FOTO:</label><input type="file" name="foto"><br><br>
    <label>USUARIO:</label><input type="text" name="usuario"><br><br>
    <label>SENHA:</label><input type="password" name="senha">
    <input type="submit" name="btn" value="Salvar">
    <?php

    session_start();
    if($_SESSION["campos"] == ""){
        echo("REALIZE SEU CADASTRO");
    }else{
    print_r($_SESSION["campos"]);
    }
    ?>
    </form>
</body>
</html>