<?php 
$servername="localhost";
$username="root";
$password="";
$db_name="signup";
$conn=new mysqli($sservername,$username,$password,$signin_name,3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "connection success";
?>