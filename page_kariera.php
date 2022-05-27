<?php

$title = 'Kariéra';
$description = '';
$slick_slider = true;
// $fancybox = true;
// $fullpage = true;


require_once ('_top.php');

?>
    <!-- NAVBAR - start -->
    <?php include_once ('part_side-navbar.php') ?>
    <!-- NAVBAR - end -->

    <!-- SIDE-NAV start -->
    <?php include_once ('part_sidebar.php'); ?>
    <!-- SIDE-NAV end -->

<!-- MAIN - start -->
<main>
        <section class="bg-light">
        <div class="container container-top">
        <?php $barva=2; include_once ('part_logo.php'); ?>
            <div class="row justify-content-md-center">

                <div class="col-12 col-md-8 text-center">

                    <h1 class="h-1 h-1--dark text-center pb-2">Kariéra</h1>

                    <p>Naší vizí je stavět zajímavé atypické domy a daří se nám ji naplňovat už víc než dvacet let. Nabízíme práci těm, kteří se na takových realizacích chtějí podílet a rozvíjet se v oblasti moderních technologií a postupů.</p>

                </div>

            </div>

        </div>


        <div class="container pt-2 pb-5">

            <div class="row justify-content-center py-3 g-4 box-card">

                <article class="col-12 col-md-5">
                    <a class="box-card__content img-box" href="/kariera/stavbyvedouci/">

                        <h2 class="img-box__title">Stavbyvedoucí</h2>
                        <div class="box-card__img">
                            <img class="img-fluid" src="/images/kariera-01.jpg" alt="">
                        </div>

                    </a>
                </article>

                <article class="col-12 col-md-5">
                    <a class="box-card__content img-box" href="/kariera/zednik/">

                        <h2 class="img-box__title">Zedník</h2>
                        <div class="box-card__img">
                            <img class="img-fluid" src="/images/kariera-02.jpg" alt="">
                        </div>

                    </a>
                </article>

                <article class="col-12 col-md-5">
                    <a class="box-card__content img-box" href="/kariera/stavebni-delnik/">

                        <h2 class="img-box__title">Stavební dělník</h2>
                        <div class="box-card__img">
                            <img class="img-fluid" src="/images/kariera-03.jpg" alt="">
                        </div>

                    </a>
                </article>

            </div>

        </div>

    </section>

    <section class="bg-secondary">

        <div class="container py-5">

            <div class="row">

                <div class="d-md-flex justify-content-center align-items-center">

                    <div class="me-lg-5">
                        <h3 class="h-3 h-3--light mb-3 mb-md-2 me-4">Nenašli jste vhodnou pozici,<br>
                            ale zajímá vás práce v IPM Building?</h3>
                            <p class="p--light">Máte otázku k pracovní pozici?<br>
                            Kontaktujte naši personalistku.</p>
                    </div>

                    <div class="contact-box">
                        <h4 class="contact-box__title">Mgr. Štěpánka Matyášová</h4>
                        <p>Personalistka</p>

                        <a class="contact-box__link" href="tel:00420777743363">+420 777 743 363</a>
                        <a class="contact-box__link" href="mailto:smatyasova@ipmb.cz">smatyasova@ipmb.cz</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>
<!-- MAIN - end -->

<?php require_once ('_bottom.php'); ?>

</body>
</html>