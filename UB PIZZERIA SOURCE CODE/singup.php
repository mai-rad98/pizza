<?php

include 'db_connection.php';
$conn = OpenCon();

$Name = $_POST['name'];
$Surname = $_POST['surname'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$secretCode = $_POST['password'];

$sql = "INSERT INTO customer(Name, Surname, Email, Address, secretCode) VALUES ('$Name', '$Surname', '$Email', '$Address', '$secretCode');";

if($conn->query($sql)==true){
    header("Location: php/menu-items.php");
}else{
    header("Location: register.php");
    echo "errp";
}
//mysqli_query($conn, $sql);



?>




