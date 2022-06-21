<?php

include 'db_connection.php';
$conn = OpenCon();

$AdminID = $_POST['adminID'];
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$secretCode = $_POST['password'];

$sql = "INSERT INTO admin(adminID, firstname,lastname, Email, Address, secretCode) VALUES ('$AdminID','$Firstame', '$Lastname', '$Address', '$Email', '$secretCode');";

if($conn->query($sql)==true){
    header("Location: adminlogin.php");
}else{
    header("Location: adminregister.php");
    echo "errp";
}
//mysqli_query($conn, $sql);



?>




