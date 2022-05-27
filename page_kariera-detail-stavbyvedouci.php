<?php

$title = 'Kariéra - Stavbyvedoucí';
$description = '';
$slick_slider = true;
$fancybox = true;


require_once ('_top.php');

?>


<!-- MAIN - start -->
<main>


    <section class="bg-light spacer--bottom">


    <!-- NAVBAR - start -->
    <?php include_once ('part_side-navbar.php') ?>
    <!-- NAVBAR - end -->

    
    <!-- SIDE-NAV start -->
    <?php include_once ('part_sidebar.php'); ?>
    <!-- SIDE-NAV end -->




        <div class="container container-top pb-5">
        <?php $barva=2; include_once ('part_logo.php'); ?>
            <div class="row justify-content-center py-3 g-4 box-card">

                <div class="col-12 col-md-5">

                    <div data-fancybox="gallery1" data-src="/images/kariera-01.jpg" data-caption="Stavbyvedoucí - ipmb.cz" data-gallery="Stavbyvedoucí" class="gallery__content">
                        
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-01.jpg" alt="Stavbyvedoucí">
                    
                    </div>

                </div>

                <div class="col-12 col-md-7 ps-lg-5">

                    <h2 class="h-2 h-2--small pt-xxl-5">Kariéra</h2>
                    <h1 class="h-1 h-1--dark pb-2" style="z-index: 1;">Stavbyvedoucí</h1>

                    <p><b>Hlavní odpovědností stavbyvedoucího je kompletní zajištění svěřené stavby. Budete komunikovat s investory, architekty, dodavateli a pracovníky na stavbě. Nezbytným předpokladem jsou znalosti v oblasti pozemního stavitelství a znalost regionu, my se postaráme o zaškolení do problematiky atypických staveb. Očekáváme zapálení do oboru stavebnictví a nadšený přístup k realizacím a vlastnímu rozvoji.</b></p>

                    <p>Budete pracovat na zajímavých zakázkách, převážně atypických rodinných vilách ve Středočeském kraji a v Praze. Budete realizovat práci známých architektů pomocí nejnovějších technologií a postupů.</p>

                </div>

            </div>


            <div class="row justify-content-center g-3 py-3">

                <div class="col-sm-6 col-lg-4">

                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-01.jpg" data-caption="Stavbyvedoucí - ipmb.cz" data-gallery="Stavbyvedoucí" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-01.jpg" alt="Stavbyvedoucí">
                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">
                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-02.jpg" data-caption="Stavbyvedoucí - ipmb.cz" data-gallery="Stavbyvedoucí" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-02.jpg" alt="Stavbyvedoucí">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">

                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-03.jpg" data-caption="Stavbyvedoucí - ipmb.cz" data-gallery="Stavbyvedoucí" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-03.jpg" alt="Stavbyvedoucí">
                    </div>
                </div> 
               

            </div>


            <div class="row gy-3 g-sm-3 pt-5 px-1">

                <h2 class="h-2 mt-5 mb-3">Ideální profil stavbyvedoucího</h2>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Vzdělání v oboru pozemního stavitelství</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Aktivní zájem o&nbsp;stavebnictví</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Schopnost vést lidi</p>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag ">
                        <p class="tag__text">Práce na PC</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Řidičský průkaz sk. B</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Kandidát z kolínského regionu</p>
                    </div>
                </div>

            </div>


            <div class="row gy-3 g-sm-3 py-5 px-1">

                <h2 class="h-2 mt-5 mb-3">Co nabízíme</h2>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Velmi nadstandardní mzdu</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Velmi nadstandardní čtvrtletní odměny</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Služební automobil, PC, mobil</p>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag ">
                        <p class="tag__text">Férové jednání</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Zaškolení v oblasti atypických staveb</p>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <section class="bg-secondary">

        <div class="container py-5">

            <div class="row justify-content-center px-3">

                <div class="col-12 col-md-10 col-xl-8 mb-5 form form--offset">

                    <h3 class="form__title text-center">Mám zájem o tuto pozici</h3>

                    <form method="POST" action="/sluzebnik/page_thx.php" class="row gy-3">

                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Jméno:">
                        </div>

                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="E-mail:">
                        </div>

                        <div class="col-12">
                            <textarea name="zprava" class="form-control" rows="8">Dobrý den,

mám zájem o nabízenou pozici stavbyvedoucího.
Rád se dozvím více informací.
Zasílám na sebe kontakt.

S pozdravem</textarea>
                        </div>

                        <div class="col-12">
                            <a class="form__link" href="/ochrana-osobnich-udaju/">Informace o ochraně osobních údajů</a>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">Souhlasím s obchodními podmínkami</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn__dark form__btn">Odeslat zprávu</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

</main>
<!-- MAIN - end -->

<?php require_once ('_bottom.php'); ?>

</body>
</html>