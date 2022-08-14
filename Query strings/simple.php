<?php
$firstName = "John";
$age = "34";
// $queryString = "firstName=$firstName&amp;age=$age"; // 1st method
// echo "<p> <a href='moreinfo.php?" . $queryString . "' > Find out more info on this person </a> </p> ";
$queryString = "firstName=$firstName&;age=$age"; //2nd method
echo "<p> <a href='moreinfo.php?" . $queryString . "' > Find out more info on this person </a> </p> ";
?>