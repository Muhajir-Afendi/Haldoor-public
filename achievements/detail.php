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
    <link href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet" >

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div id="app">

        <!-- Header -->
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container d-flex align-items-center">

                    <!-- Logo -->
                    <a href="index" class="navbar-brand">
                        <img style="width: 150px; height: 10%;" src="../img/logo.png" alt="" class="img-fluid logo-image">
                    </a>

                    <!-- Mobile Menu -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">

                            <!-- Home -->
                            <li class="nav-item">
                                <a class="nav-link text-bold "
                                    href="../index.php">Home</a>
                            </li>

                            <!-- About -->
                            <li class="nav-item ">
                                <a class="nav-link text-bold " href="../about.php">About</a>
                            </li>

                            <!-- Courses -->
                            <li class="nav-item ">
                                <a class="nav-link text-bold "
                                    href="../courses.php">Courses</a>
                            </li>

                            <!-- Events -->
                            <li
                                class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle "
                                    href="#" id="eventss" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Events
                                </a>
                                <div class="dropdown-menu" aria-labelledby="eventss">

                                    <a class="dropdown-item bg-white"
                                        href="../graduations.php">Graduations</a>

                                    <a class="dropdown-item bg-white active"
                                        href="../achievements.php">Achievements</a>

                                    <a class="dropdown-item bg-white "
                                        href="../keynotes.php">Keynotes</a>


                                </div>
                            </li>

                            <!-- Partners -->
                            <li class="nav-item ">
                                <a class="nav-link text-bold "
                                    href="../partners.php">Partners</a>
                            </li>

                            <!-- Contact Us -->
                            <li class="nav-item ">
                                <a class="nav-link text-bold "
                                    href="../contact-us.php">Contact US</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>           

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
            <section  id="blog" class="blog">
                <div class="container">
        
                    <div class="row">
                    
                        <?php

                            require_once "../config.php";

                            // Modals
                            $fetch_modal = "SELECT `id`, `title`, `body`,`facebook`, `youtube`, `instagram`, `twitter`, `image`, DATE_FORMAT(`created_at`, '%M %d, %Y') AS `created_at` FROM `achievements` WHERE `id` = ? ";                            
                            $stmt = $conn -> prepare($fetch_modal);
                            $stmt->bind_param("s", $_GET["id"]);


                            $stmt->execute();

                            $stmt->store_result();
                                    
                            if ($stmt->num_rows === 0) {
                        ?>
                            <h1 class="text-dark mb-0 text-center py-5">This achievement does not exist</h1>
                        <?php
                            }
                            else
                            {

                                $stmt->bind_result($id, $title, $body, $facebook, $youtube, $instagram, $twitter, $image, $created_at);
                                
                                // output data of each row
                                while($stmt->fetch()) 
                                {
                                
                                    if ($facebook === null  || $facebook === "")    $facebook = "#";
                                    if ($youtube === null   || $youtube === "")     $youtube = "#";
                                    if ($instagram === null || $instagram === "")   $instagram = "#";
                                    if ($twitter === null   || $twitter === "")     $twitter = "#";
                        ?>

                                    <div class="col-lg-8 entries">
                                            
                                        <article class="entry entry-single">

                                            <div class="entry-img">
                                                <img src="https://admin.haldoorvtc.org/uploads/achievements/<?php echo $image ?>" alt="" class="img-fluid" onerror="this.onerror=null;this.src='https://admin.haldoorvtc.org/assets/img/placeholder.png';">
                                            </div>

                                            <h2 class="entry-title">
                                                <?php echo $title; ?>
                                            </h2>

                                            <div class="entry-meta">
                                                <ul>
                                                    <li class="d-flex align-items-center">
                                                        <i class="fas fa-user"></i>Admin
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="far fa-clock"></i>
                                                        <time datetime="2020-10-01"><?php echo $created_at; ?></time>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="entry-content">
                                                <p>
                                                    <p>
                                                        <?php echo $body; ?>
                                                    </p>
                                                </p>

                                            </div>

                                            <div class="entry-footer clearfix">
                                                <div class="float-left">
                                                    <i class="fas fa-folder-open"></i> &nbsp;
                                                    <ul class="cats">
                                                        <li><a href="../achievements.php">Achievements</a></li>
                                                    </ul>
                                                </div>

                                                <div class="float-right share">
                                                    <a href="<?php echo $twitter; ?>" title="Share on Twitter" target="__blank">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a href="<?php echo $facebook; ?>" title="Share on Facebook" target="__blank">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a href="<?php echo $instagram; ?>" title="Share on Instagram" target="__blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                    <a href="<?php echo $youtube; ?>" title="Share on Youtube" target="__blank">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </article>

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
    <script src="../vendor/jquery/jquery.min.js" defer></script>
    <script src="../bootstrap-4.5.3-dist/js/bootstrap.min.js" defer></script>

</body>

</html>