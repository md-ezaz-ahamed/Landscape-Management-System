<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Nurani Garden Centre</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/x-icon" href="/images/leaf.png">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.a input::placeholder {
			font-weight: bolder;
			font-family: 'Times New Roman', Times, serif;
			color: black;
		}
	</style>

</head>

<body>


	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<div class="site-logo">
							<a href="index.html">
								<img src="images/Nurani.png" alt="">
							</a>
						</div>


						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="homepage.php">Home</a></li>
								<li><a href="homepage.php">Services</a></li>
								<li><a href="homepage.php">Gallery</a></li>
								<li><a href="homepage.php">Testimony</a></li>
								<li><a href="homepage.php">Project</a></li>
								<li><a href="view-items.php">View Items</a></li>
								<li class="current-list-item"><a href="contact.php">Contact</a></li>
								<li><a href="index.html">Sign Out (<?php echo $_SESSION['name']; ?>) <i class="fas fa-sign-out-alt"> </i></a></li>
								<li>
									<div class="header-icons">

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

	<section class="contact_us ftco-section bg-light">
		<div class="container">
			<div class="section-title text-center">
				<h2>Appointment Form</h2>
				<hr>
				<p>Book your appointment now with just one click.</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<h3>Address</h3>
										<hr>
										<p> <span>Mirpur, Dhaka-1216</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<h3>Phone</h3>
										<hr>
										<p><a><span class="text">01911111111</span></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<h3>Email</h3>
										<hr>
										<p><a href="mailto:nuranigarden@gmail.com"><span>nuranigarden@gmail.com</span></a>
										</p>
									</div>
								</div>
							</div>

						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										<!-- Your message was sent, thank you! -->
									</div>
									<form method="POST" enctype="multipart/form-data" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group a">
													<label class="label" for="name">Full Name</label>
													<input type="text" disabled class="form-control" name="name" id="name" placeholder="<?php echo $_SESSION['name']; ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group a">
													<label class="label" for="email">Email Address</label>
													<input type="email" disabled class="form-control" name="email" id="email" placeholder="<?php echo $_SESSION['email']; ?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" required data-error="Please enter your subject" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" required data-error="Please enter your message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input name="submit" type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/about.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 py-4">

				</div>
			</div>
		</div>
	</section>

	<Section class="ftco-footer">
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">



				<div class="row mb-5">

					<div class="col-md-6 col-lg">
						<div class="ftco-footer-widget mb-4">
							<div class="ftco-footer_logo" data-wow-delay="500ms">
								<img class="second-img" src="images/Nurani-logo.png" alt="">
							</div>

							<p>Nurani Garden Centre, where artistry meets nature to craft breathtaking landscapes
								tailored to elevate your outdoor & Indoor living experience.</p>
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
									<li><span class="icon icon-map-marker"></span><span class="text">Dhaka-1216</span>
									</li>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">01911111111</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">Nuranigarden@gmail.com</span></a></li>
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

						<p>Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved @ Nurani
							Garden Centre
						</p>
					</div>
				</div>
			</div>
		</footer>

	</Section>

	<?php
	if (isset($_POST['submit'])) {
		$name = $_SESSION['name'];
		$email = $_SESSION['email'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];

		$query = "INSERT INTO appointment_t (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		mysqli_query($conn, $query);
	}

	?>

	<!-- loader -->


	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>




	<script src="js/sticker.js"></script>
	<script src="js/jquery.isotope-3.0.6.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.meanmenu.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>

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