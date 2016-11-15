<? php
session_start();
if(!session_is_registered("username"){
	header("location:index.php");
}
if(isset($_POST["submit"])){
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
$rname =$_POST["RequestorName"];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>donar details</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

 <div id="login-form">
    <form method="post" action="donar_acceptor.php" autocomplete="off">
	<div class="form-group">
             <h2 class="">enter the details of donar</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
		please enter details:
		<table>
		<div class="form-group">
		<tr>
		<td>Name:</td>
		<td> <input type="text" name="dname" class="form-control" placeholder="Enter Name" maxlength="50"  /></td>
		</div>
	
		</tr>
		
		<div class="form-group">
		<tr>
		<td>dblood</td>
		<td> <select name="dblood">
			<option value="">select</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			</select> </td>
		</tr>
		</div>

		<div class="form-group">
		<tr>
		<td>phonenumber</td>
		<td> <input type="text" name="dphone" class="form-control"  /></td>
		</tr>
		</div>


		<div class="form-group">
		<tr>
		<td>address</td>
		<td> <input type="text" name="daddress" class="form-control"  /> </td>
		</tr>
		</div>

		<div class="radio">
		<tr>
		<td>Gender</td>
		<td><label><input type="radio" name="gender" value="male">Male</label> </td>
		</div>
		<td><div class="radio">
		<label><input type="radio" name="gender" value="female">Female</label> </td>
		</tr>
		</div>
		</table>

		<div class="form-group">
        <hr />
        </div>
            
        <div class="form-group">
        <button type="submit" class="btn btn-block btn-primary" name="submit">Submit</button>
        </div>
            
        <div class="form-group">
        <hr />
        </div>

</body>
 </html>
 <?php $conn ->close();
?>


              