<?php
$servername="localhost";
$dbname="Calls";
$username="root";
$password='YEUchiki@1505';
$con = mysqli_connect("localhost","root",'E^ipi+1=0',"Calls");
if (mysqli_connect_errno()) {
  die("Failed to connect with MySQL: ". mysqli_connect_error());
  exit();
}
else{
  echo "Connected";
}
?>
