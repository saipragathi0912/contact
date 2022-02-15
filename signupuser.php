<?php
  include('connect.php');
  $username=$_POST['username'];
  $password=$_POST['password'];
  $mobilenumber=$_POST['mobilenumber'];
  $emailid=$_POST['emailid'];
  $description=$_POST['description'];
  $website=$_POST['website'];
  $gender=$_POST['gender'];
          $username = stripcslashes($username);
          $password = stripcslashes($password);
          $mobilenumber = stripcslashes($mobilenumber);
          $emailid = stripcslashes($emailid);
          $description = stripcslashes($description);
          $website = stripcslashes($website);
          $gender = stripcslashes($gender);
          $sqlcheck="select * from user where username='$username'";
          $result1=mysqli_query($con,$sqlcheck);
          $rows=@mysqli_fetch_array($result1);
          $count1=mysqli_num_rows($result1);
          echo $count1;
          if(!$count1){
            if(!(strcmp($check,$username)))
            {
              $sqlInsert="insert into user values ('$username','$gender','$emailid','$description','$website','$mobilenumber','$password')";
              $result1 = mysqli_query($con,$sqlInsert);
              if($result1){
                    echo "successful";
                    $sqlinsert="insert into all_contacts values('$mobilenumber','$username',0)";
                    $result2=mysqli_query($con,$sqlinsert);
                    if($result2)
                    {
                      echo "successful";
                    }else{
                      echo "Not successful";
                      exit();
                    }
              }
              else
              {
              echo "Not successful";
              exit();
            }
            }
          }else
            {

            echo '<script type="text/JavaScript">
                 alert("Username already exists");
                 </script>';
          }
?>
<!-- /*<html> -->
  <!-- <meta http-equiv="refresh" content="0; URL=userintro.php" /> -->
<!-- </html>*/ -->
