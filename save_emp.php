<?php
include 'controllers/pg_connect.php';

$s_name     =$_GET['txtName'];
//echo $s_name;
$s_email=$_GET['txtEmail'];
$s_uname = $_GET['txtUName'];
$s_pass=$_GET['upass'];

$sql="insert into employee(emp_name,email) values($1, $2)";
$pstmt=pg_prepare($pg_conn,"prep",$sql);
$r=pg_execute($pg_conn,"prep",array($s_name,$s_email));

$access_lvl = 2; // Assuming access level for employees
$sql_mas_user = "INSERT INTO mas_user(uname, upass, access_lvl) VALUES ($1, $2, $3)";
$pstmt_mas_user = pg_prepare($pg_conn, "prep_mas_user", $sql_mas_user);
$r_mas_user = pg_execute($pg_conn, "prep_mas_user", array($s_uname, $s_pass, $access_lvl));

// if($r == NULL || $r_mas_user == NULL){
//     echo "data saving failed";
// } else{
//     echo "data saved successfully";
// }

if ($r != NULL) {
    pg_free_result($r);
}

if ($r_mas_user != NULL) {
    pg_free_result($r_mas_user);
}

// Close the connection
if ($pg_conn != NULL) {
    pg_close($pg_conn);
}

$s = 0;

if ($r && $r_mas_user) {
    $s = 1;
    // echo('Saved Successfully! Redirecting to Login page.');
    header("location: login.php?status=".$s);
} else {
    header("location: emp_register.php?status=".$s);
}
    // header("location: login.php?status=".$s);
    
?>