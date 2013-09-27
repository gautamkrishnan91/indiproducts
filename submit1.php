<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
 
$securimage = new Securimage();

if ($securimage->check($_POST['captcha_code']) == false) {
	echo "The security code entered was incorrect.<br /><br />";
  	echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  	exit;
}
else echo "Hello";
?>