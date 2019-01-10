<?php
session_start();// INICIANDO A SESSION
require_once("../conecxao/conect.php");// CONECXAO DO BANCO DE DADOS

$usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
$senha = isset($_POST["senha"])?$_POST["senha"]:"";

// VALIDANDO OS CAMPOS
if(empty($usuario) or empty($senha)){
    $_SESSION["erro"] = "TODOS CAMPOS DEVE SER PREENCHIDO";
    set_include_path(header('Location:../principal_adm.php'));//direciona para a pagina seguinte
}else{
    // PDO MYSQL
    $sql = "SELECT * FROM adm where usuario=:usuario and senha=:senha";
    $select = $conn->prepare($sql);
    $select->bindParam(':usuario',$usuario);
    $select->bindParam(':senha',$senha);
    $select->execute();
    $result = $select->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    //PEGANDO OS DADOS DO BANCO E ARMAZENANDO NA SESSION
    if($result != 0){
        // PASSANDO OS ARRAY PARA A SEEEION
        $_SESSION["usuario"] = $result["usuario"];
        $_SESSION["foto"] = $result["foto"];
        $_SESSION["id"] = $result['id'];
        $_SESSION["data"] = $result["data"];
        $_SESSION["nome"] = $result["nome"];
       
        set_include_path(header('Location:../principal_adm.php'));//direciona para a pagina seguinte
    }else{
        $_SESSION["erro"] = "LOGIN INVALIDOR";
        set_include_path(header('Location:../principal_adm.php'));//direciona para a pagina seguinte
    }
}
?>