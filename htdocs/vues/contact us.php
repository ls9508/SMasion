<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "aydro11@icloud.com";
    $email_subject = "Your email subject line";
    
    function died($error) {
        
        echo "There is an error found with the form you submitted. ";
        echo $error."<br /><br />";
        echo "Please check the information you entered.<br /><br />";
        die();
    }
    // validation expected data exists
    if( !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  }
  if(strlen($error_message) > 0) {
    died($error_message);
    echo "Thank you for contacting us. We will be in touch with you very soon";
 ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact us</title>
        <link rel="stylesheet" type="text/css" href="css_default.css">
     </head>

    <header>
    </header>

    <nav>
    				
	<div class="menu_background"></div>
	<div class="menu">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="roomlist.html">Room List</a></li>
			<li><a href="sensorlist.html">Sensor List</a></li>
			<li>About Us</li>
			
		</ul>
	</div>
    </nav>

    	<body>
    	<style>
           html{
           background:url('background.jpg')no-repeat;
           background-size: cover;
           }
        </style>
    		<p>
			<main>
				
			<section>
				
				<h2 align="middle">We get in touch and together we go farther</h2>

				<form name="contactform" method="post" action="send_form_email.php">
<table align=middle width="450px">
<tr>
 <td valign="top">
  <label align=middle for="first_name">First Name</label>
 </td>
 <td valign="top">
  <input  type="text">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label align=middle for="last_name">Last Name</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label align=middle for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="int" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Please write you message here</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit"> 
 </td>
</tr>
</table>
</form>
		
						
			</section>
	
			<div class="clear"></div>
		
		                     <p> <br/> <br/> <br/> <br/> </p>
    	</body>



    	<footer>

    		<div align="right" id="socials">
    		    <a><img src="sociaux.png" alt="social" 
    		    style="width:300px;height:50px;"/></a>
                

        	</div>
          
        	<div style="color:black;" align="right"
        	     class="copyright">&copy;  all rights reserved©️SMAISON
        	</div>

    	</footer>

</html>
<?php
 
}
?>