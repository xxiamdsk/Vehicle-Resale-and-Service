<?php 
session_start();
include('config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>VRS</title>

	<!-- * Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">


	<!-- favicon -->
	<link href="images/wheelXchange(1).png" rel="shortcut icon">

	<!-- 
  Essential stylesheets
  =====================================-->
	<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


	<!--Header-->
	<?php include ('header.php'); ?>
	<!-- /Header -->

	<!--===============================
=            Hero Area            =
================================-->

	<section class="hero-area bg-1 text-center ">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Buy & Sell Near You </h1>
						<p>Join the millions who buy and sell from each other <br> everyday in local communities around
							the world</p>
						<div class="short-popular-category-list text-center">
							<h2>Popular Category</h2>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="cars.php"><i class="fa fa-car"></i> Cars</a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-handshake-o"></i> Testimonal</a>
								</li>
								<li class="list-inline-item">
									<a href="Service.php"><i class="fa fa-cogs"></i> Service Center</a>
								</li>
							</ul>
						</div>

					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form>
										<div class="form-row">
											<div class="form-group col-xl-4 col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
													placeholder="What are you looking for">
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Category</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4"
													placeholder="Location">
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
												<button type="submit" class="btn btn-primary active w-100">Search
													Now</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--===========================================
=            Features Cars section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
					<h2 style="font-weight: 800;">Featured Car</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">$1.5L</div>
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-1000x1000.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">CAR XYZ</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
											</li>
											<li class="list-inline-item">
												<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">$2L</div>
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="https://www.autobest.co.in/uploads/blog/366575132046.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">CAR XYZ</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
											</li>
											<li class="list-inline-item">
												<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">$3L</div>
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-1000x1000.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">CAR XYZ</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
											</li>
											<li class="list-inline-item">
												<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">$2.5L</div>
										<a href="single.html">
											<img class="card-img-top img-fluid"
												src="https://www.autobest.co.in/uploads/blog/366575132046.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">CAR XYZ</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
											</li>
											<li class="list-inline-item">
												<a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
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


	<!--==========================================
=           Service Section            =
===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h5>Our Services</h5>
						<h2 style="font-weight: 800;">What We Offers</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQezUAHeqhr9xK_QGFZbBU09vak9rh6oqIiOIQM18Z5dQ&s"
										style="height: 58px; width: 58px;" alt="" srcset="">
									<h4>Selling a Car</h4>
								</div>
								<p style="text-align: center;"">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quisquam optio inventore possimus minima ipsa voluptatum voluptas consectetur unde, commodi maxime eligendi qui molestiae rem! Quod totam sint culpa voluptates.</p>
							</div>
							
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class=" col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
								<div class="category-block">
									<div class="header">
										<img src="https://themewagon.github.io/hvac/img/services/services-2.png" alt=""
											srcset="">

										<h4>Buying a Car</h4>
									</div>
									<p style="text-align: center;"">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quisquam optio inventore possimus minima ipsa voluptatum voluptas consectetur unde, commodi maxime eligendi qui molestiae rem! Quod totam sint culpa voluptates.</p>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class=" col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
									<div class="category-block">
										<div class="header">
											<img src="https://themewagon.github.io/hvac/img/services/services-3.png"
												alt="" srcset="">

											<h4>Car Maintenance</h4>
										</div>
										<p style="text-align: center;"">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quisquam optio inventore possimus minima ipsa voluptatum voluptas consectetur unde, commodi maxime eligendi qui molestiae rem! Quod totam sint culpa voluptates.</p>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class=" col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
										<div class="category-block">
											<div class="header">
												<img src="https://themewagon.github.io/hvac/img/services/services-4.png"
													alt="" srcset="">
												<h4>Support 24/7</h4>
											</div>
											<p style="text-align: center;"">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quisquam optio inventore possimus minima ipsa voluptatum voluptas consectetur unde, commodi maxime eligendi qui molestiae rem! Quod totam sint culpa voluptates.</p>
							</div>
						</div> <!-- /Category List -->
						


					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

		<!--==========================================
		=           Buy in ease Section            =
		===========================================-->

	<section class=" popular-deals section bg-gray">
											<div class="container">
												<div class="row">
													<div class="col-md-12">
														<div class="section-title">
														<h2 style="font-weight: 800;">Buy in 3 Easy Steps</h2>
															<p>How it Works</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-lg-12">
														<div class="trending-ads-slide">
															<div class="col-sm-12 col-lg-4">
																<!-- product card -->
																<div class="product-item bg-light">
																	<div class="card">
																		<div class="thumb-content">
																			<div class="price">1.</div>
																			<a href="">
																				<img class="card-img-top img-fluid"
																					src="https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-1000x1000.jpg"
																					alt="Card image cap">
																			</a>
																		</div>
																		<div class="card-body">
																			<h4 class="card-title"
																				style="text-align: center;"><a
																					href="single.html">Find the Perfect
																					Car</a></h4>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12 col-lg-4">
																<!-- product card -->
																<div class="product-item bg-light">
																	<div class="card">
																		<div class="thumb-content">
																			<div class="price">2.</div>
																			<a href="">
																				<img class="card-img-top img-fluid"
																					src="https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-1000x1000.jpg"
																					alt="Card image cap">
																			</a>
																		</div>
																		<div class="card-body">
																			<h4 class="card-title"
																				style="text-align: center;"><a
																					href="single.html">Test Drive at
																					CARS23 Hub</a></h4>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12 col-lg-4">
																<!-- product card -->
																<div class="product-item bg-light">
																	<div class="card">
																		<div class="thumb-content">
																			<div class="price">3.</div>
																			<a href="">
																				<img class="card-img-top img-fluid"
																					src="https://5.imimg.com/data5/SELLER/Default/2023/5/306963288/JL/OB/RR/189266364/tata-safari-car-1000x1000.jpg"
																					alt="Card image cap">
																			</a>
																		</div>
																		<div class="card-body">
																			<h4 class="card-title"
																				style="text-align: center;"><a
																					href="single.html">Buy it Your Own
																					Way</a></h4>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
	</section>



	<!--====================================
=            Call to Action            =
=====================================-->

	<section class="call-to-action overly bg-3 call-section-sm" >
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Explore our fleet of vehicles and reserve your preferred model today, then schedule your
							service appointment with just a few clicks!</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="service.php">Book a Service</a>
							</li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="cars.php">Browser
									Cars</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>



	

	<!-- ========================================== -->
	<!-- Footer -->
	<?php include ('footer.php'); ?>

	<!-- 
Essential Scripts
=====================================-->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/popper.min.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="plugins/google-map/map.js" defer></script>

	<script src="js/script.js"></script>

</body>

</html>