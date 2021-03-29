<?php
    $host = 'localhost';
    $user = 'sniffer';
    $pass = 'sniffing';
    $db = 'city_sniffer';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>