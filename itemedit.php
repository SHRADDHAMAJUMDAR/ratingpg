<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">



<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoPit!</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon" />

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> -->

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="headers.css" rel="stylesheet">

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


    <?php include 'navbar.php';

// if no active session then redirect to login page

if(!isset($_SESSION['user_name'])){
    header("location: login.php?err=20");
    die(); //get out
}
?>

    <?php

    include 'controllers/pg_connect.php';

    // Check if item_id is set in the URL
    $item_id = isset($_GET['id']) ? $_GET['id'] : 0;
    $rating_id = isset($_GET['id']) ? $_GET['id'] : 0;

    // Fetch item details for the given item_id
    $sql = "SELECT * FROM items WHERE item_id = " . $item_id;
    $result = pg_query($pg_conn, $sql);
    $item = pg_fetch_object($result);


    // ------ find the category dropdown -------------
    $sql = "SELECT * FROM mas_category order by cat_name";
    $res =  pg_query($pg_conn, $sql);
    
    $slist = "";
    
    while( $row = pg_fetch_object($res) ){ // the loop continues untill the data pointer reaches NULL
        if($row->cat_id == $item->item_cat){
            $slist = $slist."<option value=".$row->cat_id." selected>".$row->cat_name."</option>";
        } else {
            $slist = $slist."<option value=".$row->cat_id.">".$row->cat_name."</option>";
        }
        
    }


    $sql2= "SELECT * FROM ratings WHERE item_id = " . $item_id;
    $result2 = pg_query($pg_conn, $sql2);
    // xxxxxxxx $ratings = pg_fetch_object($result2);
    
    ?>

    <main class="container">

        <div class="shadow p-4 mb-5 bg-body rounded">
            <h2 class="pb-2 border-bottom">Edit Item</h2>
            <form action="saveedititems.php" method="post" enctype="multipart/form-data">
                <!-- Add hidden input for item_id -->
                <input type="hidden" name="hdn_item_id" id="hdn_item_id" value="<?php echo $item->item_id; ?>">
                <!-- <input type="hidden" name="rating_id" value="<?php //echo $ratings->rating_id; ?>"> -->
                <!-- Add your form fields for editing item details -->
                <div class="input-group mb-3">
                    <!-- <label for="txtname" class="form-label">Item Name</label> -->
                    <span class="input-group-text" id="p_name-addon">Product Name</span>
                    <input type="text" class="form-control" id="txtname" name="txtname" value="<?php echo $item->item_name; ?>">
                </div>

                <div class="input-group mb-3">
                    <!-- <label for="txtname" class="form-label">Item description</label> -->
                    <span class="input-group-text" id="p_name-addon">Description</span>
                    <textarea class="form-control" id="txtdesc" name="txtdesc" rows="4" cols="50"><?php echo $item->item_desc; ?></textarea>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Category &nbsp; <i class="fa fa-list"></i></span>
                    <select name="ddlcategory" id="ddlcategory" class="form-control">
                        <?php echo $slist;  ?>
                    </select>
                </div>

                    <?php 
                        $i = 1;
                        while( $row = pg_fetch_object($result2) ){
                    ?>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Site &nbsp; <i class="fa fa-globe"></i></span>
                    <input type="text" class="form-control" id="txtsite_<?php echo $i; ?>" 
                        name="txtsite_<?php echo $i; ?>" value="<?php echo $row->site_name; ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Rating &nbsp; <i class="fa fa-star"></i></span>
                    <input type="text" class="form-control" id="txtrate_<?php echo $i; ?>"
                        name="txtrate_<?php echo $i; ?>" value="<?php echo $row->rating_value; ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Price &nbsp; <i class="fa fa-rupee"></i></span>
                    <input type="text" class="form-control" id="txtprice_<?php echo $i; ?>"
                        name="txtprice_<?php echo $i; ?>" value="<?php echo $row->price; ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Sales &nbsp; <i class="fa fa-line-chart"></i></span>
                    <input type="text" class="form-control" id="txtsales_<?php echo $i; ?>"
                        name="txtsales_<?php echo $i; ?>" value="<?php echo $row->sales; ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">URL &nbsp; <i class="fa fa-link"></i></span>
                    <input type="text" class="form-control" id="txturl_<?php echo $i; ?>"
                        name="txturl_<?php echo $i; ?>" value="<?php echo $row->url; ?>">
                </div>


                    <?php
                            $i++;
                        }

                        if($i==2){
                    ?>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Site &nbsp; <i class="fa fa-globe"></i></span>
                    <input type="text" class="form-control" id="txtsite_2" name="txtsite_2">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Rating &nbsp; <i class="fa fa-star"></i></span>
                    <input type="text" class="form-control" id="txtrate_2" name="txtrate_2">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Price &nbsp; <i class="fa fa-rupee"></i></span>
                    <input type="text" class="form-control" id="txtprice_2" name="txtprice_2">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Sales &nbsp; <i class="fa fa-line-chart"></i></span>
                    <input type="text" class="form-control" id="txtsales_2" name="txtsales_2">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">URL &nbsp; <i class="fa fa-link"></i></span>
                    <input type="text" class="form-control" id="txturl_2" name="txturl_2">
                </div>
                    <?php
                        }
                    ?>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="p_name-addon">Upload &nbsp; <i class="fa fa-image"></i></span>
                        <!-- <div class="col-sm-10"> -->
                            <input type="file" name="file-image" id="file-image" accept=".jpg,.jpeg,.png,.gif">
                        <!-- </div> -->
                        <input type="hidden" name="hdnimg" id="hdnimg" value="<?php echo $item->item_img; ?>"
                </div>


                <!-- Add other form fields for editing other details -->

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </main>

    <?php
     if($result  != NULL){
        pg_free_result($result);// free the result set
     }
     if($pg_conn  != NULL){
       pg_close($pg_conn);//closing the connection 
     }

    ?>



    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>