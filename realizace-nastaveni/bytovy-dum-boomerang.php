<?php

// Povinné
$title = 'Bytový dům BOOMERANG';
$description = 'Bytový dům s 8 byty, garážemi, parkovacími místy a předzahrádkami. 
Fasáda je kombinací obkladových desek s klasickou strukturovanou omítkou, předokenní žaluzie, zábradlí na balkonech klasické zámečnické konstrukce';
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
        title: 'Bytový dům BOOMERANG',
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
        title: 'Bytový dům Praha Kyje',
        background: '02.jpg',
        description: 'Bytový dům s 8 byty, garážemi, parkovacími místy a předzahrádkami. 
        Fasáda je kombinací obkladových desek s klasickou strukturovanou omítkou, předokenní žaluzie, zábradlí na balkonech klasické zámečnické konstrukce',




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

    <?php extrasmall_description(
        title: 'Předzahrádky',
        description: 'Předzahrádky s protihlukovou hliníkovou stěnou, s terasami z Garapy.',
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
    <?php photo_slider(
        title: 'Schodiště',
        description: 'Hliníkové vstupní portály, okna plast v tmavém odstínu, hliníková garážová vrata, ocelové konstrukce zábradlí.
        Železobetonové pohledové stěny včetně zázemí domu, betonová dlažba s částečným zatravněním.',
        slider_big: true,
        images: [
            [
                'src' => '04.jpg',
                'alt' => 'Bytový dům Praha Kyje'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Bytový dům Praha Kyje'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Bytový dům Praha Kyje'
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
    <!-- section8 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'OK PLAN ARCHITECTS<br>
        ARCH. LUDĚK RÝZNER<br>
        ARCH. LIBOR CHOVANEC',
        background: '06.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar',
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