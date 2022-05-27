<?php

// Povinné
$title = 'Rodinný dům Světice';
$description = 'Tvar vesnického domu je v klasickém provedení se sedlovou střechou s titanzinkovou 
falcovanou krytinou a jednoduchou bílou štukovou omítkou. Za tuto realizaci jsme obdrželi ocenění Grand Prix architektů v roce 2015.';
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
        title: 'Rodinný dům Světice',
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
        title: 'Rodinný dům Světice',
        description: 'Tvar vesnického domu je v klasickém provedení se sedlovou 
        střechou s titanzinkovou falcovanou krytinou a jednoduchou bílou štukovou omítkou. Za tuto realizaci jsme obdrželi ocenění Grand Prix architektů v roce 2015.',
        background: '02.jpg',




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
                'src' => '10.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '09.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '03.jpg',
                'alt' => 'Rodinný dům Světice'
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
    <?php small_description(
        title: 'Interiér a detaily domu',
        description: 'Interiér cementové stěrky na podlaze obytné části, dřevěná masívní 
        lepená lávka v patře tvořící galerii, bezrámové zasklení v obývací části, rámové dveře zalícované se zdí.',
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
    <?php photo_slider(
        title: 'Lorem',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!',
        slider_big: true,
        images: [
            [
                'src' => '05.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '14.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '11.jpg',
                'alt' => 'Rodinný dům Světice'
            ],
            [
                'src' => '12.jpg',
                'alt' => 'Rodinný dům Světice'
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
    <?php single_photo(
        title: 'Cena Grand Prix 2015',
        description: 'Obec architektů udělila „NÁRODNÍ CENU“ v soutěži GRAND PRIX ARCHITEKTŮ 2015 za architekturu novostavby rodinného domu ve Světicích.',
        img: '06.jpg',
        video: '',
        img_alt: 'Cena Grand Prix 2015',



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
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ATELIÉR K2',
        background: '07.jpg',
        decoration: 'Foto: Tomáš Rasl',
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
    $number_of_slides = "realizace";
    ?>
    <!-- section9 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

        url2: $url2,
        slide: $number_of_slides,

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