<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logindb');
$q="select * from user where username='$user' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
  $_SESSION['username']=$user;
 header('location:http://localhost/fashi/home.php');
}
else
{
    header('location:http://localhost/fashi/login.php');
}

?>
