<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
        .container-f {
            /* height: 100vh; */
            padding: 1% 1%;

            /* background: linear-gradient(130deg, #5899E2, #FFFFFF); */
            background: linear-gradient(135deg, rgb(121, 241, 164) 10%, rgb(14, 92, 173) 100%);
        }

        h3 {
            text-decoration: underline;
            font-size: 28px !important;
            color: grey !important;
        }

        .t {
            display: flex;
            height: 70px;
            justify-content: center;
            align-items: center;
        }

        .item-container {
            margin-top: 40px;
            margin-right: 15%;
            margin-left: 15%;
            margin-bottom: 80px;
            display: flex;
            flex-wrap: wrap;
            justify-content: baseline;


        }

        .box {
            width: 300px;
            height: 440px;
            text-align: center;
            box-shadow: 5px 5px 5px 5px gray;
            border-radius: 5%;
            overflow: hidden;
            padding: 10px;
            margin: 10px 25Px;
            background-color: #f5f5dc;
            justify-content: center;
            align-items: center;
        }

        .scrl {
            height: 60px !important;
            overflow-y: scroll !important;
            margin-bottom: 50px;
        }

        .scrl::-webkit-scrollbar {
            display: none !important;
        }

        .box img {
            width: 100%;
            height: 280px;
            border-radius: 5%;
            margin-bottom: 5px;

        }
    </style>
    <title>Nurani Garden Centre</title>


    <link rel="icon" type="image/x-icon" href="/images/leaf.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">



    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <!-- Preloader -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-circle"></div>
			<div class="preloader-img">
					<img src="images/Loading_logo.png" alt="">
			</div>
	</div> -->

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area admin-panel" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="images/Nurani.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <?php
                                echo $_SESSION['name'];
                                if ($_SESSION['name']== "admin")
                                {
                                    $pageList = [
                                        [
                                            "link" => "admin-homepage.php",
                                            "name" => "Home"
                                        ],
                                        [
                                            "link" => "manage-user.php",
                                            "name" => "Manage User"
                                        ],
                                        [
                                            "link" => "add-items.php",
                                            "name" => "Add Items"
                                        ],
                                        [
                                            "link" => "view-items.php",
                                            "name" => "View Items"
                                        ],
                                        [
                                            "link" => "view-appointments.php",
                                            "name" => "View Appointments"
                                        ],
                                        [
                                            "link" => "admin-panel.php",
                                            "name" => "Admin Panel"
                                        ],
                                    ];
    
                                }
                                else{
                                    $pageList = [
                                        [
                                            "link" => "homepage.php",
                                            "name" => "Home"
                                        ],
                                        [
                                            "link" => "homepage.php",
                                            "name" => "Services"
                                        ],
                                        [
                                            "link" => "homepage.php",
                                            "name" => "Gallery"
                                        ],
                                        [
                                            "link" => "homepage.php",
                                            "name" => "Testimony"
                                        ],
                                        [
                                            "link" => "homepage.php",
                                            "name" => "Project"
                                        ],
                                        [
                                            "link" => "view-items.php",
                                            "name" => "View Items"
                                        ],
                                        [
                                            "link" => "contact.php",
                                            "name" => "Contact"
                                        ]
                                    ];
                                    
    
                                }

                              
                                foreach ($pageList as $page) {
                                    if ($page['name'] == "View Items")
                                        echo '<li class="current-list-item"><a href="' . $page["link"] . '">' . $page["name"] . '</a></li>';
                                    else
                                        echo '<li><a href="' . $page["link"] . '">' . $page["name"] . '</a></li>';
                                }
                                ?>
                                <!-- <li><a href="admin-homepage.html">Home</a>
                                </li>
                                <li><a href="manage-user.php">Manage User</a></li>
                                </li>
                                <li><a href="add-items.php">Add Items</a>

                                </li>
                                <li class="current-list-item"><a href="view-items.php">View Items</a></li>
                                <li><a href="view-appointments.php">View Appointments</a>
                                <li><a href="admin-panel.html">Admin Panel</a>
                                </li> -->
                                <li><a href="index.html">Sign Out (<?php echo $_SESSION['name']; ?>) <i class="fas fa-sign-out-alt"> </i></a></li>
                                <li>
                                    <div class="header-icons">
                                        <!-- <a class="shopping-cart" href="cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fa fa-search"></i></a> -->
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <!-- <a class="mobile-show search-bar-icon" href="#"><i class="fa fa-search"></i></a> -->
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">

                </div>
            </div>
        </div>
    </section>
    <div class="container-f">
        <div class="item-container">
            <?php
            include 'connect.php';
            $sql = "SELECT * FROM item_t";;
            $res = mysqli_query($conn, $sql); ?>

            <?php
            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) {  ?>
                    <div class="box">
                        <div class="t">
                            <h3><?= $images['name'] ?></h3>
                        </div>
                        <img src="images/upload/<?= $images['img_url'] ?>">
                        <div class="scrl">
                            <p><?= $images['description'] ?></p>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
    </div>

    <Section class="ftco-footer">
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">



                <div class="row mb-5">

                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <div class="ftco-footer_logo" data-wow-delay="500ms">
                                <img class="second-img" src="images/Nurani-logo.png" alt="">
                            </div>

                            <p>Nurani Garden Centre, where artistry meets nature to craft breathtaking landscapes tailored to elevate your outdoor & Indoor living experience.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <div class="ftco-heading-2">
                                <h2>Services</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Landscape Design</a></li>
                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Planting & Garden Install</a></li>
                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Irrigation & Drainage</a></li>
                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Garden Maintenance</a></li>

                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Pest & Disease Control</a></li>
                                <li><a href="index.html#service" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Sustainable Landscaping</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <div class="ftco-heading-2">
                                <h2>Contact Info</h2>
                            </div>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">Dhaka-1216</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">01911111111</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">nuranigarden@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <div class="ftco-heading-2">
                                <h2>Business Hours</h2>
                            </div>

                            <div class="opening-hours">
                                <h4>Opening Days:</h4>
                                <p class="pl-3">
                                    <span>Monday – Friday : 9am to 20 pm</span>
                                    <span>Saturday : 9am to 17 pm</span>
                                </p>
                                <h4>Vacations:</h4>
                                <p class="pl-3">
                                    <span>All Sunday Days</span>
                                    <span>All Official Holidays</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved @ Nurani Garden Centre</p>
                    </div>
                </div>
            </div>
        </footer>

    </Section>

    <script src="js/sticker.js"></script>
    <script src="js/jquery.isotope-3.0.6.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/plugins.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>






    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

        jQuery(document).ready(function($) {
            $('.main-menu').meanmenu({
                meanMenuContainer: '.mobile-menu',
                meanScreenWidth: "992"
            });
        });
    </script>



</body>

</html>