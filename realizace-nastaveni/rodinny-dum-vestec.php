<?php

// Povinné
$title = 'Rodinný dům Vestec';
$description = 'Stavba rodinné vily s betonovou „prkénkovou“ fasádou kombinovanou se zateplovacím systémem v čistě bílé barvě.';
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
        title: 'Rodinný dům Vestec',
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
        title: 'Rodinný dům Vestec',
        description: 'Stavba rodinné vily s betonovou „prkénkovou“ fasádou kombinovanou se zateplovacím systémem v čistě bílé barvě.',
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
    <!-- section4 - start -->
    <?php small_description(
        title: 'Oplocení',
        description: 'Oplocení je řešeno stejně jako fasáda domu, a to pohledovým betonem 
        s otiskem klasických drásaných prken.',
        background: '03.jpg',




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
    <?php small_description(
        title: 'Terasa',
        description: 'Terasa je z dřeviny Massaranduba a je plně kryta předsazením horního podlaží. Volně navazuje na zahradu s bazénem.',
        background: '04.jpg',




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
        title: 'Fasáda',
        description: 'Fasáda je řešena kombinací klasické strukturované omítky a 
        pohledovým betonem. Do těžkého systémového bednění byla vložena nehoblovaná prkna. Stěna z pohledového betonu je předsazená a kotvená do klasického zdiva.',
        slider_big: true,
        images: [
            [
                'src' => '15.jpg',
                'alt' => 'Rodinný dům Vestec'
            ],
            [
                'src' => '16.jpg',
                'alt' => 'Rodinný dům Vestec'
            ],
            [
                'src' => '17.jpg',
                'alt' => 'Rodinný dům Vestec'
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
        title: 'Kuchyň',
        description: 'Kuchyně ve provedena ve vysokém lesku bílé barvy a je z ní výstup přímo na terasu.',
        slider_big: true,
        images: [
            [
                'src' => '05.jpg',
                'alt' => 'Rodinný dům Vestec'
            ],
            [
                'src' => '06.jpg',
                'alt' => 'Rodinný dům Vestec'
            ],
            [
                'src' => '18.jpg',
                'alt' => 'Rodinný dům Vestec'
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
    <?php extrasmall_description(
        title: 'Osvětlení',
        description: 'Designové osvětlení je variabilní a je zapracováno v rámci podhledů.',
        background: '07.jpg',




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
    <?php small_description(
        title: 'Podlaha',
        description: 'Podlaha interiéru je tvořena bělenými dubovými lamelami lepenými na podklad.',
        background: '08.jpg',




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
    <?php small_description(
        title: 'Obývací část',
        description: 'Obývací část je tvořena krbovým tělesem s povrchovou úpravou Pandomo navazující na makassarovou stěnu. Stěrky Pandomo jsou použity na většině stěn v obývací části.',
        background: '09.jpg',




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
    <?php double_photo(
        title: 'Koupelna',
        description: 'Obklady i dlažba provedeny z travertinu včetně obkladu koupelnového nábytku.',
        img_left: '10.jpg',
        img_alt_left: 'Rodinný dům Vestec',
        img_right: '11.jpg',
        img_alt_right: 'Rodinný dům Vestec',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section11 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section12 - start -->
    <?php photo_description(
        title: 'Reference klienta',
        description: [
            'Vážený pane inženýre, dovolil bych si Vám toto cestou vyjádřit dík 
            za dobrou spolupráci, která vyústila do zdařilé realizace. Od prvního momentu, kdy jste mi ukázal sídlo vaší firmy a dvě realizované stavby jsem věděl, že jsem na dobré adrese. Kvalita prací byla zřejmá 
            a nediskutovatelná. V osobě stavbyvedoucího pana Jana Ježka máte zdatného vykonavatele a pokračovatele vašeho díla, rovněž s jeho prací jsem byl velmi spokojen. Samozřejmě, že v průběhu stavby docházelo k určitým změnám, drobným komplikacím, ale v tomto bodě mne zaujal zejména přístup, kde prioritou bylo řešení nového požadavku v co nejpřijatelnější ceně a nejkratším, možném termínu. Komunikace s autorským a technickým dozorem probíhala ve velmi tvůrčím duchu se společným cílem, úspěšným dokončením díla. 
            Nyní s určitým odstupem mohu říci, že i časový harmonogram stavby byl vypracován s rutinou ostříleného matadora a dodržován 
            s nebývalou péčí, jakož i technologická návaznost jednotlivých profesí. Vždy jsem chtěl vybudovat dům, za který bych se nemusel stydět a měl z něj dobrý pocit, myslím, že se nám to povedlo. 
            Děkuji, pane inženýre! Závěrem si ještě dovolím konstatovat, stavba byla provedena ve výtečné kvalitě a za rozumnou cenu.',
        ],
        video: '',
        img: '12.jpg',
        img_alt: 'Rodinný dům Vestec',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section12 - end -->

    <?php
    $number_of_slides++;
    ?>
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Přáním investora bylo navrhnout jednoduchý kompaktní dům 
            s lehkým odkazem na funkcionalistickou architekturu. Na přibližně obdélníkovém půdorysu je koncipován dvoupodlažní dům 
            pro čtyřčlennou rodinu. V přízemí se nachází hlavní obytné 
            a technické prostory včetně garáže. Do patra jsou situovány pokoje 
            a ložnice se zázemím. Objekt v úrovni přízemí navazuje na kvalitně založenou zahradu s bazénem. V interiéru byly navrženy obklady 
            z makassaru, v koupelnách pak z travertinu. Podlahu pokrývají prkna z dubu. Fasáda byla navržena jako kombinace bílé omítky 
            a pohledového prkénkového betonu. Fasády jsou prořezány prosklenými výplněmi otvorů v hliníkových rámech.',
        ],
        video: '',
        img: '13.jpg',
        img_alt: 'Architektonické studio',
        smallimage: "smallimage",
        smallimage_alt: "OKPLANARCHITECTS",




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>

    

    <?php
    $number_of_slides++;
    ?>
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architektonické studio',
        title: 'OKPLANARCHITECTS',
        background: '14.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
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
        slide: 'realizace',

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