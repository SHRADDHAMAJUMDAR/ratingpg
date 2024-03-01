<?php

   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = rating_table";
   $credentials = "user = postgres password=postgres";
   
   function exception_error_handler($errno, $errstr, $errfile, $errline ) {
      throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
   }
   // * * * * * * * Applies to all pages that includes this * * * * * * * * * * 
   /*    iF NOT given then try catch won't work for DB error      */
   set_error_handler("exception_error_handler");

   try{
      $pg_conn = pg_connect( $host." ".$port." ".$dbname." ".$credentials ); //or die("Could not connect to database"); //exits the page which holds this script
      //$pg_conn = pg_connect( "host=localhost port=5432 dbname=MISDBPR_01_03_2021 user=postgres password=postgres");

      
      $stat = pg_connection_status($pg_conn);
      if ($stat === PGSQL_CONNECTION_OK) {
         //echo 'Connection status ok';
      } else {
         echo 'Connection status bad';
      }  
      /*if(!$pg_conn) {
         echo "Error : Unable to open database\n";
      } /* else {
         echo "Opened database successfully\n";
      } */
   } catch(Exception $e){
      //print $e->getMessage();
      //echo "Some error occured.";

      die("Could not connect to database");
   }


   function savelogdata(String $msg){
      date_default_timezone_set('Asia/Kolkata');
      $dt = date('d_m_Y');
      $fp = fopen("../exlogs/applog_".$dt.".log", 'a');
      fwrite($fp, "\r\n[ ". date('d-m-y h:i:s')." ] ". $msg ."\r\n"); //json_encode($parray)
      fclose($fp);
  }
?>