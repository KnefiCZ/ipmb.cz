<?php

// Povinné
$title = 'Rodinný dům P';
$description = 'První spolupráce se Studiem Pha, architekta Jana Šestáka, na výstavbě vily - rodinného domu P. 
Jedná se o třípodlažní vilu s pohledovými betony v interiéru na schodišťové stěně, velkými plochami bezrámového zasklení,s mnoha detaily jak na fasádě, tak v interiéru.';
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
        title: 'Rodinný dům P',
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
        title: 'Rodinný dům P',
        background: '02.jpg',
        description: 'První spolupráce se Studiem Pha, architekta Jana Šestáka, na výstavbě vily - rodinného domu P. 
        Jedná se o třípodlažní vilu s pohledovými betony v interiéru na schodišťové stěně, velkými plochami bezrámového zasklení,s mnoha detaily jak na fasádě, tak v interiéru.',




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
        title: 'Prosklená fasáda',
        description: 'Uliční fasáda - bezrámové zasklení v kombinaci 
        s hliníkovými žaluziemi a obklady s hliníkovými plechy v komaxitové úpravě.',
        img_left: '03.jpg',
        img_alt_left: 'Rodinný dům P',
        img_right: '04.jpg',
        img_alt_right: 'Rodinný dům P',




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
    <?php double_photo(
        title: 'Fasáda do zahrady',
        description: 'Z přízemí domu je vstup na dřevěnou venkovní terasu propojenou s bazénem. Celá fasáda je orámována ocelovou nerez konstrukcí s dřevěnými lamelami.',
        img_left: '05.jpg',
        img_alt_left: 'Rodinný dům P',
        img_right: '14.jpg',
        img_alt_right: 'Rodinný dům P',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section4- end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section5 - start -->
    <?php photo_slider(
        title: 'Obývací část',
        description: 'Otevřený a kompletně prosklený prostor s propojením 
        do zahrady. Je zde schodiště uprostřed s velkoformátovými prosklenými zábradelními deskami.',
        slider_big: true,
        images: [
            [
                'src' => '06.jpg',
                'alt' => 'Rodinný dům P'
            ],
            [
                'src' => '07.jpg',
                'alt' => 'Rodinný dům P'
            ]
        ],




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
    <?php photo_slider(
        title: 'Koupelna',
        description: 'V koupelnách jsou použity velkoformátové obklady Techlam – rozměr 3x1 m na stěnách a 1x1 m na podlahách.',
        slider_big: true,
        images: [
            [
                'src' => '08.jpg',
                'alt' => 'Rodinný dům P'
            ],
            [
                'src' => '15.jpg',
                'alt' => 'Rodinný dům P'
            ]
        ],




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
    <?php photo_slider(
        title: 'Schodiště',
        description: 'Obě schodiště v domě jsou rozdílné konstrukce i designu.',
        slider_big: true,
        images: [
            [
                'src' => '09.jpg',
                'alt' => 'Rodinný dům P'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinný dům P'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinný dům P'
            ]
        ],




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

    <?php small_description(
        title: 'Nábytek',
        description: 'Kombinace dřeviny Wenge a lesklého vzhledu v lakovaném provedení.',
        background: '11.jpg',




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
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Je nezbytné ctít uliční čáru, není ani vhodné uvažovat o odstoupení 
            od této čáry dovnitř pozemku, neboť by docházelo zbytečně 
            k úbytku zahrady. Je vhodné ctít klasickou proporci vily s jedním částečným suterénem a dvěma nadzemními podlažími – přízemím 
            a patrem. Přízemí se částečně vysouvá do zahrady, aby bylo naplněno maximální obytnou plochou. Suteren se podsunuje pod dům, 
            aby uvolnil místo u vjezdu na stání aut a manipulační prostor. 
            Vzniká zároveň komfortní krytá plocha před vstupem Patro je ložnicové a nad vysunutou obytnou částí přízemí vzniká terasa. 
            Dům je doplněn venkovní dřevěnou terasou a navazujícím bazénem. Schodišťová rampa podél západní fasády přivádí obyvatele i návštěvy přímo od vstupu do zahrady a pokračuje pěšinou ze „šlapáků“ 
            až k zadnímu přístupu, vjezdu na pozemek. <br>',
            '<h2>STUDIO PHA</h2>',
        ],
        video: '',
        img: '12.jpg',
        img_alt: 'Rodinná vila Jevany',




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
    <?php credits(
        pozice: 'Architektonické studio',
        title: 'STUDIO PHA',
        background: '13.jpg',
        decoration: 'Foto: Filip Šlapal',
        decoration2: '',
        btntoggle: false,
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
    <!-- section11 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section11 - end -->

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