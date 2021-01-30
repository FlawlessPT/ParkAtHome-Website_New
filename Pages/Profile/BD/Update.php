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

$queryUser = "UPDATE users
          SET name = '$name', password = '$password', contact = '$contact', email = '$email'
          WHERE username='$username'";

$resultUser = mysqli_query($conn, $queryUser);

if ($resultUser && updateVehicule1($conn, $plate1, $username) && updateVehicule2($conn, $plate2, $username) && updateVehicule3($conn, $plate3, $username) && updateVehicule4($conn, $plate4, $username)) {
    echo true;
} else {
    echo false;
}

function updateVehicule1($conn, $plate1, $username)
{
    $updated = true;

    $oldPlate = getOldPlate($conn, 1, $username);

    $idPlate1 = getVehiculeIdByPlateName($conn, $oldPlate);

    $queryVehicules1 = "UPDATE plates
          SET plate = '$plate1'
          WHERE id=$idPlate1";

    $resultVehicules1 = mysqli_query($conn, $queryVehicules1);

    return $updated;
}

function updateVehicule2($conn, $plate2, $username)
{
    $updated = true;

    $oldPlate = getOldPlate($conn, 2, $username);

    $idPlate2 = getVehiculeIdByPlateName($conn, $oldPlate);

    $queryVehicules2 = "UPDATE plates
          SET plate = '$plate2'
          WHERE id=$idPlate2";

    $resultVehicules2 = mysqli_query($conn, $queryVehicules2);

    return $updated;
}

function updateVehicule3($conn, $plate3, $username)
{
    $updated = true;

    $oldPlate = getOldPlate($conn, 3, $username);

    $idPlate3 = getVehiculeIdByPlateName($conn, $oldPlate);

    $queryVehicules3 = "UPDATE plates
          SET plate = '$plate3'
          WHERE id=$idPlate3";
    $resultVehicules3 = mysqli_query($conn, $queryVehicules3);

    return $updated;
}

function updateVehicule4($conn, $plate4, $username)
{
    $updated = true;

    $oldPlate = getOldPlate($conn, 4, $username);

    $idPlate4 = getVehiculeIdByPlateName($conn, $oldPlate);

    $queryVehicules4 = "UPDATE plates
          SET plate = '$plate4'
          WHERE id=$idPlate4";
    $resultVehicules4 = mysqli_query($conn, $queryVehicules4);

    return $updated;
}

function getOldPlate($conn, $position, $username)
{
    $oldPlate = "";

    $idUser = getUserId($conn, $username);

    $count = 1;

    $queryOldPlate = "SELECT plate FROM plates WHERE idUser=$idUser";
    $resultOldPlate = mysqli_query($conn, $queryOldPlate);

    if ($resultOldPlate) {
        while ($row = mysqli_fetch_assoc($resultOldPlate)) {
            if ($count == $position) {
                $oldPlate = $row["plate"];
                break;
            }

            $count++;
        }
    }

    return $oldPlate;
}

function getVehiculeIdByPlateName($conn, $plate)
{
    $id = 0;

    $query = "SELECT id FROM plates WHERE plate='$plate'";
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

mysqli_close($conn);
