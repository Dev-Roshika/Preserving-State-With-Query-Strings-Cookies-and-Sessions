<?php
// $firstName = $_GET["firstName"];
// $age = $_GET["age"];
// echo "$firstName<br>$age";

$firstName = $_GET["firstName"];
$homePage = $_GET["homePage"];
$favoriteSport = $_GET["favoriteSport"];
echo " <dl> ";
echo " <dt> First name: </dt> <dd> $firstName </dd> ";
echo " <dt> Home page: </dt> <dd> $homePage </dd> ";
echo " <dt> Favorite sport: </dt> <dd> $favoriteSport </dd> ";
echo " </dl> ";

?>