<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

	<script>
	$(document).ready(function(){
		$('#btn').click(function(){
			$('#dialog').dialog(
			{
				width: 800,
				modal: true
			}

				);
		});
		$('#btn').click(function(event){
			$.get("track.php",function(data){
				$('#dialog').html(data);
				$('#dialog').dialog("open");
			})
		})
	});

	</script>
	<title>Modal example</title>
</head>
<body>
<div class="container">
	<button id="btn">Abrir Dialog</button>
	<div id="dialog"></div>	
</div>
	
</body>
</html>