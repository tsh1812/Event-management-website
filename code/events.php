<?php
//Connection for database
include 'dbconfig/config.php';
session_start();
//Select Database
$sql = "SELECT * FROM events";
$result = $con->query($sql);
?>
<!doctype html>
<html
<head>

<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1 align="center">EVENTS</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>EVENTCODE</th>
<th>EVENT</th>
<th>EVENTDETAILS</th>

</tr>
			<div class="inner container">
			<a href="index.php">
			<button class="logout_button" type="submit">Log Out</button></a>
					
				<a href="registeredevents.php">
					<button class="logout_button" type="button"> EVENTS REGISTRATION</button></a>

			</div>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['eventcode']; ?></td>
 <td><?php echo $row['event']; ?></td>
 <td><?php echo $row['eventdetails']; ?></td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>