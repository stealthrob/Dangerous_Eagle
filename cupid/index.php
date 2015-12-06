<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/icono.png">

    <title>Dangerous Eagle</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="skins/eden.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icons/icons.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide").click(function(){
    $("#element").hide();
  });
  $("#show").click(function(){
    $("#element").show();
  });
});
</script>

<script type="text/javascript">

$(document).ready(function() {

    $("#enviar-btn").click(function() {

        var name = $("input#name").val();
        var message = $("textarea#message").val();

        var dataString = 'name=' + name + '&message=' + message;

        $.ajax({
            type: "POST",
            url: "addmessage.php",
            data: dataString,
            success: function() {
                $("#element").hide();
                $('#newmessage').append('<h2>Tu información ha sido recibida correctamente!</h2><table><tr><td>Nombre:</td><td>'+name+'</td></tr><tr><td>Mensaje:</td><td>'+message+'</td></tr></table>');
            }
        });
        return false;
    });
});
</script>

<body data-spy="scroll" data-target="#topnav">

<div class="navbar navbar-color navbar-fixed-top" id="topnav">
    <div class="container">
        <div class="navbar-header" align="center">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-reorder"></span>

            </button>
            <!--<center><a class="navbar-brand" href="#"><img src="images/iconobien.png" alt="Expose" ></a></center>!-->
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home">INICIO</a></li>
                <li><a href="#services">TOP 10 DEL MES</a></li>
                <li><a href="#features">VIDEOS MÁS VISITADOS</a></li>
                <li><a href="#portfolio"> LISTADO DE CANCIONES</a></li>
                 <li><a href="#pricing">NOTICIAS</a></li>
                 <li><a href="#" id="show" > AGREGAR NUEVO TRACK</a></li>
<form class="navbar-form navbar-left" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar..">
          <span class="input-group-btn">
        <input class="btn btn-default" type="submit" value="Buscar">
      </span>
        </div>
<div id="element" style="display: none;">
   <form method="post" action="">
       <br><br><br>Nombre:<br/>
        <input type="text" id="name" name="name" size="40" /><br/><br/>
        Album:<br/>
        <input name="message" id="message" rows="6" cols="40">
        <br/><br/>
         Compositor:<br/>
        <input name="message" id="message" rows="6" cols="40">
        <br/><br/>
        Milisegundos:<br/>
        <input name="message" id="message" rows="6" cols="40">
        <br/><br/>
        Bytes:<br/>
        <input name="message" id="message" rows="6" cols="40">
        <br/><br/>
        Precio:<br/>
        <input name="message" id="message" rows="6" cols="40">
        <br/><br/>

        <div style="margin-left: 376px;"><input name="submit" type="submit" value="enviar" id="enviar-btn" /></div> <div id="close"><a href="#" id="hide">cerrar</a></div>
    </form>
</div>


               

            </ul>


        </div>

        <!--/.navbar-collapse -->
    </div>

</div>


<!-- Main jumbotron for a primary marketing message or call to action -->
 <div id="myCarousel" class="carousel slide">
<div class="jumbotron" id="home">

    <div class="intro">
        <div class="container">
    
            
                <div class="row panel">
                <h1 class="text-center">Dangerous <span>Eagle</span></h1>

                <p class="text-center">Amazing Track System</p><br/>
                </div>



          <div class="row triangles">
                <div class="up-triangle animated fadeInUp">

                    <div class="info">
                    
                        <i class="icon icon-cogs"></i><br/>
                        Bootstrap 3
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        Support<br/>
                        <i class="icon icon-envelope-alt"></i>
                    </div>
                </div>
                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-picture"></i><br/>
                        Colorful
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        Clean Code<br/>
                        <i class="icon icon-code"></i>
                    </div>
                </div>

                <div class="down-triangle animated fadeInDown visible-sm">
                    <div class="info">

                        Clean Code<br/>
                        <i class="icon icon-code"></i>
                    </div>
                </div>

                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-thumbs-up"></i><br/>
                        Awesome
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        Secure<br/>
                        <i class="icon icon-laptop"></i>
                    </div>
                </div>
                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-comments-alt"></i><br/>
                        Helpful
                    </div>
                </div>


            </div>

        </div>
          
    </div>

</div>

<section id="services">
<div class="container">
    <!-- Example row of columns -->
    <div class="row features">
        <div class="col-md-9 text-left">

            <h2>Top</h2><h1>10</h1><h2> del mes </h2>
            <table>
          <ol class="list-group">
            <li > Coldplay</li>
            <li></li>
            <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>

    </table>

        </div>
    </div>
   


    </div>


</section>

<section class="slider" id="features">

    <div class="container">
        <div class="inner-page">
            <h3 class="text-center">Los videos de música más vistos en Youtube</h3>

     <div class="container">            
            <div class="row">
                 <div class="col-sm-4"><h1>LET IT GO</h1> James Bay</div>
                <div class="col-sm-8" "text-center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/GsPq9mzFNGY" frameborder="0" allowfullscreen></iframe>
                    
                </div>
 </div>
      <div class="container">            
            <div class="row">
                 <div class="col-sm-4"><h1>Happy Xmas</h1> John Lennon</div>
                <div class="col-sm-8" "text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/S84RLgnz7Rs" frameborder="0" allowfullscreen></iframe>
                </div>
 </div>
       <div class="container">            
            <div class="row">
                 <div class="col-sm-4"><h1>A Sky Full of Stars</h1> Coldplay</div>
                <div class="col-sm-8" "text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VPRjCeoBqrI" frameborder="0" allowfullscreen></iframe>
                </div>
 </div>
  

</section>
<section class="portfolio" id="portfolio">
<div class="container">
    <div class="row">
        <div class="col-md-9  inner-page">
           <br><br> <h2>Listado de Canciones</h2></br></br>

         <?php
include 'models.php';
?>
<table class="table-hover">
    <tr>
        <th><b><h3>Nombre</b></h3></th>
        <th><b><h3>Album</b></h3></th>
        <th><b><h3>Artista</b></h3></th>
        <th><b><h3>Duracion</b></h3></th>
        <th><b><h3>Tamaño</b></h3></th>
        <th></th>
    </tr>
    <?php foreach (Track::all(1000) as $track):?>
    <tr>
        <td>
        <form class="form-inline" role="form"  action="contenido_track.php" method="GET">
            <?php   

            echo "<input type='hidden' name='cve' value='$track->TrackId'>";
            echo "<button  class='btn btn-default' type='submit'>$track->Name</button>";
            ?>
            </form>
        </td>
        <td><?= $track->Name?></td>
        <td><?= $track->Album->Title?></th>
        <td><?= $track->Album->Artist->Name?></td>
        <td><?= $track->Milliseconds/60000?></td>
        <td><?= $track->Bytes/1000000?></td>
        
    </tr>
    <?php endforeach; ?>

</table>
               
        </div>
    </div>
</div>


<div class="clr"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/1.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/2.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/3.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/4.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/5.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/6.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/7.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="portfolio-block"><img src="images/projects/8.jpg" alt="Protect" />
                <div class="portfolio-caption text-center animated">
                    <h3 class="animated">Portfolio Item #1</h3>

                    <a href="#" class="btn btn-social btn-skype btn-sm animated"><i class="tn-plus"></i></a>
                    <a href="#" class="btn btn-social btn-stack-overflow btn-sm animated"><i class="tn-arrow-right"></i></a>
                </div>
            </div>
        </div>



    </div>
    </div>

</section>

<section class="pricing" id="pricing">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pricing-intro white">
                <h2 class="page-headline large text-center">Tell your projects awesome story.</h2>

                <p class="text-center">Tell your projects awesome story. Tell your projects awesome story. Tell your
                    projects awesome story. Tell your projects awesome story.</p>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row pricing-table">
            <div class="col-md-3">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3 class="text-center">DEV PLAN</h3></div>
                    <div class="panel-body text-center">
                        <div class="pricing-circle bg-danger">$10.00</div>

                        <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                    </ul>

                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"><h3 class="text-center">PRO PLAN</h3></div>
                    <div class="panel-body text-center">
                        <div class="pricing-circle bg-info">$10.00</div>
                        <a class="btn btn-lg btn-block btn-info" href="#">BUY NOW!</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                    </ul>

                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="text-center">FREE PLAN</h3></div>
                    <div class="panel-body text-center">
                        <div class="pricing-circle bg-success">$10.00</div>
                        <a class="btn btn-lg btn-block btn-primary" href="#">BUY NOW!</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                    </ul>

                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-warning">
                    <div class="panel-heading"><h3 class="text-center">FREE PLAN</h3></div>
                    <div class="panel-body text-center">
                        <div class="pricing-circle bg-warning">$10.00</div>
                        <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>


</section>
<section class="gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Tell your projects awesome story.</h3>
            </div>
        </div>
    </div>
</section>
<section class="about" id="clients">
    <div class="dmask">

        <div class="our-clients">
            <div class="container">
                <div class="row">
                    <div class="client" style="background-position: 50% 27px;">
                        <div class="client-logo">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                <div class="clients-title">
                                    <h3 class="title">Our <span>Clients</span></h3>

                                    <div class="carousel-controls pull-right">
                                        <a data-slide="prev" rel="crs" href="#client-carousel" class="prev btn-mini"><i
                                                class="icon-angle-left"></i></a>
                                        <a data-slide="next" rel="crs" href="#client-carousel" class="next btn-mini"><i
                                                class="icon-angle-right"></i></a>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="client-carousel slide" id="client-carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d1 animate_start">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-1.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d2 animate_start">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-2.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d3 animate_start">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-3.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d4 animate_start">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-4.png" alt="Upportdash"></a></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-5.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-4.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-3.png" alt="Upportdash"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a style="cursor: pointer;"><img
                                                            src="images/logo-2.png" alt="Upportdash"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- Testimonials Widget Start -->
                                <div class="row ">
                                    <div class="testimonials widget">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="testimonials-title">
                                                <h3 class="title">Client <span>Testimonials</span></h3>

                                                <div class="carousel-controls pull-right">
                                                    <a data-slide="prev" rel="crs" href="#testimonials-carousel"
                                                       class="prev btn-mini"><i class="icon-angle-left"></i></a>
                                                    <a data-slide="next" rel="crs" href="#testimonials-carousel"
                                                       class="next btn-mini"><i class="icon-angle-right"></i></a>

                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="testimonials-carousel slide animate_afr d5 animate_start"
                                             id="testimonials-carousel">
                                            <div class="carousel-inner">
                                                <div class="item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type.
                                                            </p>

                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img
                                                                        src="images/team-member-1.jpg" alt=""></div>
                                                                <div class="testimonial-author-info">
                                                                    <a style="cursor: pointer;">Monica Sing</a> Template
                                                                    Eden
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item active">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type.
                                                            </p>

                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img
                                                                        src="images/team-member-2.jpg" alt=""></div>
                                                                <div class="testimonial-author-info">
                                                                    <a href="#">John Doe</a> Template Eden
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type.
                                                            </p>

                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img
                                                                        src="images/team-member-3.jpg" alt=""></div>
                                                                <div class="testimonial-author-info">
                                                                    <a style="cursor: pointer;">Carol Johansen</a>
                                                                    Template Eden
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="contact" id="contact">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-error hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>

                <h2 class="short"><strong>Contact</strong> Us</h2>

                <form class="clearfix" accept-charset="utf-8" method="get" action="#">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="" value="" name="name" id="name"
                                   class="form-control input-lg">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="" value="" name="email" id="email"
                                   class="form-control input-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="message">Message</label>
                            <textarea rows="4" name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-success btn-xlg" type="submit">Send Message</button>
                </form>
            </div>
            <div class="col-md-offset-1 col-md-5">
                <br/>
                <h4 class="pull-top">Get in <strong>touch</strong></h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet
                    varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

                <hr>

                <h4>The <strong>Office</strong></h4>
                <ul class="unstyled">
                    <li><i class="icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United
                        States
                    </li>
                    <li><i class="icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                    <li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a>
                    </li>
                </ul>


            </div>


        </div>

    </div>

</section>

<footer id="footer">

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="Template Eden">
                    </a>
                </div>
                <div class="col-md-5">
                    <p>&copy; Copyright 2013 by Template Eden. All Rights Reserved.</p>
                </div>
                <div class="col-md-5">
                    <nav id="footer-menu">
                        <ul>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(function () {
        if($(window).width()>960){
        var tw = $('.triangles').width()/7+32;
        var ta = tw/2+22;
        $('.down-triangle').css('border-top',tw+'px solid rgba(0,0,0,0.8)').css('border-left',ta+'px solid transparent').css('border-right',ta+'px solid transparent');
        $('.up-triangle').css('border-bottom',tw+'px solid rgba(0,0,0,0.8)').css('border-left',ta+'px solid transparent').css('border-right',ta+'px solid transparent');
        }
        $('#wd-wrapper').sinusoid({
            minImgW: 80,
            maxImgW: 130,
            minImgAngle: -20,
            maxImgAngle: 20,
            leftFactor: 60,
            sinusoidFunction: {
                A: 70,
                T: 1700,
                P: 0
            }
        });


        $('a[href*=#]:not([href=#]):not([rel=crs])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    });
</script>

</body>
</html>
