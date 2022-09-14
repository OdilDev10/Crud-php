<?php
include('db.php');

	if (isset($_POST['enviar']) && isset($_POST['nombre']) && isset($_POST['descripcion'])) {
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];

		$query = "INSERT INTO tareas (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
		$resultado = mysqli_query($conn, $query);
		if ($resultado) {
			echo '<script>alert("Enviado exitosamente")</script>';
			echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";
			// header("Location: index.php");
		} else {
			echo '<script>alert("Fallo el envio :(")</script>';
			echo "<script>setTimeout(\"location.href='index.php'\", 1000)</script>";
			// header("Location: index.php");			
		}
		

	}else{
		echo "no existe";
	}

?>