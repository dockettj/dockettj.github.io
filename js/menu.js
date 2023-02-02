// -- Someone clicked the menu button
function menuToggler(el){
	// -- Check to see if the menu hasn't already been activated
	if(el.className == "hamburger_menu") {
		// -- If it hasn't been activated, add the class "active" to "menu_drawer" and "hamburger_menu."
		el.className = "hamburger_menu active";
		document.getElementById("menu_drawer").className = "active";
	} else {
		// -- If it has been activated, remove the class "active" from "menu_drawer" and "hamburger_menu." 
		el.className = "hamburger_menu";
		document.getElementById("menu_drawer").className = "inactive";
	};
};
