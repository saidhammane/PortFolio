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
                        <p class="subtitle">Full Stack Developer</p>
                        <p>As a Full Stack Developer, I am skilled in both front-end and back-end web development. I
                            have a broad range of technical skills that allow me to work on all aspects of a project,
                            from the user interface to the database and server-side logic.</p>

                        <p>I have experience in technologies such as HTML, CSS, JavaScript, Node.js, Python, and React,
                            as well as databases such as MySQL and SQLServer. I have also worked with tools such as Git
                            to develop, test, and deploy web applications.</p>
                        <p>
                            My responsibilities have included designing and developing the front-end of web
                            applications, building APIs and server-side logic, integrating data from various sources,
                            ensuring security and performance, and maintaining and updating applications over time.
                        </p>
                        <p>
                            I am passionate about developing high-quality, scalable, and secure web applications that
                            meet the needs of clients and end-users.
                        </p>
                        <a class="btn btn-primary rounded mt-3">DOWNLOAD CV</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills section -->
        <section class="section">
            <div class="container text-center">
                <h6 class="subtitle">Skills</h6>
                <h6 class="section-title mb-4">Why Choose me</h6>
                <p class="mb-5 pb-4">I believe that my combination of technical skills, experience, and passion for web
                    development makes me a strong choice for any project or team.
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
                <h6 class="section-title mb-4">What I Do</h6>
                <p class="mb-5 pb-4">My Full Stack Development services provide complete end-to-end solutions for web
                    application development. With expertise in both front-end and back-end development, I can create
                    custom web applications that are tailored to your specific needs, from design to deployment. Let me
                    help you build a powerful online presence and reach your target audience in a meaningful way.
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Front-end development </h5>
                                    <p class="servicesT">(HTML, CSS, JavaScript, React)</p>
                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-2.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Database integration and management </h5>
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
                                    <h5 class="servicesT">Back-end development</h5>
                                    <p class="servicesT">(Node.js, LARAVEL, JAVA)</p>

                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-4.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Third-party integrations</h5>
                                    <p class="servicesT">(e.g., payment gateways, social media APIs)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-5.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">E-commerce website development</h5>

                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-6.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5 class="servicesT">Website hosting and deployment</h5>

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