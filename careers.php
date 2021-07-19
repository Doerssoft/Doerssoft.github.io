<?php
require_once 'system/CareerController.php';


$career = new CareerController();
$my_career = $career->getData('job_opening', NULL, NULL, 'opened_on desc');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/dsstyle.css">
    <link rel="stylesheet" href="assets/css/careers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="assets/img/ds_logo.png" type="image/png" size="128x128">
    <title>DoerSoft | Careers</title>
</head>

<body>
    <header>
        <div class="grain-overlay">
        </div>
        <div class="page-wrapper">
            <div class="nav-wrapper">
                <!-- <div class="grad-bar"></div> -->
                <nav class="navbar container">
                    <a href="index.html">
                        <img src="assets/img/ds_logo.png" alt="Company Logo">
                    </a>
                    <div class="menu-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="nav no-search">
                        <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                        <li class="nav-item"><a href="services.php">Services</a></li>
                        <li class="nav-item"><a href="careers.php">Careers</a></li>
                        <li class="nav-item"><a href="our_clients.php">Our Clients</a></li>
                        <li class="nav-item"><a href="our_csr.php">Our CSR</a></li>
                        <li class="nav-item"><a href="contact_us.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
    </header>

    <section id="hs_hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-col">
                    <h1>EVOLVING YOUR <span class="white"> CAREER </span></h1>
                    <p class="subhead">In the new world, the companies that build, learn, and evolve the fastest will
                        win.
                        <br><br>
                        Our people and processes are built for speed of iteration and innovation. We use world-class
                        product engineering and lean methodologies to transform businesses, launch startups, leverage
                        AI, and produce new paradigms of Healthcare and Education.


                    </p>
                </div>

                <div class="col-md-6 right-col">
                    <img src="./assets/img/career.svg" alt="">
                </div>
            </div>

            <div class="wave">
                <img src="./assets/img/curve.png" alt="">
            </div>
        </div>
    </section>

    <section id="lets-grow">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-8 lets-col">
                    <div class="lets-card">
                        <h2>Let's grow together</h2>
                        <p>DoersSoft marches towards transforming the digital world. Come enroll into the team of doers
                            to build your career and add to the mission of unique digital transformation. </p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section id="jobs-listings">
        <div class="container">

        <?php
        foreach ($my_career as $lcareer) {
            $job_type=$career->getWhereData('job_type',['jb_type_id'=>$lcareer->jb_type_id],['jb_name'],true);
        ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="job-card">
                        <h2 class="job-title"><?= $lcareer->job_title ?> <br class="show-mobile"> <span class="job-labels"><?= $job_type->jb_name ?></span></h2>

                        <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.</p>

                        <a href="careers-details.html" class="view-detials-btn"> View Details </a>
                    </div>
                </div>
            </div>

        <?php } ?>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="job-card">
                        <h2 class="job-title">Content Writer<br class="show-mobile"><span class="job-labels">Internship</span></h2>
                        <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.</p>

                        <a href="careers-details.html" class="view-detials-btn"> View Details </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="job-card">
                        <h2 class="job-title">Graphics Designer<br class="show-mobile"><span class="job-labels">Job</span></h2>
                        <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.</p>


                        <a href="careers-details.html" class="view-detials-btn"> View Details </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="job-card">
                        <h2 class="job-title">Sales and Marketing<br class="show-mobile"><span class="job-labels">Internship</span></h2>
                        <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                            eum non. Blanditiis.</p>

                        <a href="careers-details.html" class="view-detials-btn"> View Details </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>






    <!-- Footer section -->

    <section id="footer">
        <div class="container">
            <div class="row footer-row">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <p class="my-i">
                        <i class="fas fa-map-marker-alt"></i>
                    </p>
                    <h2 class="foot-title">Address</h2>
                    <p>Shankhamul, Kathmandu<br> Nepal</p>
                </div>

                <div class="col-md-2">
                    <p class="my-i">

                        <i class="fas fa-phone-alt"></i>
                    </p>
                    <h2 class="foot-title">Phone</h2>
                    <p>01-1485276
                        <br>9:00am - 7:00pm
                    </p>
                </div>

                <div class="col-md-2">
                    <p class="my-i">

                        <i class="fas fa-envelope"></i>
                    </p>
                    <h2 class="foot-title">Mail</h2>
                    <p>doerssoft@gmail.com
                        <br>24x7 online support
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12 text-center social-icons">
                    <a href="#"><i class="fab fa-facebook-f p-1"></i></a>
                    <a href="#"><i class="fab fa-instagram p-1"></i></a>
                    <a href="#"><i class="fab fa-youtube p-1"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in p-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>
            Copyright 2021 DoersSoft Pvt. Ltd.

            <span class="blue-foot">Design by Doers .... </span>
        </p>


    </footer>
    <script src="assets/js/ds_main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>