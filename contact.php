<?php error_reporting(0);
include('connection.php');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO tblenquiry(FullName,EmailId,Subject,Description) VALUES(:name,:email,:subject,:message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':subject', $subject, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Query sent successfully');</script>";
        echo "<script>window.location.href ='contact.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CarWash - Car Wash & Car Repair HTML5 Responsive Template">
    <meta name="keywords" content="auto, auto service, Auto Wash, car, Car Repair, car service, car wash, cleaning, garage, mechanic, motor, repair, auto painting, workshop,">
    <meta name="author" content="Theme Garbage">

    <title>Contact Us | Rajshahi Steam Wash</title>

    <link rel="icon" type="image/png" href="img/favicon.png">

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <div id="preloader">
        <div id="preloader-status"></div>
    </div>


    <header>

        <div class="hd-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <div class="hd-rgt">
                            <ul>
                                <li><a href="https://www.facebook.com/rajshahisteamwash" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCrKgDa8yJDeyV2Y4AeW97qA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/rajshahi_steam/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <div class="hd-lft">
                            <ul>
                                <li><i class="fa fa-comment-o"></i> 24x7 live Support</li>
                                <li><a href="user/dashboard.php" class="btn appoitment-btn">Make An Appointment</a></li>
                                <li> <a href="login.php" class="btn login-btn"> Login </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hd-bottom-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="logo">
                            <a href="index.php"> <img src="img/logo.png" style="width: 126px; height: 46px;"> </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="contact-intro">
                            <div class="info-intro">
                                <i class="fa fa-envelope-o"></i>
                                <div class="info-text">
                                    <h5>Email Address: </h5>
                                    <span>rajsteamwash@gmail.com</span>
                                </div>
                            </div>
                            <div class="info-intro" style="width: 194px; text-align: left;">
                                <i class="fa fa fa-phone"></i>
                                <div class="info-text">
                                    <h5>Contact Number:</h5>
                                    <span>01839-957120</span>
                                </div>
                            </div>
                            <div class="info-intro">
                                <i class="fa fa fa-clock-o"></i>
                                <div class="info-text">
                                    <h5>Opening Time:</h5>
                                    <span>Everyday: 9:30Am-11:30PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mnmenu-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="">Gallery<i class="fa fa-caret-down"> </i> </a>
                                        <ul>
                                            <li><a href="photo_gallery.php">Photos</a></li>
                                            <li><a href="video_gallery.php">Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="notice.php">News & Events</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="pagehding-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <h1>CONTACT US</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-form-sec pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <form method="POST" action="contact.php">
                        <div class="contact-field">
                            <h2>send us a message</h2>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-input-field">
                                    <h4>Your name (required) </h4>
                                    <input type="text" name="name" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-input-field">
                                    <h4>Your Email (required)</h4>
                                    <input type="email" name="email" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-input-field">
                                    <h4>Subject</h4>
                                    <input type="text" name="subject" />
                                </div>
                            </div>
                            <div class="col-md-12 message-input">
                                <div class="single-input-field">
                                    <h4>Message</h4>
                                    <textarea name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-input-fieldsbtn">
                                    <input type="submit" value="send" name="send" />
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-md-4">
                    <div class="contact-person">
                        <h1>Head Office</h1>
                        <div class="single-info">
                            <h2>Address</h2>
                            <p>75/2, Padma R/A, Road No. 5, Chandrima, 6207</p>
                        </div>
                        <div class="single-info">
                            <h2> Service Center</h2>
                            <p>103/1, (Ground Floor), in front of Sahmukdum Management University, Talaimari, Kazla, Rajshahi 6204</p>
                        </div>
                        <div class="single-info">
                            <h2>Email: </h2>
                            <p>rajsteamwash@gmail.com</p>
                        </div>
                        <div class="single-info">
                            <h2>Phone:</h2>
                            <p>01839-957120</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="map-heading">
                        <h2>Find Us on Google Map</h2>
                    </div>
                    <div class="map-sec">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.412791579864!2d88.62292571460297!3d24.36693948428913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbef36bef03e4f%3A0xf3e501740dad7997!2sRajshahi%20Steam%20Wash!5e0!3m2!1sen!2sbd!4v1649532286477!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <footer>
        <div class="footer-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="footer-wedget-one">
                            <h2>About Us</h2>
                            <p>Let's CLEAN with STEAM & Make Rajshahi GREEN!!!!! <br>
                                Save our children, Save the Earth!
                                Go... Rajshahi Steam <br> Car Wash TODAY!!!!!</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6">
                        <div class="footer-wedget-two">
                            <h2>quick links</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="services.php">Service</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="footer-wedget-three">
                            <h2>Contact us</h2>
                            <ul>
                                <li><i class="fa fa-location-arrow"></i>103/1, (Ground Floor), in front of Sahmukdum Management University, Talaimari, Kazla, Rajshahi 6204 Rajshahi, Rajshahi</li>
                                <li><i class="fa fa-envelope-o"></i>rajsteamwash@gmail.com</li>
                                <li><i class="fa fa-phone"></i>01839-957120</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">
                            <p>&copy; Rajshahi Steam Wash</p>
                            <p> Developed by: <a href="https://www.kpsoftwaresolutions.org/" target="_blank"> KP Software Solutions </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>