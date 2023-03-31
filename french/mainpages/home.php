<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php require "./partials/header.php"; ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <?php require "./partials/header.php"; ?>
    <div id="afterLoader">
        <?php require "./partials/navbar.php"; ?>
        <!-- About section -->
        <section id="about" class="section mt-3">
            <div class="container mt-5">
                <div class="row text-center text-md-left">
                    <div class="col-md-3">
                        <img src="./assets/imgs/avatar.png" alt="" class="img-thumbnail mb-4">
                    </div>
                    <div class="pl-md-4 col-md-9">
                        <h6 class="title">Saïd HAMMANE</h6>
                        <p class="subtitle">Développeur Full Stack</p>
                        <p>En tant que développeur Full Stack, je suis compétent à la fois en développement web
                            front-end et back-end. J'ai une large gamme de compétences techniques qui me permettent de
                            travailler sur tous les aspects d'un projet, de l'interface utilisateur à la base de données
                            et à la logique côté serveur.</p>

                        <p>J'ai de l'expérience dans des technologies telles que HTML, CSS, JavaScript, Node.js, Python
                            et React, ainsi que dans des bases de données telles que MySQL et SQLServer. J'ai également
                            travaillé avec des outils tels que Git pour développer, tester et déployer des applications
                            web.</p>
                        <p>
                            Mes responsabilités ont inclus la conception et le développement du front-end des
                            applications web, la construction d'API et de la logique côté serveur, l'intégration de
                            données provenant de différentes sources, la garantie de la sécurité et des performances,
                            ainsi que la maintenance et la mise à jour des applications au fil du temps.
                        </p>
                        <p>
                            Je suis passionné par le développement d'applications web de haute qualité, évolutives et
                            sécurisées qui répondent aux besoins des clients et des utilisateurs finaux.
                        </p>
                        <a class="btn btn-primary rounded mt-3">TÉLÉCHARGER CV</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills section -->
        <section class="section">
            <div class="container text-center">
                <h6 class="subtitle">Compétences</h6>
                <h6 class="section-title mb-4">Pourquoi me choisir</h6>
                <p class="mb-5 pb-4">Je crois que ma combinaison de compétences techniques, d'expérience et de passion
                    pour le développement web fait de moi un choix solide pour tout projet ou équipe.
                </p>
                <div class="row text-left">
                    <div class="col-sm-6">
                        <h6 class="mb-3">Web Design</h6>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3">LARAVEL/NODEJS/JAVA</h6>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3">Mobile</h6>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3">SEO</h6>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Skills sections -->
        <!-- Portfolio section -->
        <section id="portfolio" class="section">
            <div class="container text-center">
                <h6 class="subtitle">Services</h6>
                <h6 class="section-title mb-4">Ce que je fais</h6>
                <p class="mb-5 pb-4">Mes services de développement Full Stack offrent des solutions complètes de bout en
                    bout pour le développement d'applications web. Avec une expertise à la fois en développement
                    front-end et back-end, je peux créer des applications web personnalisées qui répondent à vos besoins
                    spécifiques, de la conception au déploiement. Laissez-moi vous aider à construire une présence en
                    ligne puissante et à atteindre votre public cible de manière significative.
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Développement Front-End</h5>
                                    <p class="servicesT">(HTML, CSS, JavaScript, React)</p>
                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-2.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Intégration et gestion de base de données </h5>
                                    <p class="servicesT">(MySQL, SQLServer)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-3.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Développement back-end</h5>
                                    <p class="servicesT">(Node.js, LARAVEL, JAVA)</p>

                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-4.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Intégrations tierces</h5>
                                    <p class="servicesT">(par exemple, passerelles de paiement, APIs de médias sociaux)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-5.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Développement de site web e-commerce.</h5>

                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-6.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Hébergement et déploiement de site web</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of portfolio section -->
        <!-- Page Footer -->
        <?php require "./partials/footer.php"; ?>
        <!-- End of page footer -->
    </div>

    <?php require "./partials/scripts.php"; ?>


</body>

</html>