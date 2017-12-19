<?php 
include 'homecontrol.php';

$require=mysqli_query($conn,"select username from users where idusers='$userid'");
$username=mysqli_fetch_array($require,MYSQLI_NUM);

$sql = mysqli_query($conn,"SELECT * from (select type,avg(DATA) from `callback`LEFT JOIN`sensors` ON callback.SENSORID = sensors.id group by type) AS P WHERE P.type = 1");
$sql1 = mysqli_query($conn,"SELECT * from (select type,avg(DATA) from `callback`LEFT JOIN`sensors` ON callback.SENSORID = sensors.id group by type) AS P WHERE P.type = 2");

$avetemp = mysqli_fetch_array($sql,MYSQLI_BOTH);

$avehumi = mysqli_fetch_array($sql1,MYSQLI_BOTH);
  ?>