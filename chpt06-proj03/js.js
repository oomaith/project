
	var x = document.querySelectorAll(".one");
	console.log(x[0]);
	for(var i=0; i<x.length; i++){
		
		
		//attach it to html
		
		x[i].addEventListener("mouseover", jsmouseOver);
		
		x[i].addEventListener("mouseout", jsmouseOut);
	}
	

function jsmouseOver(){
console.log(this.src);

	var h = document.createElement("span");
var s= this.src;
		
		h.innerHTML= '<img src="images/1l.jpg"/>';
		this.parentNode.appendChild(h);
 ;
}
function jsmouseOut(){console.log("out")}