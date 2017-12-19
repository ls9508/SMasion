<?php
	//connect the database with username and password
	//$userid = ($_POST['userid']);  
	//$password = ($_POST['pwd']);
	require_once ('connection.php');

	$query = "select Username, Userid from user where Username='$username' and Password='$password' limit 1";

	$res= mysqli_query($con,$query);
	
	$result = mysqli_fetch_array($res,MYSQLI_NUM);
	

	//var_dump($result);

	//$username = $result[0];
	//$userid = $result[1];
	////echo "$username";
	//echo "$userid";
	/*if(!$result = mysqli_fetch_array($checkquery,MYSQLI_NUM)){
		exit('login failed <a href="javascript:history.back(-1);">return</a> retry');
    
	} else {
    	session_start();
    	$_SESSION['userid'] = $userid;
    	$_SESSION['username'] = $username;
        //header("location:../vues/homevue.php");
        echo "<script>window.location.href='../vues/homevue.php'</script>";
    //}*/
    
?>