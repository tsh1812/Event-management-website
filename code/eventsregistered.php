<?php
//Connection for database
include 'dbconfig/config.php';
session_start();
$user=$_SESSION['username'];
//Select Database
$sql = "SELECT * FROM registeredevents where username='$user'";
$result = $con->query($sql);
?>
<!doctype html>
<html
<head>

<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1 align="center">EVENTSREGISTERED</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>USERNAME</th>
<th>NAME</th>
<th>EVENT</th>
<th>MOBILENO</th>

</tr>
			<div class="inner container">
			<a href="homepage.php">
			<button class="logout_button" type="submit">BACK TO HOMEPAGE</button></a>
					
				

			</div>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['username']; ?></td>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['event']; ?></td>
 <td><?php echo $row['mobileno']; ?></td>
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