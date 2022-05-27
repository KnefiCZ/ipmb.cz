<?php

// Povinné
$title = 'Rodinná vila v Kunraticích';
$description = 'Rodinná vila konstrukčně atypického tvaru s fasádními velkoformátovými deskami 
z betonu vyztuženého skleněnými vlákny lepenými na podkladovou hliníkovou konstrukci.';
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
        title: 'Rodinná vila v Kunraticích',
        background: '01.jpg',
        video: 'https://player.vimeo.com/370285647?autoplay=1',



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
        title: 'Rodinná vila v Kunraticích',
        description: 'Rodinná vila konstrukčně atypického tvaru s fasádními velkoformátovými deskami 
        z betonu vyztuženého skleněnými vlákny lepenými na podkladovou hliníkovou konstrukci.',
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
        title: 'Exteriér',
        description: 'Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!', 
        slider_big: true,
        images: [
            [
                'src' => '03.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ],
            [
                'src' => '12.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ],
            [
                'src' => '13.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
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

        title: 'Terasa',
        description: 'Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Suscipit vel laudantium veniam, veritatis eius aut dolore eos qui, quas temporibus velit beatae dolores totam deserunt rerum natus dicta, atque illum!',
        img_left: '11.jpg',
        img_alt_left: 'Terasa | Rodinná vila v Kunraticích',
        img_right: '14.jpg',
        img_alt_right: 'Terasa | Rodinná vila v Kunraticích',




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
    <?php small_description(
        title: 'Interiér a detaily domu',
        description: 'Pohledové betony na stropech s prosklením střechy do obytné části, cementové stěrky 
        na podlahách i stěnách, v patře dřevěné dubové podlahy, komplet nerez bazén v exteriéru.',
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
    <?php photo_slider2(
        title: 'Rodinná vila v Kunraticích',
        description: 'Rodinná vila v Kunraticích',
        slider_big: true,
        images: [
            [
                'src' => '05.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ],
            [
                'src' => '06.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ],
            [
                'src' => '07.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ],
            [
                'src' => '08.jpg',
                'alt' => 'Rodinná vila v Kunraticích'
            ]
        ],


        // NEMĚNIT NÍŽE
        // ************
        url2: $url2,
        number: $number_of_slides-1,
        slide: $number_of_slides,
        // ************
    );
    ?>

    <?php
    $number_of_slides++;
    ?>
    <!-- section5 - start -->
    <?php photo_description(
        title: 'Architektonické studio',
        description: [
            'Novostavba rodinného domu se nachází v zastavěné části Prahy IV. Na pozemku se nacházela stavba domu, který byl zbourán. Terénní převýšení pozemku umožnilo dvoupodlažní dům částečně zapustit do terénu. Vzhledem k požadavku maximálního využití plochy zahrady bylo zvoleno křížové přeložení hmot obou podlaží. To umožnilo druhé nadzemní podlaží odlehčit a konzolovitě vynést nad obytnou terasu přízemí. Na prvním nadzemním podlaží je hlavní vstup do domu. 
            V přízemí je situováno technické zázemí domu a hlavní obytná část. Zádveří funguje jako spojovací uzel mezi domem a garáží, která je navržena pro dva automobily. Na zádveří s prostornou šatnou navazuje chodba se schodištěm, toaletou, koupelnou, technickou místností, dále pak hlavní obytný prostor s pracovnou, kuchyní, jídelnou a spíží. Toto patro je propojeno se zahradou prostřednictvím dřevěné terasy, na kterou navazuje venkovní bazén. Na druhé nadzemní podlaží je umístěna klidová část - ložnice se šatnou, dva dětské pokoje se společnou koupelnou, pracovna a technická místnost. Ložnice a jeden dětský pokoj navazují na prostornou venkovní terasu. Jeden z dětských pokojů má plošné ateliérové prosklení s výhledem do zahrady. Dům je navržen v proporcích reflektujících okolní zástavbu. Venkovní i vnitřní materiálové řešení je strohé v převážném zastoupení betonu 
            v různých formách - pohledových stropů, cementových podlahových a stěnových stěrek 
            a fasádních betonových desek. Jako doplňkový materiál je dřevo uplatněné na podlaze v patře.',
        ],
        video: '',
        img: '09.jpg',
        img_alt: 'Architektonické studio',
        smallimage: "smallimage",
        smallimage_alt: "OKPLANARCHITECTS",
        smallimage_href: "https://www.okplan.cz/",




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
    <!-- section10 - start -->
    <?php credits(
        pozice: 'Architektonické studio',
        title: 'OKPLANARCHITECTS',
        background: '10.jpg',
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