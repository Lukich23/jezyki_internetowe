$(document).ready(function(){
    $('.slider-galery').slick({
        arrows: true,
        dots: true,
        adaptiveHeight: false,
        slidesToShow: 3,
        slidesToScroll:3,
        autoplay: true,
        autoplaySpeed:3500,
        pauseOnFocus: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        //centerMode: true,
    });
});