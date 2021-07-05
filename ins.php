<?php

$servername="localhost";
$username="root";
$password="";
$dbname="final";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="INSERT INTO data(firstname,lastname,email) 
VALUES('DEV','PAREKH','abc123@gmail.com')";

$conn->query($sql);

?>