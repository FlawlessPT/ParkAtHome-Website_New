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

// echo $plate3;

$queryUser = "UPDATE users
          SET name = '$name', password = '$password', contact = '$contact', email = '$email'
          WHERE username='$username'";

$resultUser = mysqli_query($conn, $queryUser);

if ($resultUser && updateVehicule1($conn, $plate1)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo true;
    } else {
        echo "Errou 2";
    }
} else {
    echo "Erro 1";
}

function updateVehicule1($conn, $plate1)
{
    $updated = false;

    $idPlate1 = getVehiculeIdByPlateName($conn, $plate1);

    if ($plate1 != "---") {
        echo $idPlate1;
        $queryVehicules1 = "UPDATE vehicules
          SET plate = '$plate1'
          WHERE id=$idPlate1";

        $resultVehicules1 = mysqli_query($conn, $queryVehicules1);

        if ($resultVehicules1) {
            if (mysqli_affected_rows($conn) > 0) {
                $updated = true;
            } else {
                $updated = false;
            }
        } else {
            $updated = false;
        }
    }

    return $updated;
}

function updateVehicule2($conn, $plate2)
{
    $updated = false;

    $idPlate2 = getVehiculeIdByPlateName($conn, $plate2);

    if ($plate2 != "---") {
        $queryVehicules2 = "UPDATE vehicules
          SET plate = '$plate2'
          WHERE id=$idPlate2";

        $resultVehicules2 = mysqli_query($conn, $queryVehicules2);

        if ($resultVehicules2) {
            $updated = true;
        } else {
            $updated = false;
        }
    }

    return $updated;
}

function updateVehicule3($conn, $plate3)
{
    $updated = false;

    $idPlate3 = getVehiculeIdByPlateName($conn, $plate3);

    if ($plate3 != "---") {
        $queryVehicules3 = "UPDATE vehicules
          SET plate = '$plate3'
          WHERE id=$idPlate3";
        $resultVehicules3 = mysqli_query($conn, $queryVehicules3);

        if ($resultVehicules3) {
            $updated = true;
        } else {
            $updated = false;
        }
    }

    return $updated;
}

function updateVehicule4($conn, $plate4)
{
    $updated = false;

    $idPlate4 = getVehiculeIdByPlateName($conn, $plate4);

    if ($plate4 != "---") {
        $queryVehicules4 = "UPDATE vehicules
          SET plate = '$plate4'
          WHERE id=$idPlate4";
        $resultVehicules4 = mysqli_query($conn, $queryVehicules4);

        if ($resultVehicules4) {
            $updated = true;
        } else {
            $updated = false;
        }
    }

    return $updated;
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
