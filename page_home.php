<?php

$title = 'Homepage';
$description = '';
// $slick_slider = true;
// $fancybox = true;
$fullpage = true;
$footer = false;


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

    <!-- section1 - start -->
	<section class="section homepage__s1 relative section-gradient--top">
    <?php $barva=1; include_once ('part_logo.php'); ?>
    <?php require_once ('part_top-nav.php'); ?>

        <!-- LINE-RIGHT start -->
        <a class="line-arrow" href="#section2"></a>

    </section>
    <!-- section1 - end -->



    <!-- section2 - start -->
    <section class="section homepage__s2 section-gradient--top section-gradient--bottom">

        <!-- Bottom - start -->
        <div class="bottom-position d-flex flex-column justify-content-end align-items-between flex-md-row justify-content-md-between align-items-md-end">
            <h1 class="h-1 h-1__slide ms-4 mb-3">Rodinná vila K</h1>
            <a class="corner-btn" href="/realizace/rodinna-vila-k">Prohlédnout si detail stavby</a>
        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section2 - end  -->



    <!-- section3 - start -->
    <section class="section homepage__s3 section-gradient--top section-gradient--bottom">

        <!-- Bottom - start -->
        <div class="bottom-position d-flex flex-column justify-content-end align-items-between flex-md-row justify-content-md-between align-items-md-end">
            <h1 class="h-1 h-1__slide ms-4 mb-3">Rodinný dům Úvaly</h1>
            <a class="corner-btn" href="/realizace/rodinny-dum-uvaly">Prohlédnout si detail stavby</a>
        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section3 - end  -->



    <!-- section4 - start -->
    <section class="section homepage__s4 section-gradient--top section-gradient--bottom">

        <!-- Bottom - start -->
        <div class="bottom-position d-flex flex-column justify-content-end align-items-between flex-md-row justify-content-md-between align-items-md-end">
            <h1 class="h-1 h-1__slide ms-4 mb-3">Vila Kunratice</h1>
            <a class="corner-btn" href="/realizace/vila-kurantice">Prohlédnout si detail stavby</a>
        </div>
        <!-- Bottom - end -->

    </section>
    <!-- section4 - end  -->


    <!-- section5 - start -->
    <section class="section bg-secondary section-gradient--top section-gradient--bottom">

        <h4 class="bg-title">Ročenka</h4>

        <div class="container">

            <div class="row justify-content-md-center">

                <div class="col rocenka">

                    <img class="img-fluid d-block mx-auto" src="/images/rocenka-2020.png" alt="">

                    <h1 class="h-1 text-center">Ročenka IPM Building 2020</h1>
                    <a class="btn btn__light btn__center" href="/rocenka-2021/">Zaslat ročenku 2020</a>

                </div>

            </div>

        </div>

    </section>
    <!-- section5 - end -->

    
    
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