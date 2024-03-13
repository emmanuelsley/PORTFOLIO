<?php
$host= 'localhost';
$user= 'root';
$password= '';
$database= 'portfolio';

 $conn = mysqli_connect($host,$user,$password,$database);
 if(!$conn){
    echo 'connection failed';
 }

 if(isset ($_POST['submit'])){
   $name = $_POST ['name'];
   $email = $_POST['email'];
   $message = $_POST ['message'];
 
 $sql = "SELECT * FROM  portfolio WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)== 0){


   $sql= "INSERT INTO  portfolio (name,email,message)
            VALUES('$name','$email','$message')";
   mysqli_query($conn, $sql);
    header('location: index.php');
 }else {
   echo 'user already exist'
 }

}
