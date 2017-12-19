<?php
	require_once("../controleurs/sensorlist_control.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<link type="text/css" rel="stylesheet" href="../vues/css/css_default.css">
<body>
<!-- logo -->
	<div class="logo"></div>
	<hr />

	<!-- menu -->
	<div class="menu_background"></div>
	<div class="menu">
		<ul>
			<li><a href="homevue.php">Home</a></li>
			<li><a href="roomlistvue.php">Room List</a></li>
			<li>Sensor List</li>
			<li><a href="aboutus.php">About Us</a></li>
			
		</ul>
	</div>
	
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
				<h3>Room List</h3>
		</div>
		
		<div class="sensorlist">
			<table border='1' id="table1">
					<thead>
						<tr>
							<th>Sensor Id</th>
							<th>User Id</th>
							<th>Sensor Type</th>
							<th>Room Id</th>
							<th>Sensor Name</th>
							
						</tr>
					</thead>
					<tbody id="table2">
						<?php
							if(!empty($data)){
								foreach($data as $value){
							
						?>
								<tr>
									<td><a href="sensorvue.php?sensorid=<?php echo $value['SensorId']?>"><?php echo $value['SensorId']?></a></td>
									<td><?php echo $value['UserId']?></td>
									<td><?php echo $value['SensorType']?></td>
									<td><?php echo $value['RoomId']?></td>
									<td><?php echo $value['SensorName']?></td>	
								</tr>
						<?php 
								}
							}	
						 ?>
					</tbody>
					
				</table>
				<br>
		</div>
	</div>
</body>
</html>