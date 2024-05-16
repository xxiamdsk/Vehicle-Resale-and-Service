<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "vrs"; 

// Create connection

$conn= new mysqli($servername, $username, $password, $dbname);

  // Function to generate a new Booking ID
  function generateBookingID($db)
  {
    $query = "SELECT MAX(b_no) AS last_id FROM booking";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $lastID = $row['last_id'];

      // Extract the numeric part from the last ID
      $numericPart = intval(substr($lastID, 2));

      // Increment the numeric part
      $newNumericPart = $numericPart + 1;

      // Format the new ID with leading zeros
      $newID = 'BK' . sprintf('%03d', $newNumericPart);

      return $newID;
    } else {
      // If no records found, start from BK001
      return 'BK001';
    }
  }

  $bookingID = generateBookingID($conn);

  // check if session is on or not
  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT uid FROM customer WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $customer_id = $row['uid'];
  } else {
      // Function to generate a new customer ID
  function generateCustomerID($db) {
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

  $customer_id=generateCustomerID($conn);
  $contactName = $_POST['name'];
  $email=$_POST['email'];
  $passwd="0";
  $contactNumber = $_POST['number'];
  $address = $_POST['address'];

  // SQL query to insert new user into database
  $sql = "INSERT INTO customer (uid,name,email, pswd,ph_no,address) VALUES (?, ?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $customer_id, $contactName, $email, $passwd, $contactNumber, $address);

  $location = $_POST['location'];
  $carBrand = $_POST['car'];
  $carModel = $_POST['carModel'];
  $regNo = $_POST['regsno'];
  $desc = $_POST['desc'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $services = $_POST['serviceName'];

  if ($location=='Varanasi')
  {
    $scid='SC001';
  }
  else if ($location=='Lucknow')
  {
    $scid='SC002';
  }
  else if ($location=='Kanpur')
  {
    $scid='SC003';
  }
  else if ($location=='Prayagraj')
  {
    $scid='SC004';
  }
  
  $status='pending';
  $amount="0";


  $sql = "INSERT INTO booking (b_no,resg_no,uid,brand,model,sc_id,amount,location,date,service,status) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
  $stmt1 = $conn->prepare($sql);
  $stmt1->bind_param("sssssssssss", $bookingID, $regNo, $customer_id, $carBrand, $carModel, $scid,$amount, $location, $date,$services, $status);
  
  if ($stmt->execute() && $stmt1->execute()) {
    // booking successful
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $contactName;
    
    // Redirect to a secure page after successful registration
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

  <div class="album pt-4 pb-4 bg-2 overly">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 content-block pb-3">
          <h1 class="text-center service" style="font-weight:bold; color:white">Car Service</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox1')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top card-img-bottom" width="242" height="151">
              <img src="images\service logos\wheels.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Wheels</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox2')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\engine.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Engine</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox3')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\car-oil.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Car Oiling</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox4')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\car-painting.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Car Painting</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox5')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\air-conditioner.png" alt="" srcset="" width="150" height="144"
                class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">AC Service</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox6')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\window.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Windshields</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('checkbox7')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\vehicle.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Cleaning</p>
          </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <a href="#form" onclick="autoCheck('mainCheckbox')">
            <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151">
              <img src="images\service logos\protection.png" alt="" srcset="" width="150" height="144" class="center">
            </div>
          </a>
          <div class="card-body">
            <p class="card-text" style="font-weight: 800; font-size:20px;">Full Service</p>
          </div>
        </div>
      </div>
    </div>
  </div>




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
              <h3>Book Service</h3>
            </div>
            <div class="col-lg-6">

              <h6 class="font-weight-bold pt-4 pb-1">Select a Car</h6>

              <select name="car" class="form-control rounded w-100 bg-white" id="carBrand" onchange="populateModels()">
                <option value="">Select Car Brand</option>
                <option value="marutisuzuki">Maruti Suzuki</option>
                <option value="mahindra">Mahindra</option>
                <option value="tata">Tata</option>
                <option value="mg">MG</option>
                <option value="kia">Kia</option>
                <option value="skoda">Skoda</option>
                <option value="renault">Renault</option>
                <option value="volkswagen">Volkswagen</option>
                <option value="toyota">Toyota</option>
                <option value="honda">Honda</option>
                <option value="ford">Ford</option>
                <option value="bmw">BMW</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes-Benz</option>
                <option value="nissan">Nissan</option>
              </select>

              <script>
                function populateModels() {
                  var carBrand = document.getElementById("carBrand").value;
                  var carModelDropdown = document.getElementById("carModel");

                  // Clear existing options
                  carModelDropdown.innerHTML = "<option value=''>Select Car Model</option>";

                  // Populate options based on the selected car brand
                  if (carBrand === "volkswagen") {
                    var models = ["Polo GT", "Virtus", "Passat", "Tiguan", "Atlas"];
                  } else if (carBrand === "marutisuzuki") {
                    var models = ["Swift", "Baleno", "WagonR", "Ertiga", "Dzire","Alto","Celerio","Brezza","Grand Vitara"];
                  } else if (carBrand === "mahindra") {
                    var models = ["ScorpioN", "Bolero", "XUV 700", "XUV 300", "Alturas G4","Scorpio Classic","Thar","Marrazo"];
                  } else if (carBrand === "tata") {
                    var models = ["Indica", "Indigo", "Tiago", "Tigor", "Altroz","Nexon","Punch","Harrier","Safari","Nano"];
                  } else if (carBrand === "mg") {
                    var models = ["Hector", ""];
                  } else if (carBrand === "kia") {
                    var models = ["Seltos", "Carrens", "Sonet", "Carnival"]; 
                  } else if (carBrand === "skoda") {
                    var models = ["Rapid", "Superb", "Slavia","kushaq"];       
                  } else if (carBrand === "toyota") {
                    var models = ["Corolla", "Fortuner", "Innova", "Land Cruiser", "Glanza","Urban Cruiser","Yaris","Etios"];
                  } else if (carBrand === "honda") {
                    var models = ["Accord", "Civic", "CR-V", "City","Amaze","BR-V","Odyssey"];
                  } else if (carBrand === "ford") {
                    var models = ["F-150", "Escape", "Explorer", "Mustang", "Edge"];
                  } else if (carBrand === "chevrolet") {
                    var models = ["Silverado", "Equinox", "Traverse", "Tahoe", "Suburban"];
                  } else if (carBrand === "bmw") {
                    var models = ["3 Series", "5 Series", "X3", "X5", "7 Series"];
                  } else if (carBrand === "audi") {
                    var models = ["A4", "Q5", "A6", "Q7", "A3"];
                  } else if (carBrand === "mercedes") {
                    var models = ["C-Class", "E-Class", "GLC", "GLE", "S-Class"];
                  } else if (carBrand === "subaru") {
                    var models = ["Outback", "Forester", "Crosstrek", "Impreza", "Ascent"];
                  } else if (carBrand === "nissan") {
                    var models = ["Altima", "Rogue", "Sentra", "Pathfinder", "Titan"];
                  } else {
                    var models = [];
                  }


                  // Add options to the dropdown
                  models.forEach(function (model) {
                    var option = document.createElement("option");
                    option.text = model;
                    option.value = model.toLowerCase(); // Convert to lowercase for value
                    carModelDropdown.add(option);
                  });
                }
              </script>


              <h6 class="font-weight-bold pt-4 pb-1">Car Registration Number:</h6>
              <input type="text" placeholder="Registration Number" name="regsno" class="form-control rounded bg-white" required>


              <h6 class="font-weight-bold pt-4 pb-1">Select Services:</h6>
              <div class="row px-3">
                <div class="col-lg-4 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="Wheels Service" id="checkbox1">
                  <label for="Wheels_Service" class="py-2  text-dark">Wheels Service</label>
                </div>
                <div class="col-lg-4 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="engine" id="checkbox2">
                  <label for="engine" class="py-2 text-dark">Engine Service</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="car-oil" id="checkbox3">
                  <label for="car-oil" class="py-2 text-dark">Car Oiling</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="car-painting" id="checkbox4">
                  <label for="car-painting" class="py-2 text-dark">Car Painting</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="air-conditioner" id="checkbox5">
                  <label for="air-conditioner" class="py-2 text-dark">AC Service</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="window" id="checkbox6">
                  <label for="window" class="py-2 text-dark">Windshields</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="vehicle Cleaning" id="checkbox7">
                  <label for="vehicle" class="py-2 text-dark">Cleaning</label>
                </div>
                <div class="col-lg-3 mr-lg-3 my-2 pt-2 pb-1 rounded bg-light">
                  <input type="checkbox" name="serviceName" value="full Sevice" id="mainCheckbox"
                    onclick="toggleCheckboxes()">
                  <label for="protection" class="py-2 text-dark ">Full Service</label>
                </div>
              </div>

              <script>
                // Function to auto check the checkbox
                function autoCheck(checkboxId) {
                  document.getElementById(checkboxId).checked = true;
                }

                // Function to toggle checkboxes
                function toggleCheckboxes() {
                  var mainCheckbox = document.getElementById('mainCheckbox');
                  var otherCheckboxes = document.querySelectorAll('input[type="checkbox"]:not(#mainCheckbox)');

                  if (mainCheckbox.checked) {
                    // Disable and uncheck other checkboxes
                    otherCheckboxes.forEach(function (checkbox) {
                      checkbox.disabled = true;
                      checkbox.checked = false;
                    });
                  } else {
                    // Enable other checkboxes
                    otherCheckboxes.forEach(function (checkbox) {
                      checkbox.disabled = false;
                    });
                  }
                }
              </script>





              <h6 class="font-weight-bold pt-4 pb-1">Car Service Description:</h6>
              <textarea name="desc" id="desc" class="form-control rounded bg-white" rows="7"
                placeholder="Write details about your Car service" ></textarea>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Select Model:</h6>
              <select class="form-control rounded w-100 bg-white" id="carModel" name="carModel">
                <option value="">Select Car Model</option>
              </select>

              <h6 class="font-weight-bold pt-4 pb-1">Service Date:</h6>
              <input type="date" name="date" class="form-control rounded bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Service Time:</h6>
              <input type="time" name="time" class="form-control rounded bg-white" required>


              <h6 class="font-weight-bold pt-4 pb-1">Upload Image:</h6>
              <div class="choose-file text-center my-4 py-4 rounded bg-white">
                <label for="file-upload">
                  <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                  <span class="d-block">or</span>
                  <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                  <span class="d-block">Maximum upload file size: 500 KB</span>
                  <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                </label>
              </div>
              <h6 class="font-weight-bold pt-4 pb-1" >Estimate Cost:</h6>
              <input type="text" class="form-control rounded bg-white" value="0" id="cost" >
            </div>
          </div>
        </fieldset>

        <!-- script code for cost calculation according to service selected -->
        <script>
          var checkboxes = document.querySelectorAll('input[type="checkbox"]');
          var cost = 0;

          checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
              // if checked add to cost else subtract except for main checkbox
              if (checkbox.checked && checkbox.id !== 'mainCheckbox') {
                cost += 1000;
              }
              else if (!checkbox.checked) {
                cost -= 1000;
              }

              if (checkbox.id === 'mainCheckbox' && checkbox.checked) {
                cost = 5000;
              }
              if (checkbox.id === 'mainCheckbox' && !checkbox.checked) {
                cost = 0;
              }

              
              document.getElementById('cost').value = cost;
            });
          });
        </script>



        <fieldset class="shadow rounded bg-white px-3 px-md-4 py-4 my-5 ad-feature bg-gray">
          <div class="row">
            <div class="col-lg-12">

              <h3 class="pb-3">Service And Payment Options
                <span class="float-right font-weight-normal text-success" data-toggle="tooltip" data-placement="top"
                  title="Autem, architecto quisquam distinctio totam aut voluptatibus placeat ut nobis molestias rerum!">What
                  is Premium Service ?</span>
              </h3>

            </div>
            <div class="col-lg-6 my-3">
              <span class="mb-3 d-block">Premium Service Options:</span>
              <ul>
                <li>
                  <input type="radio" id="regular" name="Service">
                  <label for="regular-ad" class="font-weight-bold text-dark py-1">Regular Service</label>
                  <span>$00.00</span>
                </li>
                <li>
                  <input type="radio" id="Featured-service" name="Service">
                  <label for="Featured-service" class="font-weight-bold text-dark py-1">Top Featured Service</label>
                  <span>$59.00</span>
                </li>
                <li>
                  <input type="radio" id="urgent-service" name="Service">
                  <label for="urgent-service" class="font-weight-bold text-dark py-1">Urgent Service</label>
                  <span>$79.00</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 my-3">
              <span class="mb-3 d-block">Please select the preferred payment method:</span>
              <ul>
                <li>
                  <input type="radio" id="bank-transfer" name="Payment">
                  <label for="bank-transfer" class="font-weight-bold text-dark py-1">Direct Bank Transfer</label>
                </li>
                <li>
                  <input type="radio" id="Cheque-Payment" name="Payment">
                  <label for="Cheque-Payment" class="font-weight-bold text-dark py-1">Cheque Payment</label>
                </li>
                <li>
                  <input type="radio" id="Credit-Card" name="Payment">
                  <label for="Credit-Card" class="font-weight-bold text-dark py-1">Credit Card</label>
                </li>
                <li>
                  <input type="radio" id="Cash" name="Payment">
                  <label for="Cash" class="font-weight-bold text-dark py-1">Cash</label>
                </li>

              </ul>
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
            <h3 class="mt-2">Your Service has been booked successfully</h3>
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

  <!-- <script src="js/script.js"></script> -->

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