<?php
session_start();
include ('../config.php');
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insp_no = $_POST['Insp_no'];
    $sql = "DELETE FROM cars WHERE insp_no='$insp_no'";
    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insp_no = $_POST['inspno'];
    $regs_no = $_POST['regsno'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $kms = $_POST['kms'];
    $location = $_POST['location'];
    $inspection = $_POST['inspection'];
    $result = $_POST['result'];
    $sql = "UPDATE cars SET insp_no='$insp_no', resg_no='$regs_no', brand='$brand', model='$model', price='$price', date='$date', kms='$kms', location='$location', inspection='$inspection', result='$result' WHERE insp_no='$insp_no'";
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
        <h1>Cars</h1>
        <table>
            <tr>
                <th>Insp No</th>
                <th>Reg No</th>
                <th>UID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
                <th>Date</th>
                <th>Kms</th>
                <th>Location</th>
                <th>Inspection</th>
                <th>Result</th>
                <th>Action</th>
            </tr>
            <?php
            // select only DISTINCT brand and model from cars table 
            $sql = "SELECT * FROM cars ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['insp_no']; ?></td>
                        <td><?php echo $row['resg_no']; ?></td>
                        <td><?php echo $row['uid']; ?></td>
                        <td><?php echo $row['brand']; ?></td>
                        <td><?php echo $row['model']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['kms']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['inspection']; ?></td>
                        <td><?php echo $row['result']; ?></td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Delete Car</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="modal-body mb-3 ">
                                <!-- Modal body -->
                                Are you sure you want to delete this Car?
                                <br>
                                <label for="Insp_no" class="form-label">Inspection Number</label>
                                <input type="text" class="form-control" id="Insp_no" name="Insp_no">
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
                                <label for="inspno" class="form-label">Inspection Number</label>
                                <input type="text" class="form-control" id="inspno" name="inspno">
                            </div>
                            <div class="mb-3">
                                <label for="regsno" class="form-label">Registration Number</label>
                                <input type="text" class="form-control" id="regsno" name="regsno">
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
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date">
                            </div>
                            <div class="mb-3">
                                <label for="kms" class="form-label">Kms</label>
                                <input type="text" class="form-control" id="kms" name="kms">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location">
                            </div>
                            <div class="mb-3">
                                <label for="inspection" class="form-label">Inspection</label>
                                <input type="text" class="form-control" id="inspection" name="inspection">
                            </div>
                            <div class="mb-3">
                                <label for="result" class="form-label">Result</label>
                                <input type="text" class="form-control" id="result" name="result">
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

            $('#inspno').val(data[0]);
            $('#regsno').val(data[1]);
            $('#brand').val(data[3]);
            $('#model').val(data[4]);
            $('#price').val(data[5]);
            $('#date').val(data[6]);
            $('#kms').val(data[7]);
            $('#location').val(data[8]);
            $('#inspection').val(data[9]);
            $('#result').val(data[10]);
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

            $('#Insp_no').val(data[0]);
        });
    });
</script>

</body>

</html>