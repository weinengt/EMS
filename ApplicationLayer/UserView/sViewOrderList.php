<?php
session_start();
if($_SESSION["id"] == ""){
echo '<script type="text/javascript">'; 
echo 'alert("Please Login First");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
   include 'supplierHeader.php';
?>
<style type="text/css">
  tr[data-href]{
    cursor: pointer;
  }
</style>
<body>
   <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=S_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Equipment Order</li>
          </ol>

          <!-- Page Content -->
          <h1>ORDER LIST OF EQUIPMENT</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>
      <section class="container content-section">
        <h2 class="section-header">EQUIPMENT ORDER</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Booking ID</th>
                  <th scope="col">Customer ID</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Payment Status</th>
                </tr>
              </thead>
              <tbody>
               
                  <?php 
                      $i=1;
                     $data = unserialize(urldecode($_GET['data']));
                     foreach ($data as $key) { ?>
                       <tr data-href='../../BusinessServiceLayer/UserC/sViewOrderController.php?bookingID=<?php echo"$key[B_bookingID]"; ?>&id=<?php echo "$_SESSION[id]"; ?>&controllerFunction=details'>
                         <th scope='row'><?php echo"$i" ?></th>
                         <td><?php echo"$key[B_bookingID]" ?></td>
                         <td><?php echo"$key[C_customerID]" ?></td>
                         <td><?php echo"$key[Order_Date]" ?></td>
                         <td><?php echo"$key[EOd_totalPrice]" ?></td>
                         <td><?php echo"$key[status]" ?></td>
                       </tr>
                   <?php  
                   $i++;
                  }
                  ?>
                
              </tbody>
            </table>
            
        </section>
        <script>
          $(document).ready(function (){
            $(document.body).on("click", "tr[data-href]",function(){
                window.location.href=this.dataset.href; 
            });
          }); 

        </script>
</body>
<?php
         include 'supplierFooter.php';
?>
</html>