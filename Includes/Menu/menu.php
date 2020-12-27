<nav class="navbar navbar-expand-lg navbar-dark fixed-top w-100">
    <div class="container">
        <a class="navbar-brand" href="../Inicio/index.php">
            <img src="../../Assets/Logo/Normal/SVG/logo-horizontal.svg" id="logo" alt="parking-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "parkathome_web";

            // Cria a ligação à BD
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Verifica se a ligação falhou (ou teve sucesso)
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            session_start();

            if (isset($_SESSION['userName'])) {
                $loggedUser = $_SESSION['userName'];

                $sql = "SELECT name FROM users WHERE username='$loggedUser'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    if ($row = mysqli_fetch_assoc($result)) {
                        $personName = $row['name'];
                    }
                }
                echo '<ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Inicio/index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Parques/index.php">Parques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Sobre/index.php">Sobre</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown">
                            <button class="nav-link nav-item btn dropdown-toggle text-white text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ' . $personName . '
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <b class="dropdown-header" style="font-size: 15px"> ' . strtoupper($loggedUser) . '</i></b>
                                <a class="dropdown-item" href="../Profile/index.php">> Perfil <i class="fas fa-user"></i></a>
                                <a class="dropdown-item" href="../Utils/logout.php">> Sair <i class="fas fa-sign-out-alt"></i></a>
                            </div>
                        </li>
                    </ul>';
            } else {
                echo '<ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Inicio/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Parques/index.php">Parques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-uppercase" href="../Sobre/index.php">Sobre</a>
                        </li>
                        <li class="dropdown">
                            <button class="nav-link nav-item btn dropdown-toggle text-uppercase text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Conta
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../Login/index.php">> Iniciar Sessão <i class="fas fa-sign-in-alt"></i></a>
                                <a class="dropdown-item" href="../Register/index.php">> Registar Conta <i class="fas fa-plus"></i></a>
                            </div>
                        </li>
                    </ul>';
            }
            ?>
        </div>
    </div>
</nav>