<?php
session_start();
include ('../config.php');
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $b_no = $_POST['b_no'];
    $resg_no = $_POST['resg_no'];
    $uid = $_POST['uid'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $sc_id = $_POST['sc_id'];
    $amount = $_POST['amount'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $sql = "UPDATE booking SET resg_no='$resg_no', uid='$uid', brand='$brand', model='$model', sc_id='$sc_id', amount='$amount', location='$location', date='$date', status='$status' WHERE b_no='$b_no'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $b_no = $_POST['b_no'];
    $sql = "DELETE FROM booking WHERE b_no='$b_no'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/slick/slick.css" rel="stylesheet">
    <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
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

        .user-details {
            margin-left: 300px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .avatar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
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

    <!-- Main content -->
    <div class="user-details">
        <h1>Booking</h1>
        <!-- <a href="add-brand.php" class="btn btn-primary">Add Brand</a> -->
        <table>
            <tr>
                <th>b_no</th>
                <th>resg_no</th>
                <th>uid</th>
                <th>brand</th>
                <th>model</th>
                <th>sc_id</th>
                <th>amount</th>
                <th>location</th>
                <th>date</th>
                <th>status</th>
                <th>Action</th>
            </tr>
            <?php
            // select only DISTINCT brand and model from cars table 
            $sql = "SELECT * FROM booking ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['b_no']; ?></td>
                        <td><?php echo $row['resg_no']; ?></td>
                        <td><?php echo $row['uid']; ?></td>
                        <td><?php echo $row['brand']; ?></td>
                        <td><?php echo $row['model']; ?></td>
                        <td><?php echo $row['sc_id']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editdata">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deletedata">
                                <i class="fas fa-eraser"></i>
                            </button>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            
        </table>

        <!-- Modal -->
        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="edit-booking.php" method="POST">
                        <div class="mb-3">
                            <label for="b_no" class="form-label">Booking Number</label>
                            <input type="text" class="form-control" id="b_no" name="b_no">
                        </div>
                        <div class="mb-3">
                            <label for="resg_no" class="form-label">Registration Number</label>
                            <input type="text" class="form-control" id="resg_no" name="resg_no">
                        </div>
                        <div class="mb-3">
                            <label for="uid" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="uid" name="uid">
                        </div>
                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="brand" name="brand">
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" name="model">
                        </div>
                        <div class="mb-3">
                            <label for="sc_id" class="form-label">Service Center ID</label>
                            <input type="text" class="form-control" id="sc_id" name="sc_id">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="text" class="form-control" id="date" name="date">
                        </div>
                        
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" name="status">
                        </div>

                        
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="deletedata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body
                    ">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="mb-3">
                                <H4>
                                    Are you sure you want to delete this booking?
                                </H4>
                                <label for="b_no" class="form-label">Booking Number</label>
                                <input type="text" class="form-control" id="b_no" name="b_no" placeholder="<?php echo $row['b_no']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    
                        </div>
                    </div>
            </div>
            </div>  
        


    </div>
   



    </body>


    




    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>