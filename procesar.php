<?php
$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conn) {
 die("La conexión ha fallado: " . mysqli_connect_error());
}

// Insertar en la tabla correspondiente
$sql = "INSERT INTO formulario (nombre, correo, experiencia, comentarios) VALUES ('".$_POST['nombre']."', '".$_POST['correo']."', '".$_POST['experiencia']."', '".$_POST['comentarios']."')";

// Si la conexión es exitosa, ejecutar la consulta
if ($conn->query($sql) === TRUE) {
 echo "Datos insertados exitosamente";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>