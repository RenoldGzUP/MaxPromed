<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';



$hour = $_POST["hour"];
$date = $_POST["date"];
$location = $_POST["location"];

var_dump($hour,$date,$location);


//QUERY
$locationName =  getLocationName($location);
$converLocation = convert_object_to_array($locationName);
//var_dump($converLocation);

$hourWhole = explode(":",$hour);
$hourFinish = $hourWhole[0].":59";

//QUERY
$dataState = getBusyHour($converLocation[0]["sc_large_name"],$date,$hour,$hourFinish);

//var_dump($dataState);
$convertDataState = convert_object_to_array($dataState);
var_dump($convertDataState);


//SET MINUTES
if(isset($convertDataState)){

    echo "Setted    ";
    
//Explode
$arrayMinutes = array();
$arrayFifhteen = array("00","15","30","45");
$k = 0;
    while($k < count($convertDataState)){
        $mainHour = explode(":",$convertDataState[$k]["ap_test_hour_specific"]);
        array_push($arrayMinutes,$mainHour[1]);
        $k++;
    }



//Add elements to complete 4 items
if(count($arrayMinutes) <4)
{
    $j = 0 ;
    $rest = 4 - count($arrayMinutes);
    echo "COUNT->  ".count($arrayMinutes);
    echo  "resta -> ". $rest;

    while($j < $rest){
        array_push($arrayMinutes,"xx");
        $j++;
    }
    
    $varSample = printStatus($arrayMinutes,$arrayFifhteen);
 echo $varSample;
 echo "el array tiene 4 elementos ".count($arrayMinutes);

}
else{
    //es mayor a 4 
   // printStatus($arrayMinutes,$arrayFifhteen);
}






//Validate state
/*

while($j < $rest){

        $j++;

    }
for($i = 0; $i < count($arrayMinutes); $i++){

    for($j = 0; $j < count($arrayFifhteen); ++$j){

        if($arrayMinutes[$i]  == $arrayFifhteen[$j]){
           // echo "<option value ='' class='optionBusy' disabled>8:15</option>";
           echo " busy arrray 1-> ".$arrayMinutes[$i] ." array 2-> ". $arrayFifhteen[$j] ;
        }
        else {
           // echo "<option value ='' class='optionAvailable'>8:15</option>";
           echo " free ";
        }
        }


    }

     */

 
}
else{
    echo "error";
}



function printStatus($arrayA,$arrayB){

   // var_dump($arrayA);
    var_dump($arrayB);
    $arrayState = $arrayB;
  
    $freeHour= array_diff($arrayB,$arrayA);
    print_r($freeHour);


    


}


    
    



    

  /*$i = 0;
  $g = 0;
    while($i < 4){
        while($g < 4){
$g++;
        }

        if($arrayA[$i]  == $arrayB[$g]){
            // echo "<option value ='' class='optionBusy' disabled>8:15</option>";
            echo " busy " ;
         }
         else {
            // echo "<option value ='' class='optionAvailable'>8:15</option>";
            echo " free ";
            echo $arrayA[$i]." array 2  -> ".$arrayB[$i];
         }
         $i++;
         
    }*/

  






/*
//Validate state
for($i = 0; $i < count($convertDataState); ++$i){

    for($j = 0; $j < count($arrayFifhteen); ++$j){

        $mainMinute = explode(":",$convertDataState[$i]["ap_test_hour_specific"]);
        $countMinute =count($mainMinute)

        if($convertDataState[$i] == $arrayFifhteen[$i]){
            echo "<option value ='' class='optionBusy' disabled>8:15</option>";
        }
        else {
            echo "<option value ='' class='optionAvailable'>8:15</option>";
        }


    }

      
}
*/

//validar la disponibilidad de la hora

//<option class="optionBusy" disabled>8:15</option>
//<option class="optionAvailable">8:30</option>
//<option>8:45</option>  

//,generar el html con un for y mostrar

//Consulta





?>