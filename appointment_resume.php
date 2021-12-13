<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Doctors</title>
</head>

<body>
    <!--==================== Header ====================-->


    <div class="light nav-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Nav menu -->
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html"><img class="menu-logo" src="images/logo-maxpromed.png" alt="#" /></a>
                                <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                    navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="index.html" role="button"> Home   </a>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Corona testen <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="Corona-teststraat.html">Corona teststraat</a>
                                                <a class="dropdown-item" href="OP-uw-locatie.html">Op Uw Locatie</a>
                                                <a class="dropdown-item" href="services-3.html">School en Evenementen </a>

                                            </div>
                                        </li>
                                        <!-- Sub Menu -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Covid-19
                                        </a>




                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Over Ons  <i class="fas fa-plus"></i> </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="about.html">About</a>
                                                    <a class="dropdown-item" href="contact-us.html">Sneltest & PCR FAQ
                                            </a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link  " href="#" id="navbarDropdown4" role="button" aria-haspopup="true" aria-expanded="false"> Contact  </a>

                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link btn btn-outline-primary appointment-btn-top">Afspraak maken</a>
                                            </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--//End Nav menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- Sub header -->
    <section class="space sub-header">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-4">
                    <div class="sub-header_content">
                        <p>MaxPromed</p>

                        <h2>Afspraak informatie</h2>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="sub-header_main">
                        <h2>Bevestiging</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Sub header -->

    <!--//End Header -->

    <!--==================== News ====================-->
    <section class="space">
        <div class="container container-custom">
            <div class="row">

                <div class="col-md-6 col-md-12">
                    <div class="">

                        <div class="card border-info bg-light mb-3">
                            <div class="card-header">
                                <h5>Test Appointment!</h5>
                            </div>
                            <div class="card-body">

                            <?php
                                            include './php/showReservation.php';
                                ?>

                            <!--
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="alert alert-success" role="alert">
                                            Afspraak gemaakt, dit is de informatie!
                                        </div>
                                    </div>


                                    <div class="col-md-6" style="margin-top: 10px;">
                                        <label>Officiele naam</label>
                                        <input type="text" class="form-control" id="inputResidence" placeholder="" readonly>

                                    </div>
                                    <div class="col-md-6" style="margin-top: 10px;">
                                        <label>Registratiecode</label>
                                        <input type="text" class="form-control" id="inputResidence" placeholder="" readonly>

                                    </div>

                                </div>

                                <div class="row" style="margin-top: 5px;">

                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h5>Covid Test Information</h5>

                                    </div>

                                    <div class="col-md-3" style="margin-top: 10px;">
                                        <label>Keuze testtype</label>
                                        <input type="text" class="form-control" id="inputResidence" readonly>

                                    </div>
                                    <div class="col-md-3" style="margin-top: 10px;">
                                        <label>Locatie</label>
                                        <input type="text" class="form-control" id="inputResidence" readonly>

                                    </div>
                                    <div class="col-md-3" style="margin-top: 10px;">
                                        <label>Datum</label>
                                        <input type="text" class="form-control" id="inputResidence" readonly>
                                    </div>
                                    <div class="col-md-3" style="margin-top: 10px;">
                                        <label>Time of day</label>
                                        <input type="text" class="form-control" id="inputResidence" readonly>
                                    </div>
                                </div>
-->

                                <br>

                                <p class="card-text">Add some indications about time and another details</p>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//End News -->


    <!--==================== Appointment ====================-->
    <!--
    <section class="space background-bg4">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="appointment-form_wrap">
                        <div class="heading-style1">
                            <span>Online Booking</span>
                            <h2>Make an Appointment</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="email" class="form-control form-custom" placeholder="Enter Your Name">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="date" class="form-control form-custom" placeholder="Date" required>
                                        <i class="far fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="number" class="form-control form-custom" placeholder="Enter phone number">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Select location">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Choose department">
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Select doctor">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-cutom">
                                        <label for="exampleFormControlTextarea1">Your Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-success">BOOK NOW</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="why-choose_block">
                        <div class="heading-style1">
                            <span>Why Us</span>
                            <h2>Why Choose Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do eius mod tempor inc ididuntut</p>
                            <hr>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="images/icon1.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Fastest Growing Clinic</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, su</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="images/icon2.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Fastest Growing Clinic</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, su</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="images/icon3.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Fastest Growing Clinic</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, su</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="images/icon4.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Fastest Growing Clinic</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, su</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!--//End Appointment -->

    <!--==================== Testimonials ====================-->
    <!--
    <section class="space">
        <div class="container container-custom">
            <div class="col-md-12">
                <div class="heading-style1">
                    <span>Testimonials</span>
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="testi-slider">
                    <div class="testimonial-wrap">
                        <img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>
                            <span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>
                            <span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>
                            <span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>
                            <span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!--//End Testimonials -->


    <!--==================== Counter ====================-->
    <section class="counter">
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="images/counter1.png" alt="#">
                        <div class="counter-text">
                            <h2>60+</h2>
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="images/counter2.png" alt="#">
                        <div class="counter-text">
                            <h2>1000+</h2>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="images/counter3.png" alt="#">
                        <div class="counter-text">
                            <h2>150+</h2>
                            <p>Award Winner</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="counter-btn_block">
                        <a href="appointment.html" class="btn btn-success">Afspraak maken</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Counter -->

    <!--==================== Footer ====================-->
                <footer>
                    <div class="container container-custom">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="foot-contact-block">
                                    <img src="images/logo-maxpromed.png" class="img-fluid" alt="#" width="100%" height="auto" />

                                    <a href="tel:+31646626613">
                                        <h4><i class="fas fa-phone"></i>+31 646626613</h4>
                                    </a>
                                    <a href="mailto:info@maxpromed.com">
                                        <h4><i class="far fa-envelope"></i>info@maxpromed.com</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                                <div class="foot-link-box">
                                    <h4 class="css-color-1">Quick Links</h4>
                                    <ul>
                                        <li>
                                            <a href="contact-us.html"><i class="fas fa-angle-double-right"></i>Over Ons</a>
                                        </li>
                                        <li>
                                            <a href="about.html"><i class="fas fa-angle-double-right"></i>About</a>
                                        </li>
                                        <li>
                                            <a href="Corona-teststraat.html"><i class="fas fa-angle-double-right"></i>Our Services</a>
                                        </li>

                                        <li>
                                            <a href="OP-uw-locatie.html"><i class="fas fa-angle-double-right"></i>Locatie</a>
                                        </li>
                                        <li>
                                            <a href="index.html"><i class="fas fa-angle-double-right"></i>Covid-19</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 offset-lg-1">
                                <div class="foot-link-box footlink-box_btn">
                                    <ul class="text-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="copyright ">
                                    <p>©MaxProMed 2021 Allright Reserved |<a href="/MaxPromed/disclaimer-en-algemene-voorwaarden.html"> Disclaimer en algemene voorwaarden</a></p>
                                    <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--//End Footer -->

                
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Slick Slider Js -->
    <script src="js/slick.min.js"></script>
    <!-- Magnific popup Js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Script Js -->
    <script src="js/script.js"></script>
</body>

</html>