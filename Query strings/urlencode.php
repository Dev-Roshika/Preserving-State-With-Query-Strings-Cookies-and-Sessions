<?php
$firstName = "John";
$homePage = "http://www.example.com/";
$favoriteSport = "Ice Hockey";
$queryString = "firstName=" . urlencode( $firstName ) . " & amp;homePage=" .urlencode( $homePage ) . " & amp;favoriteSport=" . urlencode( $favoriteSport );
echo ' <p> <a href="moreinfo.php?’ . $queryString . ‘" > Find out more info on this person </a> </p> ';
?>