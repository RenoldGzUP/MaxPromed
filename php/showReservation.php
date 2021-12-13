<?php
include_once 'Connection/classConexionDB.php';
openConnection();
include_once 'Connection/library_db_sql.php';

$registration = base64_decode( $_GET["res"]);


$reservation = getReservation($registration);

//var_dump($reservation);


if($reservation){

    foreach($reservation as $item){


       echo' <div class="row">';
       echo '<div class="col-md-12">';
       echo '<div class="alert alert-success" role="alert">';
       echo'Afspraak gemaakt, dit is de informatie!';
       echo'</div>';
       echo'</div>';


        echo' <div class="col-md-4" style="margin-top: 10px;">';
        echo'    <label>Officiele naam</label>';
        echo'    <input type="text" class="form-control" id="inputResidence" value="'.$item->completedName.'" readonly>';

        echo'</div>';
        echo'<div class="col-md-6" style="margin-top: 10px;">';
        echo'    <label>Registratiecode</label>';
        echo'    <input type="text" class="form-control" id="inputResidence" value="'.$item->ap_meet_register.'" readonly>';

        echo'</div>';

    echo'</div>';


    echo '<div class="row" style="margin-top: 5px;">';

   echo' <div class="col-md-12" style="margin-top: 10px;">';
   echo'     <h5>Covid Test Information</h5>';

    echo'</div>';

    echo'<div class="col-md-4" style="margin-top: 10px;">';
    echo'    <label>Keuze testtype</label>';
    echo'    <input type="text" class="form-control" id="inputResidence" value="'.$item->ap_test_type.'" readonly>';

    echo'</div>';
    echo'<div class="col-md-7" style="margin-top: 10px;">';
    echo'<label>Locatie</label>';
    echo'<input type="text" class="form-control" id="inputResidence" value= "'.$item->ap_test_location.'" readonly>';

    echo' </div>';
   
   

    echo'</div>';

    
    echo' <div class="row">';
  
     echo' <div class="col-md-4" style="margin-top: 10px;">';
     echo'    <label>Datum</label>';
     echo'    <input type="text" class="form-control" id="inputResidence" value="'.$item->ap_test_date.'" readonly>';

     echo'</div>';
     echo'<div class="col-md-4" style="margin-top: 10px;">';
     echo'    <label>Time of day</label>';
     echo'    <input type="text" class="form-control" id="inputResidence" value="'.$item->ap_test_hour_specific.'" readonly>';

     echo'</div>';

 echo'</div>';



    }
    

}
else{
    //echo "errro";
}






?>