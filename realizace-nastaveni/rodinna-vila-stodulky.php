<?php

// Povinné
$title = 'Rodinná vila Stodůlky';
$description = 'Dvoupodlažní vila s částečným podsklepením, jednoduché koncepce s minimalistickým detailem v interiéru.';
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
        title: 'Rodinná vila Stodůlky',
        background: '01.jpg',
        video: 'https://player.vimeo.com/612585492?h=4870f707a0&badge=0&autopause=0&player_id=0&app_id=58479%22%20frameborder=%220%22%20allow=%22autoplay;%20fullscreen;%20picture-in-picture',



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
        title: 'Rodinná vila Stodůlky',
        background: '02.jpg',
        description: 'Dvoupodlažní vila s částečným podsklepením, jednoduché koncepce s minimalistickým detailem v interiéru.',




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
        title: 'Fasáda',
        description: 'Strukturovaná omítka, hliníková okna Schuco, meziokenní obklad Cembonit, vnější hliníkové žaluzie, oplechování předzvětralý titanzinek.',
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
    <?php small_description(
        title: 'Interiér',
        description: 'Dubové parkety, krbové těleso obložené kamennými deskami, atypický nábytek včetně knihovny, vše odstín dub.',
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
    <!-- section2 - start -->
    <?php small_description(
        title: 'Lorem ipsum',
        background: '14.jpg',
        description: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde minima fugiat dignissimos. Fugit, quia error quod aliquam reiciendis consectetur, optio earum numquam rem, temporibus reprehenderit ad dolores voluptatum voluptates velit?',


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
    <!-- section2 - start -->
    <?php small_description(
        title: 'Lorem ipsum',
        background: '15.jpg',
        description: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde minima fugiat dignissimos. Fugit, quia error quod aliquam reiciendis consectetur, optio earum numquam rem, temporibus reprehenderit ad dolores voluptatum voluptates velit?',


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
    <!-- section5 - start -->
    <?php double_photo(
        title: 'Vnitřní dveře a skleněné stěny',
        description: 'Vše zakázková výroba, vnitřní dveře odstín dub, skryté panty, nerez kliky, skleněné stěny s dřevěnými madly.',
        img_left: '05.jpg',
        img_alt_left: 'Rodinná vila Stodůlky',
        img_right: '06.jpg',
        img_alt_right: 'Rodinná vila Stodůlky',




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
    <!-- section5 - start -->
    <?php photo_slider(
        title: 'Schodiště',
        description: 'Konstrukce schodiště betonová zubatice, povrch stěrka, skleněné zábradlí s nerez úchyty.',
        images: [
            [
                'src' => '07.jpg',
                'alt' => 'Rodinná vila Stodůlky'
            ],
            [
                'src' => '08.jpg',
                'alt' => 'Rodinná vila Stodůlky'
            ],
            [
                'src' => '09.jpg',
                'alt' => 'Rodinná vila Stodůlky'
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
    <!-- section7 - start -->
    <?php double_photo(
        title: 'Koupelny',
        description: 'Stěny marocké štuky, obklady velkoformátové keramické dlaždice, atypická nábytek odstín dub.',
        img_left: '10.jpg',
        img_alt_left: 'Rodinná vila Stodůlky',
        img_right: '11.jpg',
        img_alt_right: 'Rodinná vila Stodůlky',




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
    <?php photo_description(
        title: 'Reference klienta',
        description: [
            'Společnost IPMB jsme si vybrali z několika oslovených firem. Přesvědčila nás transparentní cenová nabídka, možnost vidět několik probíhajících staveb, kvalita práce a otevřená komunikace ze strany všech pracovníků včetně majitele. Rozhodli jsem se pro stavbu na klíč a určitě neprohloupili. Nechtěli jsme zažívat situace jako někteří moji kamarádi, kteří si domy stavěli svépomocí a vystřídalo se jim 
            na stavbách mnoho firem, kdy jedna nerespektuje práci druhé 
            a v případě problémů svalují vinu jeden na druhého. 
            IPMB spolupracuje pouze s ověřenými dlouholetými dodavateli 
            a spolupráce funguje jako dobře namazaný stroj. Každý ví, co od druhého může očekávat a to se samozřejmě odráží na celkové výsledné kvalitě. Jak IPMB tak i dodavatelé myslí za vás, takže vás mnohdy překvapí navrhovanými změnami, které vycházejí čistě 
            z jejich zkušeností a vás jako laika by některé řešení vůbec nenapadli. Každý, kdo nás navštíví je nadšen z kvality, provedení detailů 
            a celkového sladění, za což samozřejmě vděčíme také našim oběma architektům. Každý říká, že jsme měli štěstí, ale ono to nebylo štěstí, ale jasná sázka na IPMB. IPMB jsem již několikrát doporučil, budu stále doporučovat a tímto bych jim chtěl ještě jednou poděkovat.',
            
        ],
        img: '12.jpg',
        img_alt: 'Rodinná vila Stodůlky',




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
    <?php credits(
        pozice: 'Architekt',
        title: 'ING. PETR LAŠTOVKA,<br>
        ARCH. KATEŘINA POHLOVÁ',
        background: '13.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
        decoration2: 'Video: Spaneco Production', 
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




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
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section10 - end -->

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