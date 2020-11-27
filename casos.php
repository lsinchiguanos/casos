<?php
include_once "cmd_bd.php";
$sentencia = $bd_con->query("select cacodigoidgf as codigo, cadominiogf as dominio, careinogf as reino, caphylumgf as phylum from tblcasoestudio");
$casos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php include_once "encabezado.php" ?>
<div class="row">
	<div class="col-12">
		<h1>CASOS</h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>Codigo</th>
						<th>Dominio</th>
						<th>Reino</th>
						<th>Phylum</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($casos as $caso) { ?>
						<tr>
							<td><?php echo $caso->codigo ?></td>
							<td><?php echo $caso->dominio ?></td>
							<td><?php echo $caso->reino ?></td>
							<td><?php echo $caso->phylum ?></td>
							<td><a class="btn" href="<?php echo "editar.php?id=" . $caso->codigo ?>">Editar</a></td>
							<td><a class="btn" href="<?php echo "eliminar.php?id=" . $caso->codigo ?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "foot.php" ?>