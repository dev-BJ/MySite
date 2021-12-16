
var dialog, win, v;
$.fn.img=function(){
	this.html();
};

$(document).ready(function() {
	dialog = document.createElement("div");
	win = document.createElement("span");
	dialog.setAttribute("class", "dialog");
	win.setAttribute("class", "win");
	dialog.appendChild(win);
	v = $(".view");
	for ( var i = 0; i < v.length; i++) {
		v[i].onclick = function() {
			view(v.attr("id"));
		};
	}
});

function view(el) {
	event.preventDefault();
	ajax({
		file : "../ajax/view.php",
		data:{pid:el},
		done:stdout
	});
}

function stdout(resp) {
	document.body.appendChild(dialog);
	win.innerHTML = resp;
	dialog.style.display = "block";
}

function cancel() {
	dialog.style.display = "none";
}