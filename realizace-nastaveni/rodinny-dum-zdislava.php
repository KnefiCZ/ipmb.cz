<?php

// Povinné
$title = 'Rodinný dům Zdislava';
$description = 'Tvarově netradiční stavba citlivě zasazená do krajiny Podještědí („Dům na kopci“). Konstrukce domu je kombinací dřevostavby a tradičních zděných materiálů. 
Vyšší část je tvořena dřevěnými lepenými smrkovými rámy s celoprosklenou fasádou.';
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
        title: 'Rodinný dům Zdislava',
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
        title: 'Rodinný dům Zdislava',
        background: '02.jpg',
        description: 'Tvarově netradiční stavba citlivě zasazená do krajiny Podještědí („Dům na kopci“). Konstrukce domu je kombinací dřevostavby a tradičních zděných materiálů. 
        Vyšší část je tvořena dřevěnými lepenými smrkovými rámy s celoprosklenou fasádou.',




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
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '09.jpg',
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '11.jpg',
                'alt' => 'Rodinný dům Zdislava'
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
        description: 'Modřínová fasáda s lazurovacím lakem, krytina z břidlice světle zeleného odstínu kombinována se zatravněním 
        na rovnějších střešních plochách a titanzinkem, 
        přírodní škrábané omítky.',
        slider_big: false,
        images: [
            [
                'src' => '04.jpg',
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '06.jpg',
                'alt' => 'Rodinný dům Zdislava'
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
    <!-- section4 - start -->
    <?php photo_slider(
        title: 'Lorem',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!',
        slider_big: true,
        images: [
            [
                'src' => '07.jpg',
                'alt' => 'Rodinný dům Zdislava'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinný dům Zdislava'
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
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ARCH. ZDENĚK ZAVŘEL',
        background: '08.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar',
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