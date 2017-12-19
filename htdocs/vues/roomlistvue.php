<?php
	require_once("../controleurs/roomlist_control.php");
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
			<li>Room List</li>
			<li><a href="sensorlistvue.php">Sensor List</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			
		</ul>
	</div>
	
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
				<h3>Room List</h3>
		</div>
		
		<div class="roomlist">
			<table border='1' id="table1">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Room Id</th>
							<th>Room Size</th>
							
							<th>User's Id</th>
							<th>App Id</th>
							
						</tr>
					</thead>
					<tbody id="table2">
						<?php
							if(!empty($data)){
								foreach($data as $value){
							
						?>
								<tr>
									
									<td><?php echo $value['RoomType']?></td>
									<td><a href="roomvue.php?roomid=<?php echo $value['RoomId']?>"><?php echo $value['RoomId']?></a></td>
									<td><?php echo $value['RoomSize']?></td>
									
									<td><?php echo $value['UserId']?></td>
									<td><?php echo $value['AppId']?></td>	
								</tr>
						<?php 
								}
							}	
						 ?>
					</tbody>
					
				</table>
				<br>
				<h2>Please click <strong>Room Id</strong> to get more detail.</h2>
		</div>
	</div>
</body>
</html>