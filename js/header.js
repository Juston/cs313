var open = false;
function menu_animation() {
	if(!open) {
		document.body.className -= " body_slide_in";
		document.body.className += " body_slide";
		open = true;
	} else {
		document.body.className -= " body_slide";
		document.body.className += " body_slide_in";
		open = false;
	}
}