window.onload = init;
window.onscroll = onScrolled;

var didScroll = false;

function init() {
	setInterval(function() {
		if(didScroll) {
			didScroll = false;
			var header = document.querySelector("header");
			if(window.scrollY >= (0.95 * window.screen.availHeight)) {
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