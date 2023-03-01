<?php

$firstName=$_POST['firstname'];
$lastName=$_POST['lastName'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
$email=$_POST['email'];

$conn=new mysqli('localhost','root','','register');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(firstName,lastName,mobile,password,confirmPassword,email)values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss",$firstName,$lastName,$mobile,$password,$confirmPassword,$email);
    $stmt->execute();
    echo "registerd successfully";
    $stmt->close();
    $conn->close();

}



?>