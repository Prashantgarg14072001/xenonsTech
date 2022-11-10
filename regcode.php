<?php
$name=$_POST['name'];
echo $name;
$fathername=$_POST['fathername'];
echo $fathername;
$email=$_POST['email'];
echo $email;
$number=$_POST['number'];
echo $number;
$dob=$_POST['dob'];
echo $dob;
$gender=$_POST['gender'];
echo $gender;
$password=$_POST['password'];
echo $password;

$con=mysqli_connect("localhost","root","","student");
$insert="insert into tbl_reg(name,number,email,number,dob,gender,password)
values('$name','$number','$email','$number','$dob',$gender'$password')";
mysqli_query($con,$insert);
?>