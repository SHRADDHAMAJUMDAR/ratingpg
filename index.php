<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopit</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== font awesome ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </head>
  <body>
    <!--NAV BAR-->
    <?php include 'navbar.php' ?>

    <!--carousal banner-->
    <div class="container-fluid px-0 py-5">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="res/images/book2.jpg" class="d-block w-100" alt="...">
                <!-- <img src="https://source.unsplash.com/1600x600/?books" class="d-block w-100" alt="..."> -->
              </div>
          <div class="carousel-item">
            <img src="res/images/mob3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="res/images/clothes.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="res/images/ac-3.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="res/images/tv2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="res/images/bag2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <div class="album py-5 bg-body-tertiary">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/book3.jpg" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                      <a href="item_list.php?catid=1" class="btn btn-outline-secondary me-2">View</a>
                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                    <!-- <small class="text-body-secondary">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/mobile.png" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="item_list.php?catid=2" class="btn btn-outline-secondary me-2">View</a>
                      
                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/clothes.png" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="item_list.php?catid=3" class="btn btn-outline-secondary me-2">View</a>
                      
                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/ac.png" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="item_list.php?catid=4" class="btn btn-outline-secondary me-2">View</a>

                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/tv.png" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="item_list.php?catid=5" class="btn btn-outline-secondary me-2">View</a>
                      
                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="res/images/bag.png" class="d-block w-100" alt="...">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="item_list.php?catid=6" class="btn btn-outline-secondary me-2">View</a>
                      
                    </div>
                    <?php if ($access_lvl == 1 || $access_lvl == 2) {  //customers cant add item ?>
                    <a href="itementry.php.php?catid=1" class="btn btn-outline-secondary me-2">Add</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
    
            
          </div>
        </div>
      </div>

      <?php 
        //----------- after editing an item page is redirected here
          if (isset($_GET['status'])){
            if ($_GET['status'] == '1'){
        ?>
          <script>alert('Details updated successfully')</script>

        <?php  } else {  ?>
          <script>alert('Failed to update details')</script>
        <?php  }
          }
       ?>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>