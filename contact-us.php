<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us - Haldoor Technical and Vocational Center</title>
    <meta content="" name="Haldoor technical and vocational training is a voluntary, non-profit and non-political organization established in 2016 by a group of young people to serve for sharpening the skills of young counter-parts. ">
    <meta content="" name="Haldoor Technical and Vocational Center">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" >

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div id="app">

        <!-- Header -->
        <?php include('statics/header.php') ?>
        
        <!-- Content -->
        <main id="main">

            <!-- Header -->
            <section id="breadcrumb" class="breadcrumb">
                <div class="container">
        
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="font-weight-light">Contacts</h2>
        
                    </div>
        
                </div>
            </section>
        
            <!-- Content -->
            <section id="contact" class="contact py-5">
                <div class="container">
        
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62955.91139918488!2d44.04833309793074!3d9.530916352405988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1628eb95848d481f%3A0xc2dddd836506a36!2sHaldoor%20Technical%20School!5e0!3m2!1sen!2sso!4v1635833564213!5m2!1sen!2sso" 
                        width="100%" height="450" style="border:0;" allowfullscreen="" 
                        loading="lazy" aria-hidden="false" tabindex="0"></iframe>                        
                    </div>
        
                    <div class="row mt-5">
        
                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Mohamed Mooge district near digaale camp </p>
                                </div>
        
                                <div class="email">
                                    <i class="fas fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>Haldoorvtc@gmail.com</p>
                                </div>
        
                                <div class="phone">
                                    <i class="fas fa-phone-alt"></i>
                                    <h4>Call:</h4>
                                    <p>+252634772121</p>
                                </div>
        
                            </div>
        
                        </div>
        
                        <div class="col-lg-8 mt-5 mt-lg-0">
        
                            <form action="savecontacts.php" method="POST">
                                <input type="hidden" name="_token" value="ML9YpGFWtIo6L4M15ly5bzfW79hdlSYzxEhw4acV">                        <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control "
                                            id="name" placeholder="Your Name" data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars" required/>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control "
                                            name="email" id="email" placeholder="Your Email" data-rule="email"
                                            data-msg="Please enter a valid email" required/>
                                        <div class="validate">
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control "
                                        name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" required/>
                                    <div class="validate"></div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control " name="message"
                                        rows="5" data-rule="required" data-msg="Please write something for us"
                                        placeholder="Message" required></textarea>
                                    <div class="validate"></div>
                                </div>
        
                                <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
                            </form>
        
        
        
                        </div>
        
                    </div>
        
                </div>
            </section>
                
        </main>

        <!-- Footer -->
        <footer class="" id="footer">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row ml-xl-5 ml-md-5">

                        <div class="col-lg-4 col-md-5">
                            <div class="footer-info">
                                <h3>HALDOOR</h3>
                                <p>
                                    We offer vocational training facilities 
                                </p><br>
                                <p>

                                    <!-- Location -->
                                    <strong>
                                        <i class="fas fa-map-marked-alt"></i> &nbsp;
                                        Location:
                                    </strong> <br>
                                    Mohamed Mooge district near digaale camp <br>
                                    Hargeisa, Somaliland<br><br>

                                    <!-- Phone -->
                                    <strong>
                                        <i class="fas fa-phone-alt"></i>  &nbsp;
                                        Phone:
                                    </strong> +252634772121<br><br>

                                    <strong>
                                        <i class="fas fa-envelope"></i> &nbsp;
                                        Email:
                                    </strong> Haldoorvtc@gmail.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="#" class="facebook" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="index">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="about">About</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Courses</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="partners">Partners</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="contact-us">Contact US</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Courses</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> 
                                    <a href="courses">Auto mechanics</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Driving</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Plumbing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Carpentry</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Electricity/Electronics</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Renewable Energy</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Decoration</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Henna and Make-up</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Tailoring</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="courses">Cooking</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Events</h4>
                            <ul>
                                
                                <li><i class="bx bx-chevron-right"></i> <a href="graduations">Graduations</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="achievements">Achievements</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="keynotes">Keynotes</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>HALDOOR</span></strong>. All Rights Reserved.
                </div>

            </div>
        </footer>   

    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js" defer></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js" defer></script>
    <script> document.getElementById('contactus-navigations').classList.add("active") </script>

</body>

</html>