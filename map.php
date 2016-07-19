<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Giorgos Apostolopoulos, Odysseas Trispiotis">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/map.js"></script>
    <title>PHP Test</title>
 </head>
 <body>
	<?php
        include 'header.php';
 		if (isset($_REQUEST['en'])){
            //echo ('Hello World');
            $_SESSION['language']='en';
        }
        else if(isset($_REQUEST['gr'])){
            $_SESSION['language']='gr';
            //echo ('Γεια σου κόσμε');
        }
	?>

    <a href="http://www.accuweather.com/en/gr/itea/183561/weather-forecast/183561" class="aw-widget-legal"></a>
    <div id="awcc1468922819136" class="aw-widget-current"  data-locationkey="183561" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1468922819136"></div>
    <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
 
    <center>
        <div><input type="hidden" name="latitude" id="latitude" value="38.431084"></div>
        <div><input type="hidden" name="longitude" id="longitude" value="22.425256"></div>
        <div id="map" style="width:500px;height:380px;"></div>
    </center>

 </body>
</html>