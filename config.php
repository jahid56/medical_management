<?php
	
	//error_reporting(E_ALL || ~E_NOTICE);
	
	//db config
	$host='localhost';
	$user='azmoltec_rafiq';
	$password='0032Qw21';
	$dbname = "azmoltec_rafiq";
	

	$connection=mysql_connect($host, $user, $password) or die('Could not connect to server');
	
	mysql_select_db($dbname,$connection) or die('Could not connect to database');
		
?>