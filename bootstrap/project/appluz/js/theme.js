
// Nav Js //
window.onscroll= function(){
	var currentScrollValue = window.pageYOffset;
	if(currentScrollValue < 400){
		document.getElementById('main-nav').classList.remove('affix-main-nav');
		document.getElementById('main-nav').classList.add('position-absolute');
		document.getElementById('main-nav').style.top = '0';
	}else if(currentScrollValue >= 400 && currentScrollValue < 700){
		document.getElementById('main-nav').style.top = '-115px';
	}else if(currentScrollValue >= 700){
		document.getElementById('main-nav').classList.remove('position-absolute');
		document.getElementById('main-nav').classList.add('affix-main-nav');
		document.getElementById('main-nav').style.top = '0';
	}
}