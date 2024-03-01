<?php

require "controllers/pg_connect.php";

$searchkey = $_GET['key'];

$sql = "select fname||mname||lname as ename from employee where fname ilike '%". $searchkey ."%'";

$result = pg_query($pg_conn, $sql);
$narr = array();

if(pg_num_rows($result) > 0){
  //echo 'Hi';
    while($r = pg_fetch_object($result)) {
        $narr[] = $r;
    }   
}
$fp=fopen('data.json','w');
fwrite($fp,json_encode($narr));
fclose($fp);
echo json_encode($narr);
?>