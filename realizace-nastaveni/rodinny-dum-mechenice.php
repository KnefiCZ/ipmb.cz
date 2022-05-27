<?php

// Povinné
$title = 'Rodinný dům Měchenice';
$description = 'Stavba rodinné vily v Měchenicích se nachází na svažitém pozemku na hraně údolí Vltavy s krásným výhledem na její břehy. Hliníková okna s předokenními žaluziemi,
ocelová konstrukce vykonzolované terasy nad řeku, obytné prostory s výhledem na řeku, minimalistický interiér s pohledovými betony a litou stěrkou na podlaze.';
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
        title: 'Rodinný dům Měchenice',
        background: '01.jpg',
        video: 'https://player.vimeo.com/370287268?h=d312e1deb1',



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
        title: 'Rodinný dům Měchenice',
        background: '02.jpg',
        description: 'Stavba rodinné vily v Měchenicích se nachází na svažitém pozemku na hraně údolí Vltavy s krásným výhledem na její břehy. Hliníková okna s předokenními žaluziemi,
         ocelová konstrukce vykonzolované terasy nad řeku, obytné prostory s výhledem na řeku, minimalistický interiér s pohledovými betony a litou stěrkou na podlaze.',




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
        title: 'Garáž',
        description: 'Atypická garáž pro dvě vozidla se tyčí nad úrovní objektu. Právě součástí garáže je jediný vstup na pozemek z ulice. Konstrukce je ocelová a je opláštěná polykarbonátem.',
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
        title: 'Exterier',
        description: 'Obytná část domu je vedena pod úrovní terénu spolu se zahradou a terasou a je s nebytovou částí pevně spojena v úrovni podlahy garáže. 
        Propojení obou objektů je využito k zastřešení přístupového chodníku k hlavnímu vstupu, který je propojen s venkovní krytou terasou s kuchyňkou.',
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

    <?php small_description(
        title: 'Hlavní vchod',
        description: 'Do obytné části nemovitosti se vstupuje tímto průchodem zahradou, který zdobí typické osvětlení domu, naleznete jej na více místech v exteriéru i interiéru.',
        background: '05.jpg',




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
    <?php small_description(
        title: 'Terasa',
        description: 'Vykonzolovaná terasa přímo posazená nad terénním zlomem nad Vltavou je přístupná
        z obývacího pokoje i ložnice a nabízí jedinečný výhled na řeku Vltavu. Terasa je tvořena kovovou konstrukcí, skleněným zábradlím a položena dřevěnými prkny z Garapy.',
        background: '06.jpg',




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
    <?php small_description(
        title: 'Koupelna',
        description: 'Koupelna nabízí prostornou sprchu, samostatně stojící vanu a dvě oddělená umyvadla. Dostatek soukromí zajišťuje matné sklo po celé výšce prosklení místnosti. 
        Na stěnách je použita bílá mozaika, strop je z pohledového betonu, podlaha z lité polyuretanové stěrky.',
        background: '07.jpg',




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
        title: 'Obývací část',
        description: 'Obývací část domu je spojena s kuchyní a jídelnou,
        vzniká tak velký otevřený prostor. Atypický nábytek obývacího pokoje přechází pravidelně do kuchyňské linky, která pokračuje až na venkovní terasu.',
        background: '08.jpg',




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
        title: 'Kuchyň s jídelnou',
        description: 'Dominantou kuchyně je rozhodně levitující kuchyňská linka jak v interiéru, tak i exteriéru (tzv. letní kuchyně).
        Kuchyň a terasu dělí posuvná skleněná stěna, jídelní část je velmi dobře prosvětlena a dá se velice dobře propojit s venkovní terasou.',
        background: '09.jpg',




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
        title: 'Ložnice',
        description: 'Ložnice je další z místností, ze které je přístup na terasu i výhled na řeku. Místnost je dobře prosvětlena díky atypickému oknu přes celou stěnu místnosti.',
        background: '10.jpg',




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
    <!-- section10 - start -->

    <?php small_description(
        title: 'Majitel nemovitosti',
        description: 'Stejně tak, jak Ing. Matyáš reagoval na moji poptávku a jak probíhalo první zkušební setkání nad kafem, obdobně se rozvíjela i další spolupráce a následná stavba. Vše fungovalo věcně, otevřeně a dle plánu. Dokonce se musím přiznat, že mě celá stavba i přes pravidelné a bohužel neodmyslitelné fakturace opravdu bavila. Dům byl stavěn i přes extrémně komplikované podmínky na spádovitém a skalním terénu přesně dle harmonogramu, při pravidelných kontrolních dnech se detailně probírala provedená i plánovaná práce a kromě financí pro mě nepředstavovala celá akce absolutně žádnou zátěž.',
        background: '13.jpg',




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
    <!-- section7 - start -->
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Novostavba rodinného domu v Měchenicích zaplňuje poslední volný pozemek ve stávající zástavbě, která lemuje terénní zlom nad řekou Vltava. Umístění na hraně svahu umožňuje 
            neopakovatelné výhledy směrem do údolí, což bylo ještě podpořeno vykonzolováním objektu tímto směrem. Investor požadoval jednoduchý, skromný dům, který plně využije předností pozemku.
            Veškeré obytné místnosti jsou tedy orientovány k řece. Směrem z ulice je naopak stavba pod úrovní terénu a pohledově potlačena, nad hlavní objekt je vytažena pouze garáž. 
            Ta je řešená atypicky, jako přiznaný technicistní objekt z ocelové konstrukce, opláštěné polykarbonátem. Interiery jsou spíše minimalistické, sjednocené litou polyuretanovou 
            stěrkou na podlaze všech místností, pouze několik stěn je obloženo dřevěnými deskami.
            Výrazným prvkem je pak kuchyně, která levituje nad zemí a prochází po celé hlavní stěně skrz obytný prostor až na terasu, to celé přerušené pouze skleněnou posuvnou stěnou.',
        ],
        video: '',
        img: '11.jpg',
        img_alt: 'Rodinná vila Hodkovičky',
        smallimage: "smallimage",
        smallimage_href: 'https://www.okplan.cz/',
        smallimage_alt: "OKPLANARCHITECTS",
        
        




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
    <!-- section12 - start -->
    <?php credits(
        pozice: 'Architekt',
        title: 'OK PLAN ARCHITECTS<br>
        ARCH. LUDĚK RÝZNER<br>
        ARCH. LIBOR CHOVANEC',
        background: '12.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar',
        btn: ['Prohlédněte si průběh stavby', '/realizace/' . $url2 . '/'],




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
    <!-- section13 - start -->
    <?php realizace_slider(
        title: 'Další realizace',
        btn: [
            'Prohlédnout si všechny realizace', '/realizace/'
        ],

    ); ?>
    <!-- section13 - end -->

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