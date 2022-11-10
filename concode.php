<?php
$name=$_POST['name'];
echo $name;
$number=$_POST['number'];
echo $number;
$email=$_POST['email'];
echo $email;
$message=$_POST['message'];
echo $message;
$con=mysqli_connect("localhost","root","","student");
$insert="insert into tbl_coffie(name,number,email,message)
values('$name','$number','$email','$message')";
mysqli_query($con,$insert);
?>