$(document).ready(function(){
    $('.menu-conf').click(function(event){
        event.stopPropagation();
         $(".menu-conf1").slideToggle("500");
    });
    $(".menu-conf1").on("menu-conf1", function (event) {
        event.stopPropagation();
    });
});

$(document).on("menu-conf", function () {
    $(".menu-conf1").hide();
});

$(document).click(function() {
    $(".menu-conf1").slideUp(500);
});

$("base").click(function(event) {
    event.stopPropagation();
});

// use this link
// <script src="http://code.jquery.com/jquery-1.8.3.js"></script>