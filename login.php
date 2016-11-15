<?php
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
$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
 
// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
//$password = md5($password);
 
//Check username and password from database
$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
$result = $conn->query ( $sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc())
	{
	$dbUserEmail=$row['username'];
	$dbPassword=$row['password'];
	$userId=$row['userid'];
	}
//$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
//if(mysqli_num_rows($result) == 1)
//{

$_SESSION['username'] = $username;
$_SESSION['userid']= $userId;// Initializing Session for user id
header("location: home1.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}
 
}
}
 
?>