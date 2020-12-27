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

$type = $_GET["type"];

switch ($type) {
    case "name":
        echo getName($conn);
        break;
    case "email":
        echo getEmail($conn);
        break;
    case "contact":
        echo getContact($conn);
        break;
    case "password":
        echo getPassword($conn);
        break;
}

function getName($conn)
{
    $name = "";
    $sessionUsername = $_SESSION["userName"];

    $query = "SELECT name FROM users WHERE username='" . $sessionUsername . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
        } else {
            $name = "Erro";
        }
    }

    return $name;
}

function getEmail($conn)
{
    $email = "";
    $sessionUsername = $_SESSION["userName"];

    $query = "SELECT email FROM users WHERE username='" . $sessionUsername . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $email = $row["email"];
        } else {
            $email = "Erro";
        }
    }

    return $email;
}

function getContact($conn)
{
    $contact = "";
    $sessionUsername = $_SESSION["userName"];

    $query = "SELECT contact FROM users WHERE username='" . $sessionUsername . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                $contact = $row["contact"];
            } else {
                $contact = "Erro";
            }
        }
    }

    return $contact;
}

function getPassword($conn)
{
    $password = "";
    $sessionUsername = $_SESSION["userName"];

    $query = "SELECT password FROM users WHERE username='" . $sessionUsername . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            $password = $row["password"];
        } else {
            $password = "Erro";
        }
    }

    return $password;
}

mysqli_close($conn);
