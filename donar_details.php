<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Start the session
session_start();

?>
<!Doctype html>
 <html>
 <head>
 </head>
 <body>
<?php if(isset($_POST["submit"])){
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli ( $servername, $db_username, $db_password, $dbname );
// Check connection
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
$stmt = $conn->prepare ( "INSERT INTO `blood_donation` (`name`, `bloodgroup`,
 `phonenumber`, `address`)
 VALUES (?,?,?,?);" );
 $stmt->bind_param ( "ssis", $name, $bloodgroup, $phonenumber, $address);
	
//$stmt = ( "UPDATE `blood_requests` SET `donar acceptence`='yes' WHERE `name` ='".$name."'");
$name = ($_POST["name"]);
$bloodgroup = ($_POST["bloodgroup"]);
$phonenumber = ($_POST["phonenumber"]);
$address = ($_POST["address"]);
$stmt -> execute();
	if ($stmt->errno) {
  echo "FAILURE!!! " . $stmt->error;
}
else {echo "Updated {$stmt->affected_rows} rows";
echo "<h2>Success in submiting </h2>";
}
$conn ->close();
?>



<?php }?>
</body>
 </html>