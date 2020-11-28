<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../Imagens/logo-vertical.svg">
    <title>ParkAtHome - Aplicação para Parques de Estacionamento</title>

    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- OTHER LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- OWN CSS -->
    <link rel="stylesheet" href="../Menu/navbar.css?v=1.0">
    <link rel="stylesheet" href="main_register.css?v=1.0">

    <!-- PAGE FUNCTIONS -->
    <script src="register.js?v=1.1"></script>
</head>

<body onload="esconder()">
    <!-- MENU -->
    <?php include '../Menu/menu.php'; ?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-xl-left text-sm-center font-weight-bold ">Registar Conta: </h3>
                <hr>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user" id="name_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="nome" id="nome" class="form-control" placeholder="Nome*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-at" id="email_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="email" id="email" class="form-control input_user" placeholder="Email*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-mobile-alt" id="phone_number_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="numeroTelefone" id="numeroTelefone" class="form-control input_user" placeholder="Número Telefone*">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user" id="username_icon"></i></span>
                    </div>
                    <input type="text" onchange="verificar()" name="nomeUtilizador" id="nomeUtilizador" class="form-control input_user" placeholder="Nome Utilizador*" maxlength="255">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key" id="password_icon"></i></span>
                    </div>
                    <input type="password" onchange="verificar()" name="password" id="password" class="form-control input_pass" placeholder="Password*">
                </div>
                <b class="d-flex justify-content-end" style="color: black">
                    * obrigatório
                </b>
                <b class="text-right" style="color: red; text-decoration: underline;" id="errorMessage">
                    Preencha todos os campos!
                </b>
                <div class="d-flex justify-content-end">
                    <button class="btn bg-info mt-3" type="button" id="registerButton" onclick="inserir()">Registar</button>
                </div>
                <div class="text-center mt-3">
                    <span class="forgot-password">Já possui conta? Inicie sessão <a href="../Login/">aqui</a>.</span>
                </div>
            </div>
        </div>
    </div>
    <?php include '../Footer/footer.php'; ?>
</body>

</html>