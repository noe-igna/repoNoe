<?php
$host = 'localhost';
$dbname = 'RepoNoeI';
$user = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;port=1111;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
