<?php include('connect.php');
    $spamnumber=$_POST['spamnumber'];
    $spamnumber=stripcslashes($spamnumber);
    $sqlCheck="select * from spam where contact_number='$spamnumber'";
    $resultCheck=mysqli_query($con,$sqlCheck);
    $row = mysqli_fetch_array($resultCheck, MYSQLI_ASSOC);
    $count = mysqli_num_rows($resultCheck);
    if($count==0)
    {
      $sqlInsert="insert into spam(contact_number,count) values('$spamnumber',1)";
      $resultInsert=mysqli_query($con,$sqlInsert);
    }else if($count>0)
    {
      $sqlUpdate="update spam set count=count+1 where contact_number='$spamnumber'";
      $resultUpdate=mysqli_query($con,$sqlUpdate);
    }
?>
<html>
  <meta http-equiv="refresh" content="0; URL=userintro.php" />
</html>
