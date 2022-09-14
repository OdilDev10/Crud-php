<?php
 include('db.php');

 if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = "SELECT * FROM tareas WHERE id = $id";
	$accion = mysqli_query($conn, $query);
	if (mysqli_num_rows($accion) == 1) {
			$row = mysqli_fetch_array($accion);
			$nombre = $row['nombre'];
			$descripcion = $row['descripcion'];

		}
	// echo "<script>alert('se actualizo correctamente')</script>";
	// echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";

	}

	if (isset($_POST['update'])) {
		$id = $_GET['id'];
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];

		$query = "UPDATE tareas set nombre = '$nombre', descripcion = '$descripcion' WHERE id = $id";
		mysqli_query($conn, $query);
		echo '<script>alert("Actualizado exitosamente")</script>';
		echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";

	}
?>

<?php include('header.php');?>

<div class="containter">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form method="POST" action="edit.php?id=<?php echo $_GET['id']; ?>">
					<div class="form-group">
						<input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nombre" min="2"/>
					</div>
					<div class="form-group">
	<textarea class="form-control" name="descripcion" placeholder="Descripcion" min="2" /><?php echo $descripcion; ?></textarea>
					</div>

					<button type="submit" name="update" class="btn btn-success">Actualizar</button>
				</form>
			</div>
		</div>
	</div>
</div>



<?php include('footer.php');?>
