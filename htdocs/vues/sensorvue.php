<?php
	require_once("../controleurs/sensor_control.php");
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
			<li><a href="sensorlistvue.php">Sensor List</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			
		</ul>
	</div>
	
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
			<jsp:useBean id="sensorlist_sensor" class="entity.Callback" scope="session" />
			
				<h3>Callback of Sensor<?php echo "$sensorid"?></h3>
		</div>
		
		<div class="callbackofsensor">
			<table border='1' id="table1">
					<thead>
						<tr>
							<th>Callback Id</th>
							<th>Data</th>
							<th>Callback Time</th>
							<th>Sensor Id</th>
							<th>Sensor Status</th>
							
						</tr>
					</thead>
					<tbody id="table2">
						<?php
							if(!empty($data)){
								foreach($data as $value){
							
						?>
								<tr>
									<td><?php echo $value['CallbackId']?></a></td>
									<td><?php echo $value['Data']?></td>
									<td><?php echo $value['Time']?></td>
									<td><?php echo $value['SensorId']?></td>
									<td><?php echo $value['Status']?></td>	
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