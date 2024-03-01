<?php
include 'controllers/pg_connect.php';

//session_start(); //to get the user from session -> prevent CSRF
/*
if(!isset($_SESSION['pg_active_uid'])){
    header("location: ../logout.php?err=20");
    die(); //get out
}*/

$user_id=0;
$access_lvl = 0;

session_start();

if(isset($_SESSION['user_name'])){
    
    $user_id=$_SESSION['user_id'];
    $access_lvl = $_SESSION['acc_lvl']; 
        
}

    $result = NULL;
    $status = 0; // failed

    try {
        $old_pass = $_POST['txtOPass'];
        $new_pass = $_POST['txtNPass'];
        $conf_pass = $_POST['txtCPass'];
        //$user_id = (int)$_SESSION["pg_active_uid"]; //$_POST['hdnUid'];

        //$pg_conn = connnect_to_server();

        $sql = "SELECT upass from mas_user where uid = ".$user_id;
        //...execute query
        
        $result = pg_query($pg_conn, $sql);  //execute query
        
        $row = pg_fetch_object($result);  
        $usrpass = $row->upass;

            if($usrpass == $old_pass){
                // update password if old password matches

                $sql = "UPDATE mas_user SET upass = $1 where uid=$2 and upass=$3";
    
                $pstmt = pg_prepare($pg_conn, "pass_qry", $sql);

                $result = pg_execute($pg_conn, "pass_qry", array($new_pass, $user_id, $old_pass));

                $rows = pg_affected_rows($result); //****** 
    
                if($rows != 0){
                    $status = 1;
                }


            } else { // password mismatch
                $status = 0;
            }
            

    } catch(Exception $e){
        
        //savelogdata("[at]:" . pathinfo($e->getFile())['basename'] . " =>> " . $e->getMessage());

    } finally {
        if($result != NULL){
            // savelogdata('Closing result.');
            pg_free_result($result); //FREE the resultset
        }

        if($pg_conn != NULL){
            // savelogdata('Closing connection.');
            pg_close($pg_conn);
        }
    }
    
//    $linkTarget = ($access_lvl == 2) ? 'emp_index.php' : 'cust_index.php';
    header("location: changepwd.php?status=$status");