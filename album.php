<!DOCTYPE html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">

</script>
<?php
include 'models.php';
$album = isset($_GET['id'])? Album::find($_GET['id']) : Album::create(null,1);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>New Album</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Nuevo Album</h1>
			<p></p>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-4 col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-4 ">
				
<form action="guardar_album.php" method="POST">
<?php if(isset($album->AlbumId)):?>
	<label for="id">Id</label>
	<input type="text"  <?= "value='$album->AlbumId'" ?> disabled="disabled" />
	<input type="hidden" id="id" name="id" <?= "value='$album->AlbumId'" ?> />
	<br />
<?php endif;?>
<label for="title">Titulo</label>
<input type="text" id="title" name="title" <?= "value='$album->Title'" ?> />
<br />
<label for="artist">Artista</label>
<select id="artist" name="artist">
	<?php foreach(Artist::all(10000) as $artist):?>
  	<option <?= "value='$artist->ArtistId'" ?> <?= (isset($album->AlbumId)&&($artist->ArtistId==$album->Artist->ArtistId))?" selected ":""?>><?= $artist->Name?></option>
  	<?php endforeach;?>
</select>
<br />
<?php if(isset($album->AlbumId)):?>
	<label for="updated_at">Acutalizado</label>
	<input type="text" id="updated_at" name="updated_at" <?= "value='$album->updated_at'" ?> disabled="disabled"/>
	<br />
<?php endif;?>
<input type="submit" value="Guardar"/>
</form>
<?php if(isset($album->AlbumId)):?>
	<a <?= "href='borrar_album.php?id=$album->AlbumId'" ?>>Borrar</a>
<?php endif;?>
			</div>
		</div>
	</div>

</body>
</html>
