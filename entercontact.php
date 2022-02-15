<!DOCTYPE html>
<?php include('connect.php');?>
<?php include 'userintro.php'?>
<html lang="en">
<head>
  <title>Login or signup</title>
  <link rel="stylesheet" type="text/css" href="signup.css" />
  <!-- <link rel="stylesheet" href="intro.css"> -->
  <script>
    function checkValidation(){
    var checkName=document.getElementById('contact_name');
    var checkNumber=document.getElementById('contact_number');
    var testNumbers=/^\d{10}$/;
    var testChar=/^[A-Za-z]+$/;
    if(!testNumbers.test(checkNumber))
    {
      alert("Please enter a valid phone number");
    }}
    </script>
</head>
<body>
  <div class="container">
  	<section id="content">
  		<form name="login" action="entercontactconnection.php" method="POST">
  			<h1>Enter contacts</h1>
        <div>
  				<input type="text" placeholder="Contact Number"  id="contact_number" name="contact_number" />
  			</div>
        <div>
  				<input type="text" placeholder="Contact Name"  id="contact_name" name="contact_name" />
  			</div>
  				<input type="submit" value="Enter" onclick="checkValidation()"/>
  			</div>
  		</form><!-- form -->

  	</section><!-- content -->
  </div>
  </body>
</html>
