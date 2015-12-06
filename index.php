
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script> 
 <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <link rel="stylesheet" href="jqwidgets/styles/jqx.darkblue.css" type="text/css" />
    <script type="text/javascript" src="../../jqwidgets/jqxnavbar.js"></script>
	<link rel="icon" href="favicon.ico" type="favicon.ico" />
	<title>Dangerous Eagle</title>
</head>

<body>
	
       <header class="container-fluid">
       	<div class="navBar">
       <ul class=" nav nav-pills ">
       	<li class="active"><a  data-toggle="pill" href="index.php">Dangerous Eagle</a></li>
	<li ><a href="track.php" >Nuevo Track |</a></li>
	<li><a href="album.php" >Nuevo Album |</a></li>
	<li><a href="artist.php" >Nuevo Artista| </a></li>
</ul>
</div>
</header>

<body>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="http://i360.photobucket.com/albums/oo47/xiimee_/8B91EC63D.jpg" alt="First Slide">
         		<div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="http://i360.photobucket.com/albums/oo47/xiimee_/john-lennon.jpg" alt="Second Slide">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="http://i360.photobucket.com/albums/oo47/xiimee_/0217366A8.jpg" alt="Third Slide">
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</body>
</html> 
	<?php
include 'models.php';
?>
<br>

<br>
<!--<div class="jumbotron" style="background-image: url('indeximage.png');">
	<div class="container" >
		<div class="jumbotron" style="background-color: white;">
<h1>Dangerous Eagle Track System</h1>
<br>
<p>The best track system ever!</p>

</div>
	</div>!-->
</div>
<div class="row">
<section class="main-row">
  <article class="col-md-8">
<div class="container">
<br>
<div class="table-responsive">
<table class="table table-hover">
  <h1>TOP 10</h1>
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
</article>
<aside class="col-lg-3">
Mostrando resultados de: 

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores soluta ullam ipsam suscipit repudiandae debitis corrupti. Cupiditate error illum quia ratione voluptas, aliquid quasi esse quam dolorem, quo, delectus ipsa!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum laboriosam vero, assumenda sed voluptatum consequuntur eveniet maiores suscipit qui eum delectus a cum, hic atque natus sint, illum voluptatibus id.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere voluptas tempore repellat doloribus, beatae minima ad soluta deleniti dolorum iste praesentium modi accusantium iure voluptates laboriosam, ab aspernatur non officiis.
</aside>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $("#navBar").jqxNavBar({ height: 40, selectedItem: 0 });
    });
</script>
</body>
</html>


