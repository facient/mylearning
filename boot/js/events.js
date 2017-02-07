var apple=document.getElementById("apple");
var orange=document.getElementById("orange");
var banana=document.getElementById("banana");
var wate=document.getElementById("water");

apple.addEventListener("click", picLink);
orange.addEventListener("click", picLink);
banana.addEventListener("click", picLink);
wate.addEventListener("click", picLink);

function picLink () {
	var picId=this.attributes["data-img"].value;
	
	var pic=document.getElementById(picId);
console.log(pic);
	if (pic.className==="hide") {
		pic.className=" ";
	}else{
		pic.className="hide";
	}

}
var footer=document.getElementById('copy');

footer.addEventListener("click", fooli);
function fooli () {
	// body...
	var foid=this.attributes["data-p"].value;
	var fo=document.getElementById(foid);
	if(fo.className==="copy"){
		fo.className=" ";
	}else{
		fo.className="copy";
	}
}


