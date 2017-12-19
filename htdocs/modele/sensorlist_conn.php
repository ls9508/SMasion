<?php
	require_once ('connection.php');
	
	$query = "select SensorId,UserId,SensorType,RoomId,SensorName from Group1.Sensor";
	$res = mysqli_query($con,$query);
	
	if ($res && mysqli_num_rows($res)){
		while ($row = mysqli_fetch_assoc($res)){
			$data[] = $row;
		}
	}else{
		$data[] = array();
	}
	//$result = mysqli_fetch_array($res,MYSQLI_NUM);
	//var_dump($data);
	//foreach($data as $value);
	//var_dump($value);
?>