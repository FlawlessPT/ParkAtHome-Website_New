<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkathome_web";

$nomeUtilizador = $_GET['username'];
$pw = $_GET['password'];

session_start();

// Cria a ligação à BD
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verifica se a ligação falhou (ou teve sucesso)
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Users WHERE username='$nomeUtilizador' AND password='" . $pw . "'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['userName'] = $nomeUtilizador;
    echo true;
} else {
    echo false;
}

mysqli_close($conn);
