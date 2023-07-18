<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <?php require "./partials/header.php"; ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <div id="afterLoader">

        
        <!-- Page navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio/fr">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="- btn btn-primary rounded ml-4" href="contact">COMMENCER MAINTENANT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of page navibation -->
        <!-- Contact Section -->
        <section id="contact" class="position-relative section">
            <div class="container text-center">
                <h6 class="subtitle">Contact</h6>
                <h6 class="section-title mb-4">PARLONS DE VOTRE PROJET</h6>
                <p class="mb-5 pb-4">Vous cherchez un développeur pour donner vie à votre projet ? Je suis engagé à
                    fournir des projets de haute qualité qui répondent à vos besoins et objectifs uniques. Commençons
                    une conversation sur votre projet et voyons comment nous pouvons travailler ensemble pour créer
                    quelque chose d'incroyable.</p>

                <div class="contact text-left">
                    <div class="form">
                        <h6 class="subtitle">Disponible 24/7</h6>
                        <h6 class="section-title mb-4">Contactez-moi</h6>
                        <form id="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Entrez votre nom" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Entrez votre email" required name="email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block rounded w-lg" id="btnSubmit">
                                <div class="loader"></div>
                                <span id="btnText">Envoyer un message</span>
                            </button>
                        </form>
                    </div>
                    <div class="contact-infos">
                        <div class="item">
                            <lord-icon src="https://cdn.lordicon.com/zeabctil.json" trigger="hover"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <div class="">
                                <h5>Website</h5>
                                <p>saidhammane.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <lord-icon src="https://cdn.lordicon.com/ovmtvwil.json" trigger="hover"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <div>
                                <h5>Phone Number</h5>
                                <p>+212 684756919</p>
                            </div>
                        </div>
                        <div class="item">
                            <lord-icon src="https://cdn.lordicon.com/lfqstkwj.json" trigger="hover"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <div class="mb-0">
                                <h5>Adresse e-mail</h5>
                                <p>said.hammane1@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d212746.82380644255!2d-7.388479954598478!3d33.574957912607836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1689583879243!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
    <?php require "./partials/footer.php"; ?>
    <?php require "./partials/scripts.php"; ?>
    <script src="./assets/js/contact.js"></script>
</body>

</html>