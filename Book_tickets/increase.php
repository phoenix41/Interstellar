<?php
include 'database.php';


$a = $_POST['mob'];
$b = $_POST['pass'];

$asql = "SELECT * FROM users WHERE mobile='$a' AND pwd='$b' ";
$result = $conn->query($asql);
if (!$row = $result->fetch_assoc()) {
	echo "<script type='text/javascript'>alert('Invalid details');</script>";
	header( "refresh:0;url=increase.html" );
}
else{
	$sql = "UPDATE users SET tickets=tickets+1 WHERE mobile='$a' ";

	if ($conn->query($sql) === TRUE) {
	    echo "<script type='text/javascript'>alert('Ticket added Successfully');</script>";
		header( "refresh:0;url=Book.html" );
	    
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}







?>