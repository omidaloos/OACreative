//nav mods
/*
var navContainer = document.getElementById("nav");
var navBtns = navContainer.getElementsByClassName("navBtn");
for (var i = 0; i < navBtns.length; i++) {
  navBtns[i].addEventListener("click", function() {
	  var current = document.getElementsByClassName("active");
	  current[0].className = current[0].className.replace(" active", "");
	  this.className += " active";
  });
}
*/

/*
document.getElementsByClassName("navBtnv").onclick = function highlightNav() {
	this.classList.removeClass(" active");
	this.classList.addClass(" active");
};
*/

for (var i = 0; document.links.length; i++) {
	if (document.links[i].href.value == document.URL) {
		document.links.className = "active";
	};
};