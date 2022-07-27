<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'cardata');

$cardetail = $_POST['cardetail'];
$year = $_POST['year'];
$kilometers = $_POST['kilometers'];
$city = $_POST['city'];
$number = $_POST['number'];
$price = $_POST['price'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];


$query = " insert into userinfodata1 (cardetail,year,kilometers,city,number,price,name,email,mobileno)
values ('$cardetail', '$year', '$kilometers', '$city', '$number', '$price', '$name', '$email', '$mobileno')";

echo "$query"; 

mysqli_query($con,$query );

header('location:sell-single.html');

?>