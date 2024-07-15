$(document).ready(function(){
    $(".map-div").hide();
    $("#location").click(function(){
        $(".map-div").show();
    })
    
    $(".map-div div").click(function(){
        $(".map-div").hide();
    })
    
})