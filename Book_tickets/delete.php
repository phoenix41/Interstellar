<?php

include 'database.php';

$a = $_POST['mob'];
$b = $_POST['pass'];

$sql = "DELETE FROM users WHERE mobile='$a' AND pwd='$b' ";
$result = $conn->query($sql);

	echo "<script type='text/javascript'>alert('Account deleted successfully!!');</script>";
	header( "refresh:0;url=index.html" );


?>
