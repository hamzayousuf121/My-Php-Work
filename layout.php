<html>
<head>
<title>
Home
</title>
<link href="assets/css/reset.css" type="text/css" rel="stylesheet">
<link href="assets/css/style.css" type="text/css" rel="stylesheet">
<script src="./assets/dmauro-Keypress-70a58fb/keypress-2.1.5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$("#btn1").mouseenter(function(){
			$(".clrchange").css({background:"green"});	
			$("h1").mouseenter(function(){
			$(".left-content img").fadeIn();	
			$(".left-content img").css("color", "orange").slideUp(3000).slideDown(3000);
			$(".effect").css("color", "white").slideUp(1000).slideDown(3000);
			});
			$("#btn2").mouseenter(function(){
			$(".clrchange").css({background:"red"});
			});
			 $("#btn2").mouseenter(function(){
				$(".left-content img").slideUp(5000).slideDown(5000);
				$(".effect").slideUp(1000).slideDown(5000);
				});
			$(".left-content").fadeOut();			
			$(".left-content").animate({left:"50px"});			
			});
			$("#btn3").mouseenter(function(){
			$(".clrchange").css({background:"yellow"});	
			$(".left-content").animate({right:"50px"});			

			});
			$("#btn4").mouseenter(function(){
			$(".clrchange").css({background:"orange"});	
			$(".left-content").animate({top:"50px"});
			$(".effect").css("color", "pink").slideUp(1000).slideDown(1000);
			$(".left-content").animate({bottom:"50px"});	
			$(".effect").css("color", "gray").slideUp(000).slideDown(5000);
			});
			$("#btn5").mouseenter(function(){
			$(".clrchange").css({background:"aqua"});	
			$(".left-content").fadeIn();
			$(".effect").css("color", "yellow").slideUp(4000).slideDown(4000);
			});
		});
</script>

</head>
<body>
<div id="wrapper">
<div id="header" class="clrchange" class="clearfix">
	<div class="logo">
		<img src="assets/images/logo.jpg" alt="LOGO" title="Logo">
	</div>
	<div class="header-right" class="clrchange">
	<ul class="effect">
	<li class="effect" title="link"><a href="index.php">Home</a></li>
	<li class="effect"title="link"><a href="#">writing&teaching </a></li>
	<li class="effect"title="About company"><a href="about.php">about</a></li>
	<li title="link"class="effect"><a href="#">shop</a></li>
	</ul>
	</div>
</div>
<div id="main-content" class="clearfix">
		<div class="left-content">
		<img src="assets/images/catapple.jpg" alt="cat apple laptop1"title="cat using apple laptop">
		</div>
		<div class="right-content"class="clrchange">
	<h1>You haz found teh 404 page</h1>
<p class="clrchange"><span>The page you are looking for </span>does not exist.Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a conven lorem ipsum dollar east
pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a conven lorem ipsum dollar east .This is the demo website.
 .This is the demo website.</p>
 <button id="btn1">green</button>
 <button id="btn2">red</button>
 <button id="btn3">yellow</button>
 <button id="btn4">orange</button>
 <button id="btn5">aqua</button>
 
</div>
</div>
<div id="footer"class="clrchange"class="effect">
<div class="footer-top"class="clrchange" class="effect"><p class="clrchange" class="effect"style="padding:10px">All work &copy; duaa welfare international trust</p>
<div class="footer-bottom"class="clrchange"class="effect">
</div></div>
</div>
<script>
	$(document).ready(function(){
	var listener = new window.keypress.Listener();
    listener.simple_combo(". r", function() {
	$(".clrchange").css({background:"red"});	
	});
	 });
	 var listener = new window.keypress.Listener();
	 listener.simple_combo(". g", function() {
	$(".clrchange").css({background:"green"});	
	});
	var listener = new window.keypress.Listener();
	listener.simple_combo(". y", function() {
	$(".clrchange").css({background:"yellow"});	
	});	
	var listener = new window.keypress.Listener();
	listener.simple_combo(". b", function() {
	$(".clrchange").css({background:"blue"});	
	})
	var listener = new window.keypress.Listener();
	listener.simple_combo(". o", function() {
	$(".clrchange").css({background:"ORANGE"});	
	})
	var listener = new window.keypress.Listener();
	listener.simple_combo("s l", function() {
	$(".left-content").slideUp(1000).slideDown(5000);
	});
	var listener = new window.keypress.Listener();
	listener.simple_combo("o u t", function() {
	$("#wrapper").fadeOut();
	});
	var listener = new window.keypress.Listener();
	listener.simple_combo("i n", function() {
	$("#wrapper").fadeIn();
	});


	 </script>
</body>
</html>