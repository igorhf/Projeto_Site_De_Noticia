<?php
require_once("conecxao/conect.php");

$sql = "SELECT a.id,a.titulo,a.post,a.data,b.type,c.nome 
	FROM noticia a 
	left join categorias b on b.id=a.categoria 
	left join adm c on c.id=a.autor_id ORDER BY id DESC LIMIT 3";

$select = $conn->prepare($sql);
$select->execute();
$result = $select->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="destaque_not">
	<?php
	foreach ($result as $row) {
	?>
		<div class="div_noticia">
			<a <?php echo "href=" . "index.php?noticia=" . $row['id'] . ""; ?>>
				<img <?php echo "src=" . "views/post/" . $row["post"] . ""; ?>>
			</a>
			<div class="texto">
				<h3> <?php echo $row["titulo"]; ?></h3>
				<span>CATEGORIA: <span style="background: #2F4F4F;color: #F0FFFF"><?php echo $row["type"]; ?><br>
				<span>AUTOR: <?php echo $row["nome"]; ?></span><br>
				<span>DATA: <?php echo $row["data"]; ?></span>
			</div>
		</div>
	<?php
	}
	?>
</div>