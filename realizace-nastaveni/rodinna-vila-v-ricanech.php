<?php

// Povinné
$title = 'Rodinná vila v Říčanech';
$description = 'Třípodlažní vila s točitým monolitickým pohledovým schodištěm s výstupem na střechu s terasou a zatravněnou střechou se zajímavým výhledem na Prahu. Dům konstrukčně složitý, založený na dominanci pohledového betonu jak na vnější fasádě, tak i v interiéru.';
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
        title: 'Rodinná vila v Říčanech',
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
        title: 'Rodinná vila Říčany',
        background: '02.jpg',
        description: 'Třípodlažní vila s točitým monolitickým pohledovým schodištěm s výstupem na střechu s terasou a zatravněnou střechou se zajímavým výhledem na Prahu. Dům konstrukčně složitý, založený na dominanci pohledového betonu jak na vnější fasádě, tak i v interiéru.',




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
    <?php photo_slider(
        title: 'Lorem',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!',
        slider_big: true,
        images: [
            [
                'src' => '03.jpg',
                'alt' => 'Rodinná vila Říčany'
            ],
            [
                'src' => '08.jpg',
                'alt' => 'Rodinná vila Říčany'
            ],
            [
                'src' => '09.jpg',
                'alt' => 'Rodinná vila Říčany'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinná vila Říčany'
            ],
            [
                'src' => '11.jpg',
                'alt' => 'Rodinná vila Říčany'
            ]
        ],




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
    <?php photo_slider(
        title: 'Interiér a detaily domu',
        description: 'Zdivo z bloků Durisol, kamenné velkoformátové obklady v interiéru, 
        podlahy z meranti, hliníkové výplně otvorů, krbové těleso s pemrlovaným betonem, venkovní bazén se zázemím krytý kamennou zdí z porfyru.',
        slider_big: true,
        images: [
            [
                'src' => '04.jpg',
                'alt' => 'Rodinná vila v Říčanech'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Rodinná vila v Říčanech'
            ],
            [
                'src' => '12.jpg',
                'alt' => 'Rodinná vila v Říčanech'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinná vila v Říčanech'
            ]
        ],




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
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Do vilové čtvrti na mírně svažitý pozemek o rozloze 2200m² jsme umístily jednopodlažní dům ve tvaru písmene U doplněný hmotou garáže. Stavba spolu se zdmi oplocení vytváří
            poloatriové prostory různých významů. Volba železobetonového stropu, podepřeného 
            v rozích hladního atria dvěma ocelovými sloupy, umožnila dosáhnout maximálního prosklení, a tím optického propojení interiéru se zahradou. Stěny jsou vyzděné ze ztraceného bednění 
            Durisol. Obklady koupelen a dlažby
            jsme navrhly z italského vápence, dřevěné podlahy z olejovaného Merbau. Z italského porgyru jsou provedené venkovní dlažby a kamenné zdi.',
        ],
        video: '',
        img: '06.jpg',
        img_alt: 'Rodinná vila v Říčanech',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section5 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section8 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ARCH. MARKÉTA CAJTHAMLOVÁ',
        background: '07.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar',
        btntoggle: false,
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section8 - end -->


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