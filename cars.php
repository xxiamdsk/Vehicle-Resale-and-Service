<?php 
session_start();
include('config.php');
error_reporting(0);

?><!DOCTYPE html>

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

	<!-- theme meta -->
	<meta name="theme-name" content="classimax" />

	<!-- favicon -->
	<!-- <link href="images/favicon.png" rel="shortcut icon"> -->

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

	<section class="page-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Advance Search -->
					<div class="advance-search nice-select-white">
						<form>
							<div class="form-row align-items-center">
								<div class="form-group col-xl-4 col-lg-3 col-md-6">
									<input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
										placeholder="What are you looking for">
								</div>
								<div class="form-group col-lg-3 col-md-6">
									<select class="w-100 form-control my-2 my-lg-0">
										<option>Category</option>
										<option value="1">Top rated</option>
										<option value="2">Lowest Price</option>
										<option value="4">Highest Price</option>
									</select>
								</div>
								<div class="form-group col-lg-3 col-md-6">
									<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4"
										placeholder="Location">
								</div>
								<div class="form-group col-xl-2 col-lg-3 col-md-6">

									<button type="submit" class="btn btn-primary active w-100">Search Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-sm">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Category</h4>
							<ul class="category-list">
								<li><a href="cars.php">Sedan <span>9</span></a></li>
								<li><a href="cars.php">Sedan <span>23</span></a></li>
								<li><a href="cars.php">SUV  <span>18</span></a></li>
								<li><a href="cars.php">Coupe <span>34</span></a></li>
								<li><a href="cars.php">Convertible <span>43</span></a></li>
								<li><a href="cars.php">Wagon <span>32</span></a></li>
								<li><a href="cars.php">Pickup Truck <span>45</span></a></li>
							</ul>
						</div>

						<div class="widget category-list">
							<h4 class="widget-header">Nearby</h4>
							<ul class="category-list">
								<li><a href="cars.php">Lucknow<span>93</span></a></li>
								<li><a href="cars.php">Varanasi<span>233</span></a></li>
								<li><a href="cars.php">Agra <span>183</span></a></li>
								<li><a href="cars.php">Etwa <span>120</span></a></li>
								<li><a href="cars.php">Mirzapur <span>40</span></a></li>
								<li><a href="cars.php">Jaunpur<span>81</span></a></li>
							</ul>
						</div>

						<div class="widget filter">
							<h4 class="widget-header">Show Cars</h4>
							<select>
								<option>Popularity</option>
								<option value="1">Top rated</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>

						<div class="widget price-range w-100">
							<h4 class="widget-header">Price Range</h4>
							<div class="block">
								<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000"
									data-slider-step="5" data-slider-value="[0,5000]">
								<div class="d-flex justify-content-between mt-2">
									<span class="value">$10 - $5000</span>
								</div>
							</div>
						</div>

						<div class="widget product-shorting">
							<h4 class="widget-header">By Condition</h4>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Brand New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Almost New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Gently New
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Havely New
								</label>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="category-search-filter">
						<div class="row">
							<div class="col-md-6 text-center text-md-left">
								<strong>Short</strong>
								<select>
									<option>Most Recent</option>
									<option value="1">Most Popular</option>
									<option value="2">Lowest Price</option>
									<option value="4">Highest Price</option>
								</select>
							</div>
							<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
								<div class="view">
									<strong>Views</strong>
									<ul class="list-inline view-switcher">
										<li class="list-inline-item">
											<a href="#!" onclick="event.preventDefault();" class="text-info"><i
													class="fa fa-th-large"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product-grid-list">
						<div class="row mt-30">
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$2L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/city.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$3L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/download.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$2L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/eco.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$4L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/fortu.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$5L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/Cars/city.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$1.5L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/download.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$4L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/eco.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$1.5L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/Cars/fortu.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZ</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
							<div class="col-lg-4 col-md-6">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">$6L</div>
											<a href="single.php">
												<img class="card-img-top img-fluid" src="images/cars/city.jpg"
													alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="single.php">Car XYZr</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="single.php"><i
															class="fa fa-folder-open-o"></i>Car</a>
												</li>
												<li class="list-inline-item">
													<a href="cars.php"><i class="fa fa-calendar"></i>26th
														December</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
												elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="pagination justify-content-center">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="cars.php" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="cars.php">1</a></li>
								<li class="page-item active"><a class="page-link" href="cars.php">2</a></li>
								<li class="page-item"><a class="page-link" href="cars.php">3</a></li>
								<li class="page-item">
									<a class="page-link" href="cars.php" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
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