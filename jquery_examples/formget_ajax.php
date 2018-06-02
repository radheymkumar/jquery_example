<?php
$servername = "localhost";
$username = "dinesh";
$password = "jeJFTj9tR7RC2yv";
$database = "drupal-7.57";
  //$conn = new mysqli("localhost", "root", "mySecretDBpass", "thegeekstuff");


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>


<?php

$name = $_POST['name1'];
$email = $_POST['email1'];
$pass = sha1($_POST['pass1']);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Invalid Email";
} else {

/*$sql = "SELECT * FROM node WHERE nid ='".$_POST['nid']."'";
$result = mysqli_query($conn, $sql);*/

	$query = mysqli_query($conn, "insert into formget(name, email, password) values ('$name', '$email', '$pass')"); // Insert query
	if($query) {
		echo "Insert";
	} else {
		echo "Error";
	}
}




?>