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
            //echo ('Hello World');
            $_SESSION['language']='en';
        }
        else if(isset($_REQUEST['gr'])){
            $_SESSION['language']='gr';
            //echo ('Γεια σου κόσμε');
        }
        if ($_SESSION['language'] == 'en'){
            echo ('one two three');
            //$_SESSION['language']='en';
        }
        else {
            //$_SESSION['language']='gr';
            echo ('ένα δύο τρία');
        }
	?>
 
 </body>
</html>