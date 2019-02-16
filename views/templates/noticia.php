<?php
	require_once("conecxao/conect.php");

	$sql2 = "SELECT a.id,a.titulo,a.post,a.data,b.tipo_categoria,c.nome 
		FROM noticia a 
		join categorias b on b.id=a.categoria 
		join adm c on c.id=a.autor_id";

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
	<a href=""><img class="img" <?php echo "src="."views/img/".$row['post'];?> ></a>
	</div>
	<div class="texto_1">		
		<a href=""><h1> <?php echo $row["titulo"];?> </h1></a><br>
		<span>CATEGORIA: <span style="background: #2F4F4F;color: #F0FFFF">REVIEWS</span></span><br>
		<span>AUTOR: IGOR </span><br>
		<span>DATA: <?php echo $row["data"];?> </span><br>
	</div>
	</div>	
<?php
}
?>	
</div>
