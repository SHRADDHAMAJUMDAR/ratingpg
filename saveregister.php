<?php
include 'controllers/pg_connect.php';

$s_name     =$_GET['txtName'];
//echo $s_name;
$s_email=$_GET['txtEmail'];
$s_phno=$_GET['phno'];
$s_gender   =$_GET['ddlgender'];
$s_dob=$_GET['txtDob'];
$s_addr=$_GET['txtaddr'];
$s_uname = $_GET['txtUName'];
$s_pass= $_GET['upass'];



//$sql="insert into students(name,age, gender, rollno,class) values('".$s_name."', ".$s_age.",'".$s_gender."', ".$s_rollno.",".$s_class.")";
// echo $sql;
//$r = pg_query($pg_conn, $sql);
//using prepare statement
$sql="insert into customers(cus_name,email,ph_no, gender,bdate,address) values($1, $2,$3, $4, $5,$6)";
$pstmt=pg_prepare($pg_conn,"prep",$sql);
$r=pg_execute($pg_conn,"prep",array($s_name,$s_email,$s_phno,$s_gender,$s_dob,$s_addr));



$access_lvl = 3; // Assuming access level for customer
$sql_mas_user = "INSERT INTO mas_user(uname, upass, access_lvl) VALUES ($1, $2, $3)";
$pstmt_mas_user = pg_prepare($pg_conn, "prep_mas_user", $sql_mas_user);
$r_mas_user = pg_execute($pg_conn, "prep_mas_user", array($s_uname, $s_pass, $access_lvl));


if($r == NULL || $r_mas_user == NULL){
    echo "data saving failed";
} else{
    echo "data saved successfully";
}

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
    echo('Saved Successfully! Redirecting to Login page.');
}
    header("location: login.php?status=".$s);
    /*
    for($i=1;$i<=10;$i++)
    {

    }*/
?>



<?php
/*include 'connect.php';

$s_name     =$_GET['txtName'];
//echo $s_name;
$s_email=$_GET['txtEmail'];
$s_phno=$_GET['phno'];
$s_gender   =$_GET['ddlgender'];
$s_dob=$_GET['txtDob'];
$s_addr=$_GET['txtaddr'];
$s_pass=$_GET['upass'];



//$sql="insert into students(name,age, gender, rollno,class) values('".$s_name."', ".$s_age.",'".$s_gender."', ".$s_rollno.",".$s_class.")";
// echo $sql;
//$r = pg_query($pg_conn, $sql);
//using prepare statement
$sql="insert into customers(cus_name,email,ph_no, gender,bdate,address,upass) values($1, $2,$3, $4, $5,$6,$7)";
$pstmt=pg_prepare($pg_conn,"prep",$sql);
$r=pg_execute($pg_conn,"prep",array($s_name,$s_email,$s_phno,$s_gender,$s_dob,$s_addr,$s_pass));

$access_lvl = 3; // Assuming access level for customer
$sql_mas_user = "INSERT INTO mas_user(uname, upass, access_lvl) VALUES ($1, $2, $3)";
$pstmt_mas_user = pg_prepare($pg_conn, "prep_mas_user", $sql_mas_user);
$r_mas_user = pg_execute($pg_conn, "prep_mas_user", array($s_name, $s_pass, $access_lvl));

if($r == NULL || $r_mas_user == NULL){
    echo "data saving failed";
} else{
    echo "data saved successfully";
}

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
    echo('Saved Successfully! Redirecting to Login page.');
}
    header("location: login.php?status=".$s);
    /*
    for($i=1;$i<=10;$i++)
    {

    }*/
?>