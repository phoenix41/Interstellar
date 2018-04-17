<?php
$conn = mysqli_connect('localhost', 'root', '', 'awp');
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
?>