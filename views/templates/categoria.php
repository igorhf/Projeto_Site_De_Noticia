<?php
require_once("conecxao/conect.php");
	$categoria = $_GET['categoria'];

	$sql2 = "SELECT a.id,a.titulo,a.post,a.data,b.tipo_categoria,c.nome 
		FROM noticia a 
		join categorias b on b.id=a.categoria 
		join adm c on c.id=a.autor_id WHERE b.tipo_categoria='$categoria' ORDER BY id DESC ";

	$select2=$conn->prepare($sql2);
	$select2->execute();
	$result2=$select2->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="catalogo">
<?php	
	foreach ($result2 as $row) {
?>
	<div class="div">
<?php
?>	
	<div class="texto_1">
	<a <?php echo "href="."index.php?noticia=".$row['id']."";?> ><img class="img" <?php echo "src="."views/img/".$row['post'];?> ></a>
	</div>
	<div class="texto_1">		
		<a <?php echo "href="."index.php?noticia=".$row['id']."";?> ><h1> <?php echo $row["titulo"];?> </h1></a><br>
		<span>CATEGORIA: <span style="background: #2F4F4F;color: #F0FFFF"><?php echo $row['tipo_categoria'];?></span></span><br>
		<span>AUTOR: <?php echo $row['nome'];?></span><br>
		<span>DATA: <?php echo $row["data"];?> </span><br>
	</div>
	</div>	
<?php
}
?>	
</div>