<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<h2>Welcome Admin</h2>
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
$name =$_POST["acceptorName"];
$stmt = ( "UPDATE `blood_requests` SET `admin acceptence`='yes' WHERE `aname` ='".$name."'");

$result = $conn->query ( $stmt);
			
if ($result === TRUE){
	header("Location: submit_admin_requests.php");
die;
} else {
    echo "Error updating record: " . $conn->error;
}	
$conn ->close();
?>

<?php }?>

</body>

</html>