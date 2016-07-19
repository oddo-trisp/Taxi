<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Giorgos Apostolopoulos, Odysseas Trispiotis">
    <title>PHP Test</title>
 </head>
 <body>
 <?php
    include 'header.php';

    if (isset($_REQUEST['en'])){
            //echo ('hello world');
        $_SESSION['language']='en';
    }
    else if(isset($_REQUEST['gr'])){
        $_SESSION['language']='gr';
            //echo ('Γεια σου κόσμε');
    }
    if ($_SESSION['language']=='en'){
        echo ('Hello World');
            //$_SESSION['language']='en';
    }
    else {
            //$_SESSION['language']='gr';
        echo ('Γεια σου κόσμε');
    }
?> 
 <div><a href="nums.php">Numbers</a></div>
 <div><a href="map.php">Map</a></div>
 </body>
</html>