<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';


$testingCode = $_POST["testingCode"];
$testingDate = $_POST["testingDate"];

$date = str_replace('-"', '/', $testingDate);  
$newDate = date("l", strtotime($date));

$queryDate = "sc_".strtolower(strval($newDate)) ;
//var_dump($queryDate);

//Consulta
$dateHour = getLocationHour($testingCode,$queryDate);
$dataString = convert_object_to_array($dateHour); 

//var_dump($dataString);

//echo "data ".$dataString[0][$queryDate];
//echo "data ".$dataString[1][$queryDate];

//Counter
$wholehourA = explode(":",$dataString[0][$queryDate]);
$wholehourB = explode(":",$dataString[1][$queryDate]);

//TO INT
$valHourStart = intval($wholehourA[0]);
$valHourClose = intval($wholehourB[0]);

//Increes
$realTime = array();

while($valHourStart<=$valHourClose){
    $varTime = $valHourStart.":00";
    array_push($realTime,$varTime);
    $valHourStart++;

}

//replace

$arrayLeng  = count($realTime);
$restArray = $arrayLeng - 1;

$startClose = array(0=>$dataString[0][$queryDate], $restArray => $dataString[1][$queryDate]);
$validTime =array_replace($realTime,$startClose);


for($i = 0; $i < count($validTime); ++$i) {
    echo "<option value='".$validTime[$i]."'>".$validTime[$i]."</option>";
}


//echo json_encode($validTime);
//<option value="7:00">7:00</option>


//
  





?>