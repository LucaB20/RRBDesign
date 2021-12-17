<?php
    include_once("data/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SC BUZU R.R.B. DESIGN SRL | Firma de proiectare in constructii</title>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="mystyle/overriding.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body id="bootstrap-overriding">
        <nav class="navbar navbar-default">
            <div id="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="mystyle/pictures/logo_new.png" alt="La placinte inainte - logo"/></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active amenu menu"><a class="navbar-active" href="home.php">Home</a></li>
                        <li><a href="despre.php" class="amenu menu">Despre</a></li>
                        <li><a href="contact.php" class="amenu menu">Contact</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!--Modificam caruselul asa incat sa aiba 100% latime-->
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 100%;
                margin: 0px;
            }
         </style>

        <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel" style="margin-top: -20px;">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="mystyle/pictures/1.jpg" alt="Drum3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/5.jpg" alt="Oras3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/6.jpg" alt="Drum_normal">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/1.jpg" alt="Drum3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/5.jpg" alt="Oras3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/6.jpg" alt="Drum_normal">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/1.jpg" alt="Drum3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/5.jpg" alt="Oras3D">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/6.jpg" alt="Drum_normal">
                    </div>
                    <div class="item">
                        <img src="mystyle/pictures/1.jpg" alt="Drum3D">
                    </div>
                </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="container">
            <div class="page-header">
                <h2 class="fonted-heading">SC BUZU R.R.B. DESIGN SRL | Firma de proiectare in constructii</h2>									   
               <!-- Button trigger modal -->
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="fonted-heading"><span class="glyphicon glyphicon-book white"></span> Drumuri</h4></div>
                        <div class="panel-body">
                            <p>
                               Drumul este o cale de comunicație terestră, alcătuită dintr-o bandă îngustă și continuă de teren bătătorit, pietruit, pavat sau asfaltat.   
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="fonted-heading"><span class="glyphicon glyphicon-book white"></span> Cai ferate</h4></div>
                        <div class="panel-body">
                            <p>
                               Calea ferată este o cale de comunicație și reprezintă mijlocul de transport terestru, destinat circulației vehiculelor prin rulare pe șine sau cabluri.
							   Aceasta constă dintr-un ansamblu de construcții și instalații cu ajutorul cărora se asigură circulația materialului rulant (tren, vagoane) în vederea efectuării transporturilor de călători și bunuri materiale.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 class="fonted-heading"><span class="glyphicon glyphicon-book white"></span> Poduri</h4></div>
                        <div class="panel-body">
                            <p>
                             Podul este o construcție, din categoria lucrări de artă, realizată de ingineri constructori, destinată să treacă un obstacol (strâmtoare, râu, o vale, căi de comunicații) trecând deasupra acestora.   
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <hr/>
        <?php include_once("parts/footer.php");?>
    </body>
</html>
