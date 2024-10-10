<?php
session_start();
include ('config.php');
error_reporting(0);
?>
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
    <section class="dashboard section">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user-dashboard-profile">
                            <!-- User Image -->
                            <div class="profile-thumb">
                                <img src="images/user/deepak.jpg" alt="" class="rounded-circle">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center"><?php if (isset($_SESSION['email'])) { ?>
                                    <?php
                                    echo $_SESSION['name'];
                                    ?>
                                </h5>
                                <p>Joined February 06, 2017</p>
                            <?php } ?>
                            <a href="user-profile.php" class="btn btn-main-sm">Edit Profile</a>
                        </div>
                        <!-- Dashboard Links -->
                        <div class="widget user-dashboard-menu">
                            <ul>
                                <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i>My Cars</a>
                                </li>
                                <li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a></li>
                            </ul>
                        </div>

                        <!-- delete-account modal -->
                    
                    </div>
                </div>

                <div class="col-lg-8">
                    <!--Cars -->
                    <div class="widget dashboard-container ">
                        <h3 class="widget-header">My Cars</h3>
                        <table class="table table-responsive product-dashboard-table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Brand</th>
                                    <th class="text-center">Model</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/cars/city.jpg" alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">CAR XYZ</h3>
                                        <span class="add-id"><strong>Resg No.:</strong>UP65 QW2345</span>
                                        <span><strong>Buy on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Buyed</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Cars</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="view"
                                                        class="view" href="category.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Edit" href="dashboard.html">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="delete" data-toggle="tooltip" data-placement="top"
                                                        title="Delete" href="dashboard.html">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/cars/city.jpg" alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">CAR XYZ</h3>
                                        <span class="add-id"><strong>Resg No.:</strong>UP65 QW2345</span>
                                        <span><strong>Buy on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Buyed</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Cars</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="view"
                                                        class="view" href="category.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Edit" href="dashboard.html">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="delete" data-toggle="tooltip" data-placement="top"
                                                        title="Delete" href="dashboard.html">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/cars/city.jpg" alt="image description">
                                    </td>
                                    <td class="product-details">
                                        <h3 class="title">CAR XYZ</h3>
                                        <span class="add-id"><strong>Resg No.:</strong>UP65 QW2345</span>
                                        <span><strong>Buy on: </strong><time>Jun 27, 2017</time> </span>
                                        <span class="status active"><strong>Status</strong>Buyed</span>
                                        <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                    </td>
                                    <td class="product-category"><span class="categories">Cars</span></td>
                                    <td class="action" data-title="Action">
                                        <div class="">
                                            <ul class="list-inline justify-content-center">
                                                <li class="list-inline-item">
                                                    <a data-toggle="tooltip" data-placement="top" title="view"
                                                        class="view" href="category.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Edit" href="dashboard.html">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="delete" data-toggle="tooltip" data-placement="top"
                                                        title="Delete" href="dashboard.html">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>

                    <!-- pagination -->
                    <!-- <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="dashboard.html" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="dashboard.html">1</a></li>
                                <li class="page-item active"><a class="page-link" href="dashboard.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="dashboard.html">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="dashboard.html" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <!-- pagination -->

                </div>
            </div>
            <!-- Row End -->
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