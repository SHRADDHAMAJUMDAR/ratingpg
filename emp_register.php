<?php
//session_start();  //returns the existing session
//retrieve values from session

if( !isset($_POST["user_name"]) ){ //if valid session attribute not found
  // header("Location: ../index.php");
  //better option: goto index via logout
  //header("Location: ../logout.php");
}

?>

<!DOCTYPE html>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Signup Page</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery_ui/1.13.2/jquery-ui.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            background: url('res/images/shopbg.png') no-repeat center center fixed; 
                         -webkit-background-size: cover;
                         -moz-background-size: cover;
                         -o-background-size: cover;
                         background-size: cover;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        input[type="text"], input[type="password"], input[type="tel"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        #txtDob {
            cursor: pointer;
        }
    </style>
    <script src="js/js/validate.js"></script>    
    <!-- for jquery functions -->
    <script src= "js/js/jquery.min.js"></script>

    <!-- <script src= "../js/jquery-3.7.1.min.js"></script> -->
    <script src= "js/js/jquery_ui/1.13.2/jquery-ui.min.js"></script>

    </head>
    <body>

<!-- <div style="padding-left:16px">
 
  <p></p>
</div> -->

   <form id = "myForm" action="save_emp.php" method="get">
            <center>
            <table width="100%">
                <thead>
                    <tr>
                        <th colspan="2" align="center">
                           Employee Details
                        </th>
                    </tr>
                </thead>
            
                <tbody>
                <tr>
                    <td width="50%">Employee Name : </td>
                    <td><input type="text" name="txtName" id="txtName" placeholder="Enter your name" ></td>
                </tr>
                <tr>
                    <td>email : </td>
                    <td><input type="text" name="txtEmail" id="txtEmail" placeholder="someone@yahoo.com"></td>
                </tr>
                <tr>
                    <td width="50%">Userame : </td>
                    <td><input type="text" name="txtUName" id="txtUName" placeholder="Enter your username" ></td>
                </tr>               
                
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="upass" id="upass" required></td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button type="button" name="btnSubmit" id ="btnSubmit" onclick="validateForm()">Register employee</button>
                        <!-- <button type="submit" name="btnSubmit" id="btnSubmit">Submit Form</button> -->
                        <button type="button" name="btnReset" id="btnReset" onclick="res()">Reset</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </center>
        </form>
        
   

    <script>

    $(document).ready(
                function()
                {
                    
                    $('#ddlstate').change(
                        function()
                        {
                            $.ajax(
                                {
                                    url:"serverajax.php",    //FIXED NAMES
                                    type:"get",
                                    data:
                                    {
                                        scode: $('#ddlstate').val()    //scode is an user-defined name, it can be changed
                                    },
                                    success:function(response,status,xhr)
                                    {
                                        //alert(response);
                                        $('#divdist').html(response);
                                    },
                                   error:function(xhr,status,error)
                                    {
                                        //$('#divdist').html(error);
                                        alert('SOmething went wrong.');
                                    }
                                }
                            );
                        }
                    );


                $(function() {
                    //---calender --
                    $( "#txtDob" ).datepicker({
                        format: "dd/mm/yyyy",
	                    // endDate: '+0d',
	                    endDate: 'd',  //<---- displays till date
	                    //endDate : enddt, 
	                    //startDate: stdat,
                        //minDate: 0, 
                        autoclose: true
	                });

                    $("#txtName").autocomplete({     
                    source :  "ajaxdataqry.php",
                    minLength : 2,
                    select: function( event, ui ) {
                        //event.preventDefault(); -- prevent default action i.e. setting the selected value in the textbox
                        var selval = ui.item.value;
                        alert(selval);
                        // $.getJSON('serverajax.php', 
                        //     {   ptitle : selval,
                        //         ajaxcode : 3 },
                            
                        //     function(result) {
                        //         result.forEach(function(data) {  //this looping is required for [{},{}, {}...] format data
                        //             $('#txtpdesc').val(data.pdesc);
                        //             $('#txtcost').val(data.est_cost);
                        //         });
                        //     });
                    
                        //return false;
                    }
                });

                    // $("#txtName").autocomplete({     
                    //     source : function(request, response) {
                    //     $.ajax({
                    //         url :  "ajaxdataqry.php",
                    //         type : "get",
                    //         data : {
                    //             key : request.term
                    //         },
                    //         dataType : "json",
                    //             success : function(data) {
                    //                 response(data);
                    //             }
                                
                    //         });
                    //     } 
                    // });
        
                });
                });

function validateForm(){
    var name = document.getElementById('txtName').value;
    let em = document.getElementById("txtEmail").value;
    let uname = document.getElementById('txtUName').value;


    if(!validatename(name)){
        alert('invalid name given.');
        return false;
    } else if(!validateEmail(em)){
        alert("Invalid email");
        return false;
    }else if(!validateuname(uname)){
        alert("Invalid username");
        return false;
    }

    // Submit the form
    document.getElementById("myForm").submit();
}



    
     function res(){
        document.getElementById("myForm").reset();
     }

    <?php
        if( isset( $_REQUEST['status'] ) ){  // if URL has a request parameter with name 'status' or not
            $stat = $_REQUEST['status'];   //get the 'status' parameter value

            if($stat == 1){ //successful
    ?>
            // part of javascript
                alert('Data saved successfully.');
    <?php
            } else {  //failed
    ?>
                alert('Data saving failed');
    <?php
            }
        }
     ?>

    // </script>
</body>

</html>

