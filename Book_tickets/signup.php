<?php

include 'database.php';

$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['mno'];
$d = $_POST['email'];
$e = $_POST['pass'];

$sql = "INSERT INTO users(first,last,mobile,email,pwd) VALUES ('$a','$b','$c','$d','$e')";

$result = $conn->query($sql);
header("Location: Book.html");
?>