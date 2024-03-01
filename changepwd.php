<?php 
    require "generic/Constants.php";
    require "controllers/pg_connect.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopit</title>  
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
    </style>
    
  </head>
  <body>
    <!--NAV BAR-->
    <?php include 'navbar.php';
    
    // if no active session then redirect to login page
    if(!isset($_SESSION['user_name'])){
      header("location: login.php?err=20");
      die(); //get out
    }
    ?>

    <div class="container">
   
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

    <div class="shadow p-4 mb-5 bg-body rounded">
        <form action="changepasscntrl.php" method="post" name="chpwd_form" id="chpwd_form" >
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Old Password<span class="star">*</span></label>
          <div class="col-sm-10">
          <input type="password"  name="txtOPass" id="txtOPass" class="form-control input-sm" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">New Password<span class="star">*</span></label>
          <div class="col-sm-10">
          <input type="password"  name="txtNPass" id="txtNPass" class="form-control input-sm" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label"> Confirm password<span class="star">*</span></label>
          <div class="col-sm-10">
          <input type="password"  name="txtCPass" id="txtCPass" class="form-control input-sm" required>
          </div>
        </div>
        <button type="submit" name="btnChngPass" id="btnChngPass" class="btn btn-success" ><i class='fa fa-save'></i> Change password</button>

        </form>
    </div>
                
                <!-- <div class="row">
                    <div class="col-sm-10">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><a href="#"><i class="fa fa-file-o" aria-hidden="true" style="color:#0e5c75;"></i></a> Passwords</h3>
                                <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" ><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body table-responsive">
                                <form class="form-horizontal" action="changepasscntrl.php" name="chpwd_form" id="chpwd_form" method="post" enctype="multipart/form-data" > 
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
                                            <button type="submit" name="btnChngPass" id="btnChngPass" class="btn btn-success" ><i class='fa fa-save'></i> Change password</button>
                                            <br>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>

        </div>
        

            <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>