
<?php
require "controllers/pg_connect.php";;

$state_code = $_GET['scode'];

$sql = "select uname,upass from mas_user  where scode=".$state_code;

$result = pg_query($pg_conn, $sql);


if(pg_num_rows($result) > 0){

    $strdist = "<select name='ddldistrict' id='ddldistrict' >
    <option value='0'>Select District</option>";
    //dynamic options
    while($r = pg_fetch_object($result)){
        $strdist = $strdist . "<option value=" . $r->dcode . ">" . $r->dname . "</option>";
    }

    $strdist = $strdist . "</select>";
}

echo $strdist;  // *****
?>

