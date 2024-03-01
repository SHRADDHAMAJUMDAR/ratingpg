<?php
include 'controllers/pg_connect.php';
include 'generic/upload_file_func.php';
include 'generic/validator.php';
$s=0;
$result=NULL;
try{

$i_cat    = intval($_POST['ddlcategory']);
//echo $s_name;
$i_name     =filter_myinput($_POST['txtname']);
/*if(!preg_match("[a-zA-Z0-9 ]+",$i_name ))
{
  throw new Exception("");
}*/
$i_desc  = filter_myinput($_POST['txtdesc']);
$i_site1   =filter_myinput($_POST['txtsite']);
$i_rate1   = floatval($_POST['txtrate']);
$i_price1    =floatval($_POST['txtprice']);
$i_sales1   =intval($_POST['txtsales']);
$i_url1   =$_POST['txturl1'];
$i_site2   =filter_myinput($_POST['txtsite2']);
$i_rate2   =floatval($_POST['txtrate2']);
$i_price2    =floatval($_POST['txtprice2']);
$i_sales2   =intval($_POST['txtsales2']);
$i_url2   =$_POST['txturl2'];
$img_path="";
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

/*
$avgRating = (($i_rate * $i_sales) + ($i_rate2 * $i_sales2))/($i_sales + $i_sales2);

$sql="insert into items(item_id,item_name,item_desc,item_cat, avg_rating) values((select max(item_id)+1 from items),$1, $2,$3, $4)";
$pstmt=pg_prepare($pg_conn,"prep",$sql);
$r=pg_execute($pg_conn,"prep",array($i_name,$i_desc,$i_cat, $avgRating));

$sql="insert into ratings(item_id,site_name,rating_value,price,sales,url) values((select max(item_id) from items),$1, $2,$3,$4,$5)";
$pstmt=pg_prepare($pg_conn,"prep1",$sql);
$r=pg_execute($pg_conn,"prep1",array($i_site,$i_rate,$i_price,$i_sales,$i_url));

$sql="insert into ratings(item_id,site_name,rating_value,price,sales,url) values((select max(item_id) from items),$1, $2,$3,$4,$5)";
$pstmt=pg_prepare($pg_conn,"prep2",$sql);
$r=pg_execute($pg_conn,"prep2",array($i_site2,$i_rate2,$i_price2,$i_sales2,$i_url2));
*/

//-------------- works fine but rasises exception for special symbols----------------------
// $sql = "select save_item_details('".$i_name."', '".$i_desc."', ".$i_cat.", '".$i_site1."', ".$i_rate1.", ".$i_price1.", ".$i_sales1.", '".$i_url1."', '".$i_site2."', ".$i_rate2.", ".$i_price2.", ".$i_sales2.", '".$i_url2."','".$img_path."')";
// $result = pg_query($pg_conn, $sql);


# * * * * * pg_query_params() -> safely escapes the harmful special symbols * * * * *
$sql = "select save_item_details($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14)";
$result = pg_query_params($pg_conn, $sql, array($i_name, $i_desc, $i_cat, $i_site1, $i_rate1, $i_price1, $i_sales1, $i_url1,
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
 header("location: itementry.php?status=".$s);

}
  

   
    /* for($i=1;$i<=10;$i++)*/
?>

