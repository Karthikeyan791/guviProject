<?php

$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];

$conn=new mysqli('localhost','root','','profile');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(name,age,dob,gender,email,mobile,country,state,city)values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssisss",($name,$age,$dob,$gender,$email,$mobile,$country,$state,$city));
    $stmt->execute();
    echo "updated successfully";
    $stmt->close();
    $conn->close();

}



?>