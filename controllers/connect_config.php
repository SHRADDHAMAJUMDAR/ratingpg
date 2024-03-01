<?php
   
   function exception_error_handler($errno, $errstr, $errfile, $errline ) {
      throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
   }
   // * * * * * * * Applies to all pages that includes this * * * * * * * * * * 
   /*    iF NOT given then try catch won't work for DB error      */
   set_error_handler("exception_error_handler");

    function connnect_to_server(){
        $host        = "host = 127.0.0.1";
        $port        = "port = 5432";
        $dbname      = "dbname = rating_table";
        $credentials = "user = postgres password = postgres";

        $pg_conn = NULL;
        try{
            $pg_conn = pg_connect( $host." ".$port." ".$dbname." ".$credentials ); //or die("Could not connect to database"); //exits the page which holds this script
            
            /*
            $stat = pg_connection_status($pg_conn);
            if ($stat === PGSQL_CONNECTION_OK) {
                //echo 'Connection status ok';
            } else {
                echo 'Connection status bad';
            } */ 
        } catch(Exception $e){
            //die("Could not connect to database");
            throw $e;
        }

        return $pg_conn;
   }

   function savelogdata(String $msg){
        date_default_timezone_set('Asia/Kolkata');
        $dt = date('d_m_Y');
        $fp = fopen("../exlogs/applog_".$dt.".log", 'a');
        fwrite($fp, "\r\n[ ". date('d-m-y h:i:s')." ] ". $msg ."\r\n"); //json_encode($parray)
        fclose($fp);
    }
   
?>