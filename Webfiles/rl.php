<?php
// echo "We are try to connect user data to database using mysql queres ";
$servername="localhost";
$username="root";
$password="";
$dbname="ab";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Die if connection was not successful
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
else{
    echo "<br>";
    echo "connection was successful ";

}

$name=$_POST['name'];
$no=$_POST['no'];
$email=$_POST['email'];
$password=$_POST['password'];
$text=$_POST['age'];

// $sql = "INSERT INTO `mytable1`(`name`, `mobile_no`, `gmail`, `password`, `age`) VALUES ('".$name."','".$no."','".$email."','".$password."','".$age."')" ;

$sql="INSERT INTO `mytable3`(`name`, `mobile_no`, `Email`, `password`, `age`) VALUES '".$name."',".$no."',".$email."',".$password."',".$text."')";

$result = mysqli_query($conn, $sql);



?>