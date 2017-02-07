<html>
	<head>
		<link rel="stylesheet" href="boot/css/bootstrap.css">
		<link rel="stylesheet" href="boot/css/bootstrap.min.css">

		<title>
			
		</title>
	</head>
	<body>
		<header>
			
		</header>
		<main>
			<div class="container">
				<div class="jumbotron">
					<h1 id="hdid1"class="hd1" data-hd="hdd1">Heading</h1>
					<p>This is Details</p>
					<button class="bttn1" data-bttnid="panel1">Button1</button>

					<button class="bttn1" data-bttnid="panel2">Button2</button>
					<button class="bttn1" data-bttnid="panel3">Button3</button>
					<button class="bttn1" data-bttnid="panel4">Button4</button>
					<button class="btnclick">Click Me</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
			<div id="panel1" class="panel panel-primary">
				<div class="panel-heading">PANEL1
				</div>
				<div class="panel-body">
					This is Content
				</div>
			</div>
			</div>
			<div class="col-xs-3" style="padding:0px">
			<div id="panel2" class="panel panel-primary">
				<div class="panel-heading">PANEL1
				</div>
				<div class="panel-body">
					This is Content
				</div>
			</div>
			</div>
			<div class="col-xs-3" style="margin:0px">
			<div id="panel3" class="panel panel-primary">
				<div class="panel-heading">PANEL1
				</div>
				<div class="panel-body">
					This is Content
				</div>
			</div>
			</div>
			<div class="col-xs-3" style="padding:0px">
			<div id="panel4" class="panel panel-primary">
				<div class="panel-heading">PANEL1
				</div>
				<div class="panel-body">
					This is Content
				</div>
			</div>
			</div>
			</div>
		</main>
	<footer style="background:blue;color:black;margin-left:20px">
		<p style="margin-left:20px;background:black;color:white;">&copy &amp 2016</p>
	</footer>
	<script src="boot/js/jquery.js"></script>
	<script>	
		$(function(){
			var cnt="This is new";
			$('.bttn1').on("click",function(){
				var panelId=$(this).attr('data-bttnid');

				$('#'+panelId).toggle(1000);
				$('#'+panelId+' .panel-body').html(cnt);
			}); 
			$(' .hd1').on("click",function(){
				var hd1=$(this).attr('data-hd');
				$(' .'+hd1+' .hd1').html('this is heading');
			});
		});
		$(document).ready(function(){
			$(' .btnclick').on('click', function(){
				alert('You Click');
			});
		});
	</script>
	</body>

</html>