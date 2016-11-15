 <!Doctype html>
 <html>
 <head>
 <title>Admin response page</title>
 </head>
 <body>
 <h2> Welcome Admin</h2>
<?php  $servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli ( $servername, $db_username, $db_password, $dbname );
// Check connection
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
?>
<?php 
$stmt = ( "SELECT `userid`, `username`, `aname`, `blood group`, `phone number`, `address`, `date`, `admin acceptence` 
FROM `blood_requests` WHERE `admin acceptence` = 'UNDER_PROGRESS'  " );
	// Bind the appropriate values that have to be inserted into db
$result = $conn->query($stmt);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<form action="admin_accept_request.php" method="post">
<table border>
<tr>
<th>NAME</th>
<th>Blood Group</th>
<th>Phone Number</th>
<th>Address</th>
<th>Date</th>
<th>status</th>
<th>Accept Request</th>
</tr>
<tr>
<td><input type="hidden" name="userid" value ="<?php echo $row["userid"] ?>" /> </td>
<td><input type="hidden" name = "acceptorName" value="<?php echo $row["aname"] ?>" /><?php echo $row["aname"] ?></td>
<td><?php echo $row["blood group"]?></td>
<td><?php echo $row["phone number"]?></td>
<td><?php echo $row["address"]?></td>
<td><input type="hidden" name = "date" value="<?php echo $row["date"]?>" /><?php echo $row["date"]?></td>
<td><?php echo $row["admin acceptence"]?></td>
<td><input type="submit" name="submit" value="Accept"/> </td>
</tr>
</table>
</form>
<?php
}
} else {
    echo "0 results";
}
$conn->close();
?>

 </body>
 </html>