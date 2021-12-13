<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';


$hour = $_POST["hour"];
$date = $_POST["date"];
$location = $_POST["location"];

var_dump($hour,$date,$location);


//QUERY PARAMS TO SET A SPECIFI HOUR
$hourWhole = explode(":",$hour);
$hourFinish = $hourWhole[0].":59";

//QUERY
$dataState = getBusyHour($location,$date,$hour,$hourFinish);

//var_dump($dataState);
$convertDataState = convert_object_to_array($dataState);

//SET MINUTES
if(isset($convertDataState)){

        //Explode
        $arrayMinutes = array();
        $k = 0;
            while($k < count($convertDataState)){
                $mainHour =$convertDataState[$k]["ap_test_hour_specific"];
                array_push($arrayMinutes,$mainHour);
                $k++;
            }

        //echo "Horas de la bd ";
        //print_r($arrayMinutes);

        //Get hour
        $timeHour = explode(":",$convertDataState[0]["ap_test_hour_specific"]);
       // echo "hour ->" .$timeHour[0];

        //Create new array with 4 elements and hour
        $h = 0;
        $starMinutes = array("00","15","30","45");
        $newArrayHour = array();

        while($h < 4){
            $concatHour = $timeHour[0].":".$starMinutes[$h];
            array_push($newArrayHour,$concatHour);
            $h++;
        }
        //echo "Nuevo array de horas ";
        //var_dump($newArrayHour);

        /////////////////////////////////////////////////////////////////////////////////////

        //Add elements to complete 4 items in the hour from db
        if(count($arrayMinutes) <4)
        {
            $j = 0 ;
            $rest = 4 - count($arrayMinutes);
            //echo "COUNT->  ".count($arrayMinutes);
            //echo  "resta -> ". $rest;

            while($j < $rest){
                array_push($arrayMinutes,"xx");
                $j++;
            }

            //echo "Sample Hour with 77";
            //print_r($arrayMinutes);

            //Get differents hours in the array

            $freeHour= array_diff($newArrayHour,$arrayMinutes);

            //Sort elements 

            sort($freeHour);
           // print_r($freeHour);

            $varSample = arrayStatus($freeHour,$convertDataState);
        
        }
        else{
            //  > 4 
            printLabelHTMLWhole($convertDataState);
        }

}
else{
    //echo "Don´t exist data to show";
    //Data is null
    //Create all cases in available
    printHTMLOption($hourWhole[0]);

}


function arrayStatus($arrayA,$arrayDataBase){

    $h = 0;
    $newArrayHour = array();

        while($h < count($arrayA)){
            array_push($newArrayHour,array("ap_test_hour_specific" => $arrayA[$h],"ap_time_status" => 0));
            $h++;
        }

//echo "Nuevo array de horas ";
//print_r($newArrayHour);


/////////////////
//Merge array from database and create
$mergeResult = array_merge($newArrayHour,$arrayDataBase);
//print_r($mergeResult);

//Sort

sort($mergeResult);
//echo "sort ";
//print_r($mergeResult);

//call function

printLabelHTML($mergeResult);


}

function printLabelHTML($arrayDouble){

    for($i = 0; $i < count($arrayDouble); ++$i){

        if($arrayDouble[$i]["ap_time_status"] == 1){
           
            echo "<option value ='".$arrayDouble[$i]["ap_test_hour_specific"]."' class='optionBusy' disabled>".$arrayDouble[$i]["ap_test_hour_specific"]."</option>";

        }else{
            
            echo "<option value ='".$arrayDouble[$i]["ap_test_hour_specific"]."' class='optionAvailable'>".$arrayDouble[$i]["ap_test_hour_specific"]."</option>";

        }

    }
}


function printLabelHTMLWhole($arrayHour){

    for($i = 0; $i < count($arrayHour); ++$i){

        if($arrayHour[$i]["ap_time_status"] == 1){
           
            echo "<option value ='".$arrayHour[$i]["ap_test_hour_specific"]."' class='optionBusy' disabled>".$arrayHour[$i]["ap_test_hour_specific"]."</option>";

        }else{
            
            echo "<option value ='".$arrayHour[$i]["ap_test_hour_specific"]."' class='optionAvailable'>".$arrayHour[$i]["ap_test_hour_specific"]."</option>";

        }

    }
}

function printHTMLOption($Hour){

    $star = array("00","15","30","45");
    $arrayHour = array();
    $x = 0 ;

    while($x < 4){
        $concatHour = $Hour.":".$star[$x];
        array_push($arrayHour,$concatHour);
        $x++;
    }

    for($i = 0; $i < count($arrayHour); ++$i){

            echo "<option value ='".$arrayHour[$i]."' class='optionAvailable'>".$arrayHour[$i]."</option>";

        

    }

}



?>