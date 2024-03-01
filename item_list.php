<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ShoPit!</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="headers.css" rel="stylesheet">

     <!-- ===== font awesome ====== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /*
        body {
            padding-top: ;
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f8f9fa;
        }

        */

        /* Add additional style for star rating */
        .star-rating {
            color: orange;
        }

        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }

     /*.card-body {
        color:black;
        }

      .card-text small {
        color: black;
    }*/
    </style>

</head>

<body>

    <?php include 'navbar.php' ?>

    <?php
    include 'controllers/pg_connect.php';

    $cat_id = isset($_GET['catid']) ? $_GET['catid'] : 0;

    $sql = "SELECT ratings.item_id, item_name, avg_rating, ARRAY_AGG (site_name || '~' || rating_value || '~' || price  || '~' || sales  || '~' || coalesce(url,'#')) rating_desc, item_desc, tot_sales,item_img
     FROM items INNER JOIN ratings USING (item_id)
	where item_cat = $cat_id GROUP BY ratings.item_id, item_name, avg_rating, tot_sales, item_desc, item_img order by avg_rating desc, tot_sales desc  limit 10";

    $result = pg_query($pg_conn, $sql);
    ?>

    <main class="container">

        <?php 
        //----------- after editing an item page is redirected here
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

<h2 class="pb-2 border-bottom text-dark text-light">Featured Items</h2>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php while ($row = pg_fetch_object($result)) { ?>
            <div class="col">
                <div class="card">
                   <?php

                   $impath="res/images/thumbnail.png";
                   if($row->item_img!="")
                      $impath= $row->item_img;


                   ?>
                
                <img src="<?php echo $impath ;?>" class="card-img-top" alt="Thumbnail" height="250" >
                    <div class="card-body"> 
                        <h5 class="card-title"><?php echo $row->item_name; ?></h5>
                        <p class="card-text"><?php echo $row->item_desc; ?></p>

                        <!-- Displaying star rating -->
                        <div class="star-rating">
                            Average rating : <?php echo $row->avg_rating; ?> &nbsp;
                            <?php
                            // Full stars
                            for ($i = 1; $i <= floor($row->avg_rating); $i++) {
                                echo '<span class="fa fa-star checked"></span>';
                            }

                            // Partial star
                            if ($row->avg_rating - floor($row->avg_rating) > 0) {
                                echo '<span class="fa fa-star-half checked"></span>';
                            }
                            ?>
                        </div>

                        <?php 
                        $str = $row->rating_desc; 
                        //"{Amazon~4.5~17500.00~2500~https://www.amazon.in/Motorola-G72-128GB-Meteorite-Grey/,Flipkart~4.3~18000.00~3000~https://www.flipkart.com/motorola-g72-meteorite-grey-128-gb/}";
                        $str = ltrim($str, $str[0]);    // remove {
                        $str = rtrim($str, "}");        // remove }
                        $newStr = explode(",", $str);   // split based on ,

                        echo "<table class='table table-borderless table-responsive'>
                            <tr class='table-primary'>
                                <td>Site</td><td>Rating</td><td>Price</td><td>Sales</td><td>URL</td>
                            </tr>";
                        foreach($newStr as $n) {
                            // $n has the main parts -> split again based on ~
                            $subStr = explode("~", $n);
                            echo "<tr>";
                            $i = 1;
                            foreach($subStr as $v) {
                                if($i == 5){
                                    echo "<td><a class='btn btn-sm btn-success' href = '". $v."' target='_blank'>Goto site</a></td>";
                                } else {
                                    echo "<td>". $v ."</td>";
                                }
                                
                                $i++;
                            }
                            echo "</tr>";
                        }

                        echo "</table>";
                        
                        ?>

                    <?php if ($access_lvl == 1 ||$access_lvl == 2) { ?>
                        <a href="itemedit.php?id=<?php echo $row->item_id; ?>"  class="btn btn-info">Edit</a>
                        <button class="delete-item btn btn-danger" data-item-id="<?php echo $row->item_id; ?>">Delete</button>

                    <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>




    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function gotosite(url) {
    // Navigate to the URL
    window.location.href = url;
     }

     function notlogged(rating_id)
     {
        alert('User not logged in. Please log in to access this feature.');  
     }
     </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.delete-item').on('click', function () {
            // delete confirmation 
            if (!confirm('Are you sure you want to delete this item?')) {
                return;
            }

            var item_id = $(this).data('item-id');

            // Send an Ajax request to delete.php
            $.ajax({
                type: 'POST',
                url: 'delete.php',
                data: { item_id: item_id },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        // Handle success, e.g., remove the deleted item from the UI
                        alert(response.message);
                        // Reload the page or perform any other necessary actions
                        location.reload();
                    } else {
                        // Handle error, e.g., show an error message
                        alert(response.message);
                    }
                },
                error: function () {
                    // Handle Ajax request error
                    alert('Error occurred while processing the request');
                }
            });
        });
    });
</script>



</body>

</html>