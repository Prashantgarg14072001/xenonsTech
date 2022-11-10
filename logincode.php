<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","student");
$sql="select * from log where email='$email' and pass='$pass'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
	   
		$id = $row["id"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: index.php");
}
else
{
	echo "Invalid email nd password";
}
?>