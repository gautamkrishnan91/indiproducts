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
}