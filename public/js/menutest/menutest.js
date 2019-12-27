window.onload = function(){
         
	document.getElementsByClassName("menu-inner")[0].addEventListener("click",function(){
	document.getElementsByClassName("menu-inner")[0].classList.add("expanded");
	menuExpanded = true;
	},false);
	document.getElementsByClassName("menu-inner")[0].addEventListener("mouseleave",function(){
	document.getElementsByClassName("menu-inner")[0].classList.remove("expanded");
	menuExpanded = false;
	},false);
}
