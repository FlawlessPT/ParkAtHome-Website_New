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

$query = "SELECT * FROM vehicules WHERE idUser=$idUser";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $plate = $row["plate"];
            $count++;

            echo '<label>Matricula ' . $count . ':</label>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-list-alt" id="mat1_icon"></i>
                    </span>
                </div>
                <input type="text" id="plate' . $count . '" class="form-control" placeholder="Matricula ' . $count . '" value="' . $plate . '" disabled>
            </div>';
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

mysqli_close($conn);
