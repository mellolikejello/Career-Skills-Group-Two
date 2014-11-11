window.onload = init;

function init() {
	window.addEventListener("resize", onResize);
}

function onResize(e) {
	var w = window.innerWidth;

	if(w < 600) {
		var nameLink = document.querySelector("#home-link");
		if(nameLink) {
			if(nameLink.textContent != "TL") {
				nameLink.textContent = "TL";
			}
		}
	} else {
		var nameLink = document.querySelector("#home-link");
		if(nameLink) {
			if(nameLink.textContent != "Tamara Leonard") {
				nameLink.textContent = "Tamara Leonard";
			}
		}
	}
}