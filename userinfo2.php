<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'cardata');


$email = $_POST['email'];


$query = " insert into userinfodata2 (email)
values ('$email')";

echo "$query";

mysqli_query($con,$query );

header('location:news.html');

?>