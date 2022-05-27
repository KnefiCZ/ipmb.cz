<?php

// Povinné
$title = 'Rodinná vila Hodkovičky';
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
        title: 'Rodinná vila Hodkovičky',
        background: '01.jpg',
        video: 'https://player.vimeo.com/612580500?h=861ed11154&badge=0&autopause=0&player_id=0&app_id=58479',



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
        title: 'Rodinná vila Hodkovičky',
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
    <?php small_description(
        title: 'Lorem',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odit consectetur molestias? Neque reiciendis qui reprehenderit blanditiis quaerat quo deleniti, voluptates, illum consectetur laboriosam sunt quae expedita ipsum distinctio. A.',
        background: '12.jpg',



        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>


    <?php
    $number_of_slides++;
    ?>
    <!-- section3 - start -->
    <?php double_photo(
        title: 'Komunikace',
        description: 'Žulové kostky v kombinaci a atypickými velkoformátovými betonovými dlaždicemi.',
        img_left: '03.jpg',
        img_alt_left: 'Rodinná vila Hodkovičky',
        img_right: '04.jpg',
        img_alt_right: 'Rodinná vila Hodkovičky',




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
        title: 'Výplně otvorů',
        description: 'Okna i vnější dveře hliník systém Schuco, vnější hliníkové žaluzie.',
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
    <?php photo_slider(
        title: 'Schodiště',
        description: 'Betonové pohledové prefa schodiště, transparentní impregnační nátěr, ocelové zábradlí, povrch komaxit.',
        images: [
            [
                'src' => '06.jpg',
                'alt' => 'Rodinná vila Hodkovičky'
            ],
            [
                'src' => '07.jpg',
                'alt' => 'Rodinná vila Hodkovičky'
            ],
            [
                'src' => '08.jpg',
                'alt' => 'Rodinná vila Hodkovičky'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinná vila Hodkovičky'
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
    <?php extrasmall_description(
        title: 'Interiér',
        description: 'Dřevěné parkety, pohledové betony na stropech, atypický nábytek.',
        background: '09.jpg',




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
    <?php photo_description(
        title: 'Reference klienta',
        description: [
            'Vážený pane,',
            'chtěli bychom vám poděkovat za postavení krásného domu. Vytvořili jste pro nás perfektní a kvalitní domov, vždy jste dodrželi slovo a předali projekt před domluveným termínem. Na vaší práci jsme ocenili především:',
            'Lidský a proaktivní přístup. Dodání atypického a technicky složitého domu na klíč, bez stresu a zádrhelů. Schopnost plnit zadání a přání investora. Přístup pana stavbyvedoucího Martina Nawratha, který je velký profesionál. Poctivost a kvalitu provedení jednotlivých řemesel',
            'Posíláme rovněž pozdrav všem, kteří na stavbě pracovali. Vždy vás rádi doporučíme potencionálním investorům a těšíme se, až budeme společně stavět znovu.',
        ],
        video: '',
        img: '10.jpg',
        img_alt: 'Rodinná vila Hodkovičky',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section7 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section8 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ATELIÉR 4DS,<br>ARCH. LUBOŠ ZEMEN',
        background: '11.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
        decoration2: 'Video: Spaneco Production',
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