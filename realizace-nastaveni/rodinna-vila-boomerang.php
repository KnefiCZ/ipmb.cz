<?php

// Povinné
$title = 'Rodinná vila BOOMERANG';
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
        title: 'Rodinná vila BOOMERANG',
        background: '01.jpg',
        video: 'https://player.vimeo.com/370289302?autoplay=1',



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
        title: 'Rodinná vila BOOMERANG',
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
    <?php photo_slider(
        title: 'Lorem',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!',
        slider_big: true,
        images: [
            [
                'src' => '07.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
            ],
            [
                'src' => '11.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
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
    <?php double_photo(

        title: 'Lorem',
        description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque quia officiis delectus facilis placeat soluta sed vero odio id quaerat in, libero voluptas quas cupiditate corporis debitis rem asperiores quae.',
        img_left: '08.jpg',
        img_alt_left: 'Rodinná vila BOOMERANG',
        img_right: '09.jpg',
        img_alt_right: 'Rodinná vila BOOMERANG',
        



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
    <!-- section4 - start -->
    <?php photo_slider(
        title: 'Interiér a detaily domu',
        description: 'Nerezová atypická kuchyně, pohledové betony 
        v interiéru, koberce z kapičkového plechu na vnitřních schodištích, plechové parapety v interiéru, korková lina a bezzárubňové dveře.',
        slider_big: true,
        images: [
            [
                'src' => '04.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinná vila BOOMERANG'
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
    <?php double_photo(

        title: 'Lorem',
        description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque quia officiis delectus facilis placeat soluta sed vero odio id quaerat in, libero voluptas quas cupiditate corporis debitis rem asperiores quae.',
        img_left: '12.jpg',
        img_alt_left: 'Rodinná vila BOOMERANG',
        img_right: '14.jpg',
        img_alt_right: 'Rodinná vila BOOMERANG',




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
    <!-- section5 - start -->
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Dům je postaven v rovině u Kolína. Okolní venkovská rozptýlená zástavba nekladla žádné mimořádné požadavky na projekt, snad jen potřebu co nejvíce oddělit mikrosvět klienta od okolí. Výtvarná, organická koncepce je ovlivněna umístěním objektu na pozemku, vztahem k sousedům, orientací všech obytných místností na jih 
            a vysunutím bazénu do zahrady. Vila se svojí půdorysnou stopou blíží tvaru bumerangu s výrazně přiznávající linií stěny, kterou se vstupuje dovnitř přes skleněný kubus zádveří. Tato stěna je obložena betonovými bloky a svým výrazem definuje jakousi pevnost a stabilitu díla.',
            '<h1>ARCH. JAN LÍNEK</h1>',
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
        title: 'ARCH. JAN LÍNEK',
        background: '15.jpg',
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