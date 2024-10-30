window.onscroll = function() {scroll_window()};
function scroll_window() {
	if (document.getElementById("scroll") || document.getElementById("scrollhid")) {
		if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
			document.getElementById("scroll").id = "scrollhid";
		}else if (document.body.scrollTop < 1000 || document.documentElement.scrollTop < 1000) {
			document.getElementById("scrollhid").id = "scroll";
		}else {

		}
	}
}

function csshow() {
	var x = document.getElementById("customdiv");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}

function csshow2() {
	var x = document.getElementById("rolllc");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}

function csshow3() {
	var x = document.getElementById("rollsoc");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {

	}
}
function csshow7() {
	var x = document.getElementById("rolltxt");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}
function csshow4() {
	var x = document.getElementById("rollsize");
	var z = document.getElementById("arim");
	var y = document.getElementById("arim2");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}
function csshow5() {
	var x = document.getElementById("rolldes");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}
function csshow6() {
	var x = document.getElementById("rollanim");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else if (x.style.display == "block") {
		x.style.display = "none";
	}else {
		
	}
}