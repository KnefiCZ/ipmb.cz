<?php

// Povinné
$title = 'Rodinná vila Jevany';
$description = 'Kompletní rekonstrukce vily v Jevanech. Z původní funkcionalistické stavby zbyly jen nosné zdi a stropy, 
které bylo nutné sanovat, včetně stávající kamenné podezdívky. Vše ostatní bylo provedeno kompletně nově (fasáda, střešní plášť, instalace, okna, interiér).';
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
        title: 'Rodinná vila Jevany',
        background: '01.jpg',
        video: 'https://player.vimeo.com/370282790?autoplay=1',



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
        title: 'Rodinná vila Jevany',
        background: '02.jpg',
        description: 'Kompletní rekonstrukce vily v Jevanech. Z původní funkcionalistické stavby zbyly jen nosné zdi a stropy, 
        které bylo nutné sanovat, včetně stávající kamenné podezdívky. Vše ostatní bylo provedeno kompletně nově (fasáda, střešní plášť, instalace, okna, interiér).',




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
        title: 'Exteriér',
        description: 'Fasáda je tvořena strukturovanou omítkou se stávající restaurovanou kamennou podezdívkou a okny z dubových lamel, příjezdová komunikace žulovou dlažbou.',
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
    <?php double_photo(
        title: 'Pánský klub',
        description: 'Prostoru pánského klubu dominuje prosklený arkýř a jeho propojení s rozlehlou terasou a zahradou.',
        img_left: '04.jpg',
        img_alt_left: 'Rodinná vila Jevany',
        img_right: '05.jpg',
        img_alt_right: 'Rodinná vila Jevany',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section4- end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section5 - start -->
    <?php extrasmall_description(
        title: 'Terasa',
        description: 'Jako materiál je v části sezení použito IPE na dřevěném roštu navazující na břidlicovou dlažbu, která je i v celém podlaží pánského klubu.',
        background: '06.jpg',




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
        title: 'Dřevěný akýř',
        background: '07.jpg',
        description: 'Původní arkýř byl vyzděný a tvořený omítkou, ale vzhledem k zásadní změně dispozice podlaží bylo možné arkýř prosklít a vizuálně propojit interiér s exteriérem.',




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
    <?php double_photo(
        title: 'Podezdívka',
        description: 'Kamenná podezdívka byla kompletně restaurována otryskáním a vyspárována a natřena impregnačním nátěrem, zdivo zůstalo původní.',
        img_left: '08.jpg',
        img_alt_left: 'Rodinná vila Jevany',
        img_right: '09.jpg',
        img_alt_right: 'Rodinná vila Jevany',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section7- end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section8 - start -->
    <?php extrasmall_description(
        title: 'Garáž',
        background: '10.jpg',
        description: 'Trojgaráž z borovicových palubek je tvořena kombinací dřevěné nosné konstrukce se zámečnickými prvky v žárovém zinku.',




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
        title: 'Schodiště',
        background: '11.jpg',
        description: 'Základem schodiště je betonová „zubatice“ obložená masívním dubem 
        na stupnici i podstupnici, plynule navazující na podlahy v jednotlivých podlažích.',




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
        title: 'Podlaha',
        background: '12.jpg',
        description: 'Podlaha je položena z masívních dubových parket lepených na podklad. Povrchová úprava olej.',




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
    <?php extrasmall_description(
        title: 'Interiér pánského klubu',
        background: '13.jpg',
        description: 'Břidlicová dlažba, bezrámové zasklení do zahrady, 
        bar s dřevěným obložením.',




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
    <?php small_description(
        title: 'Obývací část',
        background: '14.jpg',
        description: 'Otevřený a propojený prostor obývací, jídelní a kuchyňské části je tvořen sádrovými omítkami, dubovými vlysy, 
        krbovým tělesem s povrchovou úpravou Marocký štuk a schodištěm 
        s celoskleněným zábradlím.',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************


        

    ); ?>
    <!-- section12 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section13 - start -->
    <?php photo_description(
        title: 'Reference klienta',
        description: [
            'Z plánované totální rekonstrukce vily z 30. let jsem měl těžkou hlavu – žádné zkušenosti se stavbou jsem neměl a od většiny svých známých jsem slyšel spíš hororové historky. Situace u mě byla 
            o to složitější, že pracuji v zahraničí, takže jsem se stavbě prakticky nemohl věnovat. Firma IPMB mi byla doporučena kolegou – a to tak vehementně, že jsem jej až podezíral, že pro ně pracuje 
            jako prodejce. Zkušenosti, které popisoval, byly natolik v rozporu se všemi ostatními, že jsem mu nechtěl věřit. Nicméně vše se potvrdilo. 
            S firmou – a jmenovitě se stavbyvedoucím Oldřichem Semencem 
            – jsme rychle našli způsob komunikace, který fungoval i vzhledem 
            k mé nepřítomnosti. Rekonstrukce byla nakonec docela složitá – dům byl v horším stavu, než jak jsme původně očekávali. Vše ale proběhlo absolutně bez problémů, nestalo se mi ani jednou, 
            že bych byl nespokojen s kvalitou práce. Dnes svým známým doporučuji firmu IPMB stejně jako můj kolega. A s každou další stavbou se budu obracet nejprve na ně.',
            '<br>',
            'Vít Sedláček <br> 30. 7. 2013, Jevany',
        ],
        video: '',
        img: '15.jpg',
        img_alt: 'Rodinná vila Jevany',
        




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section13 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section14 - start -->
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Funkcionalistická vila z 30. let stojí ve vilové zástavbě Jevan, na pozemku se vzrostlými jehličnatými a listnatými stromy, s výhledem na rybník. Vila prošla kompletní rekonstrukcí, 
            která plně respektuje původní architekturu. Úpravy jsou prováděny s ohledem na potřeby současného bydlení. Třípodlažní vila nabízí v přízemí prostornou vstupní halu, hostinský pokoj, 
            koupelnu, pánský pokoj s vinotékou a technické místnosti. První patro tvoří otevřený koncept obývacího pokoje s krbem, jídelny, TV místnosti a kuchyně se spíží. V posledním patře se
            nachází hlavní ložnice se šatnou a samostatnou koupelnou, 
            2 dětské ložnice, šatna a koupelna. Na pozemku byla nově postavena garáž pro 2 auta s jednoduchou dřevěnou konstrukcí.',
        ],
        video: '',
        img: '16.jpg',
        img_alt: 'Rodinná vila Jevany',
        smallimage: "smallimage",
        smallimage_alt: "OKPLANARCHITECTS",
        smallimage_href: "https://www.okplan.cz/",




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section14 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section8 - start -->
    <?php credits(
        pozice: 'Architektonické studio:',
        title: 'OKPLANARCHITECTS',
        background: '17.jpg',
        decoration: 'Foto: Ing. Jaroslav Hejzlar,',
        decoration2: 'Video: Spaneco Production',
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