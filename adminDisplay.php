<?php
  include('connect.php');
  $username=$_POST['username'];
  $password=$_POST['password'];
  if(($username=='admin') && ($password=='admin'){
  $sqlSelect="select * from user";
  $result = mysqli_query($con, $sqlSelect);
  if(!$result){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Contact Number</th>";
                echo "<th>Username</th>"
                echo "<th>Website</th>";
                echo "<th>Description</th>";
                echo "<th>Email ID</th>";
                echo "<th>Gender</th>";
            echo "</tr>";
        while($row = @mysqli_fetch_assoc($result)){
            echo "<tr>";
                echo "<td>" . $row['contact_number'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['website'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['email_id'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
}}else{
  echo "Invalid ";
}
  mysqli_close($con);
?>
