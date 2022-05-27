<?php

$title = 'Realizace';
$description = '';
$slick_slider = true;
// $fancybox = true;
// $fullpage = true;


require_once ('_top.php');

?>

<!-- MAIN - start -->
<main>


    <section class="bg-light">


        <!-- NAVBAR - start -->
        <?php include_once ('part_side-navbar.php') ?>
        <!-- NAVBAR - end -->

        <!-- SIDE-NAV start -->
        <?php include_once ('part_sidebar.php'); ?>
        <!-- SIDE-NAV end -->
        
    <section class="section-top">
        <div class="container pt-3">
            <?php $barva=2; include_once ('part_logo.php'); ?>
            <div class="row justify-content-md-center">

                <div class="col-12 col-md-8 text-center">

                    <h1 class="h-1 h-1--dark text-center pb-2">Realizace</h1>

                    <p>Prohlédněte si námi realizované projekty staveb a rekonstrukcí nemovitostí. Na některých z nich právě nyní pracujeme. Každou realizaci doprovází fotografie po dokončení a popisy užitých materiálů či dispozic a zajímavostí.</p>

                </div>

            </div>

        </div>

        <div class="container pt-5 px-0 px-lg-5">

            <div class="row justify-content-center pb-5">

                <div class="col-5 col-md-4 col-lg-3 col-xxl-2 p-0">
                    <a class="btn btn__filtr active" data-filter="realizace">Realizace</a>
                </div>
                <div class="col-5 col-md-4 col-lg-3 col-xxl-2 p-0">
                    <a class="btn btn__filtr" data-filter="stavime">Stavíme</a>
                </div>
                <div class="col-7 col-md-4 col-lg-3 col-xxl-2 p-0">
                    <a class="btn btn__filtr" data-filter="realizace-po-20-letech">Realizace po 20 letech</a>
                </div>

            </div>

        </div>

        <div class="container-fluid pt-2 px-3">

            <div class="row justify-content-center pt-3 item">

                <?php

                require_once ('_mysql.php');

                $get_realizace = $mysqli->query("SELECT * FROM `realizace`");

                if ( mysqli_num_rows($get_realizace) <= 0 ) {
                    
                    echo "Nejsou žádné realizace!";

                } elseif ( mysqli_num_rows($get_realizace) > 0 ) {

                    // Print slide for each realization registered in the database
                    while ( $realizace = mysqli_fetch_assoc($get_realizace) ) {

                        ?>

                        <article class="col-12 col-lg-10 article <?php if ( $realizace['20_let'] != 1 ) { echo 'realizace'; } else { echo 'realizace-po-20-letech' .  ' realizace'; }?>">
                            <a class="item__content" href="/realizace/<?php echo $realizace['url']; ?>/">

                                <?php if ( $realizace['20_let'] == 1 ) { ?><span class="item__ribbon">Naše realizace po 20 letech</span><?php } ?>

                                <div class="item__img">
                                    <img class="img-fluid" src="/images/realizace/<?php echo $realizace['url']; ?>/prehled.jpg" alt="<?php echo $realizace['nazev'] . ' - ipmb.cz'; ?>">
                                </div>
                                <h2 class="item__link"><?php echo $realizace['nazev']; ?></h2>
                            </a>
                        </article>

                        <?php
                    }

                }

                $get_stavime = $mysqli->query("SELECT * FROM `stavime`");

                if ( mysqli_num_rows($get_stavime) <= 0 ) {
                    
                    echo "Právě nic nestavíme!";

                } elseif ( mysqli_num_rows($get_stavime) > 0 ) {

                    // Print slide for each 'stavíme' registered in the database
                    while ( $stavime = mysqli_fetch_assoc($get_stavime) ) {

                        ?>
                        
                        <article class="col-12 col-lg-10 article stavime" style="display: none;">
                            <a class="item__content" href="/stavime/<?php echo $stavime['url']; ?>/">

                                <div class="item__img">
                                    <img class="img-fluid" src="/images/stavime/<?php echo $stavime['url']; ?>/<?php echo $stavime['big_img']; ?>.jpg" alt="<?php echo $stavime['nazev'] . ' - ipmb.cz'; ?>">
                                </div>
                                <h2 class="item__link"><?php echo $stavime['nazev']; ?></h2>
                            </a>
                        </article>
                        
                        <?php
                    }
                }

                ?>

            </div>

        </div>

    </section>

    <section class="bg-secondary">

        <div class="container py-5">

            <div class="row">

                <div class="d-md-flex justify-content-center align-items-baseline">
                    <h3 class="h-3 h-3--light mb-3 mb-md-0 me-4">Aktuální pracovní přiležitosti u IPM Building</h3>
                    <a class="btn btn__light" href="/kariera/">Prohlédnout si volné pracovní pozice</a>
                </div>

            </div>

        </div>

    </section>


</main>
<!-- MAIN - end -->

<?php require_once ('_bottom.php'); ?>

</body>
</html>