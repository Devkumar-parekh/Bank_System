<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "bank system");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$num=0; 
// Attempt select query execution
$sql = "SELECT * FROM register where pwd='$_POST[pwd]'";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table border='1px'>";
            echo "<tr>";
            //    echo "<th>name</th>";
            //    echo "<th>gender</th>";
				
            //    echo "<th>dob</th>";
                
            //    echo "<th>uid</th>";
				echo "<th>pwd</th>";
            //    echo "<th>cpwd</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
//                echo "<td>" . $row['name'] . "</td>";
              //  echo "<td>" . $row['gender'] . "</td>";
              //  echo "<td>" . $row['dob'] . "</td>";
              //  echo "<td>" . $row['id'] . "</td>";
			  $num=10+$row['pwd'];
echo "<td>" . $num . "</td>";
$sql="UPDATE register SET pwd=$num WHERE name='dev'";
$mysqli->query($sql);
//echo "<td>" . $row['cpwd'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>		