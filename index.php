<?php
include './includes/top.inc.html';
include './includes/menu.inc.html';
?>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url('images/Gruppe 4.jpeg')"></div>
        <div class="swiper-slide" style="background-image:url('images/Lotte 2.jpg')"></div>
        <div class="swiper-slide" style="background-image:url('images/Kylle 3.jpg')"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
<div class="intro-text">
    <p style="text-align: center"><span style="font-family: 'Alegreya SC';">Hønsegården</span> - Impro Comedy er en teater gruppe der udelukkende bevæger  sig i improvisationens verden. <br>

        Der arbejdes i både de korte scener, som traditionel teatersports discipliner over i longform, hvor den enkelte historie varer en hel forestilling. <br>
        
        <span style="font-family: 'Alegreya SC';">Hønsegården</span> gør præcis det du IKKE forventer, så lad det være sagt: det bliver aldrig kedeligt. <span style="font-family: 'Alegreya SC';">Hvorfor? </span><br>

        Fordi her spiller vi uden sikkerhedsnet, og vi kan godt lide at være "grimme" på scenen. <br>

        <span style="font-family: 'Alegreya SC';">Hønsegården</span> adskiller sig væsentlig, ved kun at bestå af kvinder. Det vi stolte af. <br>

        Du kan opleve <span style="font-family: 'Alegreya SC';">Hønsegården</span> 4 gange om året på <span style="font-family: 'Alegreya SC';">"The Beach"</span>, Nygade 10, 4700 Næstved <br><br>
        
        <span style="font-family: 'Alegreya SC';">Hønsegården</span> er sponsoreret af <a href="http://c-c-foto.dk/" target="_blank">http://c-c-foto.dk/</a><br>
        Webmaster: Annette Sund
    </p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
//            $(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        effect: 'fade',
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
//        });
</script>
<?php
include './includes/footer.inc.html';
?>
