window.onload = init;
window.onscroll = onScrolled;

var didScroll = false;

function init() {
	initSlider();
	setInterval(function() {
		if(didScroll) {
			didScroll = false;
			var header = document.querySelector("header");
			//var headerHeight = window.getComputedStyle(header).height.slice(0,-2);
			if(window.scrollY >= (0.95 * window.innerHeight)) {
				if(header.getAttribute("id") == "static-header") {
					header.setAttribute("id", "sticky-header");
				}
			} else {
				if(header.getAttribute("id") == "sticky-header") {
					header.setAttribute("id", "static-header");
				}
			}
		}
	}, 100);
	
}

function onScrolled(evt) {
	didScroll = true;
}