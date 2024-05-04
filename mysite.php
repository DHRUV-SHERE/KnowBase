<?php

$name = $_POST['uname'];
$email = $_POST['umail'];
$mobile = $_POST['umobile'];
$address = $_POST['uaddress'];
$about = $_POST['uabout'];

$uname='User_name';
$umail='User_mail';
$umobile='User_mobile';
$uaddress='User_address';
$uabout='User_about';


$user = "root";
$host ="localhost:3306";
$pass = "";
$db = "knowbase";

$conn=mysqli_connect($host,$user,$pass,$db);

$sdb="SELECT DATABASE knowbase_user FROM knowbase";
// 'User_name','User_mail','User_mobile','User_address','User_about'

$idata="INSERT INTO knowbase_user('$uname','$umail','$umobile','$uaddress','$uabout') VALUE ('$name','$email','$mobile','$address','$about')";

$query=mysqli_query($conn,"$idata");

?>