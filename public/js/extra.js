$(document).ready(function(){
    //carousel
    $('.carousel.carousel-slider').carousel({fullWidth: true, duration:200});
    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
    //dropdown
    $(".dropdown-button").dropdown({hover : true, belowOrigin: true});
    //modals
    $('.modal').modal();
    //Navigation
    $('.button-collapse').sideNav();
    //Collapsible
    $('.collapsible').collapsible();
    //parallax
    $('.parallax').parallax();
    //materializeboxed
    $('.materialboxed').materialbox();
});

document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(300).fadeOut('slow');

    $('.preloader-wrapper')
        .delay(300)
        .fadeOut();
});

function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
}

$(document).ready(function () {
    size_div = $("#myDiv .col m3").length;
//        alert(size_tr);
    x = 5;
    $("#myDiv .col-md-3").hide().slice(0, 4).show();

    $('#more').click(function () {
//            alert('Aabhusan');
        x = (x + 5 <= size_div) ? x + 5 : size_div;
        $('#myDiv .col-md-3:lt(' + x + ')').show();
    });

});

