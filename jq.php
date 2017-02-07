<html>
<head>
	<link rel="stylesheet" href="boot/css/bootstrap.css">
	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
<title>JQuery</title>
</head>
<body>
	<header>
		<div>
			<span>Hello</span>
		</div>
	</header>
	<main>
	<div class="container"> 
		<div class="jumbotron"> <h1>Hello, world!</h1> 
			<p>This is Jquery</p>
			<button class="button-panel" data-panelid="panel1">#btn1</button>
			<button class="button-panel" data-panelid="panel2">#btn2</button>
			<button class="button-panel" data-panelid="panel3">#btn3</button>
			<button class="button-panel" data-panelid="panel4">#btn4</button>

			 </div> 
			 </div>
	
		<div id="row">
	<div class="col-xs-3">
		<div id="panel1" style="display:none" class="panel panel-primary">
			<div class="panel-heading">
				#panel1
			</div>
			<div class="panel-body">Content
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div id="panel2" style="display:none" class="panel panel-primary">
			<div class="panel-heading">
				#panel2
			</div>
			<div class="panel-body">Content
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div id="panel3" style="display:none" class="panel panel-primary">
			<div class="panel-heading">
				#panel3
			</div>
			<div class="panel-body">Content
			</div>
		</div>
	</div>
	</div>
	<script src="boot/js/jquery.js"></script>
	<script>	
	$(function() { 
		var content="my new content awesome";
		$('.button-panel').on("click",function(){
			var panelId=$(this).attr('data-panelid');
			$('#'+panelId).toggle();
			$('#'+panelId+' .panel-body').html(content);
		});
	});
</script>
	</main>
	<footer>
		
	</footer>
	
</body>

</html>