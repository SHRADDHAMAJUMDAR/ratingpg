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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Signup Page</title>
    <link rel="icon" href="res/images/shop.png" type="image/x-icon"/>

    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
    <!--NAV BAR-->
    <?php //include 'navbar.php' ?>

   

<!-- <div style="padding-left:16px">
  
  <p></p>
</div> -->

<div class="container">
    <form id = "myForm" action="saveregister.php" method="get">
        
            <center>
            <table width="100%">
                <thead>
                    <tr>
                        <th colspan="2" align="center">
                            Customer Details
                        </th>
                    </tr>
                </thead>
            
                <tbody>
                <tr>
                    <td width="50%" align="right">Customer Name : </td>
                    <td><input type="text" name="txtName" id="txtName" placeholder="Enter your name" ></td>
                </tr>
                <tr>
                    <td align="right">email : </td>
                    <td><input type="text" name="txtEmail" id="txtEmail" placeholder="someone@yahoo.com"></td>
                </tr>
                <tr>
                        <td align="right">Phone Number:</td>
                        <td><input type="tel" name="phno" id="phno" required></td>
                </tr>
                <tr>
                    <td align="right">gender : </td>
                    <td><select name="ddlgender" id="ddlgender" >
                        
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        
                    </select></td>
                </tr>


                <tr>
                    <td align="right">Date of birth : </td>
                    <td><input type="text" name="txtDob" id="txtDob" placeholder="dd/mm/yyyy"></td>
                </tr>
                
                <tr>
                    <td width="50%" align="right">Address </td>
                    <td><textarea id="txtaddr" name="txtaddr" rows="4" cols="50">
                    </textarea></td>
                </tr> 
                <tr>
                    <td width="50%" align="right">Userame : </td>
                    <td><input type="text" name="txtUName" id="txtUName" placeholder="Enter your username" ></td>
                </tr>  
                
                <tr>
                        <td align="right">Password:</td>
                        <td><input type="password" name="upass" id="upass" required></td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button type="button" name="btnSubmit" id ="btnSubmit"  onclick="validateForm()">Register</button>
                        <!-- <button type="submit" name="btnSubmit" id="btnSubmit">Submit Form</button> -->
                        <button type="button" name="btnReset" id="btnReset" onclick="res()">Reset</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </center>
        </form>
    </div>
        
        <!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script>      -->

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

    function validateForm() {
    var name = document.getElementById('txtName').value;
    var email = document.getElementById("txtEmail").value;
    var phoneNumber = document.getElementById("phno").value;

    if (!validatename(name)) {
        alert('Invalid name given.');
        return false;
    } else if (!validateEmail(email)) {
        alert("Invalid email");
        return false;
    /*} else if (!validatePhoneNumber(phoneNumber)) {
        return false;*/
    }

    // All validations passed, submit the form
    document.getElementById("myForm").submit();
}


/*

        function validatestate(){
            var v = document.getElementById("ddlState").value;

            if(v == 0){
                alert('Please select a state');
            }
        }

        function validateAge(){
            alert(document.getElementById("txtAge"));
            var v = document.getElementById("txtAge").value;

            if(v == ''){
                alert('please enter a value for age');

            }else if(isNaN(v)){
                alert('Please enter a numeric value ');
                document.getElementById("txtAge").value = '';
            } else if(v.length >= 3){
                alert('Age can not be more than 99 years');
            }

            //document.getElementById("txtAge").focus();
        }

        
        function validategen(){
            var v = document.getElementById("rbGender").value;

            if(v == 0){
                alert('Please select a gender');
            }
        }

        
    function validatecheckbox(chkbox) {  
      var check1 = document.getElementById("chkPh");  
      var check2 = document.getElementById("chkCh");
      var check3 = document.getElementById("chkMa");  
  
      if ((check1.checked == true && check2.checked == true)||(check1.checked == true && check3.checked == true)||(check2.checked == true && check3.checked == true)){  
        alert("Please mark only one checkbox");  
        chkbox.checked = false;
      }  
      else if (check1.checked == true){  
      alert("Physics has been selected")   
      }   
      else if (check2.checked == true){  
      alert("Chemistry has been selected")   
      }  
      else if (check3.checked == true){  
      alert("Maths has been selected")   
  
      }  
      else {  
       alert("Please mark any of checkbox");  
      }  
     }  


    */
     function res(){
        document.getElementById("myForm").reset();
     }

    //  <?php
    //     if( isset( $_REQUEST['status'] ) ){  // if URL has a request parameter with name 'status' or not
    //         $stat = $_REQUEST['status'];   //get the 'status' parameter value

    //         if($stat == 1){ //successful
    // ?>
    //   // part of javascript
    //             alert('Data saved successfully.');
    // <?php
    //         } else {  //failed
    // ?>
    //             alert('Data saving failed');
    // <?php
    //         }
    //     }
    //  ?>

    // </script>
    <!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>
