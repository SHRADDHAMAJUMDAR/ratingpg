
<?php

function upload_to_server(Array $fileToUpload){
  //  $_FILES["fileToUpload"] gives the uploaded file 

  $status_msg = "";

  $allowed_ext = array("jpg" => "image/jpg",
                            "jpeg" => "image/jpeg",
                            "gif" => "image/gif",
                            "png" => "image/png");

  $max_size = 1024 * 1024;
  $uploadOk = 1;

$target_dir = "uploads/";
if(!is_dir($target_dir)) {   //if folder does not exist 
    mkdir($target_dir);       //create a folder
}

//>>>>$file_name = basename($_FILES[$fileToUpload]["name"]); 
$file_name = basename($fileToUpload["name"]);   //basename() returns the trailing name component of a path

date_default_timezone_set('Asia/Kolkata');
$file_name = date('m-d-Y-Hi').'_'.$file_name;  // prepend date & time to allow upload same file multiple times
$target_file = $target_dir.$file_name ;

// Check if file already exists >> not required here bcz added date time
/*
if (file_exists($target_file)) {
  echo "<br> Sorry, file already exists.";
  $uploadOk = 0;
}
*/
  
$file_size = $fileToUpload["size"];             // gives size in Bytes
$file_temp_path = $fileToUpload["tmp_name"];    // temprary uploaded file in server => E:\INstallationS\xamp\tmp\php7876.tmp

// Check if image file is a actual image or fake image
$file_mime = mime_content_type($file_temp_path);

if (! in_array($file_mime, $allowed_ext)) {
  $status_msg = "Not an allowed MIME-type. This file MIME = ".$file_mime;
  $uploadOk = 0;
}


// Check file size  is 500kb or more
if ( $file_size > $max_size) {
  $status_msg = $status_msg . "<br> Your file is too large.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $status_msg = $status_msg . "<br>  Sorry, your file could not be uploaded.";

} else {  // if everything is ok, try to upload file

  if (move_uploaded_file($file_temp_path , $target_file)) { // move the file from temp folder to actual folder

      $status_msg = $target_file; //"The file ". htmlspecialchars($file_name). " has been uploaded.";
    
  } else {
    $uploadOk = 0;
    $status_msg = $status_msg . "<br> Sorry, there was an error uploading your file.";
  }
}

    return $uploadOk == 1? "1~".$status_msg : "0~".$status_msg;
}

?>