<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ShoPit! - Search Results</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="headers.css" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Your existing styles here */

        body {
            padding-top: ;
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f8f9fa;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        /* Add additional style for star rating */
        .star-rating {
            color: orange;
        }

    </style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <?php
    include 'controllers/pg_connect.php';

    // Check if the search query is provided
    if (isset($_GET['query'])) {
        $searchQuery = $_GET['query'];

        // Perform a search in your database using the provided query
        // Modify the SQL query as per your database schema
        $sql = "SELECT ratings.item_id, item_name, avg_rating, ARRAY_AGG (site_name || '~' || rating_value || '~' || price  || '~' || sales  || '~' || coalesce(url,'#')) rating_desc, item_desc, tot_sales 
         FROM items INNER JOIN ratings USING (item_id)
        WHERE item_name ILIKE '%$searchQuery%' GROUP BY ratings.item_id, item_name, avg_rating, tot_sales, item_desc ORDER BY avg_rating DESC, tot_sales DESC LIMIT 10";

        $result = pg_query($pg_conn, $sql);
    } else {
        // Handle case where no search query is provided
        echo '<div class="container py-5">';
        echo '<h2 class="pb-2 border-bottom">Search Results</h2>';
        echo '<p>No search query provided. Please enter a search query above.</p>';
        echo '</div>';
        exit(); // Stop execution to prevent further rendering
    }
    ?>

    <main class="container py-5">

        <!-- Your existing PHP code for displaying items -->
        

        <h2 class="pb-2 border-bottom text-dark text-light">Featured Items</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php while ($row = pg_fetch_object($result)) { ?>
            <div class="col">
                <div class="card">
                    <img src="res/images/thumbnail.png" class="card-img-top" alt="Thumbnail" height="250" >
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

                        echo "<table class='table table-borderless'>
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
                        <button href="delete.php?id=<?php echo $row->item_id;?>" class="btn btn-danger">Delete</button>

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

</body>

</html>

   
