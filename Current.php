<html>
<body>
<?php
$a=$_POST['fname'];
$b=$_POST['Lname'];
$c=$_POST['Gender'];
$d=$_POST['birthday'];
$e=$_POST['Ano'];
$f=$_POST['Pno'];
$g=$_POST['add'];
$h=$_POST['pc'];
$i=$_POST['City'];
$j=$_POST['State'];
$k=$_POST['mno'];
$l=$_POST['email'];
$m=$_POST['password'];
$n=0;
$conn=new mysqli("localhost","root","","bank system");
$sql="INSERT INTO current(fname,lname,gender,dob,adhar,pan,address,pincode,city,state,mnum,email,balance,pin) 
VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$n','$m')";
$conn->query($sql);
echo "Current account created";
$conn->close();
?>
</body>

</html>