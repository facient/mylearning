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

