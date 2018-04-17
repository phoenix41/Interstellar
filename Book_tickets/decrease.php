<?php
include 'database.php';


$a = $_POST['mob'];
$b = $_POST['pass'];

$sql = "UPDATE users SET tickets=0 WHERE mobile='$a' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Tickets cancelled Successfully');</script>";
	header( "refresh:0;url=Book.html" );
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>