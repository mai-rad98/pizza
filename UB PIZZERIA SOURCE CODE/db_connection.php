<?php

function OpenCon(){
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = null;
	$db = "primepizza";

	//create connection
	$conn = new mysqli($dbhost, $dbuser, null, $db) or
    die("Connection failed: ".$conn -> error);

    return $conn;
}

function CloseCon($conn){
    $conn -> close();
}	
?>