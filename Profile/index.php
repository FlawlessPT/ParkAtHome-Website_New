<!DOCTYPE html>
<html lang="en">

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

    <!-- OWN CSS -->
    <link rel="stylesheet" href="../Menu/navbar.css?v=1.2">

    <!-- PAGE FUNCTIONS -->
    <script src="profile.js"></script>
</head>

<body>
    <!-- MENU -->
    <?php include '../Menu/menu.php'; ?>
    <!-- CONTENT -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6">
                <h3>Perfil: </h3>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-success float-right ml-3"><i class="fas fa-check"></i></button>
                <button type="button" onclick="enableEdit()" class="btn btn-primary float-right"><i class="fas fa-edit"></i></button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <label>Nome</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="profileName" placeholder="Nome" disabled>
                </div>
                <label>Email</label>
                <div class="input-group mb-3">
                    <input type="Email" class="form-control" id="profileEmail" placeholder="Email" disabled>
                </div>
            </div>
            <div class="col-lg-6">
                <label>Contacto</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="profileContact" placeholder="Contacto" disabled>
                </div>
                <label>Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="profilePassword" placeholder="Password" disabled>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 25%; margin-right: 25%">
            <div class="col-sm">
                <div class="w-100">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Matrículas: </h3>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <hr>
                    <label>Matricula 1:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="far fa-list-alt" id="mat1_icon"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Matricula 1" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include '../Footer/footer.php'; ?>
</body>

</html>