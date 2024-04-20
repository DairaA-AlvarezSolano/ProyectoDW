<?php
session_start();

$servername = "localhost";
$database = "Eq1Opinion";
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
  // Almacenar el mensaje en una variable de sesión
  $_SESSION['message'] = "Datos enviados exitosamente";
   header('Location: index.php#contacto');
  exit;
 } else {
 $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redirigir al usuario a la misma página
//  header('Location: index.php#contacto');
//  exit;
?>
