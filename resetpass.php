<?php 
   
    require "controllers/pg_connect.php";

     session_start();

    // if(!isset($_SESSION['pg_active_uid'])){
    //     header("location: ../logout.php?err=20");
    //     die(); //get out
    // }

    // $usrid =    $_SESSION["pg_active_uid"];
    // $empid =    $_SESSION["pg_active_eid"];
    // $usr_name = $_SESSION["pg_active_uname"];
    // $empname =  $_SESSION["pg_active_ename"];
    // $access =   $_SESSION["pg_active_ualvl"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShopiT!</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css"  href="css/formValidation.css"/> 

    <link rel="stylesheet" type="text/css" href="../css/ui/jquery_1_10_4/themes/smoothness/jquery-ui.css"/>
    <link REL="StyleSheet" TYPE="text/css" HREF="../css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="res/cssfolder/label_style.css">
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            /* background: url('res/images/shopbg.png') no-repeat center center fixed;  */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .content-wrapper {
            min-height: 563px;
        }

        .box {
            border: 1px solid #d2d6de;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background: #fff;
        }

        .box-header {
            border-bottom: 1px solid #d2d6de;
            padding: 10px;
            background-color: #ecf0f5;
        }

        .box-title {
            margin-top: 0;
            font-size: 18px;
        }

        .box-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            user-select: none;
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        .btn-success:hover {
            background-color: #4cae4c;
            border-color: #4cae4c;
        }
    </style>
</head>
<body>

<?php include('navbar.php'); ?>
   
            <section class="content">
                <?php
                    if(isset($_REQUEST["status"]))
                            
                    if($_REQUEST["status"] == 1) {
                ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa fa-check"></i> Great !</h4>
                            Password changed successfully.
                        </div>
                <?php
                    } else {
                ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa fa-ban"></i> Oh Snap !</h4>
                            Changing password failed !!
                        </div>
                
                <?php

                    } 
                ?>
                
                <div class="row">
                    <div class="col-sm-10">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><a href="#"><i class="fa fa-file-o" aria-hidden="true" style="color:#0e5c75;"></i></a> Passwords</h3>
                                <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body table-responsive">
                                <form class="form-horizontal" action="../controllers/changepass.php" name="chpwd_form" id="chpwd_form" method="post" enctype="multipart/form-data" > 
                                    <div class="form-group">
                                        <label for="projtitle" class="col-sm-5 control-label"> Old Password <span class="star">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password"  name="txtOPass" id="txtOPass" class="form-control input-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="projtitle" class="col-sm-5 control-label"> New Password <span class="star">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password"  name="txtNPass" id="txtNPass" class="form-control input-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="projtitle" class="col-sm-5 control-label"> Confirm password<span class="star">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password"  name="txtCPass" id="txtCPass" class="form-control input-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-10">
                                            <button type="button" name="btnChngPass" id="btnChngPass" class="btn btn-success" ><i class='fa fa-save'></i> Change password</button>
                                            <input type="hidden" id="hdnUpdtype" name="hdnUpdtype" value="1"/>  <!-- 1 = add 2 = edit -->
                                            <br>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        

    <script src="js/jQuery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
    <script src="js/ui/jquery_1_10_4/jquery-ui.js"></script>
    <script src="../js/datepicker.js"></script>
    <script language="JavaScript" src="../js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnChngPass').click(function() {
                // ... (your existing JavaScript code) ...
            });
        });
    </script>
</body>
</html>