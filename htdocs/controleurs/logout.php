<?php
	if($_GET['action'] == "logout"){
    session_start();
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'disconnected <a href="../vues/loginvue.php">login</a>';
    exit;
}  

?>