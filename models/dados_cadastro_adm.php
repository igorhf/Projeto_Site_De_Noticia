<?php

set_include_path(include_once("../conecxao/conect.php"));

$sql = "INSERT INTO adm(nome,foto,usuario,senha,data)VALUES(:nome,:foto,:usuario,:senha,:data)";
$insert = $conn->prepare($sql);

$nome = isset($_POST["nome"])?$_POST["nome"]:"";
$foto = isset($_POST["foto"])?$_POST["foto"]:"";
$usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
$senha = isset($_POST["senha"])?$_POST["senha"]:"";
$data = date('Y-m-d H:i:s');

$insert->bindParam(':nome',$nome);
$insert->bindParam(':foto',$foto);
$insert->bindParam(':usuario',$usuario);
$insert->bindParam(':senha',$senha);
$insert->bindParam(':data', $data);
$insert->execute();
//set_include_path(header('Location:../index.php'));	

?>