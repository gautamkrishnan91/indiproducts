$( document ).ready(function() {
    getHeader();
});

function getHeader(){
	$('#menubar ul li').removeClass("menu-select");
	var pageName = document.getElementById('setPageName').innerHTML;
	if (pageName == 'index.php'){
		$("#mainHomepage").addClass("menu-select");
	}
	if (pageName == 'submit.php'){
		$("#mainSubmitPage").addClass("menu-select");
	}
	if (pageName == 'feedback.php'){
		$("#mainFeedbackPage").addClass("menu-select");
	}
	if (pageName == 'getinvolved.php'){
		$("#mainGetInvolved").addClass("menu-select");
	}
	if (pageName == 'brands.php'){
		$("#mainBrands").addClass("menu-select");
	}
}