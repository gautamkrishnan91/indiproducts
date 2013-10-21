<?php  
	//require_once 'connection.php';	
	//$con = mysqli_connect("mysql2.000webhost.com","a3538007_geekay","gautam123","a3538007_indiant");
	//$con = mysqli_connect("sql102.byethost11.com","b11_13826268","6fb371qx","b11_13826268_products_store");
	//$con = mysqli_connect("localhost","root","","products_store");		
echo"
<html>
	<head>";
		include 'headers.php';
        echo"
	</head>
	<body>";
		include 'header.php';
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
				    				<tr><td valign='middle'><label for='prod_name'>Your name: </label></td><td valign='middle'><input type='text' id='prod_name' name='prod_name'/></td></tr>
				    				<tr><td><label for='prod_company'>Email Address: </label></td><td><input type='text' id='prod_company' name='prod_company'/></td></tr>
				    				<tr id='involveCommentText'><td><label for='prod_comments'>Comments: </label></td><td><textarea id='prod_comments' name='prod_comments'></textarea></td></tr>
				    			</table>
				    			<div class='addComment' id='addComment' onClick='showCommentBox();'>Add a comment? (Optional)</div>
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