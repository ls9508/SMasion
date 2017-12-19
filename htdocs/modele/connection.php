<?php
	require_once('db_config.php');
	//if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD))){
		//echo mysqli_error();
	//}
	//if(!mysqli_select_db('Group1')){
		//echo mysqli_error();
	//}
	/*if ($con = mysqli_connect(HOST, USERNAME, PASSWORD)){
		echo "success connection";
	}else{
		echo "fail connection";
	}*/

	$con = mysqli_connect(HOST, USERNAME, PASSWORD, 'Group1');

	//if ($con){
		//echo "success connection";
	//}

	//$db_select = mysqli_select_db('Group1',$con);

	//if(!$db_select)){
	//	 print_r(mysqli_error());
	//}
	
?>