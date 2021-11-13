<?php

include 'Sport.php';
include 'Utakmica.php';
include 'dbbroker.php';
// kod kuce password root, na poslovnom valjda nema passworda

$mysqli= new Mysqli('127.0.0.1','root','','utakmice');
$mysqli->set_charset('utf8');

$baza = new dbbroker($mysqli);
$db=new Utakmica(null, null, null, null, null, $mysqli);
