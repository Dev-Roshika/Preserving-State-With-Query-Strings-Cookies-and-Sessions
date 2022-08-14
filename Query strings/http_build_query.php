<?php
$fields = array (
    "firstName" => "John",
    "homePage" => "http://www.example.com/",
    "favoriteSport" => "Ice Hockey"
    );
    echo "<p> <a href='moreinfo.php?" . htmlspecialchars( http_build_query( $fields ) ) . "' > Find out more info on this person </a> </p> ";
?>