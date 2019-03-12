<html>
	<script src = "assets/js/jquery-3.3.1.min.js"></script>
	<body class= "body" style= "background:white">
	<center style= "padding-top: 30px">
	<style>
	.div1, .div2, .div3
	{
		min-height: 100px;
		min-width: 100px;
		padding: 20px;
		float: left;
	}
	.div1, .div3{border: solid blue 2px;}
	</style>
		<div class = "div2">
			<div class="div1">`
				<div class="div1">
					<div class="div1">
						<div class="div1">
							<div class="div3"><img  id= "myimg"src= 'assets/image2/IMG-20150129-WA0004.jpg'>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</center>
		<script>
		var a = 1;
		setInterval(function()
				{ 
				$('.div2').css ('transform', 'rotate('+a+'deg)');
				a++; 
				}
				,1000);
	</script>
	</body>
</html>