<?php
 include('db.php');


	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = "DELETE FROM tareas WHERE id = $id";
		$accion = mysqli_query($conn, $query);
		if (!$accion) {
			die("Fallo");
		}
		echo "<script>alert('se elimino correctamente')</script>";
		echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";

	}
?>