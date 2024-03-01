<?php
include 'controllers/pg_connect.php';

$uname     =$_POST['usrname'];
//echo $s_name;
$upass      =$_POST['usrpass'];
$urole     =$_POST['role'];

if($urole==2)//employee login
{
$sql="select uname, upass, mu.uid, emp_name,access_lvl from mas_user mu inner join employee emp ON mu.uid=emp.uid where uname = '".$uname."' and upass='".$upass."'";
$result = pg_query($pg_conn, $sql);
$row_cnt = pg_num_rows($result);

$status = 0; //failed
if($row_cnt == 1){ //succes
   $status = 1;

   $row = pg_fetch_object($result); // reads the record pointer by the data pointer

   // set session data
   session_start(); // create a new session if there is no existing session
   $_SESSION["user_name"] = $uname;
   $_SESSION['user_id'] = $row->uid;
   $_SESSION["acc_lvl"] = $row->access_lvl;

} else { //fail
   //echo "fail";
}


if($result  != NULL){
    pg_free_result($result);// free the result set
 }
 if($pg_conn  != NULL){
   pg_close($pg_conn);//closing the connection 
 }

 if ($status == 0) {
    // User not found, display an alert
    echo '<script>alert("User not found. Please sign up"); window.location.href = "emp_register.php";</script>';
} else {
    // Successful login
    header("location: index.php");
}
}

else if($urole==3)//customer login
{
$sql="select uname, upass, mu.uid, cus_name,access_lvl from mas_user mu inner join customers cus ON mu.uid=cus.uid where uname = '".$uname."' and upass='".$upass."'";
$result = pg_query($pg_conn, $sql);
$row_cnt = pg_num_rows($result);

$status = 0; //failed
if($row_cnt == 1){ //succes
   $status = 1;

   $row = pg_fetch_object($result); // reads the record pointer by the data pointer

   // set session data
   session_start(); // create a new session if there is no existing session
   $_SESSION["user_name"] = $uname;
   $_SESSION['user_id'] = $row->uid;
   $_SESSION["acc_lvl"] = $row->access_lvl;

} else { //fail
   //echo "fail";
}


if($result  != NULL){
    pg_free_result($result);// free the result set
 }
 if($pg_conn  != NULL){
   pg_close($pg_conn);//closing the connection 
 }

 if ($status == 0) {
    // User not found, display an alert
    echo '<script>alert("User not found. Please sign up"); window.location.href = "register.php";</script>';
} else {
    // Successful login
    header("location: index.php");
}
}



?>