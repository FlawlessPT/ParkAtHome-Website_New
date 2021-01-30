<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkathome_web";

$name = $_GET['nome'];
$email = $_GET['email'];
$contact = $_GET['numeroTelefone'];
$nomeUtilizador = $_GET['nomeUtilizador'];
$pw = $_GET['password'];

// Cria a ligação à BD
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verifica se a ligação falhou (ou teve sucesso)
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, username, password, contact, email)
        VALUES ('$name', '$nomeUtilizador', '" . $pw . "', '$contact', '$email')";

if (mysqli_query($conn, $sql)) {
    echo true;
} else {
    echo false;
}

mysqli_close($conn);
