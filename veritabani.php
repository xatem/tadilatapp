<?php

$dbhost = "movieviva.com";
$dbuser = "movieviva";	
$dbpass = "14785236951";		
$dbname = "movieviv_test";	

$baglanti = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$baglanti) die ("MySQL bağlantısı başarısız.");

mysql_select_db($dbname, $baglanti) or die ("Veritabanına bağlanamadı.");
	
?>