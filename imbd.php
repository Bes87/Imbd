<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Imbd</title>

        <!-- Bootstrap--> 
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css"> 
        <!--font awesome-->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- personal -->
        <link href="css/style.css" rel="stylesheet">

        <!--additional fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

           <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
  <body>
    <header>  
        <nav class="navbar navbar-default" role="navigation">
            <a class="navbar-brand" href="#"><img class="img-responsive" alt="Brand" src="img/imbd-logo.jpg"> </a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

                <!--Collect the nav links, forms, and other content for toggling-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Movies</a></li>
                    <li><a href="about.php">Celebs & Photos</a></li>
                    <li><a href="#portfolio">Community</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <ul class="profile navbar-right">
                    <li><a><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                    <li><img src="img/profile.png"></li>
                </ul>
            </div>    
        </nav> 

        <div id="carousel-example-vertical" class="carousel vertical slide">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="ticker-headline title">
                            <h3>The martian</h3>
                            <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Thriller</a> <br>
                            <!--bottone con modale-->
                            <button class="trailer-btn btn btn-primary launch-modal" type="button" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                            <p>In Theaters <br>
                            <span>15, Oct 2015 (USA)</span>
                            </p>
                        </div>
                    </div>

                    <div class="item" data-attribute="https://www.youtube.com/embed/hEJnMQG9ev8">
                        <div class="ticker-headline title">
                            <h3>Mad Max</h3>
                            <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Thriller</a> <br>
                            <!--bottone con modale-->
                            <button class="trailer-btn btn btn-primary launch-modal" type="button" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                            <p>In Theaters <br>
                            <span>15, Oct 2015 (USA)</span>
                            </p>
                        </div>
                    </div>
                    <div class="item" data-attibute="https://www.youtube.com/embed/3PkkHsuMrho">
                        <div class="ticker-headline title">
                            <h3>Hunger Games</h3>
                            <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Thriller</a> <br>
                            <!--bottone con modale-->
                            <button class="trailer-btn btn btn-primary launch-modal" type="button" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                            <p>In Theaters <br>
                            <span>15, Oct 2015 (USA)</span>
                            </p>
                        </div>
                    </div>
                    <div class="item" data-attribute="https://www.youtube.com/embed/RFinNxS5KN4">
                        <div class="ticker-headline title">
                            <h3>Jurassic World</h3>
                            <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Thriller</a> <br>
                            <!--bottone con modale-->
                            <button class="trailer-btn btn btn-primary launch-modal" type="button" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                            <p>In Theaters <br>
                            <span>15, Oct 2015 (USA)</span>
                            </p>
                        </div>
                    </div>
                    <div class="item" data-attribute="https://www.youtube.com/embed/79Q2rrQlPW4 ">
                        <div class="ticker-headline title">
                            <h3>Everest</h3>
                            <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Thriller</a> <br>
                            <!--bottone con modale-->
                            <button class="trailer-btn btn btn-primary launch-modal" type="button" data-toggle="modal" data-target="#myModal">Watch Trailer <i class="fa fa-play-circle-o" aria-hidden="true"></i></button>
                            <p>In Theaters <br>
                            <span>15, Oct 2015 (USA)</span>
                            </p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
            <div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/Ue4PCI0NamI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> 
    </header>

    <main class="container selection">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">In Theaters</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Charts</a></li>
                        <li><a href="#">Tv series</a></li>
                        <li><a href="#">trailers</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">more <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <button class="trailer-btn">
                    <i class="fa fa-star" aria-hidden="true"><span>179</span></i>
                    </button>  
                </nav>
            </div>
            <div class="col-sm-8 filters">
                    <a><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
                    <a><i class="glyphicon glyphicon-th fa-2x" aria-hidden="true"></i></a>
                    <div class="container slider">
                        <div class="sliders row">
                            <div class="col-sm-4">
                                <div class="bootstrap-slider">
                                    <span class="filter-label">Weight Range: <span class="filter-selection"></span></span>
                                    <b class="filter-min">0</b> <input id="filter-weight" type="text" class="bootstrap-slider" value="" data-filter-group="weight"> <b class="filter-max">10</b>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 search">
                    <div class="input-group">
                        <input type="text" class="search"/>
                            <span class="input-group-btn">
                                <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span> 
                    </div>
                </div>

                <!--grid-->
                <div class="col-sm-12">
                    <div class="grid">
                            <div class="box" data-weight="7">
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>Mad max: Fury road</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>9</span></i>
                            </div>
                            <div class="box" data-weight="5">
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>The Hunger Games</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>8.7</span></i>
                            </div>
                            <div class="box" data-weight="6">
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>Jurassic World</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>6.8</span></i>
                             </div>
                            <div class="box" data-weight="9">
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>Everest</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>6.8</span></i>
                             </div>
                            <div class="box" data-weight="9">
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>Insurgent</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>7</span></i>
                            </div>
                            <div class="box" data-weight="5">                         
                                 <img class="img-responsive" src="img/locandina.jpg">
                                 <h4>Sicario</h4>
                                 <a href="#">Adventure</a> <a href="#">Sci-fi</a>  <a href="#">Action</a> <br>
                                 <i class="fa fa-heart fa-lg" aria-hidden="true"><span>9</span></i>
                             </div>
                        </div>
                    </div>
                <div class="col-sm-12 also">
                    <i class="fa fa-spinner fa-4x" aria-hidden="true"></i>
                </div>
             </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 text-left">  
                    <a href="#"><img src="img/imbd.png"></a>
                </div> 
                <div class="col-sm-4 text-center mid"> 
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-4 text-right inc"> 
                    <span>1990-2015.imbd.com, inc.</span>
                </div>
                <div class="col-sm-12 also">
                    <a href="#">show menu</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
    <!--Isotope-->
    <script src="node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap-slider/dist/bootstrap-slider.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>