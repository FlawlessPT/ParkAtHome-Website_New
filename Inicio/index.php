<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Android application to manage parking lots">
    <meta name="author" content="Flawless">
    <link rel="icon" href="../Imagens/logo-vertical.svg">
    <title>Park@Home - Aplicação para Parques de Estacionamento</title>

    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- OTHER LINKS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- OWN LINKS -->
    <link rel="stylesheet" href="../Menu/navbar.css?v=1.2">
    <link rel="stylesheet" href="main_index.css?v=1.3">
</head>

<body>
    <!-- MENU -->
    <br>
    <br>
    <br>
    <?php include '../Menu/menu.php'; ?>
    <section class="banner">
        <div class="container">
            <div class="text-center">
                <div class="bannerContent">
                    <h1 class="display-4">Park@Home</h1>
                    <p style="font-size: 16pt;">Estacionar o seu automóvel nunca foi tão fácil.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a style="font-size: 16pt" class="btn btn-outline-light px-3 py-2 btnStartNow" href="../" role="button">Começar agora!</a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="project-features mt-5">
            <div class="row">
                <div class="col-md-2">
                    <div class="feature-buttons">
                        <button type="button" class="btn btnMain mb-3 w-100">
                            <span class="btnText">Feature 1</span>
                        </button><br>
                        <button type="button" class="btn btnMain mb-3 w-100">
                            <span class="btnText">Feature 2</span>
                        </button><br>
                        <button type="button" class="btn btnMain mb-3 w-100">
                            <span class="btnText">Feature 3</span>
                        </button><br>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="feature-text mt-3">
                        <h3>Titulo feature</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores reiciendis
                            itaque laboriosam consequuntur pariatur hic! Dicta, repellat laudantium inventore molestiae,
                            blanditiis, vel reiciendis temporibus culpa quia assumenda quos corporis nam.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-faqs mt-5">
            <div class="row">
                <div class="col-md-6" style="margin-left: 25%; margin-right: 25%">
                    <h3>FAQs</h3>
                    <hr class="border-dark">
                    <div class="row">
                        <div class="col-sm">
                            <h5 class="faq-title pt-2">FAQ 1</h5>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p class="faq-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h5 class="faq-title pt-2">FAQ 2</h5>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p class="faq-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h5 class="faq-title pt-2">FAQ 3</h5>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p class="faq-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h5 class="faq-title pt-2">FAQ 4</h5>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="btn float-right"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p class="faq-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-team mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <center>
                        <img src="../Imagens/Icon/SVG/icon-border.svg" width="150" alt="icon" />
                    </center>
                    <hr class="border-dark">
                    <p class="text-center">Project <b>Founder</b> and <b>CEO</b></p>
                </div>
            </div>
        </section>
    </div>
    <?php include '../Footer/footer2.php'; ?>
</body>

</html>