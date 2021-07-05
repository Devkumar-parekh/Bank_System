<html>
	<body>
		<?php
		$b=$_POST['adhar'];
		$a=$_POST['password'];
			$conn=new mysqli("localhost","root","","bank system");
			$sql="SELECT * FROM current where adhar='$b'";
echo "<table border='1'><tr>
				<td>adhar</td>
				<td>balance</td>
			</tr>
";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{

			if($row['adhar']==$b && $row['pin']==$a)
			{
				$w=$row['adhar'];
				$x=$row['balance'];
				
				
				
				echo "<tr><td>'$w'</td>
						  <td>'$x'</td>
						
						  </tr>";
			}
		}
	}
	else
	{
		echo "Wrong Aadhar Number Or Password, Please Try Again<br>";
		echo "<a href='balance.html'> Show Balance</a>";
	}
}
else
	{
		echo "Account With The Aadhar Number You Entered Does Not Exist.....<br>";
			echo "<button><a href='cbalance.html'>Try Again..</a></button>";
	}
echo "</table>";
echo "<a href='home.html'>go to home page</a>";

		?>
		
	</body>

</html>