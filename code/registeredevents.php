<?php
    session_start();
	require_once('dbconfig/config.php');
	?>

<!DOCTYPE html>
<html>
<head>
 <title>registering events</title>
 <link rel="stylesheet" href="css/style.css">

 
</head>
<body>
<div id="main-wrapper">
	<center><h2>EVENTS REGISTRATION</h2></center>
		<form action="registeredevents.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
<div class="inner_container">
				<label><b>name</b></label>
				<input type="text" placeholder="Enter name" name="name" required>
				<label><b>event</b></label>
				<input type="text" placeholder="Enter event" name="event" required>
				<label><b>mobileno</b></label>
				<input type="text" placeholder="Enter mobileno" name="mobileno" required>
				<button name="submit" class="sign_up_btn" type="submit">REGISTER</button>
				
				<a href="events.php"><button type="button" class="back_btn"><< Back to events</button></a>
			</div>
<
</form>



<?php

  $name = filter_input(INPUT_POST, 'name');
 $event = filter_input(INPUT_POST, 'event');
 $mobileno = filter_input(INPUT_POST, 'mobileno');
$user=$_SESSION['username']; 
 if (!empty($name)){
                       if (!empty($event)){
						                       if (!empty($mobileno)){
	                                         
                                                                          $host = "localhost";
                                                                          $dbusername = "tsh";
                                                                          $dbpassword = "tsh";
                                                                          $dbname = "samplelogindb";

                                                                            // Create connection
                                                                           $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
																		   

                                                                          if (mysqli_connect_error()){
                                                                                                     die('Connect Error ('. mysqli_connect_errno() .') '
                                                                                                                            . mysqli_connect_error());
                                                                                                    }
                                                                                                    else
																									{
																										
																										$query = "select * from events where event='$event' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
			
					
				
																					
                                                                                                        $sql = "INSERT INTO registeredevents (username,name, event, mobileno)
                                                                                                                       values ('$user','$name','$event','$mobileno')
																													   
																											
																													   
																													   
																													   
																													   
																													   
																													   ";
                                                                                                        if ($conn->query($sql)){
					                                                                               echo "you have registered  sucessfully";
					}
					}
					else
					{
						echo "enter correct event";
					}
				}                                                                                       else{
                                                                                                                         echo "Error: ". $sql ."
                                                                                                                             ". $conn->error;
                                                                                                                     }
																													 
                                                                                                       $conn->close();
                                                                                                              }
                                                                              }
					   
					   else
					   {
						   echo "mobile no should not be empty";
							die();
					   }
					   }
					   
						   else{
                                                                                 echo "Password should not be empty"; 
                                                                                      die();
                                                                                }
 }
 else{
  echo "name should not be empty";
  die();
 }
 ?>
 </body>
 </html>