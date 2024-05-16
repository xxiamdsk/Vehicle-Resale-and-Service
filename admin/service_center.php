<?php
session_start();
include ('../config.php');
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['sc_id'];
    $sql = "DELETE FROM service_center WHERE sc_id='$id'";
    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['scid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $location = $_POST['location'];
    $sql = "UPDATE service_center SET name='$name', email='$email', ph_no='$phno', location='$location' WHERE sc_id='$id'";
    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            margin-left: 260px;
            padding-top: 20px;
            padding-bottom: 20px;
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
    <div class="main-content">
        <h1>Service Center </h1>
        <table>
            <tr>
            <th>SC ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th>Location</th>
        <th>Action</th>
            </tr>
            <?php
            // select only DISTINCT brand and model from cars table 
            $sql = "SELECT * FROM service_center ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                    <td><?php echo $row["sc_id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["pswd"]; ?></td>
                        <td><?php echo $row["ph_no"]; ?></td>
                        <td><?php echo $row["location"]; ?></td>
                        <td>
                            <button type="button" class="editbtn"> <i class="fas fa-pencil-alt"></i> </button>
                            <button type="button" class=" deletebtn"> <i class="fas fa-eraser"></i> </button>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

        </table>

        <!-- Modal -->
        <div class="modal fade" id="deletedata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Service Center</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="modal-body mb-3 ">
                                <!-- Modal body -->
                                Are you sure you want to delete this Service Center?
                                <br>
                                <label for="sc_id" class="form-label">Service Center ID</label>
                                <input type="text" class="form-control" id="sc_id" name="sc_id">
                            </div>
                            <button type="submit" class="btn btn-danger">Confirm</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Car</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="mb-3">
                                <label for="scid" class="form-label">Service Center ID</label>
                                <input type="text" class="form-control" id="scid" name="scid">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                           
                            <div class="mb-3">
                                <label for="phno" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phno" name="phno">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location">

                            </div>
                            <button type="submit" class="btn btn-danger">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<!-- Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editdata').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#scid').val(data[0]);
            $('#name').val(data[1]);
            $('#email').val(data[2]);
            $('#phno').val(data[4]);
            $('#location').val(data[5]);

        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.deletebtn').on('click', function () {
            $('#deletedata').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#sc_id').val(data[0]);
        });
    });
</script>

</body>

</html>