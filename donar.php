<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<?php
session_start();
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

$stmt = ( "SELECT `username`,`aname`, `blood group`, `phone number`,
 `address`, `date`
 FROM
 `blood_requests`
 WHERE
 `admin acceptence`='yes';");

$result = $conn->query ( $stmt);
			
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<form action="donar_acceptor.php" method="post">
<table>
<tr>
<th>user Name</th>
<th>requestor name</th>

<th>Blood Group</th>
<th>Phone Number</th>
<th>Address</th>
<th>Date(yyyy-mm-dd)</th>
<th>Accept Request</th>

</tr>
<tr>
<td><input type="hidden" name = "Requestoruser" value="<?php echo $row["username"]?>" /><?php echo $row["username"]?></td>
<td><input type="hidden" name = "Requestorname" value="<?php echo $row["aname"]?>" /><?php echo $row["aname"]?></td>
<td><?php echo $row["blood group"]?></td>
<td><?php echo $row["phone number"]?></td>
<td><?php echo $row["address"]?></td>
<td><input type="hidden" name = "date" value="<?php echo $row["date"]?>" /><?php echo $row["date"]?></td>
<td><input type="submit" name="submit" value="Accept"/> </td>
</tr>
</table>
</form>
<?php
	}
}
$conn ->close();
?>

</body>

</html>