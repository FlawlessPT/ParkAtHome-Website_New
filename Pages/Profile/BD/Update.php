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

$username = $_SESSION["userName"];

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$contact = $_GET['contact'];
$plate1 = $_GET['plate1'];
$plate2 = $_GET['plate2'];
$plate3 = $_GET['plate3'];
$plate4 = $_GET['plate4'];

$queryUser = "UPDATE user
          SET name = '$name', password = '$password', contact = '$contact', email = '$email'
          WHERE username='$username'";

$resultUser = mysqli_query($conn, $queryUser);

$idVehicule = getVehiculeIdByPlateName($conn, $plate);

$queryVehicules = "UPDATE vehicules
          SET plate = '$plate'
          WHERE id='$idVehicule'";

$resultVehicules = mysqli_query($conn, $queryVehicules);

if ($resultUser && $resultVehicules) {
    if (mysqli_affected_rows($conn) > 0) {
        echo true;
    } else {
        echo false;
    }
}

function getVehiculeIdByPlateName($conn, $plate)
{
    $id = 0;

    $query = "SELECT id FROM vehicules WHERE plate='$plate'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
            }
        }
    }

    return $id;
}

mysqli_close($conn);
