<html>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$D=date("d/m/Y");
$T=date("h:i:sa");
				
$a=$_POST['dip'];
$b=$_POST['adhar'];
$c=$_POST['password'];
$d=0;
$mode="deposite";
$conn=new mysqli("localhost","root","","bank system");
$sql="SELECT * FROM current where adhar='$b'";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			if($row['adhar']==$b&& $row['pin']==$c)
			{
				$d=$row['balance']+$a;
				$sql="UPDATE current SET balance=$d WHERE adhar='$b'";
				$conn->query($sql);
				
				
				$sql="INSERT INTO passbook1(adhar,amount,mode,final,dates,times)
				VALUES('$b','$a','$mode','$d','$D','$T')";
				$conn->query($sql);
			
				echo "'$a' rupees deposited<br>final balance is '$d'";
				echo "<br><button><a href='home.html'>go to home page</a></button>";

			}
			else
				{
					echo "Wrong Aadhar Number Or Password, Please Try Again<br>";
					echo "<a href='cdeposite.html'> Show Balance</a>";
				}
		}
	}
	else
	{
		echo "Account With The Aadhar Number You Entered Does Not Exist.....<br>";
			echo "<button><a href='cbalance.html'>Try Again..</a></button>";
	}
}

$conn->close();
?>
</body>
</html>