let navbar = document.querySelector(".navbar");

window.onscroll = function(){
	scrollFunction();
}

function scrollFunction(){
	if (document.body.scrollTop>20|| document.documentElement.scrollTop >20){
		navbar.classList.add("navbar-fixed");
	}else{
		navbar.classList.remove("navbar-fixed");
	}
}