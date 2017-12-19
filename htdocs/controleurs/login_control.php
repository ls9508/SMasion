<?php
	//require_once('../controleurs/connection.php');
	
	//if(!(isset($_POST['userid'])&&(!empty($_POST['userid'])))){
		//echo 'error userid & password';
		//echo "<script>alert('error userid & password!');window.location.href='../vue/loginvue.php'";
	//}
	//require_once("../modele/login_conn.php");
	$username = $_POST['username'];  
	$password = $_POST['pwd'];

	//var_dump($username);
	//var_dump($password);
	require_once("../modele/login_conn.php");

	
	//$result = mysqli_fetch_array($checkquery,MYSQLI_NUM;
	//$username = $result[0];
	//$userid = $result[1];
	//echo "$username";
	//var_dump($result);
	//var_dump ($userid);
	//echo "$password";

	//if(!$result = mysqli_fetch_array($checkquery,MYSQLI_NUM)){
		//exit('login failed <a href="javascript:history.back(-1);">return</a> retry');

		//} else {
    	session_start();
    	$_SESSION['userid'] = $userid;
    	$_SESSION['username'] = $username;
    	//ob_start();
    	//header('HTTP/1.1 301 Moved Permanently');
       // header('Location:homevue.php');
        //exit();
        echo "<script>window.location.href='../vues/homevue.php';</script>";
        //$url = "location:../vues/homevue.php";  
		//echo "<!DOCTYPE html><html><body><script language='javascript'type='text/javascript'>";  
		//echo "window.location.href='location:../vues/homevue.php'";  
		//echo "</script></body></html>";
    //}
?>