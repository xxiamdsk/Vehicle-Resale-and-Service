<?php
// Start a PHP session
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Check if the email and password are provided
	if (isset($_POST['email']) && isset($_POST['passwd'])) {
		// Validate the email and password 
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		include_once 'config.php';
		$sql = "SELECT * FROM customer WHERE email = '$email' AND pswd = '$passwd'";
		$result = $conn->query($sql);
		// Check if user exists and credentials are correct
		if ($result->num_rows == 1) {
			$sql = "SELECT name FROM customer WHERE email = '$email'";
			$result = $conn->query($sql);

			// User found, set session variables
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $result->fetch_assoc()['name'];
			// Redirect to current page after successful login
			header("Location: index.php");
			exit();
		}

		// Check if the user is an admin
		// $sql = "SELECT * FROM admin WHERE email = '$email' AND pswd = '$password'";
		// $result = $conn->query($sql);
		// if ($result->num_rows == 1) {
		//     // If the user is an admin, set session variables and redirect to admin dashboard
		//     $_SESSION['user_type'] = 'admin';
		//     $_SESSION['email'] = $email;
		//     header("Location: admin/");
		//     exit();
		// }


		// Check if the user is an admin
		if ($email == 'admin@gmail.com' && $passwd == 'admin') {
			// If the user is an admin, set session variables and redirect to admin dashboard
			$_SESSION['email'] = $email;
			$_SESSION['name'] = "Admin";
			header("Location: admin/admin.php");
			exit();
		}

		// check if the user is a service center owner
		$sql = "SELECT * FROM service_center WHERE email = '$email' AND pswd = '$passwd'";
		$result = $conn->query($sql);
		if ($result->num_rows == 1) {
			$sql = "SELECT name FROM service_center WHERE email = '$email'";
			$result = $conn->query($sql);

			// If the user is an sc owner, set session variables and redirect to sc dashboard
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $result->fetch_assoc()['name'];
			header("Location: service_center/sc_owner.php");
			exit();

		} else {
			// User not found or incorrect credentials, display error message
			$error = "Incorrect email or password";
		}

		// Close database connection
		$conn->close();
	}
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

	<section class="login py-5 border-top-1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-8 align-item-center">
					<div class="border">
						<h3 class="bg-gray p-4">Login Now</h3>
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<fieldset class="p-4">
								<input class="form-control mb-3" type="text" name="email" placeholder="Username"
									required>
								<input class="form-control mb-3" type="password" name="passwd" placeholder="Password"
									required>
								<div class="loggedin-forgot">
									<input type="checkbox" id="keep-me-logged-in">
									<label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
								</div>
								<button type="submit" name="login" value="login"
									class="btn btn-primary font-weight-bold mt-3">Log in</button>
								<a class="mt-3 d-block text-primary" href="#!">Forget Password?</a>
								<a class="mt-3 d-inline-block text-primary" href="register.php">Register Now</a>
							</fieldset>
						</form>
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