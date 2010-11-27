<?php
// Data of the Fale-CMS installation
$oldHost = "localhost";
$oldDb = "sas";
$oldUser = "root";
$oldPass = "";

// Data of the WordPress installation
$newHost = "localhost";
$newDb = "wordpress";
$newUser = "root";
$newPass = "";

/////////////////////////////////////
// Probably you don't wont to edit //
// anything below this line.       //
/////////////////////////////////////

// Connect to Fale-CMS database
$o = mysql_connect($oldHost, $oldUser, $oldPass) or die("Connection Failure to Database");
echo "Connected to fale-cms database server<br />";
mysql_select_db($oldDb, $o) or die ($oldDb . " Database not found." . $oldUser);
echo "Fale-cms database is selected <br />";

// Connet to Wordpress database
$n = mysql_connect($newHost, $newUser, $newPass) or die("Connection Failure to Database");
echo "Connected to wordpress database server<br />";
mysql_select_db($newDb, $n) or die ($newDb . " Database not found." . $newUser);
echo "Wordpress database is selected <br />";

// Close db connections
mysql_close($o);
mysql_close($n);
?>
