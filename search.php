<?php include('connect.php');
  $username=$_POST['username'];

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<div class="container">
  <section id="content">
    <form name="search" action="searchdisplay.php" method="POST">
      <h1>Search form</h1>
      <div>
        <input type="text" placeholder="Username"  id="username" name="username" />
      </div>
      <div>
        <input type="password" placeholder="Password"  id="password" name="password" />
      </div>
        <input type="submit" value="Next" />
      </div>
    </form><!-- form -->

  </section><!-- content -->
</div>


</html>
