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
    //PEGANDO OS DADOS DO BANCO E ARMAZENANDO NA SESSION
    if($result != null){
        foreach($select as $row){
          $_SESSION["usuario"] = $row["usuario"];
          $_SESSION["foto"] = $row["foto"];
          $_SESSION["id"] = $row["id"];
          $_SESSION["data"] = $row["data"];
          $_SESSION["nome"] = $row["nome"];
        }
        set_include_path(header('Location:../principal_adm.php'));//direciona para a pagina seguinte
    }else{
        $_SESSION["erro"] = "LOGIN INVALIDOR";
        set_include_path(header('Location:../principal_adm.php'));//direciona para a pagina seguinte
    }
}
?>