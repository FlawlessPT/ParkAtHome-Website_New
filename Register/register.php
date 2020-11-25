<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parkathome_web";
	
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['numeroTelefone'];
    $nomeUtilizador = $_GET['nomeUtilizador'];
    $pw = $_GET['password'];

    $name = $_GET['name'];
    $plate = $_GET['plate'];
 
    // Cria a ligação à BD
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Verifica se a ligação falhou (ou teve sucesso)
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    $sql = "INSERT INTO users (name, username, password, phoneNumber, email)
        VALUES ('$name', '$nomeUtilizador', '$pw', '$email', $telefone)";
    $sql2 = "INSERT INTO vehicules (name, plate, state, idUser)
        VALUES ('$plateName', '$plate', '1', '$matricula4', '$nomeUtilizador')";
 
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        echo true;
    }
    else {
        echo false;
    }
 
    mysqli_close($conn);
	
?>