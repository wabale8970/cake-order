<?php
$con=mysqli_connect('localhost','root','','sysem');
if(isset($_POST['button']))
{
$customerName = $_POST['customerName'];
$address = $_POST['address'];
$phoneNo = $_POST['phoneNo'];
$pickupDate = $_POST['pickupDate'];
$time = $_POST['time'];
$cakeName = $_POST['cakeName'];
$sizeCake = $_POST['sizeCake'];
$flavorCake = $_POST['flavorCake'];
$quantityCake = $_POST['quantityCake'];
$price = $_POST['price'];
$query="INSERT INTO orderform(customerName,address,phoneNo,pickupDate,time,cakeName,sizeCake,flavorCake,quantityCake,price) VALUES('$customerName','$address','$phoneNo','$pickupDate','$time','$cakeName','$sizeCake','$flavorCake','$quantityCake','$price')";
$run=mysqli_query($con,$query);
echo"data store successfully";
}
?>

