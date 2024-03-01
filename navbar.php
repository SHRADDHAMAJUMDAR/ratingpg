<?php
session_start();


$username='';
$access_lvl = 0;
$user_id = 0;

  if(isset($_SESSION['user_name'])){
      $username   ="Welcome &nbsp".$_SESSION['user_name'];
      $access_lvl =$_SESSION['acc_lvl']; //acc_lvl
      $user_id    =$_SESSION['user_id'];
  }
  ?>
<!-- <div class="container"> -->



<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ShopIt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <li class="nav-item"><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=1" class="nav-link px-2 text-white">Books</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=2" class="nav-link px-2 text-white">Mobiles</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=3" class="nav-link px-2 text-white">Clothes</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=4" class="nav-link px-2 text-white">AC</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=5" class="nav-link px-2 text-white">TV</a></li>
                    <li class="nav-item"><a href="item_list.php?catid=6" class="nav-link px-2 text-white">Bag</a></li>
                </ul>

                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <form class="d-flex mt-3 mt-lg-0" role="search" action="search.php" method="GET" >
                            <input class="form-control me-2" type="search" name="query" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                  <?php if ($access_lvl == 0) { // Not logged in  ?>


                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                      <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Signup
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="register.php">Customer</a></li>
                            <li><a class="dropdown-item" href="emp_register.php">Employee</a></li>
                        </ul>
                    </li>

                  <?php } else { ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo $username;?>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                            <li><a href="changepwd.php" class="dropdown-item">Change Password</a></li>
                            <li> <hr class="dropdown-divider"> </li>
                            <li><a class="dropdown-item" href="logout.php" >Logout</a></li>
                        </ul>
                    </li>

                  <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
          <!-- </div> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->