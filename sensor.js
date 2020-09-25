$(document).ready(function(){
    setInterval(function(){
        $("#rate_heart").load('sensor.php');
    }, 1000);
});