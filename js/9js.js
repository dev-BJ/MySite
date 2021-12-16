
//date

function date() {
	var disp = document.querySelector("#date");
	var date = new Date();

	var _date = date.toLocaleDateString() + "~" + date.toLocaleTimeString();
	disp.innerHTML = _date;

}

//greet
function greet() {
	var disp2 = document.querySelector("#greet");
	var date2 = new Date();
	var hour = date2.getHours();
	if (hour < 12) {
		disp2.innerHTML = "Morning";
	} else if (hour <= 16) {
		disp2.innerHTML = "Afternoon";
	} else if (hour <= 19) {
		disp2.innerHTML = "Evening";
	} else {
		disp2.innerHTML = "Goodnight";
	}
}

var xhr;

function ajax(d) {
	console.log(d);
	xhr = new XMLHttpRequest();
	var link = d.file;
	var first = false;
	var resp,p;
	for (i in d.data) {
		if (d.data.hasOwnProperty(i)) {
			p+=(first ? "&" : "") + i + "=" + d.data[i];
		}
		first = true;
	}console.log(p)

	xhr.onreadystatechange = function() {
		if(xhr.readyState=="4" && xhr.status=="200"){
			d.done(xhr.responseText);
			//document.write(xhr.getAllResponseHeaders()+"<br >");
			}
			else{
				d.done("<img class='l' src='../ajax/loader/ajax-loader.gif' height='100' width='400' />");
			}
	};
	p = p.substring(p.length, 9);
	console.log(p)
	xhr.open("post", link, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(p);
}

function check(str) {
	if (typeof str == "string") {
		if (/[a-zA-Z]+/.test(str)) {
			ajax( {
				file : "../ajax/check.php",
				data : {
					data : str
				},
				cb : function(resp) {
					get("#rid").innerHTML = resp;
				}
			});
		} else {
			get("#rid").innerHTML = "bad format";
		}
	} else {
		get("#rid").innerHTML = "bad format";
	}
}

function p(int) {
}

function checked(el) {
	alert(el);
}
