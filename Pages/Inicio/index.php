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
    <link rel="stylesheet" href="../../Includes/Menu/navbar.css?v=1.4">
    <link rel="stylesheet" href="styles.css?v=1.2">
    <script src="inicio.js"></script>
</head>

<body>
    <!-- MENU -->
    <br>
    <br>
    <br>
    <?php include '../../Includes/Menu/menu.php'; ?>
    <?php include '../../Includes/Banners/banner-inicio.php' ?>
    <div class="container">
        <section class="project-features mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <div class="feature-buttons">
                        <button type="button" class="btn btnMain mb-3 w-100" onclick="show('acessibilidade')">
                            <span class="btnText">Acessibilidade</span>
                        </button><br>
                        <button type="button" class="btn btnMain mb-3 w-100" onclick="show('seguranca')">
                            <span class="btnText">Segurança</span>
                        </button><br>
                        <button type="button" class="btn btnMain mb-3 w-100" onclick="show('variadade')">
                            <span class="btnText">Variadade</span>
                        </button><br>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="feature-text mt-4">
                        <div style="visibility: visible; display: block" id="acessibilidade">
                            <h3>Acessibilidade</h3>
                            <p>
                                Sabemos o quão difícil é para muitos pagar por aplicações, por isso,
                                a nossa aplicação é totalmente grátis para que possa transferir e utilizar
                                sem quaisqueres custos!
                            </p>
                        </div>
                        <div style="visibility: hidden; display: none" id="seguranca">
                            <h3>Segurança</h3>
                            <p>
                                Possuimos um dos melhores sistemas de segurança online, para que
                                todos os seus dados e informações sejam todos guardados em segurança!
                            </p>
                        </div>
                        <div style="visibility: hidden; display: none" id="variadade">
                            <h3>Variadade</h3>
                            <p>
                                Queremos fazer chegar a nossa aplicação ao maior número de pessoas, por isso,
                                um dos principais pontos seria disponibilizar a aplicação tanto para dispositivos Android como iOS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-faqs mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <h3>FAQs</h3>
                    <hr class="border-dark">
                    <h5 class="faq-title pt-2">
                        Quando surgiu esta ideia?
                        <button type="button" class="btn float-right" data-toggle="collapse" data-target="#faq-response1" aria-expanded="false" aria-controls="faq-response1"><i class="fas fa-plus"></i></button>
                    </h5>
                    <div class="collapse" id="faq-response1">
                        <p class="faq-text">
                            Esta ideia surgiu no ano 2018, no meu 12º ano, onde tive que fazer um projeto para o final do ano
                            e surgindo-me assim esta ideia. Porém, agora, voltei com a mesma, porém numa versão melhorada.
                        </p>
                    </div>
                    <h5 class="faq-title pt-2">
                        Com quem trabalhamos?
                        <button type="button" class="btn float-right" data-toggle="collapse" data-target="#faq-response2" aria-expanded="false" aria-controls="faq-response2"><i class="fas fa-plus"></i></button>
                    </h5>
                    <div class="collapse" id="faq-response2">
                        <p class="faq-text">
                            Trabalhamos com qualquer empresa que se queira afiliar a nós! Logo que tenha um
                            parque de estacionamento, nós ajudamos!
                        </p>
                    </div>
                    <h5 class="faq-title pt-2">
                        Onde nos encontrar?
                        <button type="button" class="btn float-right" data-toggle="collapse" data-target="#faq-response3" aria-expanded="false" aria-controls="faq-response3"><i class="fas fa-plus"></i></button>
                    </h5>
                    <div class="collapse" id="faq-response3">
                        <p class="faq-text">
                            Somos uma empresa remota na zona do Porto, mais precisamente, Gondomar.
                        </p>
                    </div>
                    <h5 class="faq-title pt-2">
                        A aplicação está disponível para onde?
                        <button type="button" class="btn float-right" data-toggle="collapse" data-target="#faq-response4" aria-expanded="false" aria-controls="faq-response4"><i class="fas fa-plus"></i></button>
                    </h5>
                    <div class="collapse" id="faq-response4">
                        <p class="faq-text">
                            A aplicação foi desenvolvida para dispositivos Android e iOS. Portanto,
                            podem nos encontrar em ambas as lojas de aplicações. App Store e Play Store.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-team mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <center>
                        <img class="rounded-circle" src="../../Assets/me.jpg" width="250" alt="icon" />
                    </center>
                    <hr class="border-dark">
                    <h4 class="text-center">João Sousa</h4>
                    <p class="text-center">Project <b>Founder</b> and <b>CEO</b></p>
                </div>
            </div>
        </section>
    </div>
    <?php include '../../Includes/Footer/footer2.php'; ?>
</body>

</html>