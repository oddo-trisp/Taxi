<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/map.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <!--<form method="GET" id="lang">-->
                <form method="GET" id="lang" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="image" src="assets/img/grflag.png" name="en" alt="submit" />
                    <input type="image" src="assets/img/ukflag.png" name="gr" alt="submit" />
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Business Name or Tagline</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row" id="about">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <p> <img src="assets/img/icon-phone.jpg" alt="" /> (123) 456-7890 </p>
                    <p> <img src="assets/img/icon-email.jpg" alt="" />  <a href="mailto:#">name@example.com</a>  </p>
                </address>
                <div id="social">
                    <p>
                    <a href="https://www.facebook.com/giorgos.trismpiotis" target="_blank" title="my facebook page"><img src="assets/img/facebook.png" alt="" /></a>
                    <a href="http://fokida.travelfind.gr/el/trismpiotis-georgios" target="_blank" title="my facebook page"><img src="assets/img/travel_find.png" alt="" /></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row" id="services">
            <h2>Services:</h2>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="assets/img/taxi.jpg" alt="">
                <h3>Marketing Box #1</h3>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="assets/img/delfi.jpg" alt="">
                <h3>Marketing Box #2</h3>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="assets/img/galaxidi.jpg" alt="">
                <h3>Marketing Box #3</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>

        <hr>

        <div class="row" id="contact">
            <h2>Find Us:</h2>
            <!--<a href="http://www.accuweather.com/en/gr/itea/183561/weather-forecast/183561" class="aw-widget-legal"></a>
            <div id="awcc1468922819136" class="aw-widget-current"  data-locationkey="183561" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1468922819136"></div>
            <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>-->
            <center>
                <div><input type="hidden" name="latitude" id="latitude" value="38.431084"></div>
                <div><input type="hidden" name="longitude" id="longitude" value="22.425256"></div>
                <div id="map"></div>
            </center>
           <iframe scrolling="no" allowtransparency="true" frameborder="0" style="width: 1115px; height: 77px;" src="http://www.weather.gr/en/widgets/weather_w4.aspx?p1=3146&amp;p2=20744&amp;p3=3145&amp;p4=3144&amp;p5=5"></iframe>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
