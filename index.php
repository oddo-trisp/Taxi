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
    <?php
        session_start();
        $_SESSION['language']="";
        if (isset($_REQUEST['en'])){
            $_SESSION['language']='en';
        }
        else if(isset($_REQUEST['gr'])){
            $_SESSION['language']='gr';
        }
    ?>
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
                <?php
                    if($_SESSION['language'] == 'en'){
                        echo ("<a class='navbar-brand' href='#'>Taxi Services</a>");
                    }
                    else{
                        echo ("<a class='navbar-brand' href='#'>Υπηρεσίες Ταξί</a>");
                    }
                ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php
                     if($_SESSION['language'] == 'en'){
                        echo (" <li>
                                    <a href='#about'>About</a>
                                </li>
                                <li>
                                    <a href='#services'>Services</a>
                                </li>
                                <li>
                                    <a href='#about'>Contact</a>
                                </li>
                                 <li>
                                    <a href='#findus'>Find Us</a>
                                </li>
                                ");
                     }
                     else{
                         echo (" <li>
                                    <a href='#about'>Πληροφορίες</a>
                                </li>
                                <li>
                                    <a href='#services'>Υπηρεσίες</a>
                                </li>
                                <li>
                                    <a href='#about'>Επικοινωνία</a>
                                </li>
                                <li>
                                    <a href='#findus'>Που θα μας βρείτε</a>
                                </li>
                                ");
                     }
                ?>
                   
                </ul>
                <form class="pull-right" method="GET" id="lang" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="image" src="assets/img/grflag.png" name="gr" value="submit" />
                    <!--<input type="submit" name="en"/>-->
                    <input type="image" src="assets/img/ukflag.png" name="en" value="submit" />
                </form>
                <!--<form method="GET" id="lang">-->
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
                <?php
                    if ($_SESSION['language'] == 'en'){
                        echo ("<h1 class='tagline'>Georgios Trismpiotis-Taxi Services</h1>");
                    }
                    else{
                        echo ("<h1 class='tagline'>Γεώργιος Τρισμπιώτης-Υπηρεσίες Ταξί</h1>");
                    }
                ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row" id="about">
            <div class="col-sm-8">
            <?php
                if ($_SESSION['language'] == 'en'){
                    
                    echo ("<h2>What We Do</h2>
                    <p>24/7 taxi driver from Itea, Fokida. Transportation all around the country, as well as package transportation and package delivery .
                    Trip organizations, in Archeological sites, Museums, Athena's temple and wherever you desire.
                    Transportation towards and from the airport at low cost!!
                    Services that suit your every need, on a  professional, private level.Available in any emegerncy, any time.
                    We take our job seriously, with guaranteed safety and we make sure that you feel as comfortable as possible.
                    Trust us and enjoy travelling with us!!
                    <p>Sincerly, Giorgos Trismpiotis</p>");
                }
                else {
                    echo("<h2>Τι Προσφέρουμε</h2>
                        <p>Ταξί 24ώρες Ιτέας Μεταφορές εντός & εκτός νομού , παραλαβή και μεταφορά σε οποιοδήποτε μέρος της Ελλάδας.
                        Διοργανώσεις εκδρομών στον Αρχαιολογικο Χώρο , Μουσείο , τον Ναό της Αθηνάς και σε όποιο άλλο αξιοθέατο θέλετε.
                        Μεταφορές από και προς το αεροδόμιο.
                        Παροχή υπηρεσιών που καλύπτει τις ανάγκες σας , επαγγελματικές , προσωπικές και έκτακτες με πλήρη εχεμύθεια.
                        Αναλαμβάνουμε τις μετακινήσεις σας με ασφάλεια και άνεση Εμπιστευτείτε τις μετακινήσεις σας σε εμάς και εσείς απολαύστε την διαδρομή...</p>
                        <p>Με εκτίμηση, Γιώργος Τρισμπιώτης</p>");
                }
            ?>
            </div>
            <div class="col-sm-4">
                <?php
                    if ($_SESSION['language'] == 'en'){
                        echo ("<h2>Contact Us</h2>
                                <address>
                                    <strong>Georgios Trismpiotis</strong>
                                    <br>28is Oktovriou
                                    <br>Itea, Fokida 33200<br>
                                </address>
                                <address>
                                    <p> <img src='assets/img/icon-phone.jpg' alt='' /> (+30) 694-4988038 </p>
                                    <p> <img src='assets/img/icon-email.jpg' alt='' />  <a href='mailto:george.itea@gmail.com'>george.itea@gmail.com</a> </p>
                                </address>");
                        echo ("<div id='social'>
                                <p>
                                <a href='https://www.facebook.com/giorgos.trismpiotis' target='_blank' title='my facebook page'><img src='assets/img/facebook.png' alt=''/></a>
                                <a href='http://fokida.travelfind.gr/en/trismpiotis-georgios' target='_blank' title='travelfind'><img src='assets/img/travel_find.png' alt='' /></a>
                                 </p>
                                </div>");
                    }
                    else{
                        echo ("<h2>Στοιχεία Επικοινωνίας</h2>
                                <address>
                                    <strong>Γεώργιος Τρισμπιώτης</strong>
                                    <br>28ης Οκτωβρίου
                                    <br>Ιτέα, Φωκίδα 33200<br>
                                </address>
                                <address>
                                    <p> <img src='assets/img/icon-phone.jpg' alt='' /> (+30) 694-4988038 </p>
                                    <p> <img src='assets/img/icon-email.jpg' alt='' />  <a href='mailto:george.itea@gmail.com'>george.itea@gmail.com</a> </p>
                                </address>");
                        echo ("<div id='social'>
                                <p>
                                <a href='https://www.facebook.com/giorgos.trismpiotis' target='_blank' title='my facebook page'><img src='assets/img/facebook.png' alt=''/></a>
                                <a href='http://fokida.travelfind.gr/el/trismpiotis-georgios' target='_blank' title='travelfind'><img src='assets/img/travel_find.png' alt='' /></a>
                                 </p>
                                </div>");
                    }
                ?>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row" id="services">
             <?php
                    if ($_SESSION['language'] == 'en'){
                        echo ("<h2>Services:</h2>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/taxi.jpg' alt=''>
                                <h3>Services 24 hours a day</h3>
                                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                                </div>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/delfi.jpg' alt=''>
                                <h3>Marketing Box #2</h3>
                                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                </div>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/galaxidi.jpg' alt=''>
                                <h3>Marketing Box #3</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                </div>
                                <div>
                                    <a href='http://fokida.travelfind.gr/en/info/sightseeing' target='_blank' title='attractions'>
                                    <h3>You can find a list of all local attractions and all beauties here</h3></a>
                                </div>
                                ");
                    }
                    else{
                        echo ("<h2>Υπηρεσίες:</h2>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/taxi.jpg' alt=''>
                                <h3>Εξυπηρέτηση 24 ώρες τη μέρα</h3>
                                <p>Ταξί με έδρα την Ιτέα. Προσφέρεται εξυπηρέτηση 24ώρες τη μέρα, μεταφορές εντός & εκτός νομού, παραλαβή και μεταφορά σε οποιοδήποτε μέρος της Ελλάδας αλλά και μεταφορές από και προς το αεροδόμιο και το λιμάνι. </p>
                                </div>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/delfi.jpg' alt=''>
                                <h3>Διοργάνωση Εκδρομών σε Αξιοθέατα</h3>
                                <p>Διοργανώσεις εκδρομών σε όλα τα αξιοθέατα της περιοχής, όπως ο Ναός της Αθηνάς στους Δελφούς, το Ναυτικό Μουσείο στο Γαλαξίδι ή το γραφικό κάστο στην Άμφισσα αλλά και όπου αλλού θέλετε</p>
                                </div>
                                <div class='col-sm-4'>
                                <img class='img-circle img-responsive img-center' src='assets/img/galaxidi.jpg' alt=''>
                                <h3>Διοργάνωση Εκδρομών σε όλη την περιοχή</h3>
                                <p>Διοργανώσεις εκδρομών σε όλες της γραφικές πόλεις και τα χωριά της περιοχής, όπως το όμορφο και γραφικό Γαλαξίδι ή την ξακουστή Αράχοβα με το γνωστό Χιονοδρομικό Κέντρο Παρνασού.</p>
                                </div>
                                <div>
                                    <a href='http://fokida.travelfind.gr/el/info/sightseeing' target='_blank' title='attractions'>
                                    <h3>Μπορείτε να βρείτε μια λίστα με όλα τα αξιοθέατα και τις ομορφιές τις περιοχή εδώ</h3></a>
                                </div>
                                ");
                    }
            ?>
        </div>

        <hr>

        <div class="row" id="findus">
            <?php
                    if($_SESSION['language'] == 'en'){
                        echo ("<h2>Find Us:</h2>
                                <h3>28is Oktovriou, Itea, Fokida, Greece</h3>
                            ");
                    }
                    else{
                        echo ("<h2>Που θα μας βρείτε:</h2>
                                <h3>28ης Οκτωβρίου, Ιτέα Φωκίδος</h3>
                            ");
                    }
            ?>
            <!--<a href="http://www.accuweather.com/en/gr/itea/183561/weather-forecast/183561" class="aw-widget-legal"></a>
            <div id="awcc1468922819136" class="aw-widget-current"  data-locationkey="183561" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1468922819136"></div>
            <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>-->
            <center>
                <div><input type="hidden" name="latitude" id="latitude" value="38.431084"></div>
                <div><input type="hidden" name="longitude" id="longitude" value="22.425256"></div>
                <div id="map"></div>
            </center>
            <?php
                    if($_SESSION['language'] == 'en'){
                        echo (" <iframe scrolling='no' allowtransparency='true' frameborder='0' style='width: 1115px; height: 77px;'
                            src='http://www.weather.gr/en/widgets/weather_w4.aspx?p1=3146&amp;p2=20744&amp;p3=3145&amp;p4=3144&amp;p5=5'></iframe>");
                    }
                    else{
                        echo ("<iframe scrolling='no' allowtransparency='true' frameborder='0' style='width: 1115px; height: 77px;'
                            src='http://www.weather.gr/widgets/weather_w4.aspx?p1=3146&amp;p2=20744&amp;p3=23263&amp;p4=3144&amp;p5=5'></iframe>");
                    }
            ?>
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
