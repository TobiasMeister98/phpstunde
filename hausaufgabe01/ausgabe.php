<?php
	// Displays the following text in h1 sizing
	echo "<h1>Diese Seite wurde mit PHP erstellt</h1>";
	
	// Address-Variables
	$name = "Tobias Meister";
	$address = "Langwiesenweg 11, 64757 Unter-Hainbrunn";
	$job = "Sch&uuml;ler (\"BSO Michelstadt\"), IT";
	
	// Displays personal information
	echo "Der Ersteller dieser Seite hei&szlig;t ".$name;
	echo "<br><br>Adresse: ".$address;
	echo "<br>Beruf: ".$job;
?>

<hr style="margin-top: 20px;">
<div style="padding-left: 1em; padding-bottom: 0.5em;">Eine Fehlermeldung in PHP:</div>
<img src="./ressources/phperror.png" style="border: 1px solid; margin-bottom: 5px;">
<hr>

<?php
	// Displays thanks clause
	echo "<font color=\"#FC0FC0\"><h3>Ich freue mich, dass Sie meine Webseite besuchen!</h3></font>";
?>