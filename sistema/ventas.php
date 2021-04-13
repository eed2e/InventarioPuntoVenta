<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="content">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="nueva_venta.php" class="btn btn-danger">Nueva venta</a>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Fecha</th>
							<th>Nombre del Tecnico</th>
							<th>ID Tecnico</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						require "../conexion.php";
						$query = mysqli_query($conexion, "SELECT f.nofactura, f.fecha, f.codcliente, f.totalfactura, f.estado, c.dni, c.nombre FROM factura f INNER JOIN cliente c  ON f.codcliente =c.dni");
						mysqli_close($conexion);
						$cli = mysqli_num_rows($query);

						if ($cli > 0) {
							while ($dato = mysqli_fetch_array($query)) {
						?>
								<tr>
									<td><?php echo $dato['nofactura']; ?></td>
									<td><?php echo $dato['fecha']; ?></td>
									<td><?php echo $dato['nombre']; ?></td>
									<td><?php echo $dato['codcliente']; ?></td>
									<td>
										<button type="button" class="btn btn-primary view_factura" cl="<?php echo $dato['codcliente'];  ?>" f="<?php echo $dato['nofactura']; ?>">Ver</button>
									</td>
								</tr>
						<?php }
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>


<?php include_once "includes/footer.php"; ?>