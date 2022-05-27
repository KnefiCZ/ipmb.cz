<?php

// Povinné
$title = 'Firma';
$description = '';
$number_of_slides = 0; // Number used to generate anchors for each slide for navigation arrows to work correctly
global $slide;
$slide = 1; // NEMĚNIT

// Volitelné
$slick_slider = true;   //DEFAULT true
$fancybox = true;       //DEFAULT true
$fullpage = true;       //DEFAULT true
$footer = false;        //DEFAULT false





require_once ('_top.php');

?>

    <!-- NAVBAR - start -->
    <?php include_once ('part_side-navbar.php') ?>
    <!-- NAVBAR - end -->

    
    <!-- SIDE-NAV start -->
    <?php include_once ('part_sidebar.php'); ?>
    <!-- SIDE-NAV end -->



<!-- MAIN - start -->
<main id="fullPage" class="homepage">
    
<?php $barva=1; include_once ('part_logo.php'); ?>

    <!-- section1 - start -->
    <section class="section firma__s1 relative section-gradient--top section-gradient--lg-bottom">

        <?php $barva=1; include_once ('part_logo.php'); ?>

        <a data-fancybox="fancybox-media" href="https://vimeo.com/352673954?autoplay=1">
            <div class="firma__play-btn"></div>
        </a>

        <!-- Bottom - start -->
        <div class="bottom-position">
            <h1 class="h-1 h-1__slide mb-4 text-center">IPM Building</h1>
        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section1 - end -->
    
    <!-- section2 - start -->

    <section class="section bg-light">

            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section3"></a>



        <div class="container-fluid label__text--pos">

            <div class="row align-items-center label__img--pos">

                <div class="col-12 col-md-8" style="margin-bottom: 50px;">

                    <div data-fancybox="20-let-s-ipmb" data-src="https://vimeo.com/352672718?autoplay=1" class=" position-relative col-12 col-md-10 offset-md-1 p-2 p-ms-4">
                        <div class="img-box__btn-play"></div>
                        <img class="img-fluid img-style" src="/images/firma-02.jpg" alt="ipmb.cz">
                    </div>

                </div>

                <div class="label label--right col-10 col-md-4 d-xl-flex align-items-center me-auto mt-3 mt-md-0">

                    <div>
                        <h3 class="h-3">20 let s IPM Building</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum incidunt illo esse magni! Quisquam vel distinctio praesentium repellat tempora magnam voluptatem, et quis blanditiis eaque sequi provident enim aspernatur ab!</p>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- section2 - end  -->

    <!-- section3 - start  -->
    <section class="section firma__s3">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section4"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label col-10 col-sm-8 col-lg-6 d-md-flex align-items-center">

                    <span class="label__number">2018</span>
                    <div class="firma__label--text-p">
                        <h3 class="h-3">2018</h3>
                        <p>Nová střešní krytina, kompletní rekonstrukce fasády, vše v černém odstínu a především atypická tovární ocelová okna s dvojskly jsou hlavními prvky exteriéru objektu.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section3 - end -->
    
    <!-- section4 - start  -->
    <section class="section firma__s4">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section5"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label col-10 col-sm-8 col-lg-6 d-md-flex align-items-center">

                    <span class="label__number">2015</span>
                    <div>
                        <h3 class="h-3">2015</h3>
                        <p>Obec architektů udělila ocenění v soutěži GRAND PRIX ARCHITEKTŮ 2015 v kategorii rodinných domů za novostavbu rodinného domu ve Světicích.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section4 - end -->

    <!-- section5 - start  -->
    <section class="section firma__s5">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section6"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label col-10 col-sm-8 col-lg-6 d-md-flex align-items-center">

                    <span class="label__number">2014</span>
                    <div>
                        <h3 class="h-3">2014</h3>
                        <p>Obec architektů udělila “ČESTNÉ UZNÁNÍ“ v soutěži GRAND PRIX ARCHITEKTŮ 2014 v kategorii novostavba areálu společnosti IPM Building.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section5 - end -->

    <!-- section6 - start  -->
    <section class="section firma__s6">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section7"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label col-10 col-sm-8 col-lg-6 d-md-flex align-items-center">

                    <span class="label__number">2012</span>
                    <div>
                        <h3 class="h-3">2012</h3>
                        <p>Dokončení stavby nového areálu IPM Building. Výstavba probíhala od roku 2011 ve spolupráci s Luďkem Rýznerem (OK Plan Architects) a Jiřím Vincencem.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section6 - end -->

    <!-- section7 - start  -->
    <section class="section firma__s7">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section8"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label col-10 col-sm-8 col-lg-6 d-md-flex align-items-center">

                    <span class="label__number">1999</span>
                    <div>
                        <h3 class="h-3">1999</h3>
                        <p>Založení firmy s názvem Ing. Pavel Matyáš - provádění staveb, která následně v roce 2004 přešla na právní subjekt IPM Building.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section7 - end -->

    <!-- section8 - start  -->
    <section class="section firma__s8">

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section9"></a>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="firma__label--8 col-12 col-lg-10 d-md-flex align-items-center justify-content-center">

                    <div class="row w-100 d-flex d-flex--wrap">

                        <div class="col-sm-4 col-lg-4 text-center d-flex--wrap align-items-center">
                            <span class="label__number label__number--custom">215</span>
                            <div class="label__text--custom">
                                <h3 class="h-3 text-center">215 Staveb</h3>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 text-center d-flex--wrap align-items-center">
                            <span class="label__number label__number--custom">121</span>
                            <div class="label__text--custom">
                                <h3 class="h-3 text-center">121 milionů obrat</h3>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 text-center d-flex--wrap align-items-center">
                        <span class="label__number label__number--custom">48</span>
                        <div class="label__text--custom">
                            <h3 class="h-3 text-center">48 zaměstnanců</h3>
                        </div>
                        </div>

                    </div>
                    


                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section8 - end -->

    <!-- section9 - start -->
    <section class="section bg-light">
    <h1 class="h-1 h-1--dark text-center">Ocenění</h1>
    <div class="container-fluid d-sm-none">

    <div class="row align-items-center justify-content-between">

        <div class="col-10 col-md-4  align-items-center mb-3 mt-mb-0">

        </div>

        <!-- carousel gallery - start -->
            <div class="col-12 col-md-12 pe-0">

                <div class="slick-gallery">

                    <div class="slider-gallery__img">
                    <a class="box-card__content" href="/">

                    <div class="box-card__img">
                        <img class="img-fluid" src="/images/oceneni-2018.jpg" alt="">
                    </div>
                    <div class="box-card__title">
                        <h4>2018</h4>
                        <p>Cena Grand Prix</p>
                    </div>

                    </a>
                    
                    </div>

                    <div class="slider-gallery__img">
                    <a class="box-card__content" href="/">

                    <div class="box-card__img">
                        <img class="img-fluid" src="/images/oceneni-2015.jpg" alt="">
                    </div>
                    <div class="box-card__title">
                        <h4>2015</h4>
                        <p>Cena Prix</p>
                    </div>

                    </a>
                    </div>

                    <div class="slider-gallery__img">
                    <a class="box-card__content" href="/">

                    <div class="box-card__img">
                        <img class="img-fluid" src="/images/oceneni-2014.jpg" alt="">
                    </div>
                    <div class="box-card__title">
                        <h4>2014</h4>
                        <p>Cena Grand Prix</p>
                    </div>

                    </a>
                    </div>

                </div>

                <!-- icon -nav -->
                <div class="bottom-position row justify-content-center mt-4">
                    <button class="carousel-prev slider-gallery--next" type="button">
                        <span class="carousel-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Další</span>
                    </button>
                    <button class="carousel-next slider-gallery--next" type="button">
                        <span class="carousel-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Předchozí</span>
                    </button>
                </div>

            </div>
        <!-- carousel gallery - end -->

    </div>

    </div>
    <div class="container d-none d-sm-block">
        <div class="row">
            <article class="col-12 mt-4 col-sm-6 col-lg-4">
                        <a class="box-card__content" href="https://www.ipmb.cz/pdf/grand-prix-2018.pdf">

                            <div class="box-card__img">
                                <img class="img-fluid" src="/images/oceneni-2018.jpg" alt="">
                            </div>
                            <div class="box-card__title">
                                <h4>2018</h4>
                                <p>Cena Grand Prix</p>
                            </div>

                        </a>
                    </article>

                    <article class="col-12 mt-4 col-sm-6 col-lg-4">
                        <a class="box-card__content" href="https://www.ipmb.cz/pdf/grand-prix-2015.pdf">

                            <div class="box-card__img">
                                <img class="img-fluid" src="/images/oceneni-2015.jpg" alt="">
                            </div>
                            <div class="box-card__title">
                                <h4>2015</h4>
                                <p>Cena Prix</p>
                            </div>

                        </a>
                    </article>

                    <article class="col-12 mt-4 col-sm-6 col-lg-4">
                        <a class="box-card__content" href="https://www.ipmb.cz/pdf/grand-prix-2014.pdf">

                            <div class="box-card__img">
                                <img class="img-fluid" src="/images/oceneni-2014.jpg" alt="">
                            </div>
                            <div class="box-card__title">
                                <h4>2014</h4>
                                <p>Cena Grand Prix</p>
                            </div>

                        </a>
                    </article>
            </div>

        </div>
    </section>
    
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

<?php require_once ('_bottom.php'); ?>

</body>
</html>