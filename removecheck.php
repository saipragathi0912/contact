<?php include('connect.php');
session_start();
$username=$_SESSION['username'];
$password=$_POST['password'];
$deleteNumber=$_POST['deleteNumber'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$deleteNumber=stripcslashes($deleteNumber);
$sql = "delete from local_contacts where username='$username' and local_contact_number='$deleteNumber'";
$result = mysqli_query($con,$sql);
if($result)
{
    echo "Login successful";
}
else
{
  echo "Query Failed";
  exit();
}
?>
<html>
  <meta http-equiv="refresh" content="0; URL=userintro.php" />
</html>
