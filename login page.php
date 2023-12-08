<!DOCTYPE html>
<html lang="en">                                     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <body><h1>LOGIN PAGE</h1>
 <form action="login page.php"method="POST">
    <label>Enter your EMAIL id</label>
    <input type="varchar"name="l1">
    <br><hr>
    <label>Enter your PASSWORD</label>
    <input type="varchar"name="l2">
    <br><hr>
    <button type="submit">LOGIN</button>
</form>
<form action="registration page.php"method="GET">
    <label>INVALID ID OR PASSWORD</label>
    <button type="submit">REGISTER</button>
</body>
</html>
<?php
$EMAIL=$_POST['l1'];
$PASSWORD=$_POST['l2'];

$servername="localhost";
$username="root";
$password="";
$dbname="social";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="SELECT * FROM details where EMAIL='$EMAIL' ";
$rs=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($rs);

if($row['PASSWORD']==$PASSWORD)
{
    echo"YOU HAVE SUCCESSFULLY LOGGED IN";
    include 'homepage.php';
}
else
  echo"LOGIN FAILED";  
?>