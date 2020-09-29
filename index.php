<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		#respuesta {
			display: none;
			border: 1px solid red;
			width: 50%;
			margin: 0 auto;
			background: #555;
			font: 'Arial';
			font-size: 32px;
			text-align: center; 
			color: #fff; 
			font-weight: bold; 
			height: 100px; 
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<button id="btnClick">Click</button>
	<div id="respuesta"></div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<script>
		$('#btnClick').click(function(event) {
			/* Act on the event */

			$.ajax({
				url: 'router.php',
				type: 'POST',
				dataType: 'json',
				data: {function: 'saludar'}
			})
			.done(function(data) {
				$.each(data, function(index, el) {
					console.log(el);
					$('#respuesta').show('fast').text(el);	
				});
				

			})
			.fail(function() {
				alert(":( Error");
			});
			
		});
	</script>
</body>
</html>