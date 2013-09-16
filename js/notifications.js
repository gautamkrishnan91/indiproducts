function addedSuccessNotification(){
	$('.statusMessageContainer').slideDown(500);
    	setTimeout(function(){
	   	$('.statusMessageContainer').slideUp(500);
		}, 4000);
}