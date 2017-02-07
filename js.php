<!doctype html>
<html class="no-js">
	<head>
		<title>JS</title>
		<meta name="decription" content="">
		<meta name="viewport" content="">	
		<link href="style/main2.css" rel="stylesheet"/>
		<!-- <link href="boot/css/bootstrap.css" rel="stylesheet"/> -->
		
	</head>
	<body>
		<div class="conatiner">
		<main><h1>Javascript Events on Images on Footer</h1>
			<p>Paragraph</p>
			<p>Paragraph second</p>
		<h3>Lists</h3>
		<ul>
			<li><a data-img="app" href="#" id="apple">Apples</a></li>	
			<li><a data-img="org" href="#" id="orange">Oranges</a></li>
			<li><a data-img="ban" href="#" id="banana">Bananas</a></li>
			<li><a data-img="wat" href="#" id="water">Watermelon</a></li>
		</ul>
		<img src="img/27-1.jpg"alt="" class="hide" id="app">
		
		<img src="img/36.jpg"alt="" class="hide" id="org">
		<img src="img/20-1.jpg"	alt="" class="hide" id="ban">
		<img src="img/20-1.jpg"	alt="" class="hide" id="wat">

		<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Orange-Whole-%26-Split.jpg" 
		alt="" class="hide" id="org">
		<img src="http://www.bbcgoodfood.com/sites/default/files/glossary/banana-crop.jpg"
		 alt="" class="hide" id="ban">
		<img src="https://www.organicfacts.net/wp-content/uploads/2013/05/watermelon2.jpg"
		 alt=""class="hide" id="wat"> -->
		</main>
		<br>
		<h4>Addnumbers</h4>
			<p>
				<input id="numone">+<input id="numtwo">
			</p>
			<p id="addsum"></p>
		</h4>
		<footer  id="copy" data-p="coy">
			<p class="copy" id="coy">CopyRight &amp 2015</p>
		</footer>
		</div>
	<script src="boot/js/events.js"></script>
		
		
	</body> 
</html>