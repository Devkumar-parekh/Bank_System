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
$sql="SELECT * FROM saving";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			if($row['adhar']==$b&& $row['pin']==$c)
			{
				$d=$row['balance']+$a;
				$sql="UPDATE saving SET balance=$d WHERE adhar='$b'";
				$conn->query($sql);
				
				
				$sql="INSERT INTO passbook(adhar,amount,mode,final,dates,times)
				VALUES('$b','$a','$mode','$d','$D','$T')";
				$conn->query($sql);
			
				echo "'$a' rupees deposited<br>final balance is '$d'";
				echo "<br><button><a href='home.html'>go to home page</a></button>";
			}
		}
	}
}
$conn->close();
?>
</body>
</html>