<?php 
	session_start();
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';

	require_once 'connection.php';	
	$inserted = 0;
	if (isset($_POST['prod_name'], $_POST['prod_company'], $_POST['prod_cat'], $_POST['prod_subcat'], $_POST['captcha_code'])) {

	$securimage = new Securimage();

	if ($securimage->check($_POST['captcha_code']) == false) {
		echo "The security code entered was incorrect.<br /><br />";
	  	echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
	  	exit;
	}	
	else{
		mysqli_query($con,"INSERT INTO indian_temp (name, company, contact, website, category, subcategory, comments, created_at)
		VALUES ('$_POST[prod_name]', '$_POST[prod_company]', '$_POST[prod_contact]', '$_POST[prod_web]', '$_POST[prod_cat]', '$_POST[prod_subcat]', '$_POST[prod_comments]', now())");
		$inserted =1;

		mysqli_close($con);
	}
}

echo"
<html>
	<head>";
		include 'headers.php';
        echo"</head>
	<body>";
		include 'header.php';
        if ($inserted == 1) {echo"
    <div class='statusMessageContainer'>Data added successfully, thank you!</div>
    <script>
    	addedSuccessNotification();
    </script>";}
    echo"
    <div id='content-wrapper'>
    	<h3>Submit an Indian Product</h3>
    	<p>Submit an Indian product here. Fields marked with an <span class='requiredfield'>*</span> are mandatory.</p>
    	<div class='submit-form-container'>
    		<div class='form-wrapper'>
    			<form action='submit.php' method='post' name='indian_form' onsubmit='return submitFormValidator();'>
	    			<table border='0'>
	    				<tr><td valign='middle'><label for='prod_name'><div class='requiredfield'>*</div>Product name: </label></td><td valign='middle'><input type='text' id='prod_name' name='prod_name'/></td></tr>
	    				<tr><td><label for='prod_company'><div class='requiredfield'>*</div>Brand: </label></td><td><input type='text' id='prod_company' name='prod_company'/></td></tr>
	    				<tr><td><label for='prod_contact'>Contact: </label></td><td><input type='text' id='prod_contact' name='prod_contact'/></td></tr>
	    				<tr><td><label for='prod_web'>Website: </label></td><td><input type='text' id='prod_web' name='prod_web'/></td></tr>
	    				<tr><td><label for='prod_cat'><div class='requiredfield'>*</div>Category: </label></td><td>
	    					<select id='prod_cat' name='prod_cat' onchange='submitSubCategory(this);'>
		    					<option value='Food' sid='1'>Food</option>
		    					<option value='Beverages' sid='2'>Beverages</option>
		    					<option value='Fashion and Clothing' sid='3'>Fashion and Clothing</option>
		    					<option value='Electronics' sid='4'>Electronics</option>
		    					<option value='Consumables' sid='5'>Beauty, Personal Care & Consumables</option>
		    					<option value='Two-Wheelers and Automobiles' sid='6'>Two-Wheelers and Automobiles</option>
		    					<option value='Home and Living' sid='7'>Home and Living</option>
		    					<option value='Sports and Fitness' sid='8'>Other</option>
	    					</select></td></tr>
	    				<tr><td><label for='prod_subcat'><div class='requiredfield'>*</div>Sub Category: </label></td><td>
	    					<select id='prod_subcat' name='prod_subcat'>
		    					<option value='Food' sid='1'>Biscuits</option>
		    					<option value='Food' sid='1'>Chocolates</option>
		    					<option value='Food' sid='1'>Coffee Shops</option>
		    					<option value='Food' sid='1'>Confectioneries</option>
		    					<option value='Food' sid='1'>Ice Creams</option>
		    					<option value='Food' sid='1'>Pizzerias</option>
		    					<option value='Food' sid='1'>Restaurants</option>
	    					</select></td></tr>
	    				<tr><td><label for='prod_comments'>Comments: </label></td><td><textarea id='prod_comments' name='prod_comments'></textarea></td></tr>
	    			</table>
	    			<div class='captchatext'><div class='requiredfield'>*</div>CAPTCHA: type the word in the field below.</div>
	    			<img id='captcha' src='/securimage/securimage_show.php' alt='CAPTCHA Image' />
	    			<input type='text' class='captchabox' id='captchabox' name='captcha_code' size='10' maxlength='6' />
	    			<input type='submit' value='Submit'/>
    			</form>
    		</div>
    	</div>
    </div>
    </body>";
?>