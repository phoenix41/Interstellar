<?php

include 'database.php';

$a = $_POST['mob'];
$b = $_POST['pass'];

$sql = "SELECT * FROM users WHERE mobile='$a' AND pwd='$b' ";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	echo "Your username or password is incorrect!";
}
else{
	header("Location: Book.html");
}

?>
