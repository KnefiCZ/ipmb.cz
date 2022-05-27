<?php

$title = 'Ročenka';
$description = '';
// $slick_slider = true;
// $fancybox = true;
$fullpage = true;


require_once ('_top.php');

?>

<!-- MAIN - start -->
<main>

    <section class="bg-secondary bg-secondary--overlay">

        <!-- NAVBAR - start -->
        <?php include_once ('part_side-navbar.php') ?>
        <!-- NAVBAR - end -->

        <!-- SIDE-NAV start -->
        <?php include_once ('part_sidebar.php'); ?>
        <!-- SIDE-NAV end -->


        <div class="container container-top">
        <?php $barva=1; include_once ('part_logo.php'); ?>
            <div class="row justify-content-md-center">

                <div class="col-12 rocenka">

                    <img class="img-fluid d-block mx-auto" src="./images/rocenka-2020.png" alt="">

                    <h1 class="h-1 text-center pb-5">Ročenka IPM Building 2020</h1>

                </div>

                <div class="col-12 col-md-8 col-lg-6 text-center">
                    <p class="p--light"><b>Ročenka 2020 shrnuje vize společnosti IPMB, představuje realizace atypických staveb va přináší další informace, které jinde nenajdete.</b> </p>
                    <p class="p--light">Výtisk je bezplatný, stejně jako zaslání na vaši adresu. Pokud máte o Ročenku 2020 zájem, stačí vyplnit níže uvedený objednávkový formulář.</p>
                </div>

            </div>

        </div>

        <!-- form start -->
        <div class="container py-5">

            <div class="row justify-content-center px-3">

                <div class="col-12 col-md-8 col-lg-6 mb-5 form">

                    <h3 class="form__title form__title--uppercase text-center">Objednat ročenku 2020 <br>
                    <span>bezplatně na vaši adresu</span></h3>

                    <form method="POST" action="/sluzebnik/page_thx-rocenka.php" class="row gy-3">

                        <div class="col-12">
                            <input type="text" class="form-control" name="jmeno" placeholder="Firma/jméno">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="bydliste" placeholder="Ulice a č.p.:">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="psc" placeholder="PSČ a město">
                        </div>

                        <div class="col-12">
                            <a class="form__link" href="/ochrana-osobnich-udaju/">Informace o ochraně osobních údajů</a>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn__dark form__btn">Chci zaslat ročenku 2020</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        <!-- form end -->
    </section>
    <h4 class="bg-title">Ročenka</h4>

</main>
<!-- MAIN - end -->

<?php require_once ('_bottom.php'); ?>

</body>
</html>