<?php
  include('connect.php');
  session_start();

  $contact_number=$_POST['contact_number'];
  $contact_name=$_POST['contact_name'];
  $username=$_SESSION['username'];
  $sqlSelect="select * from local_contacts where local_contact_number='$mobilenumber'";
  $result=mysqli_query($con,$sqlSelect);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count == 0){
    $sqlInsert = "insert into local_contacts(local_contact_number,local_contact_name,username) values('$contact_number','$contact_name','$username')";
    if (mysqli_query($con,$sqlInsert))
    {
        echo "Record inserted successfully";

    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        exit();
    }
  }
  else{
    echo "User already exists";
    exit();
  }
?>
<html>
  <meta http-equiv="refresh" content="0; URL=userintro.php" />
</html>
