<?php
$con=mysqli_connect('localhost','root','','kekiz');
if(isset($_POST['button']))
{
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$ContactNo = $_POST['ContactNo'];
$address = $_POST['address'];
$message = $_POST['message'];
$query="INSERT INTO contactform(Name,Email,ContactNo,address,message) VALUES('$Name','$Email','$ContactNo','$address','$message')";
$run=mysqli_query($con,$query);
echo"data store successfully";
}
?>