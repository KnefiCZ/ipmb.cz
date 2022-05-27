<?php

// Povinné
$title = 'Rodinná vila U dubu';
$description = 'Třípodlažní vila ve svažitém terénu s nosnou konstrukcí z monolitického betonu situovaná výhledem obytných prostor do údolí 
řeky Vltavy a na Pražský hrad. Kompletní technologie vytápění i chlazení tepelným čerpadlem z hloubkových vrtů, nuceného větrání a inteligentní ovládání domu.';
$ogImage = "https://www.ipmb.cz/images/realizace/".$url2."/prehled.jpg";
$number_of_slides = 0; // Number used to generate anchors for each slide for navigation arrows to work correctly
global $slide;
$slide = 1; // NEMĚNIT

// Volitelné
$slick_slider = true;   //DEFAULT true
$fancybox = true;       //DEFAULT true
$fullpage = true;       //DEFAULT true
$footer = true;        //DEFAULT false





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
        title: 'Rodinná vila U dubu',
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
    <?php double_photo(
        title: 'Rodinná vila U dubu',
        description: 'Třípodlažní vila ve svažitém terénu s nosnou konstrukcí z monolitického betonu situovaná výhledem obytných prostor do údolí 
        řeky Vltavy a na Pražský hrad. Kompletní technologie vytápění i chlazení tepelným čerpadlem z hloubkových vrtů, nuceného větrání a inteligentní ovládání domu.',
        img_left: '02.jpg',
        img_alt_left: 'Rodinná vila U dubu',
        img_right: '03.jpg',
        img_alt_right: 'Rodinná vila U dubu',




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
        title: 'Skleněné zábradlí',
        description: 'Skleněné zábradlí z tvrzených lepených skel osazené do zámečnické konstrukce v úrovni stropu bez viditelného uchycení a bez madel.',
        background: '04.jpg',




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
        title: 'Kuchyň',
        description: 'Kuchyň je zpracována jako kombinace vysokého laku nábytku a kamenného obkladu na pracovní desce a pozadí.',
        background: '05.jpg',




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
    <?php extrasmall_description(
        title: 'Bazénová hala',
        description: 'Interiérový bazén vytápěný solárními panely s mozaikovým obkladem.',
        background: '06.jpg',




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
        title: 'Koupelna',
        description: 'Obklady z travertinu kombinované s mozaikou.',
        img_left: '13.jpg',
        img_alt_left: 'Rodinná vila U dubu',
        img_right: '14.jpg',
        img_alt_right: 'Rodinná vila U dubu',




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
    <?php double_photo(
        title: 'Schodiště',
        description: 'Schodiště je monolitické konstrukce s dubovým obkladem a zábradlí z velkoformátových skleněných desek kotvených do schodišťového ramene a podlahy.',
        img_left: '07.jpg',
        img_alt_left: 'Rodinná vila U dubu',
        img_right: '08.jpg',
        img_alt_right: 'Rodinná vila U dubu',




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
        title: 'Obývací část',
        description: 'Výhledy do údolí na jednu stranu a do proskleného atria na stranu druhou s krbovým tělesem uprostřed.',
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
    <!-- section8 - start -->
    <?php extrasmall_description(
        title: 'Lorem',
        description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque quia officiis delectus facilis placeat soluta sed vero odio id quaerat in, libero voluptas quas cupiditate corporis debitis rem asperiores quae.',
        background: '15.jpg',




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
    <?php double_photo(
        title: 'Výtah a technologie',
        description: 'Tři podlaží si zaslouží i výtah v nerez provedení KONE.
        Tepelné čerpadlo, hlubinné vrty, kapilární chlazení, bazénová technologie, solární panely, fotovoltaika.',
        img_left: '10.jpg',
        img_alt_left: 'Rodinná vila U dubu',
        img_right: '11.jpg',
        img_alt_right: 'Rodinná vila U dubu',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section9 - end -->
    

    <?php
    $number_of_slides++;
    ?>
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architektonické studio',
        title: 'ATELIÉR A69 -ARCHITEKTI S.R.O.',
        background: '12.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
        decoration2: 'Video: Spaneco Production',
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section10 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section9 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section9 - end -->

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