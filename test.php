
<!DOCTYPE html>
<html>
  <head><title>Test page</title>
  <script src="js/jquery-3.2.1/jquery.min.js"></script> 
  </head>
<body>

<?php
include 'controllers/pg_connect.php';
/*
$sql = "call save_user_basics('".$emp_init."', '".$emp_name."', '".$emp_code."', '".$emp_email."', '".$emp_mob."', '".$emp_exp."', '".$usr_name."', '".$usr_pass."')";
    $result = pg_query($pg_conn, $sql);
    
    if($result){
        echo "Saved";
    } else {
        echo "Failed";
    }*/

/* ============ calling a stored procedure (in higher versions of Postgres)
  $real_1 = 1;
  $imaginary_1 = 2;
  $real_2 = 3;
  $imaginary_2 = 4;

  $result = pg_query_params($pg_conn, 'select add_complex($1, $2, $3, $4, NULL, NULL)', 
  array($real_1, $imaginary_1, $real_2, $imaginary_2))  or die('Unable to CALL stored procedure: ' . pg_last_error());
              $row = pg_fetch_row($result);

              $res_real = $row[0];
            
              $res_imaginary = $row[1];
            
              pg_free_result($result);
            
              echo "<p>($real_1+i$imaginary_1)+($real_2+i$imaginary_2)=($res_real + i $res_imaginary)</p>";
*/
/*  ========== String replacement ===========
$subjectVal = "It was nice meeting you. May you shine bright.";
 
  // Using str_replace() function
  $resStr = str_replace('you', 'him', $subjectVal);
  print_r($resStr);

  

    strpos Find the position of the first occurrence of a substring in a string

    strrpos Find the position of the last occurrence of a substring in a string

    substr Return part of a string

*/

// ================ String split based on  pattern ===============

$str = "{Hello world}";
$str = ltrim($str, $str[0]);
$str = rtrim($str, "}");
$newStr = explode(" ", $str);
foreach($newStr as $n) {
  echo $n."==>";
 // $n = trim($n);
  //$categories .= "<category>" . $cat . "</category>\n";
}

echo "***".$newStr[0]."***  >>>";


/* ======== Cretaing & trowing Exception object =========
  function checkNumber($num) {  
    if($num>=1) {  
      //throw an exception  
      throw new Exception("Value must be less than 1");  
    }  
    return true;  
 }  
   
 //trigger an exception in a "try" block  
 try {  
    checkNumber(5);      //If the exception throws, below text will not be display  
    echo 'If you see this text, the passed value is less than 1';  
 } catch (Exception $e) {   //catch exception  
    echo 'Exception Message: ' .$e->getMessage();  
 }  
*/
?>
<br>
<?php
//------ print all active session variables ======
session_start();
echo 'Active session variables\n';
print_r($_SESSION);

?>
<br>
<?php
print('\n\n Associative Array : ');

$assocArray = array(
  'key1' => 'value1',
  'key2' => 'value2',
  'key3' => 'value3',
);

/*  ===== OR =====
$assocArray = [
  'key1' => 'value1',
  'key2' => 'value2',
  'key3' => 'value3',
]; */


echo $assocArray['key1']; // Output: value1
echo $assocArray['key2'];

//You can also add new key-value pairs to the associative array or update existing values:
$assocArray['key4'] = 'value4'; // Adding a new key-value pair
$assocArray['key1'] = 'updated value';  //update

//searching a key exists or not
if (array_key_exists('key9', $assocArray)) {
  echo "\nKey 'key9' exists in the associative array.";
} else {
  echo "\nKey 'key9' does not exist in the associative array.";
}

//====== OR ======
if (isset($assocArray['key2'])) {
  echo "Key 'key2' exists in the associative array.";
} else {
  echo "Key 'key2' does not exist in the associative array.";
}
?>
<br>
<?php
echo " >>>> ".__DIR__;
?>
<br>
<?php  	
         //Setting the cookie parameters
         //session_set_cookie_params(30 * 60, "/", "test", );
         
         //Retrieving the cookie parameters
         $res = session_get_cookie_params();
		 
         //Starting the session
//         session_start();
		 
         print_r($res);	  
      ?>
<br>
<?php 
/*
$data='<script>alert(1)</script>';
$escaped = pg_escape_literal($data);
echo $data; */
?>
  

<?php
date_default_timezone_set('Asia/Kolkata');
  $dt = date('d_m_Y');
        $fp = fopen("exlogs/applog_".$dt.".log", 'a');
		fwrite($fp, "[ ". date('d-m-Y h:i:s')." ] Hi\r\n"); //json_encode($parray)
		fclose($fp);

?>

<script type="text/javascript">  
   // ======= Jquery function to prevent F5 ==========
    $(function () {  
        $(document).keydown(function (e) {  
            return (e.which || e.keyCode) != 116;  
        });  
    });  
</script>

</body>
</html>