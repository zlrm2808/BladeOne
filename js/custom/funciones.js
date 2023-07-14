$(document).ready(function(){ 
           

        $.ajax({
        type: "POST",
        url: "assets/amenu.php",
        data:{IDMENU},

        success: function(respuesta){ 

        $("#amenu").html(respuesta);
            $('.modal').modal();
           }
    });   


});

$(".dropdown-trigger").dropdown();

$('.modal').modal();



