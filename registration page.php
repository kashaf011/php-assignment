<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
    <body><h1>REGISTRATION PAGE</h1>
<form action="registration.php"method="POST">
    <label>USERNAME</label>
    <input type="text"name="n1">
    <br><br>
    <label>EMAIL</label>
    <input type="varchar"name="n2">
    <br><br>
    <label>CONTACT</label>
    <input type="number"name="n3">
    <br><br>
    <label>PASSWORD</label>
    <input type="varchar"name="n4">
    <br><br>
    <button type="submit">REGISTER</button>
</form>
<form action="login page.php"method="POST">
    <label>GO BACK TO LOGIN PAGE</label>
    <button type="submit">BACK</button>
</body></html>
<?php
$USERNAME=$_POST['n1'];
$EMAIL=$_POST['n2'];
$CONTACT=$_POST['n3'];
$PASSWORD=$_POST['n4'];

$servername="localhost";
$username="root";
$password="";
$dbname="social";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO details('USERNAME','EMAIL','CONTACT','PASSWORD')VALUES('$USERNAME','$EMAIL','$CONTACT','$PASSWORD')";

$rs=mysqli_query($conn,$sql);
if($rs>0)
{
    echo"YOU HAVE REGISTERED SUCCESSFULLY";
}
?>
