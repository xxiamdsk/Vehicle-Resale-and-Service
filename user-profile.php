<?php
session_start();
include ('config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title> VRS </title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

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


    <!--==================================
=            User Profile            =
===================================-->

    <section class="user-profile section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user-dashboard-profile">
                            <!-- User Image -->
                            <div class="profile-thumb">
                                <img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center"><?php if (isset($_SESSION['email'])) { ?>
                                    <?php
                                    echo $_SESSION['name'];
                                    ?>
                                </h5>
                                <p>Joined February 06, 2017</p>
                                <a href="dashboard.php" class="btn btn-main-sm">Dashboard</a>
                            <?php } ?>
                        </div>
                        <!-- Dashboard Links -->
                        <div class="widget user-dashboard-menu">
                            <ul>
                                <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i>My Cars</a>
                                </li>
                                <li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#deleteaccount"><i
                                            class="fa fa-power-off"></i>Delete Account</a></li>
                            </ul>
                        </div>

                        <!-- delete-account modal -->

                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Edit Profile Welcome Text -->
                    <div class="widget welcome-message">
                        <h2>Edit profile</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    </div>
                    <!-- Edit Personal Info -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="widget personal-info">
                                <h3 class="widget-header user">Edit Personal Information</h3>
                                <form action="#">
                                    <!-- First Name -->
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name">
                                    </div>
                                    <!-- Last Name -->
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name">
                                    </div>
                                    
                                    <!-- Phone Number -->
                                    <div class="form-group ">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                    <!-- File chooser -->
                                    <div class="form-group choose-file d-inline-flex">
                                        <i class="fa fa-user text-center px-3"></i>
                                        <input type="file" class="form-control-file mt-2 pt-1" id="input-file">
                                    </div>
                                    <!-- Submit button -->
                                    <button class="btn btn-transparent">Save My Changes</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Change Password -->
                            <div class="widget change-password">
                                <h3 class="widget-header user">Edit Password</h3>
                                <form action="#">
                                    <!-- Current Password -->
                                    <div class="form-group">
                                        <label for="current-password">Current Password</label>
                                        <input type="password" class="form-control" id="current-password">
                                    </div>
                                    <!-- New Password -->
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control" id="new-password">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirm-password">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class="btn btn-transparent">Change Password</button>
                                </form>
                            </div>
                        </div>
                        <!-- Change Email Address -->
                        
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