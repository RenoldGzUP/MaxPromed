/* ================================================
    Change Specific Hour and update status
    ================================================ */


function getTestHour() {
    var dataTestHour = document.getElementById("inputTestingHour").value;
    var dataTestDate = document.getElementById("inputTestingDate").value;
    var dataTestLocation = document.getElementById("inputTestingLocation").value;
    console.log("JS ->" + dataTestHour + " DATE ->" + dataTestDate + "  Location -> " + dataTestLocation);

    //Call Fucntion
    requestDataTime(dataTestHour, dataTestDate, dataTestLocation);

    //SetDate
    document.getElementById("spanDateStatus").textContent = dataTestDate;



}

//Consulta AJAX  a la base de de datos

function requestDataTime(hour, date, location) {


    $.ajax({
        data: {
            "hour": hour,
            "date": date,
            "location": location
        },
        type: "POST",
        dataType: "text",
        url: "./php/getDataHour.php",
    }).done(function(data, textStatus, jqXHR) {
        console.log("DATA-> " + data);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("La solicitud a fallado: " + textStatus);
    });

}

//Obtener los Valores y actualizar el DOM 

function getSpecificHour() {
    var data = document.getElementById("inputTestingHour");
    var dataTestHour = data.value;

    console.log(dataTestHour);

}