<?php

// Povinné
$title = 'Galerie 8smička';
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












    <!-- section1 - start -->
    <?php title(
        title: 'Galerie 8smička',
        background: '01.jpg',
        tv_link: 'https://www.mall.tv/gebrian-prekvapive-stavby/napadita-promena-byvale-fabriky-pozveda-cele-mesto?fbclid=IwAR0xXOuWnomWhGwN7qrIT5--n3W7553JstRQRKSjoFHzUP4zAE8UwqpBhqo" target="_blank"',



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
    <?php photo_description(
        title: 'Galerie 8smička',
        description: [
            'Industriální areál bývalé továrny na sukno v Kamarytově ulici 
            v Humpolci, původně z konce 19. století, se od roku 2018 proměnil 
            na kulturní prostor se zaměřením na české moderní a současné umění, s galerií, kavárnou, knihkupectvím. Rekonstrukce a přestavba 
            na novou kulturní instituci Vysočiny dle projektu OK PLAN ARCHITECTS začala na podzim 2016 a byla ukončena na jaře 2018.',
            'V přízemí se nachází vstupní prostor kavárny, knihkupectví zaměřené na uměleckou literaturu, auditorium a výstavní prostory, které přecházejí do 2. NP, kde jsou kanceláře a společenské prostory 
            pro zaměstnance 8smičky, ve 3. NP je depozitář vybavený regálovým systémem.',
        ],
        video: '',
        img: '02.jpg',
        img_alt: 'Galerie 8smička',




        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        slide: $number_of_slides,
        // ************


        
    ); ?>
    <!-- section2 - end -->

    <?php
    $number_of_slides++;
    ?>
    <!-- section3 - start -->
    <?php small_description(
        title: 'Exteriér',
        description: 'Nová střešní krytina, kompletní rekonstrukce fasády, vše v černém odstínu a především atypická tovární ocelová okna s dvojskly jsou hlavními prvky exteriéru objektu.',
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
        title: 'Relaxační zóna',
        description: 'Dubové podlahy s atypickou knihovnou z dubové dýhy, s velkým prosklením do veřejně přístupné galerie.',
        slider_big: true,
        images: [
            [
                'src' => '04.jpg',
                'alt' => 'Galerie 8smička'
            ],
            [
                'src' => '05.jpg',
                'alt' => 'Galerie 8smička'
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
    <!-- section5 - start -->
    <?php small_description(
        title: 'Auditorium',
        description: 'Auditorium je místem pro setkávání nejen milovníků umění, nachází se v přízemní části budovy. Jednu ze stěn této místnosti zdobí autorská stavebnice Špulka dle návrhu Ateliéru SAD, která slouží mimo jiné jako herní prvek pro děti nebo také jako taburet.',
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
        title: 'Café 8smička',
        description: 'V přízemí budovy se nachází kavárna s názvem Café 8smička přímo propojená s knihkupectvím a vstupem do výstavních prostor.',
        background: '07.jpg',




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
    <!-- section5 - start -->
    <?php small_description(
        title: 'Galerie',
        description: 'Výstavní prostory zde byly vybudovány v přízemí 
        s propojením do auditoria a v 2NP. Stropy jsou sádrokartonové a v jejích lemech je vedena technologie a na hranách je umístěno variabilní osvětlení. Podlahy jsou z litých polyuretanových stěrek.',
        background: '08.jpg',




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
    <?php extrasmall_description(
        title: 'Knihkupectví',
        description: 'Nachází se v přízemí budovy a lze do něj přímo vstoupit z kavárny.',
        background: '09.jpg',




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
    <?php single_photo(
        title: 'Cena Grand Prix 2018',
        description: 'Obec architektů udělila „ČESTNÉ UZNÁNÍ“ v soutěži GRAND PRIX ARCHITEKTŮ 2018 v kategorii rekonstrukce galerie 8smička v Humpolci.',
        img: '10.jpg',
        video: '',
        img_alt: 'Cena Grand Prix 2018',
        reward: '/pdf/grand-prix-2018.pdf',



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
    <?php photo_description2(
        title: 'Architektonické studio',
        description: [
            'Bývalá továrna na vlněné látky Karla Trnky, následně hala č. 8 Národního podniku Sukno, prošla low-cost rekonstrukcí již v roce 2010. 
            Hlavním poznávacím znamením se tehdy stala antracitová fasáda. Zásadnější proměnou objekt prošel v letech 2016-2018, kdy byl celkově přestavěn na galerii – 
            zónu pro umění 8smička. Třípodlažní objekt je funkčně rozdělen tak, že v 1np se nachází hlavní výstavní prostor se zaměřením na české moderní a současné umění, 
            kavárna, knihkupectví a multifunkční přednášková místnost. 2np zahrnuje výstavní prostory i neveřejnou část se soukromou sbírkou moderního a současného umění. 
            Ve 3np se nachází depozitář vybavený regálovým systémem. Komfort vnitřního prostředí zajišťují technologie na vysoké úrovni, pro běžného návštěvníka skryté a lehce 
            přehlédnutelné. Prostory přízemí a patra měly od začátku omezenou světlou výšku pro účely výstav. Systémem snížených sádrokartonových lemů na výšku 2,6m kolem 
            obvodu každé výstavní místnosti bylo dosaženo vyváženého kompromisu, aby hlavní plocha zůstala ve světlé výšce cca 3,0m. Snížené lemy jsou využity pro vedení 
            vzduchotechniky a ostatních médií jako je elektro, slaboproud, topení, vodovod a kanalizace. Na hraně lemu je umístěn zapuštěný osvětlovací systém. 
            Technologie galerijního umělého nasvětlení Hoffmeister umožňuje nasvětlit exponáty cíleně jen v požadované míře intenzity. 
            Srdcem technologie budovy je strojovna vzduchotechniky a kotelna umístěná v přízemí severní strany domu. Zdrojem vytápění celého objektu jsou dvě tepelná 
            čerpadla vzduch-voda. Velká vzduchotechnická jednotka potrubím rozvádí čerstvý vzduch po celé budově. Podlahy přízemních výstavních prostor a knihkupectví a 
            auditoria sjednotila bílá epoxidová stěrka. Pro první patro včetně kavárny jsou použity dubové podlahy, které objektu dodávají domácí atmosféru. Pro vybavení 
            interiérů byla zvolena kombinace domácích dodavatelů- nábytek do kavárny pochází ze sortimentu firmy Ton, vybavení kanceláří a drobné doplňky od architektonického 
            dua Schwestern a společnosti Profil nábytek. Společenskou místnost a kavárnu zdobí 8 ks repasovaných křesel Jindřicha Halabaly. Bar Cafe 8smička je tvořen na míru 
            vyrobenou kompozicí rámů obrazů. Originální autorská stavebnice Špulka z materiálu FlexFoam a korku byla připravena na míru Ateliérem SAD.',
        ],
        video: '',
        img: '11.jpg',
        img_alt: 'Architektonické studio',
        smallimage: "smallimage",
        smallimage_alt: "OKPLANARCHITECTS",




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
    <?php credits(
        pozice: 'Architektonické studio',
        title: 'OKPLANARCHITECTS',
        background: '12.jpg',
        decoration: 'Foto: Lukáš Žentel',
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