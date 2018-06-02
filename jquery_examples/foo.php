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
//echo "foo text";

$sql = "SELECT * FROM node WHERE nid ='".$_POST['nid']."'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	$data['result'] = $row;
	$data['status'] = 'OK';
	/*echo "<td>" . $row['nid'] . "</td>";
	echo "<td>" . $row['title'] . "</td>";
	echo "<td>" . $row['uid'] . "</td>";
	echo "<td>" . $row['created'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";*/
}
	echo json_encode($data);

/*$sql = "SELECT * FROM node WHERE nid ='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $row['nid'] . "</td>";
	echo "<td>" . $row['title'] . "</td>";
	echo "<td>" . $row['uid'] . "</td>";
	echo "<td>" . $row['created'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";
}*/


/*$sql = "SELECT * FROM node WHERE nid ='".$_GET['nid']."'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $row['nid'] . "</td>";
	echo "<td>" . $row['title'] . "</td>";
	echo "<td>" . $row['uid'] . "</td>";
	echo "<td>" . $row['created'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";
}*/

?>