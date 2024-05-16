<?php
session_start();
include ('config.php');
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vrs";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// check if session is on or not
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$sql = "SELECT uid FROM customer WHERE email = '$email'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$customer_id = $row['uid'];
	} else {
		// Function to generate a new customer ID
		function generateCustomerID($db)
		{
			$query = "SELECT MAX(uid) AS last_id FROM customer";
			$result = mysqli_query($db, $query);

			if ($result && mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$lastID = $row['last_id'];

				// Extract the numeric part from the last ID
				$numericPart = intval(substr($lastID, 4));

				// Increment the numeric part
				$newNumericPart = $numericPart + 1;

				// Format the new ID with leading zeros
				$newID = 'CUST' . sprintf('%03d', $newNumericPart);

				return $newID;
			} else {
				// If no records found, start from CUST001
				return 'CUST001';
			}
		}
	}

	$customer_id = generateCustomerID($conn);
	$contactName = $_POST['name'];
	$email = $_POST['email'];
	$passwd = "0";
	$contactNumber = $_POST['number'];
	$address = $_POST['address'];

	// SQL query to insert new user into database
	$sql = "INSERT INTO customer (uid,name,email, pswd,ph_no,address) VALUES (?, ?,?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssss", $customer_id, $contactName, $email, $passwd, $contactNumber, $address);

    if ($stmt->execute()) {
        // booking successful
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $contactName;
        
        // Redirect to a secure page after successful booking
        header("Location: index.php");
        echo "Booking done";
        exit();
    
      } else {
        // Registration failed, display an error message
        $error = "booking failed";
        echo $error;
      }
    
      // Close database connection
      $conn->close();

}

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

<!--================================
=            Test Drive            =
=================================-->

<section class="advt-post bg-gray py-5">
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="form">

        <fieldset class=" shadow rounded px-3 px-md-4 py-4 my-5  bg-gray">
          <div class="row">
            <div class="col-lg-12">
              <h3>User Information</h3>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
              <input type="text" placeholder="Contact name" name="name" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Address :</h6>
              <input type="text" placeholder="Address" name="address" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Email :</h6>
              <input type="Email" placeholder="email.example.com" name="email" class="form-control bg-white" required>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
              <input type="number" placeholder="Contact Number" name="number" class="form-control bg-white" required>
              

              <h6 class="font-weight-bold pt-4 pb-1">Test Drive Date:</h6>
              <input type="date" name="date" class="form-control rounded bg-white" required>
            </div>
            <div class="col-lg-6">
            </div>
          </div>
        </fieldset>
     

        <!-- submit button -->
        <div class="checkbox d-inline-flex">
          <input type="checkbox" id="terms-&-condition" class="mt-1" required>
          <label for="terms-&-condition" class="ml-2">By click you must agree with our
            <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                Rules.</a></span>
          </label>
        </div>
        <button type="submit" class="btn btn-primary d-block mt-2">Book Your Service</button>
      </form>
    </div>


    <!-- confirmation test Drive modal -->
    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <i class="fa fa-check-circle text-success fa-3x"></i>
            <h3 class="mt-2">Your Test Drive has been booked successfully</h3>
            <p class="mt-3">Our team will contact you soon</p>
            <button type="button" class="btn btn-primary mt-3" data-dismiss="modal">Close</button>
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

    <script>
        $(document).ready(function () {
            $("#form").submit(function (e) {
                e.preventDefault();
                $("#confirmation").modal("show");
            });
        });

        // after click on close button pass the all data to the db
        $("#confirmation").on("hidden.bs.modal", function () {
            $("#form").unbind("submit").submit();
        });
    </script>

</body>

</html>