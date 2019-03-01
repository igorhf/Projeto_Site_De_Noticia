<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

	require_once("conecxao/conect.php");

$id = $_GET['noticia'];

	$sql = "SELECT a.id,a.img,a.video,a.texto1,a.titulo,a.post,a.data,b.tipo_categoria,c.nome 
		FROM noticia a 
		join categorias b on b.id=a.categoria 
		join adm c on c.id=a.autor_id where a.id= '$id'";

	$select=$conn->prepare($sql);
	$select->execute();
	$result=$select->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($result); 
	foreach ($result as $row) {		
		?>
		<div style="height: 100%;width: 800px;background: #E8E8E8">

		<div style="width: 100%;height: 250px;border: 1px solid;">
			<img style="object-fit: cover;object-position: center;width: 100%;height: 100%" <?php echo "src="."views/post/".$row['post'];?>>
		</div>

		<h1 style="text-align: center;"><?php echo $row['titulo'];?></h1>
		
		<p style="font-family: verdana;text-align: justify;"><?php echo $row['texto1'];?></p>

		<?php 
		if ($row['img'] == null) {
			// se for null, não exibirar nada
		}else{
			?><div><img <?php echo "src="."views/img/".$row['img'];?>></div><?php
		}

		if ($row['video'] == null) {
			// se for null, não exibirar nada
		}else{
			?><div>
				<video width="400" controls>
  					<source <?php echo "src="."views/video/".$row['video'];?> type="video/mp4"></video>
			</div><?php
		}
		?>

		<div style="background: #4F4F4F">
			<span>CATEGORIA: <span style="background: #2F4F4F;color: #F0FFFF"><?php echo $row['tipo_categoria'];?></span></span><br>
			<span>AUTOR: <?php echo $row['nome'];?></span><br>
			<span>DATA: <?php echo $row["data"];?> </span><br>
		</div>

		</div>
		<?php
	}
	

?>


</body>
</html>
