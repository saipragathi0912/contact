<?php
  include('connect.php');
  ob_start();
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];
          $username = stripcslashes($username);
          $password = stripcslashes($password);

          $sql = "select * from user where username = '$username' and password = '$password'";
          $result = mysqli_query($con,$sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $count = mysqli_num_rows($result);
          if($count == 1){
            $_SESSION['username']=$username;
            header('Location: searchdisplay.php');
            $_SESSION['username']=$username;
            header('Location: removecheck.php');
            $_SESSION['username']=$username;
            header('Location: userdetails.php');
            header('Location: userhome.php');
            echo "<h1><center> Login successful </center></h1>";
          }
          else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
            exit();
          }
?>
<html>
<meta http-equiv="refresh" content="0; URL=userintro.php" />
</html>
