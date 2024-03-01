
<?php
/* ============================================================
    All serverside validation functions
==============================================================*/

$addrPat = "^[a-zA-Z 0-9\\.\\,\\+\\-\\(\\)\\'\\@\\&\\/\\_]*$";  //. , + - ( ) ' @ & / _
$alphaNumPat = "[a-zA-Z0-9 ]+";
$alphaNumPatWithNull = "[a-zA-Z0-9 ]*";
$alphaPat = "/[a-zA-Z ]+/";
$alphaPatWithNull = "/[a-zA-Z ]*/";
$numPat = "[0-9]+";
$numPatWithNull = "[0-9]*";
$pinPat = "[0-9]{6}";
$usernamePat = "^[a-zA-Z0-9]*$";
$datePat = "^(?:(?:31(\\/|-|\\.)(?:0?[13578]|1[02]))\\1|(?:(?:29|30)(\\/|-|\\.)(?:0?[1,3-9]|1[0-2])\\2))"
        ."(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$|^(?:29(\\/|-|\\.)0?2\\3(?:(?:(?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|"
        ."(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\\d|2[0-8])(\\/|-|\\.)(?:(?:0?[1-9])|(?:1[0-2]))\\4(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$";
$emailPat = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";

function filter_myinput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


function email_validate(String $emaildata){
    return preg_match($emailPat, $emaildata);
}

function name_validate(String $namedata){
    return preg_match($alphaPat, $namedata);
}


?>