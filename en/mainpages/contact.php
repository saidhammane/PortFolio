<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <?php require "./partials/header.php"; ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <?php require "captcha.php"; ?>
    <div id="afterLoader">
        <?php require "./partials/navbar.php"; ?>
        <!-- Contact Section -->
        <section id="contact" class="position-relative section">
            <div class="container text-center">
                <h6 class="subtitle">Contact</h6>
                <h6 class="section-title mb-4">LET’S TALK ABOUT YOUR PROJECT</h6>
                <p class="mb-5 pb-4">Looking for a developer to bring your project to life? I am committed to delivering
                    high-quality projects that meet your unique needs and goals. Let's start a conversation about your
                    project
                    and see how we can work together to create something amazing.</p>

                <div class="contact text-left">
                    <div class="form">
                        <h6 class="subtitle">Available 24/7</h6>
                        <h6 class="section-title mb-4">Get In Touch</h6>
                        <form id="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email" required name="email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="h-captcha" data-sitekey="c53f4092-95f1-427f-ab50-3e5d39ce1c5a"></div>

                            <button type="submit" class="btn btn-primary btn-block rounded w-lg" id="btnSubmit">
                                <div class="loader"></div>
                                <span id="btnText">Send Message</span>
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
                                <h5>Email Address</h5>
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