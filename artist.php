<!DOCTYPE html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	function valida(){

		
		var uno = !!document.forms["formulario"]["name"].value; //Esta es la representación booleana de la cadena
		if (  
			uno &&  
			(isNaN(document.forms["formulario"]["name"].value)) 
			) {
			return true;
		}else{
			return false;
		};
		
	}
</script>
<?php
include 'models.php';
$artist = isset($_GET['id'])? Artist::find($_GET['id']) : Artist::create(null);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>New Artist</title>
</head>
<body>
	

<div class="container">
<div class="jumbotron">
	<h1>Nuevo Artista</h1>
</div>
<div class="row"> <!--Sección para hacer el formulario en medio de la pantalla-->
<div class="col-md-3 col-md-offset-4 col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-4 ">
<form action="guardar_artist.php" method="POST" onsubmit="return valida()" name="formulario">
<?php if(isset($artist->ArtistId)):?>
	<label for="id">Id</label>
	<input type="text"  <?= "value='$artist->ArtistId'" ?> disabled="disabled" />
	<input type="hidden" id="id" name="id" <?= "value='$artist->ArtistId'" ?> />
	<br />
<?php endif;?>
<label for="name">Nombre</label>&nbsp;
<input type="text" id="name" name="name" <?= "value='$artist->Name'" ?> placeholder="Nombre..."/>
<br />
<hr>
<?php if(isset($artist->ArtistId)):?>
	<label for="updated_at">Acutalizado</label>
	<input type="text" id="updated_at" name="updated_at" <?= "value='$artist->updated_at'" ?> disabled="disabled"/>
	<br />
<?php endif;?>
<div >
<br>
<input type="submit" value="Guardar" class="btn btn-default" />&nbsp;
<?php if(isset($artist->ArtistId)):?>
<a class=" btn btn-default" <?= "href='borrar_artist.php?id=$artist->ArtistId'" ?>>Borrar</a>
<?php endif;?>
</div>
</form>
</div>
</div>
</div>
</body>
</html>


