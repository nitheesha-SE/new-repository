<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<?php
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
$stmt = ( "SELECT * FROM
 `blood_donation`"
 );
 $result = $conn->query ( $stmt);
			
//if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<form action="donar_remove.php" method="post">
<table>
<tr>
<th>donar Name</th>
<th>Blood Group</th>
<th>Phone Number</th>
<th>Address</th>
<!--<th>Date(yyyy-mm-dd)</th>-->
<th>Accept Request</th>

</tr>
<tr>
<td><input type="hidden" name = "donarname" value="<?php echo $row["name"]?>" /><?php echo $row["name"]?></td>
<td><?php echo $row["bloodgroup"]?></td>
<td><?php echo $row["phonenumber"]?></td>
<td><?php echo $row["address"]?></td>
<!--<td><input type="hidden" name = "date" value="<?php echo $row["date"]?>" /><?php echo $row["date"]?></td> -->
<td><input type="submit" name="submit" value="Accept"/> </td>
</tr>
</table>
</form>
<?php
	}
//}
$conn ->close();
?>