<?php

// Povinné
$title = 'Rodinná vila Ořech';
$description = 'Jednopodlažní vila s lícovým cihelným obkladem se vstupní částí z pohledového betonu
na konci obce s výhledem do krajiny.';
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
        title: 'Rodinná vila Ořech',
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
        title: 'Rodinná vila Ořech',
        description: 'Jednopodlažní vila s lícovým cihelným obkladem se vstupní částí z pohledového betonu
        na konci obce s výhledem do krajiny.',
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
                'src' => '03.jpg',
                'alt' => 'Rodinná vila Ořech'
            ],
            [
                'src' => '12.jpg',
                'alt' => 'Rodinná vila Ořech'
            ],
            [
                'src' => '09.jpg',
                'alt' => 'Rodinná vila Ořech'
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
        description: 'Interiér kamenné vápencové desky, exteriér pískovcové desky, bezrámové zasklení Josko, rámové zárubně dveří, zastínění roletami.',
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
                'alt' => 'Rodinná vila Ořech'
            ],
            [
                'src' => '11.jpg',
                'alt' => 'Rodinná vila Ořech'
            ],
            [
                'src' => '10.jpg',
                'alt' => 'Rodinná vila Ořech'
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
    <?php photo_description2(
        title: 'Reference klienta',
        description: [
            'Po zkušenostech s několika předchozími rekonstrukcemi, dostavbami a přestavbami bydlení jsme dlouho zvažovali, zda ještě máme odvahu pustit se do individuální výstavby rodinného domu. Po letech neúspěšného hledání hotového domu, který by odpovídal našim představám, jsme se však nakonec rozhodli pro stavbu na zelené louce a svého rozhodnutí určitě nelitujeme. Měli jsme šťastnou ruku již při výběru autora návrhu a projektové dokumentace domu. Paní architekta nám následně doporučila několik stavebních firem, se kterými měla pozitivní zkušenosti z předchozích realizací. Ve výběrovém řízení zvítězila společnost IPM Building, a to zdaleka nejen z důvodu nabídnuté ceny, ale hlavně díky vstřícnému přístupu majitele firmy, pana Ing. Matyáše, který sám aktivně navrhoval možná vylepšení a alternativní řešení. Pro IPMB hovořila také skutečnost, že se specializují na individuální projekty, a že často spolupracují s několika známými architekty, o kterých jsme věděli, že jsou velmi nároční na kvalitu provedení prací. Měli jsme možnost osobně navštívit některé jejich předchozí realizace, jejichž spokojení majitelé a kvalita provedení detailů nás přesvědčily. Naše volba se ukázala být správnou. V průběhu celé stavby, která od prvního kopnutí do předání domu trvala pouze 13 měsíců, se nevyskytly žádné vážnější problémy. Komunikace s majitelem panem Matyášem, i stavbyvedoucím panem Nawrathem, byla 
            po celou dobu výstavby příjemná a bezproblémová. Veškeré termíny a dohody byly plněny. S odstupem necelého jednoho roku od dokončení a předání domu můžeme potvrdit velmi dobrou kvalitu zhotovení. Přístup firmy při odstraňování drobných závad v rámci záruční doby je rovněž naprosto bezproblémový. Celkově hodnotíme spolupráci se stavební firmou IPM Building velmi pozitivně. Pokud bychom někdy 
            v budoucnu uvažovali o další stavbě, určitě bychom se na ně znovu obrátili.',
        ],
        video: '',
        img: '06.jpg',
        img_alt: 'Architektonické studio',
        smallimage: "",
        smallimage_alt: "",




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section6 - end -->


    <?php
    $number_of_slides++;
    ?>
    <!-- section7 - start -->
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Dům využívá možnosti posledního pozemku v obci otevřít se velkými okny do krajiny. Dlouhá hmota je členěna atrii. Obytnou část ložnic 
            a obývacího pokoje odděluje páteřní komunikace od obslužné partie 
            s koupelnami, šatnami, kuchyní a prádelnou. K jihovýchodní fasádě přiléhá prostorná terasa. Konstrukce stěn i stropů byla provedena 
            z porthermu, obklad z lícových cihel Klinker. Podlahy jsou položeny 
            z portugalského vápence vyjma ložnic dětí, kde jsme navrhli bělená dubová prkna.',
            '<br><h1>ARCH. MARKÉTA CAJTHAMLOVÁ</h1>',
        ],
        video: '',
        img: '07.jpg',
        img_alt: 'Architektonické studio',
        smallimage: "",
        smallimage_alt: "",




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
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'ARCH. MARKÉTA CAJTHAMLOVÁ',
        background: '08.jpg',
        decoration: 'Foto: Ester Havlová',
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
