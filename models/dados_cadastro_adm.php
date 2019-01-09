<?php
    set_include_path(include_once("../conecxao/conect.php"));//conecxão ao banco de dados

    session_start();// INICIANDO SESSION

    // PASSANDO OS VALORES PARA AS VARIAVEIS
    $nome = isset($_POST["nome"])?$_POST["nome"]:"";
    $foto = isset($_FILES["foto"])?$_FILES["foto"]:"";
    $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
    $senha = isset($_POST["senha"])?$_POST["senha"]:"";
    $data = date('Y-m-d H:i:s');
    
if(empty($nome) or empty($foto) or empty($usuario) or empty($senha)){
    $_SESSION["campos"] = "TODOS OS CAMPOS DEVE SER PREENCHIDO";
    set_include_path(header('Location:../views/pagina_cadastro_adm.php'));//direciona para a pagina seguinte
}else{
    // PDO MYSQL
    $sql = "INSERT INTO adm(nome,foto,usuario,senha,data)VALUES(:nome,:foto,:usuario,:senha,:data)";
    $insert = $conn->prepare($sql);
        
    // PASSANDO OS VALORES DA VARIAVEIS PARA OS CAMPOS DO PDO
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':foto',$foto['name']);
    $insert->bindParam(':usuario',$usuario);
    $insert->bindParam(':senha',$senha);
    $insert->bindParam(':data', $data);
    $insert->execute();

    // CRIANDO PASTA PARA ARMAZENAR A IMG
    $uploaddir = "../views/img";
    if (!is_dir($uploaddir)) {
        mkdir($uploaddir);
    }
    // GUARDANDO A IMG NA PASTA
    move_uploaded_file($foto['tmp_name'], $uploaddir .DIRECTORY_SEPARATOR. $foto['name']);

    $_SESSION["campos"] = "DADOS SALVOS COM SUCESSO";// SESSION , DE REALIZADO COM SUCESSO

    set_include_path(header('Location:../views/pagina_cadastro_adm.php'));//direciona para a pagina seguinte
}

?>