<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <?php require "./partials/header.php"; ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

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
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
    </div>
    <?php require "./partials/footer.php"; ?>
    <?php require "./partials/scripts.php"; ?>
</body>

</html>