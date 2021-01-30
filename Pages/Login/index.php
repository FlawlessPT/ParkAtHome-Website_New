<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../Imagens/IconSousa.png">
    <title>ParkAtHome - Aplicação para Parques de Estacionamento</title>

    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- OTHER LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="../../Includes/QuantumAlert/minfile/quantumalert.css" />
    <script src="../../Includes/QuantumAlert/minfile/quantumalert.js"></script>

    <!-- OWN CSS -->
    <link rel="stylesheet" href="../../Includes/Menu/navbar.css?v=1.4">
    <link rel="stylesheet" href="styles.css?v=1.3">

    <!-- PAGE FUNCTIONS -->
    <script src="login.js?v=1.2"></script>

</head>

<body onload="hide()">
    <!-- MENU -->
    <?php include '../../Includes/Menu/menu.php'; ?>
    <!-- CONTENT -->
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 380px; padding-left: 25px; padding-right: 25px; padding-top: 20px">
                <h3 class="card-title text-center mt-3">Iniciar Sessão: </h3>
                <div class="card-body">
                    <hr style="margin-bottom: 25px; margin-top: -20px">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user" id="username_icon"></i></span>
                        </div>
                        <input type="text" onchange="verificar()" id="nomeUtilizador" class="form-control" placeholder="Nome Utilizador" maxlength="255">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key" id="password_icon"></i></span>
                        </div>
                        <input type="password" onchange="verificar()" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <a href="#" class="forgot-password">Esqueceu-se da password?</a><br>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary" id="loginButton" onclick="login()">Iniciar Sessão</button>
                    </div>
                    <b style="display: none;" id="errorMessage" class="d-flex justify-content-center mt-3">
                        Preencha todos os campos!
                    </b>
                    <div class="text-center mt-3">
                        <span class="forgot-password">Ainda não possui conta? Registe-se <a href="../Register/">aqui</a>.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include '../../Includes/Footer/footer.php'; ?>
</body>

</html>