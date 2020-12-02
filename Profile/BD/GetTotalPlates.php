<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "parkathome_web";

// Cria a ligação à BD
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
// Verifica se a ligação falhou (ou teve sucesso)
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

$count = 0;

$username = $_SESSION["userName"];
$idUser = getUserId($conn, $username);

$query = "SELECT COUNT(id) as TotalPlates FROM vehicules WHERE idUser='$idUser'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $totalPlates = $row["TotalPlates"];

            echo $totalPlates;
        }
    }
}

function getUserId($conn, $username)
{
    $idUser = 0;

    $queryIdUser = "SELECT id FROM users WHERE username='$username'";
    $resultIdUser = mysqli_query($conn, $queryIdUser);

    if ($resultIdUser) {
        if (mysqli_num_rows($resultIdUser) > 0) {
            if ($row = mysqli_fetch_assoc($resultIdUser)) {
                $idUser = $row["id"];
            }
        }
    }

    return $idUser;
}
