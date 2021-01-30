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

$query = "SELECT * FROM parks";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $localization = $row["localization"];
            $id = $row["id"];

            echo '<div class="row mt-5" id="' . $id . '">
                    <div class="col-sm-10">
                        <h4>' . $name . '</h4>
                        <p>' . $localization . ' </p>
                    </div>
                </div>
                <hr class="mt-0 border-dark">';
            // <div class="col-sm-2">
            //     <button class="btn arrowBigger float-right"><i id="' . $id . '" style="font-size: 20pt" class="fas fa-angle-right mt-3"></i></button>
            // </div>
        }
    }
}

mysqli_close($conn);
