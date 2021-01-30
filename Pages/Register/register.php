<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkathome_web";

$name = $_GET['nome'];
$nomeUtilizador = $_GET['nomeUtilizador'];
$pw = $_GET['password'];
$contact = $_GET['numeroTelefone'];
$email = $_GET['email'];

// Cria a ligação à BD
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verifica se a ligação falhou (ou teve sucesso)
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if (insertData($conn, $name, $nomeUtilizador, $pw, $contact, $email)) {
    echo true;
} else {
    echo false;
}

function insertData($conn, $name, $nomeUtilizador, $pw, $contact, $email)
{
    $inserted = false;

    $sql1 = "INSERT INTO users (name, username, password, contact, email)
        VALUES ('$name', '$nomeUtilizador', '$pw', '$contact', '$email')";

    $query1 = mysqli_query($conn, $sql1);

    if ($query1) {
        $inserted = true;
    } else {
        $inserted = false;
    }

    $idUser = getUserIdByUsername($conn, $nomeUtilizador);

    $sql2 = "INSERT INTO plates (idUser)
        VALUES ($idUser)";
    $sql3 = "INSERT INTO plates (idUser)
        VALUES ($idUser)";
    $sql4 = "INSERT INTO plates (idUser)
        VALUES ($idUser)";
    $sql5 = "INSERT INTO plates (idUser)
        VALUES ($idUser)";

    $query2 = mysqli_query($conn, $sql2);
    $query3 = mysqli_query($conn, $sql3);
    $query4 = mysqli_query($conn, $sql4);
    $query5 = mysqli_query($conn, $sql5);

    if ($query2 && $query3 && $query4 && $query5) {
        $inserted = true;
    } else {
        $inserted = false;
    }

    return $inserted;
}

function getUserIdByUsername($conn, $nomeUtilizador)
{
    $idUser = 0;

    $query = "SELECT id FROM users WHERE username='$nomeUtilizador'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                $idUser = $row["id"];
            }
        }
    }

    return $idUser;
}

mysqli_close($conn);
