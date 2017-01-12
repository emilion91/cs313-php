function clickMe(){
	alert("Clicked");
	}
	
function changeColor(){
	var textId = "textColor";
	var divId = "div1";
	
	var textbox = document.getElementById(textId);
	var div = document.getElementById(divId);
	
	var color = textbox.value;
	div.style.backgroundColor = color;
	
	}