<?php
  require 'controllers/pg_connect.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopit</title>  
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
    </style>
      
  </head>
  <body>
    <!--NAV BAR-->
    <?php include 'navbar.php';
    
    // if no active session then redirect to login page
    if(!isset($_SESSION['acc_lvl']) || $_SESSION['acc_lvl'] =='3'){
      header("location: login.php?err=20");
      die(); //get out
    }
    ?>

      <?php
        // ------ find the category dropdown -------------
        $sql = "SELECT * FROM mas_category order by cat_name";
        $result =  pg_query($pg_conn, $sql);
        
        $slist = "";
        
        while( $row = pg_fetch_object($result) ){ // the loop continues untill the data pointer reaches NULL
            $slist = $slist."<option value=".$row->cat_id.">".$row->cat_name."</option>";
        } 

        if($result  != NULL){
          pg_free_result($result);// free the result set
       }
       if($pg_conn  != NULL){
         pg_close($pg_conn);//closing the connection 
       }
      ?>

    <div class="container">

       <?php 
          if (isset($_GET['status'])){
            if ($_GET['status'] == '1'){
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Great!</strong> Item details saved succcessfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        <?php  } else {  ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oh Snap!</strong> Failed to save item details.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        <?php  }
          }
       ?>

      <div class="shadow p-4 mb-5 bg-body rounded">
    
      

        <form action="saveitem.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Category</label>
              <div class="col-sm-10">
                
                <select name="ddlcategory" id="ddlcategory" class="form-control">
                        
                        <option value="0">Select category</option>
                        <!-- <option value="1">Tripura</option>
                        <option value="2">West Bengal</option> -->
                        <?php
                            echo $slist;
                        ?>
                    </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Item Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="txtname" name="txtname" placeholder="enter itemname" >
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="txtdesc" name="txtdesc" rows="4" cols="50"></textarea>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Rating1:</label>
              <div class="col-sm-2">
                <input class="form-control" type="text" id="txtsite" name="txtsite" placeholder="sitename">
              </div>
              <div class="col-sm-2">
                <input class="form-control" type="text" id="txtrate" name="txtrate" placeholder="rating">
              </div>
              <div class="col-sm-2">
                <input class="form-control" type="text" id="txtprice" name="txtprice" placeholder="price">
              </div>
              <div class="col-sm-2">
                <input class="form-control" type="text" id="txtsales" name="txtsales" placeholder="sales">
              </div>
              <div class="col-sm-2">
                <input class="form-control" type="text" id="txturl1" name="txturl1" placeholder="url">
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Rating2:</label>
              <div class="col-sm-2">
              <input class="form-control" type="text" id="txtsite2" name="txtsite2" placeholder="sitename">
              </div>
              <div class="col-sm-2">
              <input class="form-control" type="text" id="txtrate2" name="txtrate2" placeholder="rating">
              </div>
              <div class="col-sm-2">
              <input class="form-control" type="text" id="txtprice2" name="txtprice2" placeholder="price">
              </div>
              <div class="col-sm-2">
              <input class="form-control" type="text" id="txtsales2" name="txtsales2" placeholder="sales">
              </div>
              <div class="col-sm-2">
              <input class="form-control" type="text" id="txturl2" name="txturl2" placeholder="url"><br>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Upload Image</label>
              <div class="col-sm-10">
            <input type="file" name="file-image" id="file-image" accept=".jpg,.jpeg,.png,.gif">

              </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2"> save </button>

        </form>
        </div>
      </div>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>       
    </body>
</html>
