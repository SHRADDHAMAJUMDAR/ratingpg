<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>ShoPit!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="headers.css" rel="stylesheet">

    <style>
        body {
            padding-top: 56px;
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        td {
            background-color: #fff;
            color: #495057;
        }

        th, td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <?php include "controllers/pg_connect.php";;
   $cat_id = 0;

   if (isset($_GET['catid'])) {
       $cat_id = $_GET['catid'];
   }

   $sql = "SELECT items.*,ratings.rating_id, ratings.site_name, ratings.rating_value, ratings.price 
           FROM items 
           LEFT JOIN ratings ON items.item_id = ratings.item_id
           WHERE items.item_cat = " . $cat_id;


   $result = pg_query($pg_conn, $sql);
   ?>

   <table>
       <thead>
           <tr>
               <th colspan="4" align="center"></th>
           </tr>
           <tr>
           <th>Rating_id</th>
               <th>Name</th>
               <th>Description</th>
               <th>Ratings</th>
               
               <th>Price</th>
              
           </tr>
       </thead>
       <tbody>
           <?php
           $previousratingId = null;

           while ($row = pg_fetch_object($result)) {
               if ($row->rating_id != $previousratingId) {
           ?>
                   <tr>
                   <td><?php echo $row->rating_id; ?></td>
                       <td><?php echo $row->item_name; ?></td>
                       <td><?php echo $row->item_desc; ?></td>
                       <td><?php echo $row->site_name . ' - ' . $row->rating_value; ?></td>
                       
                       <td><?php echo $row->price; ?></td>
                       <td>
                     
                         <button onclick="addToCart(<?php echo $row->rating_id; ?>)">Add to Cart</button>
                        </td>
                   </tr>
               <?php
               } else {
               ?>
                   <tr>
                       <td colspan="2"></td>
                       <td><?php echo $row->site_name . ' - ' . $row->rating_value; ?></td>
                       <td><?php echo $row->price; ?></td>
                       <td>
                        
                        <button onclick="addToCart(<?php echo $row->rating_id; ?>) ">Add to Cart</button>
                        </td>
                   </tr>
           <?php
               }

               $previousItemId = $row->rating_id;
           }

           if ($result != NULL) {
               pg_free_result($result);
           }

           if ($pg_conn != NULL) {
               pg_close($pg_conn);
           }
           ?>
       </tbody>
   </table>

   <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Add this script block before the closing </body> tag -->

   



</body>

</html>