<?php
session_start();
if(isset($_SESSION["id"])){
    session_destroy();
}



  

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<style>
  .custom-select1 {
  position: relative;
  font-family: Arial;
}

.custom-select1 select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

 input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button1 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button1:hover {
    opacity: 0.8;
}


/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    color: white;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 20%;
}

.container1 {
    padding: 16px;
}
.container2 {
    padding: 18px;
}
span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}
/* Modal Content/Box */
.modal-content1 {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 65%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

    <title>EMS HOME</title>

    <!-- Bootstrap core CSS-->
    <link href="../../libs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../libs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../libs/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../libs/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Event Management System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
     

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- Sidebar for supplier-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shuttle-van"></i>
            <span>Supplier</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="document.getElementById('s02').style.display='block'" >Login</a>
            <a class="dropdown-item" href="#" onclick="document.getElementById('s01').style.display='block'" >Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Equipment Pages:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment List</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Add Equipment</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Update Equipment</a>
            <a class="dropdown-item " href="#" onclick="alertLogin()">Delete Equipment</a>
               <div class="dropdown-divider"></div>
               <!--Other Relates Page -->
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Order Status</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Report</a>
             
          </div>
        </li>
          <!-- Sidebar for Customer-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-bag"></i>
            <span>Customer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="document.getElementById('c02').style.display='block'">Login</a>
            <a class="dropdown-item" href="#" onclick="document.getElementById('c01').style.display='block'">Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Event Package</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment Rental</a>
               <!--Payment Page -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header" >Payment pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Pay</a>

               <!--Other Relates Page for customer -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Tracking Order</a>

          </div>
        </li>

           <!-- Sidebar for Event Organizer-->
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-alt"></i>
            <span>Event Organizer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="document.getElementById('e02').style.display='block'">Login</a>
            <a class="dropdown-item" href="#" onclick="document.getElementById('e01').style.display='block'">Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6> -->
               <!--Equipment Page -->
           <!-- <a class="dropdown-item" href="#" onclick="alertLogin()">Event Package</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment Rental</a> -->
               <!--Payment Page -->
             <!--  <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Payment pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Pay</a> -->

               <!--Other Relates Page for event organizer -->
               <!-- <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Rating</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Question & Answer</a>
          </div>
        </li> -->


           <!-- Sidebar for administator-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-cog"></i>
            <span>Admin</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="document.getElementById('a01').style.display='block'">Login</a>

               <!--Approve membership Page -->
           <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Approve pages:</h6>
           
              <a class="dropdown-item" href="#" onclick="alertLogin()">Approve Member</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Member Type</li>
          </ol>

          <!-- Page Content -->




          <h1>Select Your Member Type Hello People</h1>


          <hr>
             <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">SUPPLIER</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#supplierRegister">
                  <span class="float-left">Join us now!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="document.getElementById('s02').style.display='block'" >Login for supplier</button>

            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shopping-bag"></i>
                  </div>
                  <div class="mr-5">CUSTOMER</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#customerRegister">
                  <span class="float-left">Join us now!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
               <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="document.getElementById('c02').style.display='block'">Login for customer</button>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-calendar-alt"></i>
                  </div>
                  <!-- <div class="mr-5">EVENT ORGANIZER</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#eventRegister">
                  <span class="float-left">Join us now!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
               <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="document.getElementById('e02').style.display='block'">Login for event organizer</button>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-user-cog"></i>
                  </div> -->
                  <div class="mr-5">Administrator</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#adminalert">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
               <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="document.getElementById('a01').style.display='block'">Login as admin</button>
            </div>
            
          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © PARTY EVENT MANAGEMENT SYSTEM 2020/2021</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Login or registratin confirm alert for supplier -->
    <div class="modal fade" id="supplierRegister" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">First Time To Be Supplier?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div  class="modal-body">Select "Register" below if you are new supplier or "Login" 
          below if you are current user.</div>
          <div class="modal-footer">
            <button class="btn btn-success" type="button" data-dismiss="modal" onclick="document.getElementById('s01').style.display='block'">Register</button>
            <a class="btn btn-primary" href="#" data-dismiss="modal" onclick="document.getElementById('s02').style.display='block'" >Login</a>
          </div>
        </div>
      </div>
    </div>

<div id="s01" class="modal2">

  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/registerController.php?lguser=supplier" method="post">


    <div class="imgcontainer">
      <span onclick="document.getElementById('s01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Register for supplier</b></h2></label>
    </div>

    <div class="container2">
      <label for="ssmno"><b>SSM.NO:</b></label>
      <input  type="text" placeholder="Enter SSM Number" name="ssmno" pattern="^[_A-z0-9]*((-|\s)*[_A-z0-9])*$" title="Cannot contain special characters or symbol" required>
       <label for="ssmno"><b>Company Name:</b></label>
      <input  type="text" placeholder="Enter company name" name="companyno" pattern="^[_A-z0-9]*((-|\s)*[_A-z0-9])*$" title="Cannot contain special characters or symbol" required>
       <label for="supplierType"><b>Supplier Type:</b></label>
<div class="custom-select1" style="width:200px;">
  <select name="supplierType">
    <option value="0">Please select:</option>
    <option selected="selected" value="EVENT">Event</option>
    <option value="EQUIPMENT">Equipment</option>
    <option value="BOTH">Both above</option>
    
  </select>

</div>
<br>
  <label for="phoneno"><b>Phone Number:</b></label>
      <input type="text" placeholder="Enter your phone number" name="phoneno" pattern="/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/"required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="spemail"required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <label for="repsw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" id="repsw" name = "repsw" required>
      <button class="button1"  type="submit">Register</button>
     
    </div>

    <div class="container2" style="background-color:#f1f1f1">
      <button class= "cancelbtn" type="button" onclick="document.getElementById('s01').style.display='none'" >Cancel</button>
      <span class="psw">Already Member<a href="#" onclick="loginsupplier()"> click here?</a></span>
    </div>
  </form>
</div>





    <!-- Login or registratin confirm alert for customer-->
<div class="modal fade" id="customerRegister" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">First Time Be Our Customer?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Register" below if you are new customer or "Login" 
          below if you are current user.</div>
          <div class="modal-footer">
            <button class="btn btn-success" type="button" data-dismiss="modal" onclick="document.getElementById('c01').style.display='block'">Register</button>
            <a class="btn btn-primary" href="#" data-dismiss="modal" onclick="document.getElementById('c02').style.display='block'" >Login</a>
          </div>
        </div>
      </div>
    </div>


<div id="c01" class="modal2">

  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/registerController.php?lguser=customer" method="post">


    <div class="imgcontainer">
      <span onclick="document.getElementById('c01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Register For Customer</b></h2></label>
    </div>

    <div class="container2">
       <label for="cusname"><b>Name</b></label>
      <input type="text" placeholder="Enter your name" name="cusname" pattern="^[_A-z0-9]*((-|\s)*[_A-z0-9])*$" title="CANNOT CONTAIN SYMBOL OR SPECIAL CHARACTERS" required>

  <label for="phoneno"><b>Phone Number:</b></label>
      <input type="text" placeholder="Enter your phone number" name="phoneno" pattern="/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/"required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email"required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <label for="repsw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" id="repsw" name = "repsw" required>
      <button class="button1"  type="submit">Register</button>
     
    </div>

    <div class="container2" style="background-color:#f1f1f1">
      <button class= "cancelbtn" type="button" onclick="document.getElementById('c01').style.display='none'" >Cancel</button>
      <span class="psw">Already Member<a href="#" onclick="logincustomer()"> click here?</a></span>
    </div>
  </form>
</div>



    <!-- Login or registratin confirm alert for event organizer -->

<div class="modal fade" id="eventRegister" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">First Time Be Our Event Organizer?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Register" below if you are new event organizer or "Login" 
          below if you are current user.</div>
          <div class="modal-footer">
            <button class="btn btn-success" type="button" data-dismiss="modal" onclick="document.getElementById('e01').style.display='block'">Register</button>
            <a class="btn btn-primary" href="#" data-dismiss="modal" onclick="document.getElementById('e02').style.display='block'">Login</a>
          </div>
        </div>
      </div>
    </div>


<div id="e01" class="modal2">

  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/registerController.php?lguser=eventOrganizer" method="post">


    <div class="imgcontainer">
      <span onclick="document.getElementById('e01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Register For Event Organizer</b></h2></label>
    </div>

    <div class="container2">
       <label for="cusname"><b>Company Name For Your Event Organizer</b></label>
      <input type="text" placeholder="Enter your name" name="cusname" pattern="^[_A-z0-9]*((-|\s)*[_A-z0-9])*$" title="CANNOT CONTAIN SYMBOL OR SPECIAL CHARACTERS" required>

  <label for="phoneno"><b>Phone Number:</b></label>
      <input type="text" placeholder="Enter your phone number" name="phoneno" pattern="/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/"required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email"required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <label for="repsw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" id="repsw" name = "repsw" required>
      <button class="button1"  type="submit">Register</button>
     
    </div>

    <div class="container2" style="background-color:#f1f1f1">
      <button class= "cancelbtn" type="button" onclick="document.getElementById('e01').style.display='none'" >Cancel</button>
      <span class="psw">Already Member<a href="#" onclick="logineventorganizer()"> click here?</a></span>
    </div>
  </form>
</div>

<!-- Login  confirm alert for admin -->
<div class="modal fade" id="adminalert" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">First Time?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Please get the account from your department manager or "Login" 
          below if you are current admin.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#" data-dismiss="modal" onclick="document.getElementById('a01').style.display='block'">Login</a>
          </div>
        </div>
      </div>
    </div>

<!-- Login  form for supplier -->
<div id="s02" class="modal1">

 
  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/loginController.php?lguser=supplier" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('s02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Login as Supplier</b></h2></label>
    </div>

    <div class="container1">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="button1" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('s02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Sign Up? <a href="#" onclick="registersupplier()">click me</a></span>
    </div>
  </form>
</div>

<!-- Login  form for customer -->
<div id="c02" class="modal1">

 
  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/loginController.php?lguser=customer" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('c02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Login as Customer</b></h2></label>
    </div>

    <div class="container1">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="button1" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('c02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Sign Up? <a href="#" onclick="registercustomer()">click me</a></span>
    </div>
  </form>
</div>



<!-- Login  form for event organizer
<div id="e02" class="modal1">

 
  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/loginController.php?lguser=eventOrganizer" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('e02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Login as Event Organizer</b></h2></label>
    </div>

    <div class="container1">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="button1" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('e02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Sign Up? <a href="#" onclick="registerevent()">click me</a></span>
    </div>
  </form>
</div> -->

<!-- Login  form for admin-->
<div id="a01" class="modal1">

 
  <form class="modal-content1 animate" action="../../BusinessServiceLayer/UserC/loginController.php?lguser=admin" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('a01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label ><h2><b>Login as Administrator</b></h2></label>
    </div>

    <div class="container1">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="button1" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('a01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>
<?php
if(isset($_GET["event"])){
  $evt=$_GET['event'];

  if($evt=='rgspsc'){
$message = "Register Successful, please wait your account to be approve";
echo "<script type='text/javascript'>alert('$message');</script>";

 

                 }
  else if($evt=='rgspfail'){


$message = "Register fail, please contact the admin to register supplier account";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
 else if($evt=='rgcssc'){


$message = "Register Successful, Please log in";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
   else if($evt=='rgcsfl'){


$message = "Register fail, please contact the admin to register your account";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
   else if($evt=='rgevsc'){


$message = "Register Successful, Please log in";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
   else if($evt=='rgevfl'){


$message = "Register fail, please contact the admin to register your account";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
  else if($evt=='lgfail'){


$message = "Login fail, please try again";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
}
?>


    <!-- Bootstrap core JavaScript-->
    <script src="../../libs/vendor/jquery/jquery.min.js"></script>
    <script src="../../libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../libs/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../libs/js/sb-admin.min.js"></script>
<script>
  var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select1");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
  function alertLogin() {
  alert("Please Login First");
}
var modal = document.getElementById('s01');
var modal2 = document.getElementById('s02');
var modal3 = document.getElementById('c01');
var modal4 = document.getElementById('c02');
var modal5 = document.getElementById('e01');
var modal6 = document.getElementById('e02');
var modal7 = document.getElementById('a01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
    if (event.target == modal6) {
        modal6.style.display = "none";
    }
    if (event.target == modal7) {
        modal7.style.display = "none";
    }
}


var password = document.getElementById("psw")
var confirm_password = document.getElementById("repsw");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
  
  
   
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
function logincustomer(){

document.getElementById('c01').style.display='none';
document.getElementById('c02').style.display='block';
}
function registercustomer(){

document.getElementById('c02').style.display='none';
document.getElementById('c01').style.display='block';
}
function loginsupplier(){

document.getElementById('s01').style.display='none';
document.getElementById('s02').style.display='block';
}
function registersupplier(){

document.getElementById('s02').style.display='none';
document.getElementById('s01').style.display='block';
}
function logineventorganizer(){

document.getElementById('e01').style.display='none';
document.getElementById('e02').style.display='block';
}
function registerevent(){

document.getElementById('e02').style.display='none';
document.getElementById('e01').style.display='block';
}

</script>
  </body>

</html>
