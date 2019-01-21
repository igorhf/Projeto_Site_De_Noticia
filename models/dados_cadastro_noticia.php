<?php

    set_include_path(include_once("../conecxao/conect.php"));//conecxão ao banco de dados

    session_start();// INICIANDO SESSION

    // PASSANDO OS VALORES PARA AS VARIAVEIS
    $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
    $banner = isset($_FILES["banner"])?$_FILES["banner"]:"";
    $img = isset($_FILES["img"])?$_FILES["img"]:"";
    $video = isset($_FILES["video"])?$_FILES["video"]:"";
    $texto = isset($_POST["texto"])?$_POST["texto"]:"";
    $categoria = isset($_POST["categoria"])?$_POST["categoria"]:"";
    $autorid = $_SESSION["id"]; 
    $data = date('Y-m-d H:i:s');

        
if(empty($titulo) or empty($banner) or empty($texto) or empty($categoria)){
    $_SESSION["campos"] = "TODOS OS CAMPOS DEVE SER PREENCHIDO";
    set_include_path(header('Location:../views/pagina_cadastro_noticia.php'));//direciona para a pagina seguinte
}else{
    // PDO MYSQL
    $sql = "INSERT INTO noticia(autor_id,titulo,post,categoria,texto1,img,video,data)VALUES(:autor_id,:titulo,:post,:categoria,:texto1,:img,:video,:data)";
    $insert = $conn->prepare($sql);
        
    // PASSANDO OS VALORES DA VARIAVEIS PARA OS CAMPOS DO PDO
    $insert->bindParam(':autor_id',$autorid);
    $insert->bindParam(':titulo',$titulo);
    $insert->bindParam(':post',$banner['name']);
    $insert->bindParam(':categoria',$categoria);
    $insert->bindParam(':texto1',$texto);
    $insert->bindParam(':img',$img['name']);
    $insert->bindParam(':video',$video['name']);
    $insert->bindParam(':data', $data);
    $insert->execute();

    // CRIANDO PASTA PARA ARMAZENAR A BANNER
    $uploaddir1 = "../views/post";
    if (!is_dir($uploaddir1)) {
        mkdir($uploaddir1);
    }
    // CRIANDO PASTA PARA ARMAZENAR A IMG
    $uploaddir2 = "../views/img";
    if (!is_dir($uploaddir2)) {
        mkdir($uploaddir2);
    }// CRIANDO PASTA PARA ARMAZENAR A VIDEO
    $uploaddir3 = "../views/video";
    if (!is_dir($uploaddir3)) {
        mkdir($uploaddir3);
    }
    // GUARDANDO A FOTO NA PASTA
    move_uploaded_file($banner['tmp_name'], $uploaddir1 .DIRECTORY_SEPARATOR. $banner['name']);
    move_uploaded_file($img['tmp_name'], $uploaddir2 .DIRECTORY_SEPARATOR. $img['name']);
    move_uploaded_file($video['tmp_name'], $uploaddir3 .DIRECTORY_SEPARATOR. $video['name']);

    $_SESSION["campos"] = "DADOS SALVOS COM SUCESSO";// SESSION , DE REALIZADO COM SUCESSO

    set_include_path(header('Location:../views/pagina_cadastro_noticia.php'));//direciona para a pagina seguinte
}
?>