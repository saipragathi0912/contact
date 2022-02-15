<?php include 'userintro.php'?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete Contacts</title>
  <link rel="stylesheet" type="text/css" href="remove.css"/>
</head>
<body>
  <div class="container">
    <section id="content">
  <form name="remove" action="removecheck.php" method="POST">
  <h1>Delete Form</h1>
  <div>
    <input type="text" placeholder="Delete Contact number" id="deleteNumber" name="deleteNumber"/>
  </div>
    <input type="submit" value="Next"/>
</form>
</section>
</div>
</body>
</html>
