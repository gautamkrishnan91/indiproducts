<?php  
	session_start();
	include_once '/home/vol11_1/byethost11.com/b11_13826268/htdocs/securimage/securimage.php';
	
	require_once 'connection.php';	
	$inserted = 0;
	
	if (isset($_POST['involved_name'], $_POST['involved_email'], $_POST['captcha_code'])) {

	$name = check_input($_POST['involved_name']);
	$email = check_input($_POST['involved_email']);
	$comments = check_input($_POST['involved_comment']);

	$securimage = new Securimage();

	if ($securimage->check($_POST['captcha_code']) == false) {
		echo "The security code entered was incorrect.<br /><br />";
	  	echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
	  	exit;
	}	
	else{
		mysqli_query($con, "INSERT INTO getinvolved (name, email, comments)
		VALUES ('$name', '$email', '$comments')");
		$inserted =1;

		mysqli_close($con);
	}
}
echo"
<html>
	<head>";
		include 'headers.php';
        echo"
	</head>
	<body>";
		include 'header.php';
		if ($inserted == 1) {echo"
	    <div class='statusMessageContainer'>Data added successfully, thank you!</div>
	    <script>
	    	addedSuccessNotification();
	    </script>";}
        echo"
 		<div id='content-wrapper'>
 			<div class='feedback-wrapper'>
 				<h3>Do your part for the country. Join the revolution.</h3>	
 				<div class='feedback-content'>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae augue lacus. In hac habitasse platea dictumst. Curabitur quam felis, porta sit amet molestie vitae, vehicula ut purus. Aliquam at orci augue. Aenean a ipsum eu est consectetur ullamcorper eu porta massa. Curabitur id lacus ante. Proin iaculis quam et est porta, at sodales nisi tempor. Sed at sem eu sem fringilla rutrum sit amet ac mi.</p>
					<p>Aliquam consequat tristique posuere. Sed risus felis, tempus eu neque eu, sodales lacinia elit. Sed eu nisl auctor, convallis nibh a, lacinia elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris tempor facilisis erat imperdiet varius. Suspendisse placerat tincidunt ultricies. Aenean est dui, consectetur quis dolor et, convallis elementum magna. Fusce adipiscing, tellus ullamcorper blandit porta, lectus eros euismod arcu, non lobortis massa diam a sem. Nulla porta non erat sit amet tincidunt. Aenean et placerat odio. Donec turpis nulla, congue id ultrices volutpat, facilisis a dolor. Maecenas rutrum velit vitae massa porttitor, quis congue dui adipiscing. Cras fringilla magna quis nisi vestibulum, ac rutrum purus lobortis. Phasellus euismod mollis tincidunt. Donec feugiat id justo accumsan aliquet. Etiam convallis nisi eu ipsum facilisis tincidunt.</p>
 					<div class='submit-form-container'>
 						<div class='form-wrapper'>
		 					<form action='getinvolved.php' method='post' name='getinvolved_form' onsubmit='return getInvolvedFormValidator();'>
		 						<table border='0'>
				    				<tr><td valign='middle'><label for='involved_name'>Your name: </label></td><td valign='middle'><input type='text' id='involved_name' name='involved_name'/></td></tr>
				    				<tr><td><label for='involved_email'>Email Address: </label></td><td><input type='text' id='involved_email' name='involved_email'/></td></tr>
				    			</table>
				    			<div class='addComment' id='addComment' onClick='showCommentBox();'>Add a comment? (Optional)</div>
				    			<table border='0' id='getInvolvedTable2'>
				    				<tr id='involveCommentText'><td><label for='involved_comment'>Comments: </label></td><td><textarea id='involved_comment' name='involved_comment'></textarea></td></tr>
				    			</table>
				    			<div class='getinvolvedfooter'>
					    			<div class='captchatext'><div class='requiredfield'>*</div>CAPTCHA: type the word in the field below.</div>
					    			<img id='captcha' src='/securimage/securimage_show.php' alt='CAPTCHA Image' />
					    			<input type='text' class='captchabox' id='captchabox' name='captcha_code' size='10' maxlength='6' />
					    			<input type='submit' value='Submit'/>
				    			</div>
		 					</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
        ";
?>