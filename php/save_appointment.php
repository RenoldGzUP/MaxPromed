<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';

//Get Data from HTML name
$Name = $_POST["max_name"];
$LastName = $_POST["max_lastname"];
$Email = $_POST["max_email"];
$Phone = $_POST["max_phonenumber"];
$Residence = $_POST["max_residence"];
$Birthdate = $_POST["max_birthdate"];

//Get Data Schedule
$TestType = $_POST["max_test_type"];
$TestLocation = $_POST["max_test_location"];
$TestDate = $_POST["max_test_date"];
$TestHourWhole = $_POST["max_test_hour"];


var_dump($TestHourWhole);

//New request id
$code = rand(9999,999999);
$stringCode = "AP".$code;
var_dump($stringCode);


//Save Data in DB
$request = newAppointment($stringCode,$Name, $LastName,$Email, $Phone,$Birthdate,$Residence,$TestType,$TestLocation,$TestDate,$TestHourWhole);


if($request){   
  header("Location:../appointment_resume.html");
  //echo "register";

}else{
    //echo "Ocurrio un error";

}


?>