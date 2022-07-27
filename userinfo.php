<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'cardata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$modelno = $_POST['modelno'];


$query = " insert into userinfodata (user,email,mobile,modelno)
values ('$user', '$email', '$mobile', '$modelno')";

echo "$query";

mysqli_query($con,$query );

header('location:index.html');

?>