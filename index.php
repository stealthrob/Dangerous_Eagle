
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	
	<link rel="icon" href="favicon.ico" type="favicon.ico" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>Dangerous Eagle</title>
</head>
<body>
	<?php
include 'models.php';
?>
<br>
<div class="nav">
	<div class="container">
		<ul class="nav nav-pills pull-right">
	<li ><a href="track.php" >Nuevo Track</a></li>
	<li><a href="album.php" >Nuevo Album</a></li>
	<li><a href="artist.php" >Nuevo Artista</a></li>
</ul>
	</div>
</div>
<br>
<div class="jumbotron" style="background-image: url('indeximage.png');">
	<div class="container" >
		<div class="jumbotron" style="background-color: white;">
<h1>Dangerous Eagle Track System</h1>
<br>
<p>The best track system ever!</p>

</div>
	</div>
</div>
<div class="container">
<br>
<div class="table-responsive">
<table class="table table-hover">
<tr>
		<th>Nombre</th>
		<th>Album</th>
		<th>Artista</th>
		<th>Duración</th>
		<th>Tamaño</th>
		<th></th>
	</tr>
	<?php foreach (Track::all(1000) as $track):?>
	<tr>
		<td><a <?= "href=track.php?id='".$track->TrackId."'" ?>><?= utf8_encode($track->Name)?></a></td>
		<td><a <?= "href=album.php?id='".$track->Album->AlbumId."'" ?>><?= utf8_encode($track->Album->Title)?></a></th>
		<td><a <?= "href=artist.php?id='".$track->Album->Artist->ArtistId."'" ?>><?= utf8_encode($track->Album->Artist->Name)?></a></td>
		<td><?= round(($track->Milliseconds)/60000)?> mins.</td>
		<td><?= round((($track->Bytes)/1024)/1024)?> MB </td>
		<td><a class="glyphicon glyphicon-remove-circle" <?= "href=borrar_track.php?id='".$track->TrackId."'" ?>></a></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
</div>

<div class="glyphicon glyphicon-info-sign">Mostrando resultados de: </div>

</body>
</html>


