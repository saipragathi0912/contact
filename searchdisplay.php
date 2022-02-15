<?php
  include('connect.php');
  session_start();
  $username=$_SESSION['username'];
  $username=stripcslashes($username);
  $sqlSelect="select * from local_contacts where username='$username'";
  if($result = mysqli_query($con, $sqlSelect)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Contact Number</th>";
                echo "<th>Contact Name</th>";
            echo "</tr>";
        while($row = @mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['local_contact_number'] . "</td>";
                echo "<td>" . $row['local_contact_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlSelect. " . mysqli_error($con);
}
?>
