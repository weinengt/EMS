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
<?php
   include 'supplierHeader.php';
?>
  <style type="text/css">
  

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
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
  opacity: 0.9;
}

.button1:hover {
  opacity:1;
}


textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

/* Modal Content/Box */

  </style>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:150px;margin-right:200px">

<form class="modal-content" action="../../BusinessServiceLayer/UserC/sEventPackageController.php?id=<?php echo"$_SESSION[id]";?>&event=supplierupd" method="POST">
    <div class="container">
      <h1><b>Edit Event Package</b></h1>
      <br><label for="title"><b>Title</b></label>
      <input type="text" placeholder="Enter the title" name="title" value='<?php echo $_POST['pName']; ?>' required>
      <label for="details"><b>Decription</b></label><br>
      <textarea placeholder="The details.." name="details" required><?php echo $_POST['pDes']; ?></textarea>
      <br>
      <br><label for="price"><b>Package Price</b></label><br>
      <input type="number" placeholder="Enter price" name="price" value='<?php echo $_POST['pPrice']; ?>' required>
      <input style="display: none;" name="pID" value='<?php echo $_POST["pID"];?>'>
      <div class="clearfix">
        <br>
        <button type="submit" class="button1" name="send">Send</button>
      </div>
    </form>
      <div class="clearfix">
        <form action="javascript:void(0);" method="POST" name="myForm" id="myForm">
        <input style="display: none;" name="pID" value='<?php echo $_POST["pID"];?>'>
        <button onclick="confirmDelete()" style="width: 100%;background-color: red;color: white;padding-top: 12px;padding-bottom: 12px;border: none;" name="delete">Delete</button>
        </form>
      </div>
      <br>
    </div>

</div>
<br>
<?php
         include 'supplierFooter.php';
         ?>
<script>
  function sendMessage() {
    alert("Your message has been updated ");
  }

  function confirmDelete(){
    var r = confirm("Are you sure you want to delete the event package?");
    if(r==true){
      document.getElementById("myForm").action = "../../BusinessServiceLayer/UserC/sEventPackageController.php?id=<?php echo"$_SESSION[id]";?>&event=supplierdlt";
      document.getElementById("myForm").submit();
    }
    else{}
  }
</script>

</html>