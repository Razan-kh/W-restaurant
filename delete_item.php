<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="w_resturant";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
$user=$_GET['user'];
$name=$_GET['name'];

    $sql = "DELETE FROM cart WHERE meal_name ='$name' AND cart_user='$user'";

if(mysqli_query($conn,$sql)){
    echo"New Record Has been added";
    header('Location:index.php');
}
else{
    echo "Error Data";
}