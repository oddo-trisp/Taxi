<!DOCTYPE html>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<meta name="author" content="Giorgos Apostolopoulos, Odysseas Trispiotis">
 <body>
 <?php
    session_start();
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="submit" name="en" value="English" />
	<input type="submit" name="gr" value="Ελληνικά" />
 </form>
	<?php
 		if (isset($_GET['en'])){
            //echo ('Hello World');
            $_SESSION['language']='en';
        }
        else if(isset($_GET['gr'])){
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