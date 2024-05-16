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

      // Function to generate a new Inspection ID as INSP001
          function generateInspectionID($db)
            {
                $query = "SELECT MAX(insp_no) AS last_id FROM cars";
                $result = mysqli_query($db, $query);
        
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $lastID = $row['last_id'];
        
                    // Extract the numeric part from the last ID
                    $numericPart = intval(substr($lastID, 4));
        
                    // Increment the numeric part
                    $newNumericPart = $numericPart + 1;
        
                    // Format the new ID with leading zeros
                    $newID = 'INSP' . sprintf('%03d', $newNumericPart);
        
                    return $newID;
                } else {
                    // If no records found, start from INSP001
                    return 'INSP001';
                }
            }
    

    $inspection_id = generateInspectionID($conn);


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

    $brand = $_POST['Brand'];
    $model = $_POST['model'];
    $regno = $_POST['regsno'];
    $price = $_POST['price'];
    $date = $_POST['year'];
    $kms= $_POST['kms'];
    $location= $_POST['location'];

    $sql="INSERT INTO cars (insp_no,resg_no,uid,brand,model,price,date,kms,location) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt1 = $conn->prepare($sql);
    $stmt1->bind_param("sssssssss", $inspection_id, $regno, $customer_id, $brand, $model, $price, $date, $kms, $location);



    if ($stmt->execute() && $stmt1->execute()){
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
    <style>
        .logo {
            background-color: #ffffff;
            width: 50%;
            height: 50%;
            border-radius: 1rem;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

</head>

<body class="body-wrapper">


    <!--Header-->
    <?php include ('header.php'); ?>
    <!-- /Header -->

    <!-- Sell Area -->

    <section style="padding-top: 25px;">
        <!-- Container Start -->
        <div class="container" id="brand">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>All Brands</h2>
                    </div>
                    <div class="row">
                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillForm('AUDI')"><img src="images/brands/audi.png" alt=""
                                            class="logo"></div>
                                    <h4>AUDI</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillForm('FORD')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>FORD</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Brand list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillForm('HYUNDAI')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>HYUNDAI</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Mahindra.png" alt="" class="logo"></a>
                                    <h4>MAHINDRA</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Kia.png" alt="" class="logo"></a>
                                    <h4>KIA</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Brand list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Skoda.png" alt="" class="logo"></a>
                                    <h4>SKODA</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Brand list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Suzuki.png" alt="" class="logo"></a>
                                    <h4>SUZUKI</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/tata.png" alt="" class="logo"></a>
                                    <h4>TATA</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Mercedes-Benz.png" alt="" class="logo"></a>
                                    <h4>MERCEDES BENZ</h4>
                                </div>
                            </div>
                        </div>


                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/honda.png" alt="" class="logo"></a>
                                    <h4>HONDA</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/toyota.png" alt="" class="logo"></a>
                                    <h4>TOYOTA</h4>
                                </div>
                            </div>
                        </div>


                        <!-- Brand list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/MG.png" alt="" class="logo"></a>
                                    <h4>MG</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/nissan.png" alt="" class="logo"></a>
                                    <h4>NISSAN</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Renault.png" alt="" class="logo"></a>
                                    <h4>RENAULT</h4>
                                </div>
                            </div>
                        </div>



                        <!-- Brand list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/Volkswagen.png" alt="" class="logo"></a>
                                    <h4>VOLKSWAGEN</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <a href=""><img src="images/brands/bmw.webp" alt="" class="logo"></a>
                                    <h4>BMW</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container End -->
            </div>
        </div>

        <!-- for AUDI -->
        <div class="container" id="AUDI" style="display:none;">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>AUDI</h2>
                    </div>
                    <div class="row">
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('A3')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>A3</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('A4')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>A4</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('A6')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>A6</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Q3')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>Q3</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Q5')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>Q5</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Q7')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>Q7</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Q8')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>Q8</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('S5')"><img src="images/brands/audi.png" alt="" class="logo">
                                    </div>
                                    <h4>S5</h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Container End -->
            </div>
        </div>


        <!-- for Ford -->
        <div class="container" id="FORD" style="display:none;">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>FORD</h2>
                    </div>
                    <div class="row">
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Figo')"><img src="images/brands/ford.png" alt="" class="logo">
                                    </div>
                                    <h4>Figo</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('EcoSport')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>EcoSport</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Endeavour')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>Endeavour</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Aspire')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>Aspire</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Freestyle')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>Freestyle</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Mustang')"><img src="images/brands/ford.png" alt=""
                                            class="logo"></div>
                                    <h4>Mustang</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Container End -->
                </div>
            </div>
        </div>

        <!-- for hyundai -->
        <div class="container" id="HYUNDAI" style="display:none;">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>HYUNDAI</h2>
                    </div>
                    <div class="row">
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('i20')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>i20</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('i10')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>i10</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Creta')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>Creta</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Verna')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>Verna</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Model list -->

                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
                            <div class="category-block">
                                <div class="header">
                                    <div onclick="fillM('Venue')"><img src="images/brands/hyundai.png" alt=""
                                            class="logo"></div>
                                    <h4>Venue</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container End -->
            </div>
        </div>

        <!-- selling car form -->
        <div class="container" id="sellForm" style="display:none;" style="display: block;padding-bottom: 25px;">
            <form method=" POST" id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <fieldset class=" shadow rounded px-3 px-md-4 py-4 my-5  bg-gray">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>User Information</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                            <input type="text" placeholder="Contact name" name="name" class="form-control bg-white"
                                required>
                            <h6 class="font-weight-bold pt-4 pb-1">Address :</h6>
                            <input type="text" placeholder="Address" name="address" class="form-control bg-white"
                                required>
                            <h6 class="font-weight-bold pt-4 pb-1">Email :</h6>
                            <input type="Email" placeholder="email.example.com" name="email"
                                class="form-control bg-white" required>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                            <input type="number" placeholder="Contact Number" name="number"
                                class="form-control bg-white" required>
                            <h6 class="font-weight-bold pt-4 pb-1">Location:</h6>
                            <!-- <input type="text" placeholder="Your address" class="form-control bg-white" required> -->
                            <select name="location" class="form-control w-100 bg-white" id="Location" required>
                                <option value="">Select Location</option>
                                <option value="Varanasi">Varanasi</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Prayagraj">Prayagraj</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="shadow rounded border-gary px-3 px-md-4 py-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Car Details</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Brand:</h6>
                            <input type="text" placeholder="Brand" name="Brand" id="brands"
                                class="form-control rounded bg-white" >

                            <h6 class="font-weight-bold pt-4 pb-1">Model:</h6>
                            <input type="text" placeholder="Model" name="model" id="model"
                                class="form-control rounded bg-white">

                            <h6 class="font-weight-bold pt-4 pb-1">Car Registration Number:</h6>
                            <input type="text" placeholder="Registration Number" name="regsno"
                                class="form-control rounded bg-white" required>

                            <h6 class="font-weight-bold pt-4 pb-1">Car Price:</h6>
                            <input type="number" placeholder="Price" name="price" class="form-control rounded bg-white"
                                required>
                            <h6 class="font-weight-bold pt-4 pb-1">KMS:</h6>
                            <input type="number" placeholder="KMS" name="kms" class="form-control rounded bg-white"
                                required>

                        </div>

                        <div class="col-lg-6">
                            
                            <h6 class="font-weight-bold pt-4 pb-1">Year:</h6>
                            <input type="date" name="year" class="form-control rounded bg-white" required>
                            
                            <h6 class="font-weight-bold pt-4 pb-1">Car Description:</h6>
                            <textarea name="desc" id="desc" class="form-control rounded bg-white" rows="7"
                                placeholder="Write details about your Car Features"></textarea></label>

                            <h6 class="font-weight-bold pt-4 pb-1">Upload Image:</h6>
                            <div class="choose-file text-center my-4 py-4 rounded bg-white">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to
                                        upload</span>
                                    <span class="d-block">or</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Select
                                        files</span>
                                    <span class="d-block">Maximum upload file size: 500 KB</span>
                                    <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </fieldset>

                <!-- submit button -->
                <div class="checkbox d-inline-flex">
                    <input type="checkbox" id="terms-&-condition" class="mt-1">
                    <label for="terms-&-condition" class="ml-2">By click you must agree with our
                        <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                                Rules.</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-2">Confirm Inspection</button>
            </form>
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
        function fillForm(brand) {
            document.getElementById('brand').style.display = 'none';
            document.getElementById(brand).style.display = 'block';
            document.getElementById('brands').value = brand;
        }

        function fillM(model) {
            document.getElementById('AUDI').style.display = 'none';
            document.getElementById('FORD').style.display = 'none';
            document.getElementById('HYUNDAI').style.display = 'none';
            document.getElementById('sellForm').style.display = 'block';
            document.getElementById('model').value = model;
        }
    </script>

</body>

</html>