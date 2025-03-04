<?php
session_start();
$servername = "mysql"; // Este es el alias del contenedor MySQL.
$username = "root"; // Usuario de MySQL.
$password = "root"; // Contraseña de MySQL.
$dbname = "prueba"; // Nombre de la base de datos.

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
echo "Conexión exitosa";
$users= array();
$ids=array();
$asignatura= array();
$libro=array();


$sql = "SELECT DISTINCT id,nombre,asignatura,libro FROM usuarios";
$result = $conn->query($sql);  
if ($result->num_rows > 0) {
    // Hay resultados
    while($row = $result->fetch_assoc()) {
        //echo "<script>console.log('" . $row["nombre"]."')</script>";
        array_push($ids,$row['id']);
        array_push($users,$row['nombre']);
        array_push($asignatura,$row['asignatura']);
        array_push($libro,$row['libro']);
    }
} else {
    echo "0 resultados";
}

$_SESSION['ids']=$ids;
$_SESSION['usuarios']=$users;
$_SESSION['asignatura']=$asignatura;
$_SESSION['libro']=$libro;
header("location:http://localhost:8080/index.php")
?>
