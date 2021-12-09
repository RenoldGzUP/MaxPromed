<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';

//Get Data from HTML name
$Name = $_POST["max_name"];
$LastName = $_POST["max_lastname"];
$Gender = $_POST["max_gender"];
$Birthdate = $_POST["max_birthdate"];
$Email = $_POST["max_email"];
$Phone = $_POST["max_phonenumber"];
$Street = $_POST["max_street"];
$SecAddress = $_POST["max_second_add"];
$Place = $_POST["max_place"];
$Province = $_POST["max_province"];

$Postcode = $_POST["max_postcode"];
$Country = $_POST["max_country"];
$Idmethod = $_POST["max_id_method"];
$BSNnumber = $_POST["max_bsn_number"];
$Docnumber = $_POST["max_doc_number"];
$Voor = $_POST["max_voor"];

//Get Data Schedule
$TestType = $_POST["max_test_type"];
$TestLocation = $_POST["max_test_location"];
$TestDate = $_POST["max_test_date"];
$TestHourWhole = $_POST["max_test_hour"];
$TestHourAvailable = $_POST["max_test_hour_av"];
$Consent = $_POST["max_consent"];


var_dump($Gender);

//New request id
$code = rand(9999,999999);
$ApCode = "AP".$code;
var_dump($ApCode);


//Save Data in DB
$request = newAppointment($ApCode,$Name, $LastName,$Gender,$Birthdate,$Email, $Phone,$Street,$SecAddress,$Place,$Province,$Postcode,$Country,$Idmethod,$BSNnumber,$Docnumber,$Voor,$TestType,$TestLocation,$TestDate,$TestHourWhole,$TestHourAvailable,$Consent);


if($request){   
  //header("Location:../appointment_resume.html");
  echo "register";

}else{
    //echo "Ocurrio un error";

}


?>