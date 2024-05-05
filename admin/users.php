<?php 
session_start();
include('config.php');
error_reporting(0);

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
            margin-left: 300px; /* Same width as sidebar */
            padding: 20px;
        }
        .user-details{
            margin-left: 300px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
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
<?php include('header.php');?>
<!-- header -->

    <!-- Sidebar -->
    <div class="sidebar bg-light">
        <div class="container">
            <h2 class="text-center">Admin Dashboard</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-cogs"></i> Brand</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-car"></i> Vechiles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-users"></i> Manage Booking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="users.php"><i class="fas fa-user"></i> Users</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-file-text"></i> Manage Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Update Contact Info.</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</li>

            </ul>
        </div>
    </div>

			<<!-- Main content -->
    <div class="user-details">
    <table>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="avatar"><img src="user1_avatar.jpg" alt="User Avatar"></td>
                <td>User 1</td>
                <td>user1@example.com</td>
                <td>+1234567890</td>
                <td>123 Street, City, Country</td>
                <td>Administrator</td>
            </tr>
            <tr>
                <td class="avatar"><img src="user2_avatar.jpg" alt="User Avatar"></td>
                <td>User 2</td>
                <td>user2@example.com</td>
                <td>+9876543210</td>
                <td>456 Street, City, Country</td>
                <td>Editor</td>
            </tr>
            <!-- Add more rows for additional users -->
        </tbody>
    </table>
</div>




    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
