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
							<a href="homepage.php">
								<img src="images/Nurani.png" alt="">
							</a>
						</div>


						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#home">Home</a>

								</li>
								<li><a href="#service">Services</a></li>
								<li><a href="#gallery">Gallery</a></li>
								<li><a href="#project">Project</a></li>
								<li><a href="#testimonial">Testimony</a></li>
								<li><a href="view-items.php">View Items</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="index.html">Sign Out (<?php echo $_SESSION['name']; ?>) <i class="fas fa-sign-out-alt"> </i></a></li>

								<li>
									<!-- <div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="index.html"><i class="fas fa-sign-out-alt"></i></a>
										
									</div> -->
								</li>
							</ul>
						</nav>

						<div class="mobile-menu">

						</div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->


	<!-- home page slider -->
	<div class="homepage-slider" id="home">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Number One Landscaping Company</p>
								<h1>Welcome to Nurani Garden Centre</h1>
								<div class="hero-btns">
									<a href="#project" class="boxed-btn">View Projects</a>
									<a href="#testimonial" class="bordered-btn">View Customer Reviews</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Decorate your home with us!</p>
								<h1>Looking for plants for your home?</h1>
								<div class="hero-btns">
									<a href="view-items.php" class="boxed-btn">View All Plants</a>
									<!-- <a href="contact.html" class="bordered-btn">Get A Quote</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Mega Sale Going On!</p>
								<h1>Get 30% On Your First Appointment</h1>
								<div class="hero-btns">
									<a href="#discount" class="bordered-btn">View Current Deals</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->
	<section id="service">
		<div class="container-xxl py-5">
			<div class="container">

				<div class="row justify-content-center mb-5">
					<div class="col-md-10 text-center heading-section ftco-animate">
						<span class="subheading">Services</span>
						<h2 class="mb-4">Services That We Offer For You</h2>
					</div>
				</div>


				<div class="row g-4">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-1.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-3.png" alt="Icon">
								</div>
								<h4 class="mb-3">Landscape Design</h4>
								<p class="mb-4"> Planning and designing outdoor spaces, considering aesthetics,
									functionality, and client preferences.</p>

							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-6.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-6.png" alt="Icon">
								</div>
								<h4 class="mb-3">Planting & Garden Installation</h4>
								<p class="mb-4">Planting trees, shrubs, flowers, and creating garden beds based on
									design plans or client requests..</p>

							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-3.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-5.png" alt="Icon">
								</div>
								<h4 class="mb-3">Irrigation & Drainage</h4>
								<p class="mb-4">Installation, repair, and maintenance of irrigation systems to ensure
									proper watering of landscapes.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-4.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-10.png" alt="Icon">
								</div>
								<h4 class="mb-3">Garden Maintenance </h4>
								<p class="mb-4">Regular upkeep services such as weeding, mulching, and trimming to
									preserve the beauty of the landscape.</p>

							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-2.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-6.png" alt="Icon">
								</div>
								<h4 class="mb-3">Pest & Disease Control</h4>
								<p class="mb-4">Identifying and treating plant diseases, pests, and providing preventive
									measures to protect the landscape.</p>

							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded d-flex h-100">
							<div class="service-img rounded">
								<img class="img-fluid" src="images/service-5.jpg" alt="">
							</div>
							<div class="service-text rounded p-5">
								<div class="btn-square rounded-circle mx-auto mb-3">
									<img class="img-fluid" src="images/icon/icon-8.png" alt="Icon">
								</div>
								<h4 class="mb-3">Sustainable Landscaping</h4>
								<p class="mb-4">Providing eco-friendly solutions like rain gardens, native plant
									installations, and sustainable landscape designs.</p>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</section>

	<!-- Service End -->


	<!-- cart banner section -->
	<section class="ftco-section ftco-no-pt cart-banner pt-100 pb-100" id="discount">
		<div class="container">
			<div class="row clearfix">
				<!--Image Column-->
				<div class="image-column col-lg-6">
					<div class="image row-md-3 d-flex ">
						<img class="cart-image" src="images/timer.png" alt="">

					</div>

				</div>
				<!--Content Column-->
				<div class="content-column col-lg-6" id="deal">
					<h3><span class="green-text">Deal</span> of the Year</h3>
					<h4>Unlock an exclusive <span class="green-text">30%</span> discount for your initial booking!</h4>
					<div class="text">Embrace savings while experiencing our top-notch services for the first time. Your
						outdoor space deserves the best, and we're delighted to make it more accessible with this
						exclusive offer. Don't miss out on the opportunity to enhance your surroundings at an unbeatable
						value. Schedule now to take advantage of this limited-time 30% discount on your inaugural
						appointment!</div>
					<!--Countdown Timer-->
					<div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2023/12/29">
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Days</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Hours</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Mins</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Secs</div>
							</div>
						</div>
					</div>
					<a href="contact.php" class="cart-btn mt-3"></i> Book Appointment</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cart banner section -->






	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light" id="about">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
						style="background-image:url(images/service.png);">
						<a href="images/service.mp4"
							class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 pl-md-5">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading">Welcome to Nurani Garden Centre</span>
							<h2 class="mb-4">Why You Should Choose Us</h2>
							<h6>Choose us for expertly crafted landscapes that seamlessly blend beauty, functionality,
								and personalized care</h6>
							<div class="services-wrap">
								<a class="services-list">For Our Expertise & Experience
									<div class="btn-custom d-flex align-items-center justify-content-center"></div>
								</a>
								<a class="services-list">We Offer Customized Solutions
									<div class="btn-custom d-flex align-items-center justify-content-center"></div>
								</a>
								<a class="services-list">We Use Quality Materials and Techniques
									<div class="btn-custom d-flex align-items-center justify-content-center"></div>
								</a>
								<a class="services-list">For Our Reliability and Professionalism
									<div class="btn-custom d-flex align-items-center justify-content-center"></div>
								</a>
								<a class="services-list">We Provide Comprehensive Services
									<div class="btn-custom d-flex align-items-center justify-content-center"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="gallery">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-10 text-center heading-section ftco-animate">
					<span class="subheading">Photo Gallery</span>
					<h2 class="mb-4">Plants & Their Description</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-seasonal owl-carousel ftco-owl">
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center"
									style="background-image: url(images/plant-1.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="">Devil's Ivy</a></h3>
									<p>Epipremnum aureum is a species in the arum family Araceae, native to Mo'orea in
										the Society Islands of French Polynesia. </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center"
									style="background-image: url(images/plant-2.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="">Dracaena trifasciata</a></h3>
									<p>Dracaena trifasciata is a species of flowering plant in the family Asparagaceae,
										native to tropical West Africa from Nigeria east to the Congo.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center"
									style="background-image: url(images/plant-3.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="">Lavender</a></h3>
									<p>Lavandula is a genus of 47 known species of flowering plants in the mint family,
										Lamiaceae. </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center"
									style="background-image: url(images/plant-4.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="">Swiss Cheese Plant</a></h3>
									<p>Monstera deliciosa, the Swiss cheese plant or split-leaf philodendron is a
										species of flowering plant native to tropical forests of southern Mexico, south
										to Panama. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ##### Cool Facts Area Start ##### -->
	<section class="cool-facts-area bg-img section-padding-100-0" style="background-image: url(images/cool-facts.png);">
		<div class="container counterr">
			<div class="row">

				<!-- Single Cool Facts Area -->


				<!-- Single Cool Facts Area -->
				<div class="col-12 col-sm-6 col-md-4">
					<div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
						<div class="cf-icon">
							<img src="images/gardening.png" alt="">
						</div>
						<div class="cf-content">
							<h2><span class="counter">130579</span>+</h2>
							<h6>Plants Planted</h6>
						</div>
					</div>
				</div>

				<!-- Single Cool Facts Area -->
				<div class="col-12 col-sm-6 col-md-4">
					<div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
						<div class="cf-icon">
							<img src="images/agreement.png" alt="">
						</div>
						<div class="cf-content">
							<h2><span class="counter">237</span></h2>
							<h6>Projects Completed</h6>
						</div>
					</div>
				</div>

				<!-- Single Cool Facts Area -->
				<div class="col-12 col-sm-6 col-md-4">
					<div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
						<div class="cf-icon">
							<img src="images/schedule.png" alt="">
						</div>
						<div class="cf-content">
							<h2><span class="counter">22</span>+</h2>
							<h6>Years of Experience</h6>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Side Image -->
		<div class="side-img wow fadeInUp" data-wow-delay="500ms">
			<img src="images/pot.png" alt="">
		</div>
	</section>
	<!-- ##### Cool Facts Area End ##### -->




	<section class="ftco-section bg-light" id="project">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<a href="blog.html"><span class="subheading">Projects</span></a>
					<h2>Our Recent Projects</h2>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="blog-entry justify-content-end">
						<div class="carousel-project owl-carousel ftco-owl">


							<div class="item">
								<div class="wrap">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/project-1.jpg');">
									</a>
									<div class="text p-4 float-right d-block">
										<div class="topper d-flex align-items-center">
											<div class="one py-2 pl-3 pr-1 align-self-stretch">
												<span class="day">24</span>
											</div>
											<div class="two pl-0 pr-3 py-2 align-self-stretch">
												<span class="yr">2023</span>
												<span class="mos">January</span>
											</div>
										</div>
										<h3 class="heading mb-0"><a href="">Previously done project for a Resort</a>
										</h3>
										<p>This project was done in Chittagong near to the Naval Port a resort was built
											where our landscapping service was taken.</p>
										<p><a href="" class="btn btn-primary">Project - Chittagong</a></p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="wrap">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/project-2.jpg');">
									</a>
									<div class="text p-4 float-right d-block">
										<div class="topper d-flex align-items-center">
											<div class="one py-2 pl-3 pr-1 align-self-stretch">
												<span class="day">12</span>
											</div>
											<div class="two pl-0 pr-3 py-2 align-self-stretch">
												<span class="yr">2023</span>
												<span class="mos">May</span>
											</div>
										</div>
										<h3 class="heading mb-0"><a href="">Previously done project for a Bunglow</a>
										</h3>
										<p>Famous industrialist, Tasin Rahman, took our service to renovate the garden
											of his personal farmhouse. </p>
										<p><a href="" class="btn btn-primary">Project - Bunglow</a></p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="wrap">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/project-3.jpg');">
									</a>
									<div class="text p-4 float-right d-block">
										<div class="topper d-flex align-items-center">
											<div class="one py-2 pl-3 pr-1 align-self-stretch">
												<span class="day">30</span>
											</div>
											<div class="two pl-0 pr-3 py-2 align-self-stretch">
												<span class="yr">2023</span>
												<span class="mos">September</span>
											</div>
										</div>
										<h3 class="heading mb-0"><a href="">Previously done project for a Residential
												area</a></h3>
										<p>The garden created in the Bashundhara R/A wa design and completed through our
											service.</p>
										<p><a href="" class="btn btn-primary">Project - Bashundhara</a></p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="wrap">
									<a href="blog-single.html" class="block-20"
										style="background-image: url('images/project-4.jpg');">
									</a>
									<div class="text p-4 float-right d-block">
										<div class="topper d-flex align-items-center">
											<div class="one py-2 pl-3 pr-1 align-self-stretch">
												<span class="day">16</span>
											</div>
											<div class="two pl-0 pr-3 py-2 align-self-stretch">
												<span class="yr">2023</span>
												<span class="mos">December</span>
											</div>
										</div>
										<h3 class="heading mb-0"><a href="">Previously done project for a Eco Resort</a>
										</h3>
										<p>This was the design done for the eco resort of sylhey named 'Dusai'which is a
											5 star eco resort.</p>
										<p><a href="" class="btn btn-primary">Project - Sylhet</a></p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>




	<section class="ftco-section testimony-section" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<img src="images/illustration.png" alt="" srcset="">
							</div>
							<div class="text">
								<h3>Customized Design Plans</h3>
								<p class="mb-0">Tailored design to the client's preferences.</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<img src="images/discussion.png" alt="" srcset="">
							</div>
							<div class="text">
								<h3>Free Consultations</h3>
								<p class="mb-0">Provide initial consultations at no cost.</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<img src="images/packaging.png" alt="" srcset="">
							</div>
							<div class="text">
								<h3>Maintenance Packages</h3>
								<p class="mb-0">Monthly & Yeasonal aintenance Packages.</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<img src="images/finance.png" alt="" srcset="">
							</div>
							<div class="text">
								<h3>Project Financing</h3>
								<p class="mb-0">Offer Flexible Payment & Financing Plans </p>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Experience the satisfaction of our clients who've witnessed their dream gardens come alive
							with our help. Join our community of delighted customers sharing their stories of beautiful
							landscapes brought to life.</p>
					</div>
					<div class="carousel-testimony owl-carousel ftco-animate">
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpeg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">"Exceeded my expectations! The team transformed my yard
										into a breathtaking oasis, and their attention to detail truly showcased their
										expertise. Highly recommended!"</p>
									<p class="name">Hasan Imam</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_2.png)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">"Professional, punctual, and passionate about their work!
										From design to maintenance, this company consistently delivers exceptional
										service. My garden has never looked better!"</p>
									<p class="name">Roshni Parvin</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_3.jpeg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">"I'm beyond impressed with their knowledge and creativity.
										They took my vague ideas and turned them into a stunning reality. Their
										dedication to customer satisfaction shines through in every project."</p>
									<p class="name">Samiul Islam Sourav</p>
									<span class="position">Software Engineer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_4.jpeg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">"The team was a pleasure to work with—friendly,
										responsive, and committed to making sure every aspect of our landscape was
										perfect. I couldn't be happier with the results!"</p>
									<p class="name">S Asif Ahmed Joy</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ##### Subscribe Area Start ##### -->
	<section class="subscribe-newsletter-area" style="background-image: url(images/subscribe.png);">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-12 col-lg-5">
					<!-- Section Heading -->
					<div class="section-heading mb-0">

						<div class=" ftco-animate align-items-center ">
							<h2>Book An Appointment</h2>
							<p>Choose us for expertly crafted landscapes that seamlessly blend beauty, functionality,
								and personalized care</p>
						</div>

						<!-- <h2>Join the Newsletter</h2>
                  <p>Subscribe to our newsletter and get 10% off your first purchase</p> -->
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="subscribe-form">
						<form action="contact.php" method="get">

							<button type="submit" class="btn alazea-btn">Contact Us</button>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="subscribe-side-thumb wow fadeInUp" data-wow-delay="500ms">
			<img class="first-img" src="images/leaf.png" alt="">
		</div>
	</section>
	<!-- ##### Subscribe Area End ##### -->

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
								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Landscape Design</a></li>
								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Planting & Garden Install</a></li>
								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Irrigation & Drainage</a></li>
								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Garden Maintenance</a></li>

								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Pest & Disease Control</a></li>
								<li><a href="#service" class="py-1 d-block"><span
											class="ion-ios-arrow-forward mr-3"></span>Sustainable Landscaping</a></li>
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
									<li><a href="#"><span class="icon icon-phone"></span><span
												class="text">01911111111</span></a></li>
									<li><a href="https://mail.google.com/"><span class="icon icon-envelope"></span><span
												class="text">nuranigarden@gmail.com</span></a></li>
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
							<script>document.write(new Date().getFullYear());</script> All rights reserved @ Nurani
							Garden Centre
						</p>
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

	<script src="js/plugins.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>






	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');

		jQuery(document).ready(function ($) {
			$('.main-menu').meanmenu({
				meanMenuContainer: '.mobile-menu',
				meanScreenWidth: "992"
			});
		});

	</script>



</body>

</html>