<?php
session_start();
include ('config.php');
error_reporting(0);

// Get the value of registration number
if (isset($_GET['value'])) {
	$regs_no = $_GET['value'];
	// echo "Received value: " . $regs_no;
} else {
	echo "No value received.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>VRS</title>

	<!-- ** Mobile Specific Metas ** -->
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

	<?php
	$regs = "SELECT * FROM cars where resg_no='$regs_no'";
	$regs_result = mysqli_query($conn, $regs);
	$num = mysqli_num_rows($regs_result);
	if ($num > 0) {
		while ($row = mysqli_fetch_assoc($regs_result)) {
			$user = "SELECT customer.* FROM customer JOIN cars ON customer.uid = cars.uid WHERE cars.uid = '$row[uid]'";
			$user_result = mysqli_query($conn, $user);
			$num1 = mysqli_num_rows($regs_result);
			$num1 = mysqli_num_rows($regs_result);
			if ($num1 > 0) {
				while ($row1 = mysqli_fetch_assoc($user_result)) {
					?>


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

			<!--===================================
	=            Car Section            =  
	====================================-->
			<section class="section bg-gray">
				<!-- Container Start -->
				<div class="container">
					<div class="row">
						<!-- Left sidebar -->
						<div class="col-lg-8">
							<div class="product-details">
								<h1 class="product-title">
									<?php echo $row['brand'];
									echo ", " . $row['model'];
									?>

								</h1>
								<div class="product-meta">
									<ul class="list-inline">
										<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a
												href="user-profile.html"><?php echo $row1['name'] ?></a></li>
										<li class="list-inline-item"><i class="fa fa-registered"></i> REGS No.<a
												href="category.html"><?php echo $row['resg_no']?></a></li>
										<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a
												href="category.html"><?php echo $row['location']?></a></li>
									</ul>
								</div>

								<!-- product slider -->
								<div class="product-slider">
									<div class="product-slider-item my-4" data-image="images/cars/city.jpg">
										<img class="img-fluid w-100" src="images/cars/city.jpg" alt="product-img">
									</div>
									<div class="product-slider-item my-4" data-image="images/cars/download.jpg">
										<img class="d-block img-fluid w-100" src="images/cars/download.jpg" alt="Second slide">
									</div>
									<div class="product-slider-item my-4" data-image="images/cars/eco.jpg">
										<img class="d-block img-fluid w-100" src="images/cars/eco.jpg" alt="Third slide">
									</div>
									<div class="product-slider-item my-4" data-image="images/cars/fortu.jpg">
										<img class="d-block img-fluid w-100" src="images/cars/fortu.jpg" alt="Fourth slide">
									</div>
									<div class="product-slider-item my-4" data-image="images/cars/city.jpg">
										<img class="d-block img-fluid w-100" src="images/cars/city.jpg" alt="Fifth slide">
									</div>
								</div>
								<!-- product slider -->

								<div class="content mt-5 pt-5">
									<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
												role="tab" aria-controls="pills-home" aria-selected="true">Cars Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
												role="tab" aria-controls="pills-profile"
												aria-selected="false">Specifications</a>
										</li>

									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
											aria-labelledby="pills-home-tab">
											<h3 class="tab-title">Car Description</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laudantium
												beatae quod perspiciatis, neque
												dolores eos rerum, ipsa iste cum culpa numquam amet provident eveniet pariatur,
												sunt repellendus quas
												voluptate dolor cumque autem molestias. Ab quod quaerat molestias culpa eius,
												perferendis facere vitae commodi
												maxime qui numquam ex voluptatem voluptate, fuga sequi, quasi! Accusantium
												eligendi vitae unde iure officia
												amet molestiae velit assumenda, quidem beatae explicabo dolore laboriosam
												mollitia quod eos, eaque voluptas
												enim fuga laborum, error provident labore nesciunt ad. Libero reiciendis
												necessitatibus voluptates ab
												excepturi rem non, nostrum aut aperiam? Itaque, aut. Quas nulla perferendis
												neque eveniet ullam?</p>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sed, officia
												reiciendis necessitatibus
												obcaecati eum, quaerat unde illo suscipit placeat nihil voluptatibus ipsa omnis
												repudiandae, excepturi! Id
												aperiam eius perferendis cupiditate exercitationem, mollitia numquam fuga,
												inventore quam eaque cumque fugiat,
												neque repudiandae dolore qui itaque iste asperiores ullam ut eum illum aliquam
												dignissimos similique! Aperiam
												aut temporibus optio nulla numquam molestias eum officia maiores aliquid laborum
												et officiis pariatur,
												delectus sapiente molestiae sit accusantium a libero, eligendi vero eius
												laboriosam minus. Nemo quibusdam
												nesciunt doloribus repellendus expedita necessitatibus velit vero?</p>

										</div>
										<div class="tab-pane fade" id="pills-profile" role="tabpanel"
											aria-labelledby="pills-profile-tab">
											<h3 class="tab-title">Car Specifications</h3>
											<table class="table table-bordered product-table">
												<tbody>
													<tr>
														<td>Seller Price</td>
														<td><?php echo $row['price']?></td>
													</tr>
													<tr>
														<td>Added</td>
														<td><?php echo $row['date']?> </td>
													</tr>
													<tr>
														<td>State</td>
														<td><?php echo $row['location']?></td>
													</tr>
													<tr>
														<td>Brand</td>
														<td><?php echo $row['brand']?></td>
													</tr>
													<tr>
														<td>Model</td>
														<td><?php echo $row['model']?></td>
													</tr>
													<tr>
														<td>KMS</td>
														<td><?php echo $row['kms']?></td>
													</tr>
													<tr>
														<td>Inspection</td>
														<td><?php echo $row['inspection']?></td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="sidebar">
								<div class="widget price text-center">
									<h4>Price</h4>
									<p><?php echo " ₹ ".$row['price']?></p>
								</div>
								<!-- User Profile widget -->
								<div class="widget user text-center">
									<img class="rounded-circle img-fluid mb-5 px-5" src="images/user/user-thumb.jpg" alt="">
									<h4><a href="user-profile.html"><?php echo $row1['name'] ?></a></a></h4>
									<p class="member-time">Member Since Jun 27, 2017</p>
									<ul class="list-inline mt-20">
										<li class="list-inline-item"><a href="contact.php"
												class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a>
										</li>
										<li class="list-inline-item"><a href="#"
												class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">BUY</a>
										</li>
									</ul>
								</div>


								<!-- Safety tips widget -->
								<div class="widget disclaimer">
									<h5 class="widget-header">Safety Tips</h5>
									<ul>
										<li>Meet seller at a public place</li>
										<li>Check the car before you buy</li>
										<li>Pay only after collecting the car</li>
									</ul>
								</div>
								<!-- Coupon Widget -->
								<div class="widget coupon text-center">
									<!-- Coupon description -->
									<p>Have a great Car to post ? Share it with
										your fellow users.
									</p>
									<!-- Submii button -->
									<a href="single.php" class="btn btn-transparent-white">Submit Post</a>
								</div>

							</div>
						</div>

					</div>
				</div>
				<!-- Container End -->
			</section>

			<?php
				}
				
			}
			else {
				echo "user not found";
			}
		}
	} else {
		echo "not found	";
	}
	?>


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