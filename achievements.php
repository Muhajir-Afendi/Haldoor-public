<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Achievements - Haldoor Technical and Vocational Center</title>
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

            <!-- Title -->
            <section id="breadcrumb" class="breadcrumb">
                <div class="container">
        
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="font-weight-light">Achievements</h2>
        
                    </div>
        
                </div>
            </section>
        
            <!-- Content -->
            <section id="team" class="team keynote">
                <div class="container">
        
                    <div class="row">
                    
                        <?php

                            require_once "./config.php";

                            // Modals
                            $fetch_modal = "SELECT `id`, `title`, `body`, `image`, DATE_FORMAT(`created_at`, '%W, %M %d, %Y %l:%i %p') AS `created_at` FROM `achievements` ";                            
                            $stmt = $conn -> prepare($fetch_modal);

                            $stmt->execute();

                            $stmt->store_result();
                                    
                            if ($stmt->num_rows === 0) {
                        ?>
                            <h1 class="text-dark mb-0 text-center py-5">No Graduations Found</h1>
                        <?php
                            }
                            else
                            {

                                $stmt->bind_result($id, $title, $body, $image, $created_at);
                                
                                // output data of each row
                                while($stmt->fetch()) 
                                {
                                
                        ?>
                                    <div class="col-lg-12 mt-4">
                                        <div class="member d-flex align-items-start">
                                            <div class="pic">
                                                <img src="https://admin.haldoorvtc.org/uploads/achievements/<?php echo $image ?>" class="img-fluid" alt="" onerror="this.onerror=null;this.src='https://admin.haldoorvtc.org/assets/img/placeholder.png';">
                                            </div>
                                            <div class="member-info">
                                                <h3><?php echo $title; ?></h3>
                    
                                                <p><?php echo $created_at; ?></p>
                                                <div class="mt-2">
                                                    <a class="btn btn-primary" href="achievements/detail.php?id=<?php echo $id; ?>">Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                        <?php
                                }

                            }


                        ?>


                                
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
    <script> document.getElementById('events-navigations').classList.add("active") </script>
    <script> document.getElementById('achievements-navigations').classList.add("active") </script>

</body>

</html>