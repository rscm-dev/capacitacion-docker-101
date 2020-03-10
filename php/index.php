<?php
$host = 'db';
$user = 'examenuser';
$password = "examenpass";
$db='examen_docker';

$conn = new mysqli($host, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = 'SELECT nombre,edad FROM alumnos';
if ($resultado = $conn->query($sql)) {
    echo '-->';
    while ($alumno = $resultado->fetch_row()) {
        echo $alumno['nombre'] . ' ' . $alumno['edad'];
        echo "</br>";
    }
}

echo $resultado;
