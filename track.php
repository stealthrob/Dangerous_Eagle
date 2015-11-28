<!DOCTYPE html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

});
</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-select.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="bootstrap-select.js"></script>
<?php
include 'models.php';
$track = isset($_GET['id'])? Track::find($_GET['id']) : Track::create(null,null,0,0,0,1);
?>



	
</head>
<body>
<div class="jumbotron" >
<div class="container"><?php if(isset($track->TrackId)):?>
			<h1>Track</h1>
			<?php else: ?>
			<h1>Nuevo Track</h1>
		<?php endif;?></div>
		
			
		</div>


		<div class="neighborhood-guides">
			<div class="container">
				<div class="row">
					<form action="guardar_track.php" method="POST">
					<div class="thumbnail"> 
					<?php if(isset($track->TrackId)):?>
	<label for="id">Id</label>
	<br>
	<input type="text"  <?= "value='$track->TrackId'" ?> disabled="disabled" />
	<input type="hidden" id="id" name="id" <?= "value='$track->TrackId'" ?> />
	<br />
<?php endif;?>
<label for="name">Nombre</label>
<br>
<input type="text" id="name" name="name" <?= "value='$track->Name'" ?> />
<br />
<br>
<label for="album">Album</label>

<div class="form-group">
      <select  id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select an album...">
      <?php foreach(Album::all(10000) as $album):?>
		<br>
  	<option style="width: 200px;" <?= "value='$album->AlbumId'" ?> 
  		<?= (isset($track->TrackId)&&($album->AlbumId==$track->Album->AlbumId))?" selected ":""?>><?= utf8_encode($album->Title." (".$album->Artist->Name.")")?>
  	</option>
  	<?php endforeach;?>
      </select>
    </div>
<br>
<label for="composer">Compositor</label>
<br>
<input type="text" id="composer" name="composer" <?= "value='$track->Composer'" ?> />
<br />
<br>
					</div>
					</form>
				</div>
			</div>
		</div>


	<div class="container">
		
		<div class="row">
			<div class="col-md-3 col-md-offset-4 col-xs-5 col-xs-offset-2 col-sm-4 col-sm-offset-4 ">
				
<form action="guardar_track.php" method="POST">
<?php if(isset($track->TrackId)):?>
	<label for="id">Id</label>
	<br>
	<input type="text"  <?= "value='$track->TrackId'" ?> disabled="disabled" />
	<input type="hidden" id="id" name="id" <?= "value='$track->TrackId'" ?> />
	<br />
<?php endif;?>
<label for="name">Nombre</label>
<br>
<input type="text" id="name" name="name" <?= "value='$track->Name'" ?> />
<br />
<br>
<label for="album">Album</label>

<div class="form-group">
      <select  id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select an album...">
      <?php foreach(Album::all(10000) as $album):?>
		<br>
  	<option style="width: 200px;" <?= "value='$album->AlbumId'" ?> 
  		<?= (isset($track->TrackId)&&($album->AlbumId==$track->Album->AlbumId))?" selected ":""?>><?= utf8_encode($album->Title." (".$album->Artist->Name.")")?>
  	</option>
  	<?php endforeach;?>
      </select>
    </div>
<br>
<label for="composer">Compositor</label>
<br>
<input type="text" id="composer" name="composer" <?= "value='$track->Composer'" ?> />
<br />
<br>
<label for="milliseconds">Milisegundos</label>
<br>
<input type="number" id="milliseconds" name="milliseconds" <?= "value='$track->Milliseconds'" ?> />
<br />
<br>
<label for="bytes">Bytes</label>
<br>
<input type="number" id="bytes" name="bytes" <?= "value='$track->Bytes'" ?> />
<br />
<br>
<label for="unitprice">Precio</label>
<br>
<input type="number" id="unitprice" name="unitprice" <?= "value='$track->UnitPrice'" ?> />
<br />
<br>
<?php if(isset($track->TrackId)):?>
	<label for="updated_at">Acutalizado</label>
	<input type="text" id="updated_at" name="updated_at" <?= "value='$track->updated_at'" ?> disabled="disabled"/>
	<br />
<?php endif;?>
<br>
<input type="submit" value="Guardar" class="btn btn-default"/>
<a href="index.php" class=" btn btn-default"> Inicio </a>
<?php if(isset($track->TrackId)):?>
	<a class=" btn btn-default"<?= "href='borrar_track.php?id=$track->TrackId'" ?>>Borrar</a>
<?php endif;?>
</form>

			</div>
		</div>
	</div>

</body>
</html>

