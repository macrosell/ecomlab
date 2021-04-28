<?php
	/* Template Name: HOME */

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="http:/wordpress/wp-content/themes/template/blank/template/css/home.css">
<head>
  <title></title>
</head>
<body>
<style>
	body{
  padding: 0;
  margin: 0;
  background-color: #dbdbdb;
  background-image: url(http://localhost/wordpress/wp-content/uploads/2021/04/BG3.png);
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
  <div class="topnav">
    <img src="http://localhost/wordpress/wp-content/uploads/2021/04/EBSlogo.png">
    <h1>OTAP of all time!</h1>
  </div>
  <div class="buttons">
    <a href="http://localhost/Thesis/Home/gallery.php">Gallery</a>
    <a href="http://localhost/Thesis/Products/Products.php">Products</a>
    <a href="http://localhost/Thesis/Home/Contact.php">Contact</a>
    <a href="http://localhost/Thesis/Home/About.php"> About Us</a>
  </div>
  <form method="GET">
  <div class="log-in">
    <input type="text" placeholder="Username" name="LUname" required="">
    <input type="password" placeholder="Password" name="LPword" required="">
    <button class="login-button" name="login">Log In</button>
    <span>Forgot <a href="">password?</a></span>
    <button id="myBtn" class="create-button">Create New Account</button>
    <hr>
  </form>
  </div>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <form class="form1" method="GET">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="signup-form">
        <h1>Sign <span style="color: #bfff00;">up</span></h1>
        <h2>Create an account</h2>
        <hr>
        <span class="input-title">Fullname: </span>
        <input type="text" placeholder="Last name" name="Lname" required="" style="width: 20%; margin-left: 2mm;">
        <input type="text" placeholder="First name" name="Fname" required="" style="width: 20%;">
        <input type="text" placeholder="Middle name" name="Mname" required="" style="width: 20%;">
        <br>
        <span class="input-title">Address: </span>
        <input type="text" placeholder="Complete address" name="Addrss" required="" style="margin-left: 2mm; width: 79.5%;">
        <br>
        <span class="input-title">Contact number: </span>
        <input type="text" placeholder="Contact number" name="Contact_Number" required="" style="margin-left: 2mm; width: 67%;">
        <br>
        <span class="input-title">Username: </span>
        <input type="text" placeholder="Enter username" name="Uname" required="" style="margin-left: 2mm; width: 75.7%;">
        <br>
        <span class="input-title">Password: </span>
        <input type="Password" placeholder="Enter password" name="Pword" required="" style="margin-left: 2mm; width: 76%;">
        <br>
        <span class="input-title">Repeat Password: </span>
        <input type="Password" placeholder="Enter password" name="R_Pword" required="" style="margin-left: 2mm; width: 65%;">
        <br>
        <button class="create" name="signupbtn">Create</button>
    </div>
  </div>

</div>
</form>
</body>
<script type="text/javascript">
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
<script>
  $(document).on('click', '.formsubmitbutton', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(".form").attr('action'),
        data: $(".form").serialize(),
        success: function(response) {
             if (response === "success") {
                  window.reload;
             } else {
                   alert("invalid username/password.  Please try again");
             }
        }
    });
});
</script>
</html>