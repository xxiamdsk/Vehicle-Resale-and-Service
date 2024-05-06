<?php
session_start();
include ('../config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Center Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/slick/slick.css" rel="stylesheet">
    <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        /* Custom styles for the admin dashboard */
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }

        /* Main content area */
        .main-content {
            margin-left: 300px;
            /* Same width as sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- header -->
    <?php include ('header.php'); ?>
    <!-- header -->

    <!-- Sidebar -->
    <?php include ('leftbar.php'); ?>
    <!-- Sidebar -->

    <<!-- Main content -->
        <div class="main-content">
            <div class="container">
                <h2>Welcome to the Service Center Dashboard</h2>
                <p>This is the main content area.</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <span><i class="fa fa-users fa-3x" aria-hidden="true"></i>
                                <p class="card-text">
                                    <?php
                                    // Query to count the number of users in the customer table
                                    $query = "SELECT * FROM customer";
                                    $result = mysqli_query($conn, $query);
                                    $num_rows = mysqli_num_rows($result);
                                    echo $num_rows;
                                    ?>
                                </p></span>
                                <a href="users.php" class="btn btn-primary">Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cars</h5>
                                <span><i class="fa fa-car fa-3x" aria-hidden="true"></i>
                                <p class="card-text">
                                    <?php
                                    // Query to count the number of users in the customer table
                                    $query = "SELECT * FROM cars";
                                    $result = mysqli_query($conn, $query);
                                    $num_rows = mysqli_num_rows($result);
                                    echo $num_rows;
                                    ?>
                                </p></span>
                                <a href="cars.php" class="btn btn-primary">Cars</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Booking</h5>
                                <span><i class="fa fa-users fa-3x" aria-hidden="true"></i>
                                <p class="card-text">
                                    <?php
                                    // Query to count the number of users in the customer table
                                    $query = "SELECT * FROM booking";
                                    $result = mysqli_query($conn, $query);
                                    $num_rows = mysqli_num_rows($result);
                                    echo $num_rows;
                                    ?>
                                </p></span>
                                <a href="booking.php" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>