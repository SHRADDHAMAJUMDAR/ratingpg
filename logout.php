<?php
    session_start();

    //deleter session attributes
    session_unset();

    //delete cookies ..(if any)

    //..other cleanup

    if(session_destroy()){
        if(isset($_REQUEST["err"])){  //session timeout
            $errcode = $_REQUEST["err"];
            header("Location: index.php?err=$errcode");
        } else {  // normal logout
            header("Location: index.php");
        }
    }
?>
