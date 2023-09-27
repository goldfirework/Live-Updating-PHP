$(document).ready(function(){    
    loadstation();
});

function loadstation(){
    $("#station_data").load("assets/station.php");
    setTimeout(loadstation, 2000);
}