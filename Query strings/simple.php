<?php
$firstName = "John";
$age = "34";
$queryString = "firstName=$firstName&amp;age=$age";
echo "<p> <a href='moreinfo.php?" . $queryString . "' > Find out more info on this person </a> </p> ";
?>