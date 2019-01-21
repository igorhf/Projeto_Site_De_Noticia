
	<?php
		require_once("conecxao/conect.php");
		
		$sql = "SELECT a.id,a.titulo,a.post,a.data,b.tipo_categoria,c.nome 
		FROM noticia a 
		join categorias b on b.id=a.categoria 
		join adm c on c.id=a.autor_id";

		$select=$conn->prepare($sql);
		$select->execute();
		$result=$select->fetchAll(PDO::FETCH_ASSOC);		
		?>
	<div class="destaque_not">
		<?php
		foreach ($result as $row) {
			?>
			<div class="div_noticia">
				<img <?php echo "src="."views/post/".$row["post"]."";?>>
				<div class="texto">
					<h3> <?php echo $row["titulo"];?></h3>
					<span>CATEGORIA: <?php echo $row["tipo_categoria"];?></span><br>
					<span>AUTOR: <?php echo $row["nome"];?></span><br>
					<span>DATA: <?php echo $row["data"];?></span>
				</div>
			</div>	
			<?php			
			}
		?>		
	</div>
