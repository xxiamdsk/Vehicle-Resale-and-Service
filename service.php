<?php
session_start();
include ('config.php');
error_reporting(0);

?><!DOCTYPE html>
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

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\wheels.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Wheels</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\engine.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Engine</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\car-oil.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Car Oiling</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\car-painting.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Car Painting</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\air-conditioner.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">AC Service</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\window.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Windshields</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\vehicle.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Cleaning</p>
            </div>
        </div>
        <div class="col " style="padding-bottom: 15px;">
          <div class="card1 shadow-sm  bd-placeholder-img card-img-top" width="242" height="151" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" >
            <img src="images\service logos\protection.png" alt="" srcset=""  width="150" height="144" class="center"  >
          </div>
          <div class="card-body">
              <p class="card-text">Full Service</p>
            </div>
        </div>
      </div>
    </div>
  </div>




  <section class="advt-post bg-gray py-5">
    <div class="container">
      <form action="#!" method="POST">

        <!-- seller-information start -->
        <fieldset class="border px-3 px-md-4 py-4 my-5 seller-information bg-gray">
          <div class="row">
            <div class="col-lg-12">
              <h3>User Information</h3>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
              <input type="text" placeholder="Contact name" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
              <input type="text" placeholder="Contact Number" class="form-control bg-white" required>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
              <input type="email" placeholder="name@yourmail.com" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Address:</h6>
              <input type="text" placeholder="Your address" class="form-control bg-white" required>
            </div>
          </div>
        </fieldset>
        <!-- seller-information end-->

        <!-- Post Your ad start -->
        <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
          <div class="row">
            <div class="col-lg-12">
              <h3>Book Service</h3>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Select a Car</h6>
              <select name="car" class="form-control w-100 bg-white" id="inputGroupSelect">
                <option value="">Select a car</option>
                <option value="volkswagen">Volkswagen</option>
                <option value="toyota">Toyota</option>
                <option value="honda">Honda</option>
                <option value="ford">Ford</option>
                <option value="chevrolet">Chevrolet</option>
                <option value="bmw">BMW</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes-Benz</option>
                <option value="subaru">Subaru</option>
                <option value="nissan">Nissan</option>
              </select>
              <!-- <input type="text" class="form-control bg-white" placeholder="Ad title go There" required> -->
              <h6 class="font-weight-bold pt-4 pb-1">Car Type:</h6>
              <div class="row px-3">
                <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white">
                  <input type="radio" name="itemName" value="personal" id="personal" required>
                  <label for="personal" class="py-2">Personal</label>
                </div>
                <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                  <input type="radio" name="itemName" value="business" id="business" required>
                  <label for="business" class="py-2">Business</label>
                </div>
              </div>

              <h6 class="font-weight-bold pt-4 pb-1">Type of Service:</h6>
              <select name="service_type" id="service_type" class="form-control w-100 bg-white" id="inputGroupSelect">
                <option value="">Select Service Type</option>
                <option value="oil_change">Oil Change</option>
                <option value="tire_rotation">Tire Rotation</option>
                <option value="brake_service">Brake Service</option>
                <option value="engine_tune_up">Engine Tune-up</option>
                <option value="battery_replacement">Battery Replacement</option>
                <!-- Add more options as needed -->
              </select>
              <h6 class="font-weight-bold pt-4 pb-1">Car Service Description:</h6>
              <textarea name="" id="" class="form-control bg-white" rows="7"
                placeholder="Write details about your Car service" required></textarea>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Select Model:</h6>
              <select name="car_model" class="form-control w-100 bg-white" id="inputGroupSelect">
                <option value="">Select Model</option>

                <!-- Volkswagen -->
                <optgroup label="Volkswagen">
                  <option value="golf">Golf</option>
                  <option value="jetta">Jetta</option>
                  <option value="passat">Passat</option>
                  <option value="tiguan">Tiguan</option>
                  <option value="atlas">Atlas</option>
                  <!-- Add more Volkswagen models here -->
                </optgroup>

                <!-- Toyota -->
                <optgroup label="Toyota">
                  <option value="corolla">Corolla</option>
                  <option value="camry">Camry</option>
                  <option value="rav4">RAV4</option>
                  <option value="highlander">Highlander</option>
                  <option value="tacoma">Tacoma</option>
                  <!-- Add more Toyota models here -->
                </optgroup>

                <!-- Honda -->
                <optgroup label="Honda">
                  <option value="accord">Accord</option>
                  <option value="civic">Civic</option>
                  <option value="cr-v">CR-V</option>
                  <option value="pilot">Pilot</option>
                  <option value="odyssey">Odyssey</option>
                  <!-- Add more Honda models here -->
                </optgroup>

                <!-- Add other car brands similarly -->
              </select>

              <h6 class="font-weight-bold pt-4 pb-1">Service Date:</h6>
              <input type="date" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Service Time:</h6>
              <input type="time" class="form-control bg-white" required>
              <h6 class="font-weight-bold pt-4 pb-1">Service Location:</h6>
              <input type="text" class="form-control bg-white" placeholder="Service Location" required>

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
            </div>
          </div>
        </fieldset>
        <!-- Post Your ad end -->



        <!-- ad-feature start -->
        <fieldset class="border bg-white px-3 px-md-4 py-4 my-5 ad-feature bg-gray">
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
                  <input type="radio" id="regular-ad" name="Service">
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
        <!-- ad-feature start -->

        <!-- submit button -->
        <div class="checkbox d-inline-flex">
          <input type="checkbox" id="terms-&-condition" class="mt-1">
          <label for="terms-&-condition" class="ml-2">By click you must agree with our
            <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                Rules.</a></span>
          </label>
        </div>
        <button type="submit" class="btn btn-primary d-block mt-2">Book Your Service</button>
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

</body>

</html>