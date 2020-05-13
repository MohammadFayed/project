<?php
$page_name = "index";

    include "init.php";
    include $tpl."header.php";
?>

<div class="index">


        <header>

        <div class="header">
            <!-- simple carsuel without bolds ,only move img -->
            <div class="carsual">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="layout/images/01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="layout/images/02.jpg"" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="layout/images/03.png"" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="#">LOGO</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="nav-item ml-auto">

                                <ul class="navbar-nav">
                                    <div class="con-item">
                                        <li><a href="#"></i>Home</a></li>
                                    </div>
                                    <div class="con-item">
                                        <li><a href="#about-idea"></i>About idea</a></li>
                                    </div>
                                    <div class="con-item">
                                        <li><a href="#our-team"></i>our team</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>

        </header>
        <div class="about-header text-center mt-4 text-capitalize" id="about-idea">
                    <h4>about idea</h4>
        </div>
        <section class="about-idea">
            <div class="container">
                <div class="row">
                    <div class="header-section col-md col-sm-12">
                        <img src="layout/images/unvlogo.png" alt="tanta university" />
                    </div>
                    <div class="contenet col-md col-sm-12">
                        <ul>
                            <li>The idea will be a website that records the student with all his required data without having to go down or travel to it, so it will be a saver for effort and money</li>
                            <li>The site will be programmed on specific information, and it will be accepted for the student to enter the university city These conditions are set by the university</li>
                            <li>The site is divided into stages, meaning that it accepts the most distant students in the distance as a first stage and the closest students</li>
                            <li>The site will be available for a certain period, then the site will be closed for a period of time</li>
                            <li>After a certain period, the result will be shown to the student, whether or not he was accepted in the university city, and is itFirst or second stage</li>
                            <li>If the student is not accepted, then this case will not have lost his time and his money</li>
                            <li>Also, it reduces acceptance time because it is electronic, not through a government employee</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <div class="about-header text-center mt-4 text-capitalize" id="our-team">
                    <h4>our team</h4>
        </div>
        <section class="about-us">
            <div class="person">
                <img src="layout/images/p1.png" alt="Mohammad Fayed" class="person-pic">
                <div class="person-info">
                    <h2>fatma farag</h2>
                    <p>back-End Developer</p>
                    <div class="socialmedia">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="person">
                <img src="layout/images/PicsArt_07-22-02.17.21.jpg" alt="Mohammad Fayed" class="person-pic">
                <div class="person-info">
                    <h2>mohammad fayed</h2>
                    <p>full-Stack Developer</p>
                    <div class="socialmedia">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="person">
                <img src="layout/images/p2.png" alt="Mohammad Fayed" class="person-pic">
                <div class="person-info">
                    <h2>nahla gamal</h2>
                    <p>front-End Developer</p>
                    <div class="socialmedia">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="person">
                <img src="layout/images/p4.png" alt="Mohammad Fayed" class="person-pic">
                <div class="person-info">
                    <h2>farha mohammad</h2>
                    <p>back-End Developer</p>
                    <div class="socialmedia">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                </div>
        </section>
        <footer>
            <p>copyright &copy; 2020 by <strong>Viking's team</strong> , all rights reserved</p>
        </footer>


    


</div>


<?php   include $tpl."footer.php"; ?>