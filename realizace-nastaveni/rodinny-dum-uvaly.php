<?php

// Povinné
$title = 'Rodinný dům Úvaly';
$description = 'Dvoupodlažní rodinný dům na rozlehlém pozemku s jednoduchou koncepcí a čistým detailem.';
$ogImage = "https://www.ipmb.cz/images/realizace/".$url2."/prehled.jpg";
$number_of_slides = 0; // Number used to generate anchors for each slide for navigation arrows to work correctly
global $slide;
$slide = 1; // NEMĚNIT

// Volitelné
$slick_slider = true;   //DEFAULT true
$fancybox = true;       //DEFAULT true
$fullpage = true;       //DEFAULT true
$footer = false;        //DEFAULT false





// _TOP.PHP IMPORT
require_once ('_top.php');

?>

<!-- NAVBAR - start -->
<?php include_once ('part_side-navbar.php') ?>
<!-- NAVBAR - end -->

<!-- SIDE-NAV start -->
<?php include ('part_sidebar.php'); ?>
<!-- SIDE-NAV end -->

<!-- MAIN - start -->
<main id="fullPage" class="detail">
<?php $barva=1; include_once ('part_logo.php'); ?>












    <?php
    $number_of_slides++;
    ?>
    <!-- section1 - start -->
    <?php title(
        title: 'Rodinný dům Úvaly',
        background: '01.jpg',
        video: '',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section1 - end -->
    
    
    
    <?php
    $number_of_slides++;
    ?>
    <!-- section2 - start -->
    <?php small_description(
        title: 'Rodinný dům Úvaly',
        background: '02.jpg',
        description: 'Dvoupodlažní rodinný dům na rozlehlém pozemku s jednoduchou koncepcí a čistým detailem.',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section2 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section3 - start -->
    <?php small_description(
        title: 'Fasáda',
        description: 'Kombinace strukturované omítky s lepeným obkladem Cembonit na hliníkové konstrukci a hliníkovými okny.',
        background: '03.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section3 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section4 - start -->
    <?php small_description(
        title: 'Terasa',
        description: 'Terasa zastřešena pojezdovou markýzou, jako pochozí materiál použita exotická dřevina Garapa.',
        background: '04.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section4 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section5 - start -->
    <?php small_description(
        title: 'Interiér',
        description: 'Podlaha dřevěné lepené parkety odstín bělený dub, obklady stěn ze stejného materiálu, atypický nábytek.',
        background: '05.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section5 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section6 - start -->
    <?php double_photo(
        title: 'Schodiště',
        description: 'Stupně jako konzola na trnech v nosné železobetonové zdi, z druhé strany přes nerez úchyty připevněno skleněné zábradlí.',
        img_left: '06.jpg',
        img_alt_left: 'Rodinný dům Úvaly',
        img_right: '07.jpg',
        img_alt_right: 'Rodinný dům Úvaly',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section6 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section7 - start -->
    <?php small_description(
        title: 'Koupelny',
        description: 'Keramické obklady v kombinaci s atypickým nábytkem a emailovým nátěrem.',
        background: '08.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section7 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section8 - start -->
    <?php extrasmall_description(
        title: 'Kuchyně',
        description: 'Atypická výroba, odstín bílé ve vysokém lesku v kombinaci a běleným dubem.',
        background: '09.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section8 - end -->



    <?php
    $number_of_slides++;
    ?>
    <!-- section9 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ARCH. DANA STRACHOVÁ',
        background: '10.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar',
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section9 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section10 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section10 - end -->

    <!-- FOOTER - start -->
    <footer class="section fp-auto-height fp-auto-height-responsive">

        <div class="footer bg-primary">

            <div class="container-fluid">

                <?php include_once ('part_footer-nav.php'); ?>

            </div>

        </div>

        <div class="footer__copyright">
            <div class="container-fluid">
                <div class="row">
                    <p class="mb-0 p-0">2020 © IPM Building s r.o.</p>
                </div>
            </div>
        </div>

    </footer>
    <!-- FOOTER - end -->


</main>
<!-- MAIN - end -->