<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';



$hour = $_POST["hour"];
$date = $_POST["date"];
$location = $_POST["location"];

var_dump($hour,$date,$location);


//Consulta





?>