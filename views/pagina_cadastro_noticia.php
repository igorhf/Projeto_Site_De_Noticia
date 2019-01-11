<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Noticia</title>
</head>
<body>
    <?php
        session_start();
        set_include_path(include_once("../conecxao/conect.php"));//conecxão ao banco de dados
         // ESTRUTURA DE ERRO
        if(!isset($_SESSION["campos"])){
            echo("SEJA BEM VINDO");
        }else{
            print_r($_SESSION["campos"]);
        }
    ?>
    <form action="../models/dados_cadastro_noticia.php" method="POST" enctype="multipart/form-data">
        <label>TITULO: </label> <input type="text" name="titulo"><br><br>
        <label>POST: </label> <input type="file" name="banner"><br><br>
        <label>IMAGEM : </label> <input type="file" name="img"><br><br>
        <label>VIDEO: </label> <input type="file" name="video"><br><br>
        <label>CATEGORIA: </label>
        <select name="categoria">
            <?php
            $sql = "SELECT * FROM categorias";
            $select = $conn->prepare($sql);
            $select->execute();
            $result=$select->fetchAll(PDO::FETCH_ASSOC);

            foreach($result as $row)
                echo("<option value=".$row['id'].">".$row['nome']."</option>")
            ?>
        </select><br>
        <label>CAIXA DE TEXTO: </label><br><textarea name="texto" cols="90" rows="25"></textarea><br><br>
        <input type="submit" name="btn" value="Salvar">
    </form>
</body>
</html>