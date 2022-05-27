<?php

// Povinné
$title = 'Rodinná vila K Praha-východ';
$description = 'Třípodlažní vila s točitým monolitickým pohledovým schodištěm s výstupem na střechu s terasou a zatravněnou střechou se zajímavým výhledem na Prahu. Dům konstrukčně složitý, založený na dominanci pohledového betonu jak na vnější fasádě, tak i v interiéru.';
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
        title: 'Rodinná vila K Praha-východ',
        background: '01.jpg',
        video: 'https://player.vimeo.com/612584384?h=73820d3f38&badge=0&autopause=0&player_id=0&app_id=58479',



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
        title: 'Rodinná vila K Praha-východ',
        background: '02.jpg',
        description: 'Značně atypická rodinná vila s množstvím náročných řemeslných detailů s použitím nadstandardních materiálových specifikací.',




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
    <?php double_photo(
        title: 'Fasáda',
        description: 'Strukturovaná omítka, okna dřevo-hliník, bezrámové zasklení, venkovní hliníkové žaluzie.',
        img_left: '03.jpg',
        img_alt_left: 'Rodinná vila K Praha-východ',
        img_right: '04.jpg',
        img_alt_right: 'Rodinná vila K Praha-východ',




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
    <?php extrasmall_description(
        title: 'Vstup',
        description: 'Opěrná zeď a vstupní schodiště žula, komunikace žulové odseky, oplocení atypická zámečnická konstrukce na betonové pohledové podezdívce, povrchová úprava komaxit.',
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
    <?php double_photo(
        title: 'Interiér',
        description: 'Interiér kompletně zakázková výroba, galerie nosná ocelová konstrukce, výplně z dýhovaných desek odstín dub.',
        img_left: '06.jpg',
        img_alt_left: 'Rodinná vila K Praha-východ',
        img_right: '07.jpg',
        img_alt_right: 'Rodinná vila K Praha-východ',



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
    <?php extrasmall_description(
        title: 'Wellness',
        description: 'Bazén s přelivovým žlábkem, obklad keramický, obklady stěn a sauny Teak.',
        background: '08.jpg',




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
    <?php extrasmall_description(
        title: 'Výtah',
        description: 'Atypická zámečnická konstrukce s prosklenou kabinou uvnitř.',
        background: '09.jpg',




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
        title: 'Obývací pokoj',
        description: 'Dubové lepené parkety, sádrové omítky a atypický nábytek s povrchovou úpravou dýha dub. Krbová vložka vsazena do stěny s povrchem marockého štuku.',
        background: '10.jpg',




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
    <?php extrasmall_description(
        title: 'Krb',
        description: 'Krbová vložka vsazena do stěny s povrchem marockého štuku.',
        background: '11.jpg',




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
    <?php double_photo(
        title: 'Koupelny',
        description: 'Velkoformátové obklady na stěnách i na podlaze, kombinace s marockým štukem a keramickou mozaikou.',
        img_left: '12.jpg',
        img_alt_left: 'Rodinná vila K Praha-východ',
        img_right: '13.jpg',
        img_alt_right: 'Rodinná vila K Praha-východ',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section10 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section11 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ARCH. VÁCLAV ŠKARDA',
        background: '14.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
        decoration2: 'Video: Spaneco Production',
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section11 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section12 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section12 - end -->

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