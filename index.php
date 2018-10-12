<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="The perfect nerd to create your perfect website.">
        <meta author="Christopher Dias">
        <meta keywords="christopher dias portfolio, christopher dias, build website, build website online, web developer
            portfolio, hire web developer, hire web developer online, hire
            website builder, hire freelance web developer">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Christopher Dias | Portfolio</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">

        <!-- ProgressBars -->
        <link rel="stylesheet" href="assets/css/jquery.lineProgressbar.min.css">
        <!-- ScrollReveal -->
        <script
            src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <!-- Custom Styles -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
        <!--HEADER-->

        <header class="header">
            <div id="particles-js" class="header__particles">

            </div>
            <div class="header__title">
                <div id="headerName">

                </div>
            </div>
        </header>

        <!--NAVBAR-->

        <nav class="navbar navbar-expand-md py-3">
            <div class="container">
                <button class="navbar-toggler ml-auto navbar__toggler"
                    type="button"
                    data-toggle="collapse" data-target="#navbarContent">
                    <span class="fas fa-bars navbar__toggler-btn"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar__menu navbar-nav text-center m-auto">
                        <li class="navbar__item navbar__item--active nav-item
                            active">
                            <a href="index.html" class="navbar__link nav-link">Home</a>
                        </li>
                        <li class="navbar__item nav-item">
                            <a href="#About" class="navbar__link nav-link">About</a>
                        </li>
                        <!--
                    <li class="navbar__item nav-item">
                        <a href="#" class="navbar__link nav-link">Portfolio</a>
                    </li>
                    -->
                        <li class="navbar__item nav-item">
                            <a href="#Contact" class="navbar__link nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--ABOUT-->

        <section id="About" class="about">
            <div class="container">
                <div id="srAboutHead" class="wrapper text-center">
                    <h4>About</h4>
                </div>
                <div class="about__services">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="icon-wrapper">
                                <i class="icon fas fa-tachometer-alt"></i>
                            </div>
                            <div class="text-wrapper">
                                <h5>Fast</h5>
                                <p>Fast load times and lag free interaction, my
                                    highest priority.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="icon-wrapper">
                                <i class="icon fas fa-mobile-alt"></i>
                            </div>
                            <div class="text-wrapper">
                                <h5>Responsive</h5>
                                <p>My layouts will work on any device, big or
                                    small.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="icon-wrapper">
                                <i class="icon far fa-lightbulb"></i>
                            </div>
                            <div class="text-wrapper">
                                <h5>Intuitive</h5>
                                <p>Strong preference for easy to use, intuitive
                                    UX/UI.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="icon-wrapper">
                                <i class="icon fas fa-rocket"></i>
                            </div>
                            <div class="text-wrapper">
                                <h5>Dynamic</h5>
                                <p>Websites don't have to be static, I love
                                    making
                                    pages come to life.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="about__info text-center">
                            <img src="assets/images/profile.jpg" alt="Profile
                                Picture">
                            <div class="text-wrapper">
                                <p>Hi! I am Chris.</p>
                                <br>
                                <p>A Full Stack Web Developer
                                    well-versed in numerous programming
                                    languages
                                    including JavaScript, JQuery, CSS (SASS),
                                    PHP and
                                    Python.</p>
                                <br>
                                <p>I have a serious passion for creating
                                    beautiful UI layouts and an awesome
                                    front-end user
                                    experience.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about__skills">
                            <div class="about__progress-bar">
                                <span>HTML</span><span id="html"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>CSS</span><span id="css"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>JavaScript</span><span id="javascript"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>jQuery</span><span id="jquery"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>PHP</span><span id="php"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>MySQL</span><span id="mysql"></span>
                            </div>
                            <div class="about__progress-bar">
                                <span>Adobe XD</span><span id="adobexd"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJECTS -->

        <!-- BLOG -->

        <!-- CONTACT -->

        <section id="Contact" class="contact">
            <div class="wrapper">
                <div id="srContact" class="container">
                    <div class="text-wrapper text-center">
                        <h4>Contact</h4>
                        <p>Have a question or want to work together?</p>
                    </div>
                    <div class="errors">
                        <div class="alert-danger rounded text-center mb-4"
                            style="max-width:500px; margin:auto">

                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="contact__errors">

                        </div>

                        <div class="contact__success">

                        </div>

                        <form name="contact-form" action="mail.php"
                            method="POST">
                            <input id="name" type="text" name="name"
                                placeholder="Name"><br>
                            <input id="email" type="text" name="email"
                                placeholder="Email"><br>
                            <textarea id="message" name="message"
                                placeholder="Your Message"
                                cols="30" rows="10"></textarea><br>
                            <button type="submit" value="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- Footer -->

        <footer class="footer">
            <div class="wrapper text-center py-4">
                <div class="footer__social-links">
                    <a href="https://www.linkedin.com/in/christopher-dias-6b5937106/" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/chrisd666" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <p>Christopher Dias &copy; 2018</p>
                <a class="back-to-top" id="backToTop" href="#"><i class="fas
                        fa-angle-double-up"></i></a>
            </div>
        </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

        <!-- Custom -->
        <script src="assets/js/custom.js"></script>

        <!-- ParticlesJS -->

        <script
            src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script src="assets/js/particlesJSdata.js"></script>
        <!-- Typed.js -->
        <script
            src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9/lib/typed.min.js"></script>
        <script src="assets/js/typedData.js"></script>
        <!-- LineProgressBars -->
        <script src="assets/js/jquery.lineProgressbar.js"></script>
        <script src="assets/js/lineProgressbarData.js"></script>
        <!-- ScrollReveal -->
        <script src="assets/js/scrollRevealData.js"></script>
    </body>

</html>