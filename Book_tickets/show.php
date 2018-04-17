<?php
include 'database.php';

$sql="SELECT * FROM users";
$fetch = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<h1 style="padding-left: 500px;font-family: Comic sans ms">All Bookings</h1>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Mobile no</th> 
    <th>Tickets booked</th>
  </tr>
  <?php while($row = mysqli_fetch_array($fetch)) {
        if($row['tickets']>0)
        {
            echo  "<tr>
               <td>".$row['first']."</td>
               <td>".$row['last']."</td>
               <td>".$row['mobile']."</td>
               <td>".$row['tickets']."</td>
        
            </tr>";  
        }
        
   }
?>
</table>
<br><br><br><br><br>
<div class="button">
  <a href="Book.html">Go back</a>
</div>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</body>
</html>