<header style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.php">
                        <img src="../images/wheelXchange(1).png" alt="logo" style="height: 40px ; width: 150px;">
                    </a>
                
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-nav ">
                            
                            <li class="nav-item dropdown dropdown-slide ">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">
                                    <?php if (isset($_SESSION['email'])) { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                                            class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                        </svg>
                                        <?php
                                        echo "Hello " . $_SESSION['name'];
                                        ?>
                                        <span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <?php if (isset($_SESSION['email'])) { ?>
                                            <li><a class="dropdown-item " href="../Logout.php"> Logout</a></li>
                                        </ul>
                                    <?php } ?>



                                <?php } else {
                                    echo 'Dashboard ';
                                    ?>
                                    <span><i class="fa fa-angle-down"></i></span></a>
                                    <!-- Dropdown list -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item " href="login.php">Profile</a></li>
                                        <li><a class="dropdown-item " href="login.php">My Cars</a></li>
                                        <!-- <li><a class="dropdown-item " href="#"> Favourite Car</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                            <?php

                                }

                                ?>



                        <?php
                        
                        if (isset($_SESSION['email'])) {
                            // echo "Hello " . $_SESSION['name'];
                            ?>
                            <!-- <ul class="navbar-nav ml-auto mt-10">
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="logout.php">logout</a>
                                </li>
                            </ul> -->
                        <?php } else {
                            ?>
                            <ul class="navbar-nav ml-auto mt-10">
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="../login.php">login</a>
                                </li>
                            </ul>
                            <?php
                        }
                        ?>






                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>