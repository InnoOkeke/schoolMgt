<?php

include 'mysqlconn.php';

$con = mysqli_connect($host, $dbuser, $pass, $db) or die('Cannot Connect');

$title = mysqli_real_escape_string($con,$_POST['title']);
$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$telephone = mysqli_real_escape_string($con,$_POST['telephone']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$rpassword = mysqli_real_escape_string($con,$_POST['rpassword']);
/*$passport = addslashes(file_get_contents($_FILES['passport']['tmp']));
$passport_name = addslashes($_FILES['passport']['name']);*/

$sql = "INSERT INTO tinfoz(Title, Fullname, Address, Email, Telephone, Username, Password, RPassword) VALUES ('".$title."','".$fullname."','".$address."','".$email."','".$telephone."','".$username."',md5('".$password."'),md5('".$rpassword."'))";

if(!mysqli_query($con,$sql))
{
	die('Error: '.mysqli_error($con));
}
echo ("<script language ='javascript'>
	  window.alert('Saved!')
	  window.location.href='home.php';
	  </script>");
?>