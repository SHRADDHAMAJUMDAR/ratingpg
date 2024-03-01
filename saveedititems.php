<?php
include 'controllers/pg_connect.php';
include 'generic/upload_file_func.php';
include 'generic/validator.php';
$s=0;
$result=NULL;

try{

$item_id = $_POST['hdn_item_id']; //hidden
$i_name  =filter_myinput($_POST['txtname']);
$i_desc  = filter_myinput($_POST['txtdesc']);
//str_replace('\'', '\'\'', $i_desc);
$i_cat    =$_POST['ddlcategory'];

$i_site1   =filter_myinput($_POST['txtsite_1']);
$i_rate1   =floatval($_POST['txtrate_1']);
$i_price1    =floatval($_POST['txtprice_1']);
$i_sales1   =intval($_POST['txtsales_1']);
$i_url1   =$_POST['txturl_1'];

$i_site2   =filter_myinput($_POST['txtsite_2']);
$i_rate2   =floatval($_POST['txtrate_2']);
$i_price2    =floatval($_POST['txtprice_2']);
$i_sales2   =intval($_POST['txtsales_2']);
$i_url2   =$_POST['txturl_2'];

$img_path=$_POST["hdnimg"];
$errormsg="";

if(!empty($_FILES["file-image"]["name"]))
{
  $ret=upload_to_server($_FILES["file-image"]);
  $status=explode("~",$ret);
  if($status[0]=="1")
  {
   $img_path=$status[1];
 

  }
  else
  {
   $errormsg=$status[1];
  }
}

/*$i_site2   =$_POST['txtsite2'];
$i_rate2   =$_POST['txtrate2'];
$i_price2    =$_POST['txtprice2'];
$i_sales2   =$_POST['txtsales2'];
$i_url2   =$_POST['txturl2'];*/

// Add other fields
/*
$sql = "UPDATE items SET item_name = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_name, $item_id));

$sql = "UPDATE items SET item_desc = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_desc, $item_id));

$sql = "UPDATE ratings SET site_name = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_site, $item_id));

$sql = "UPDATE ratings SET rating_value = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_rate, $item_id));

$sql = "UPDATE ratings SET price= $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_price, $item_id));

$sql = "UPDATE ratings SET sales = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_sales, $item_id));

$sql = "UPDATE items SET url = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_url, $item_id));


$sql = "UPDATE ratings SET site_name = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_site2, $item_id));

$sql = "UPDATE ratings SET rating_value = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_rate2, $item_id));

$sql = "UPDATE ratings SET price= $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_price2, $item_id));

$sql = "UPDATE ratings SET sales = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_sales2, $item_id));

$sql = "UPDATE items SET url = $1 WHERE item_id = $2";
$pstmt = pg_prepare($pg_conn, "update_item", $sql);
$r = pg_execute($pg_conn, "update_item", array($i_url2, $item_id));
*/

//-------------- works fine ----------------------
// $sql = "select edit_item_details(".$item_id.", '".$i_name."', '".$i_desc."', ".$i_cat.", '".$i_site1."', ".$i_rate1.", ".$i_price1.", ".$i_sales1.", '".$i_url1."', '".$i_site2."', ".$i_rate2.", ".$i_price2.", ".$i_sales2.", '".$i_url2."','".$img_path."')";
// $result = pg_query($pg_conn, $sql);

# * * * * * pg_query_params() -> safely escapes the harmful special symbols * * * * *
$sql = "select edit_item_details($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15)";
$result = pg_query_params($pg_conn, $sql, array($item_id, $i_name, $i_desc, $i_cat, $i_site1, $i_rate1, $i_price1, $i_sales1, $i_url1,
     $i_site2, $i_rate2, $i_price2, $i_sales2, $i_url2, $img_path));

$s = 0;

if($result){ //save successful;
    $s = 1;
}
}
catch(Exception $e){
  $s=0;
  echo $e->getMessage();
}
finally{
  if($result  != NULL){
    pg_free_result($result);// free the result set
 }
 if($pg_conn  != NULL){
   pg_close($pg_conn);//closing the connection 
 }

// Redirect back to item_list.php with status
header("location: item_list.php?catid=".$i_cat."&status=" . $s);
}
?>
