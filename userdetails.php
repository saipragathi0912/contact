<?php
    include('connect.php');
    include 'userintro.php';
    session_start();
    $username=$_SESSION['username'];
    $query="select * from user where username='$username'";
    $result=mysqli_query($con,$query);
    $rows=@mysqli_fetch_assoc($result);
    echo "<h2>" . "Username:" . $rows['username'] . "</h2>" . "<br>";
    echo "<h2>" . "Website:" . $rows['website'] . "</h2>" . "<br>";
    echo "<h2>" . "Email ID:" .  $rows['email_id'] . "</h2>" . "<br>";
    echo "<h2>" . "Contact Number:" . $rows['contact_number'] . "</h2>" . "<br>";
    echo "<h2>" . "Description:" . $rows['description'] . "</h2>" . "<br>";





?>
