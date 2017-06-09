<!DOCTYPE html>
<html lang="en">
<head>

    <title>Yoshi Smaling</title>

    <link rel="shortcut icon" href="img/rotterdam.ico" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="override.css" type="text/css">



</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" class="logopng"> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">WHO</a></li>
                <li><a href="#">WHAT</a></li>
                <li><a href="#">WHERE</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="alles">

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h1 class="margin">Yoshi Smaling</h1>
    <h3>Applicatie ontwikkelaar</h3>

    <div class="profielfoto">
        <img src="img/profielfoto.jpg">
    </div>
</div>

<!-- Second Container -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Wie ben ik?</h3>
    <p>
        Mijn naam is Yoshi Smaling, 19 jaar oud en ik woon in Schiedam.
    </p>
    <p>
        Ik ben geboren in Rotterdam en heb er gewoond tot mijn vierde. Toen verhuisde ik naar Schiedam en woon er nu dus al
        15 jaar. Mijn hobbies zijn voetbal kijken, gamen en met vrienden de stad in gaan.
    </p>

</div>

<hr>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Opleidingen</h3>

        <div class="col-sm-0">
            <p>
                In 2011 begon ik op het VMBO-tl (Mavo). Hiervoor haalde ik na 5 jaar mijn diploma, en was geïnteresseerd in het maken van websites, maar had er nog geen verstand van.
                Daarom ging ik er verdere informatie over zoeken op internet, en het sprak me aan.
            </p>
            <p>
                Ik doe nu de 3-jarige opleiding Applicatie- en mediaontwikkelaar MBO niveau 4, op het
                <a href="https://www.techniekcollegerotterdam.nl/"> techniek college Rotterdam.</a>
            </p>
        </div>

</div>

    <hr>

<div class="projecten">

<div class="container-fluid bg-3 text-center">
        <h3 class="margin">Projecten</h3>
        <h4>Hier kunt u mijn eerder gemaakte projecten zien.</h4>

        <div class="row">
            <div class="col-md-4">
                <div class="projectenfotos">
                    <p>Eerste schoolproject</p>

                    <a href="projecten/Project1" target="_blank">
                        <img src="img/project1.png" alt="project 1" style="width:80%">

                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="projectenfotos">
                    <p>Php project</p>

                    <a href="projecten/rps2" target="_blank">
                        <img src="img/project2.png" alt="project 2" style="width:80%">

                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="projectenfotos">
                    <p>Smarty webshop (mee bezig)</p>

                    <a href="projecten/geslotenproject" target="_blank">
                        <img src="img/project3.png" alt="project 3" style="width:80%">

                    </a>
                </div>
            </div>

        </div>
</div>

    <hr>



<hr>



    <!-- Container (Contact Section) -->
 <div class="container-fluid bg-3">
         <h2 class="text-center">Contact</h2>

         <div class="row">
             <div class="col-md-4">
                 <p><span class="glyphicon glyphicon-map-marker"></span>Schiedam, Zuid-Holland</p>
                 <p><span class="glyphicon glyphicon-phone"></span>Mobiel: 06-10918192</p>
                 <p><span class="glyphicon glyphicon-envelope"></span>Email: yoshi1998@live.nl</p>
             </div>
             <div class="col-md-8">
                 <div class="row">
                     <div class="col-sm-6 form-group">
                         <input class="form-control" id="name" name="name" placeholder="Naam" type="text" required>
                     </div>
                     <div class="col-sm-6 form-group">
                         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                     </div>
                 </div>
                 <textarea class="form-control" id="comments" name="comments" placeholder="Bericht" rows="5"></textarea>
                 <br>
                 <div class="row">
                     <div class="col-md-12 form-group">
                         <button class="btn pull-right" type="submit">Verzend</button>
                     </div>
                 </div>
             </div>
         </div>
 </div>



<div class="container-fluid bg-1 text-center socialmediabalk">
        <div class="row">
            <div class="social">
                <a href="https://www.instagram.com/yoshifr/">
                    <img src="img/insta.png">
                </a>
            </div>

            <div class="social">
                <a href="https://www.facebook.com/yoshi.smaling">
                    <img src="img/facebook.png">
                </a>
            </div>

            <div class="social">
                <a href="https://plus.google.com/u/0/102032112789586778595">
                    <img src="img/google.png">
                </a>
            </div>

            <div class="social">
                <a href="https://www.linkedin.com/in/yoshi-s-1670a8141/">
                    <img src="img/linkedin.png">
                </a>
            </div>

        </div>
</div>






<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Website made by <a href="#">Yoshi Smaling</a></p>
</footer>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
