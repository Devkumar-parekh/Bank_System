<html>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$D=date("d/m/Y");
$T=date("h:i:sa");
				
$a=$_POST['dip'];
$b=$_POST['adhar'];
$e=$_POST['adhar1'];
$c=$_POST['password'];
$d=0;
$mode="transfer to $b";
$mode1="recieved from $e";
$conn=new mysqli("localhost","root","","bank system");


//        transfer to
$sql="SELECT * FROM current ";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			if($row['adhar']==$b)
			{
				$d=$row['balance']+$a;
				$sql="UPDATE current SET balance=$d WHERE adhar='$b'";
				$conn->query($sql);
			
				$sql="INSERT INTO passbook1(adhar,amount,mode,final,dates,times)
				VALUES('$b','$a','$mode1','$d','$D','$T')";
				$conn->query($sql);
			
				echo "'$a' rupees recieved '<br>'";
			}
		}
	}
}


//transfer from
$sql="SELECT * FROM saving";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			if($row['adhar']==$e&& $row['pin']==$c)
			{
				$d=$row['balance']-$a;
				$sql="UPDATE current SET balance=$d WHERE adhar='$e'";
				$conn->query($sql);
				
				$sql="INSERT INTO passbook1(adhar,amount,mode,final,dates,times)
				VALUES('$e','$a','$mode','$d','$D','$T')";
				$conn->query($sql);
			
				
				echo "'$a' rupees transfered from 
				<br>$e  to<br>$b
				<br>successfully";
				echo "<br><button><a href='home.html'>go to home page</a></button>";

			}
		}
	}
}

$conn->close();
?>
</body>
</html>