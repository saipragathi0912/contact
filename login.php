<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login or signup</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <!-- <link rel="stylesheet" href="intro.css"> -->
</head>
<body>
  <div class="container">
  	<section id="content">
  		<form name="login" action="user.php" method="POST">
  			<h1>Login Form</h1>
  			<div>
  				<input type="text" placeholder="Username"  id="username" name="username" />
  			</div>
  			<div>
  				<input type="password" placeholder="Password"  id="password" name="password" />
  			</div>
  				<input type="submit" value="Log in" />
  				<a href="signup.php">Don't have an account? Register</a>
  			</div>
  		</form><!-- form -->

  	</section><!-- content -->
  </div>
  </body>
</html>
