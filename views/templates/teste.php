<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

	require_once("conecxao/conect.php");

	$sql2 = "SELECT a.id,a.img,a.video,a.texto1,a.titulo,a.post,a.data,b.tipo_categoria,c.nome 
		FROM noticia a 
		join categorias b on b.id=a.categoria 
		join adm c on c.id=a.autor_id";

	$select=$conn->prepare($sql);
	$select->execute();
	$result=$select->fetchAll(PDO::FETCH_ASSOC);

	echo $result;

?>


</body>
</html>