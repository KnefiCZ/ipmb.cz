<?php

$title = 'Kariéra - Zedník';
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

                    <div class="gallery__content">
                        
                        <div data-fancybox="gallery1" data-src="/images/kariera-02.jpg" data-caption="Zedník - ipmb.cz" data-gallery="Stavební dělník" class="gallery__content">

                            <img class="img-fluid img-style gallery__img" src="/images/kariera-02.jpg" alt="Zedník">
                        
                        </div>
                    
                    </div>

                </div>

                <div class="col-12 col-md-7 ps-lg-5">

                    <h2 class="h-2 h-2--small pt-xxl-5">Kariéra</h2>
                    <h1 class="h-1 h-1--dark pb-2" style="z-index: 1;">Zedník</h1>

                    <p><b>Budete stavět atypické domy a vily do vzdálenosti 80 km od Kolína.</b></p>

                    <p>Budete pracovat na domech od předních architektů a váš šéf bude profesionální stavbyvedoucí. Získáte zkušenosti a dovednosti na jedinečných zakázkách. Zaměstnání na hlavní pracovní poměr na dobu neurčitou.</p>

                </div>

            </div>


            <div class="row justify-content-center g-3 py-3">

                <div class="col-sm-6 col-lg-4">

                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-04.jpg" data-caption="Zedník - ipmb.cz" data-gallery="Zedník" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-04.jpg" alt="Zedník">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">

                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-05.jpg" data-caption="Zedník - ipmb.cz" data-gallery="Zedník" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-05.jpg" alt="Zedník">
                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">
            
                    <div data-fancybox="gallery1" data-src="/images/kariera-detail-06.jpg" data-caption="Zedník - ipmb.cz" data-gallery="Zedník" class="gallery__content">
                        <img class="img-fluid img-style gallery__img" src="/images/kariera-detail-06.jpg" alt="Zedník">
                    </div>

                </div> 
               

            </div>


            <div class="row gy-3 g-sm-3 pt-5 px-1">

                <h2 class="h-2 mt-5 mb-3">Ideální vlastnosti zedníkaPracovitost</h2>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Pracovitost</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Fyzická zdatnost</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Zručnost</p>
                    </div>
                </div>

            </div>


            <div class="row gy-3 g-sm-3 py-5 px-1">

                <h2 class="h-2 mt-5 mb-3">Co nabízíme</h2>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Zaměstnání na hlavní pracovní poměr</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag active">
                        <p class="tag__text">Čistou mzdu 22–30 000 Kč</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="tag">
                        <p class="tag__text">Zakázky do 80 km od Kolína</p>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="tag ">
                        <p class="tag__text">Férové jednání</p>
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

mám zájem o nabízenou pozici zedníka.
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