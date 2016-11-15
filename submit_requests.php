<!Doctype html>
 <html>
 <head>
 </head>
 <body>
 <!-- once submit button is clicked it goes to the loop below -->
<?php if(isset($_POST["submit"])){
session_start();
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli ( $servername, $db_username, $db_password, $dbname );
// check connection and display error if any
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
//to prevent sql injections we prepare the query and the excute it as below
if($stmt=$conn->prepare(
"INSERT INTO `blood_requests`(`userid`,
 `username`,`aname`, `blood group`, `phone number`, `address`,
 `date`, `admin acceptence`) VALUES (?,?,?,?,?,?,?,'UNDER_PROGRESS');")){
	// Bind the appropriate values that have to be inserted into db
	$stmt->bind_param ( "isssiss",$_SESSION["userid"], $username,$name, $blood_group, $phone, $address, $date);
	$username=$_SESSION["username"];
	$name = $_POST["acceptorName"];
	$blood_group= $_POST["blood_group"];
	$phone = $_POST["phone_number"];
	$address = $_POST["address"];
	$date = date('Y-m-d');	
	$stmt -> execute();
	echo "Accepted";
 }else{
  $error = $mysqli->errno . ' ' . $mysqli->error;
    echo $error;
 }

$conn ->close();
}
?>
</body>
 </html>