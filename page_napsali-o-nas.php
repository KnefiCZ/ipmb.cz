<?php

$title = 'Napsali o nás';
$description = '';
$slick_slider = true;
// $fancybox = true;
// $fullpage = true;

    class Article {

    public string $href;
    public int $image;
    public string $alt;
    public string $filtr;
    public string $description;

    }

    function setArticle(
    $filtr = 'Doplnit Filtr', 
    $image = 'Číslo obrázku',
    $href = 'Link',
    $title = 'Doplnit Titulek',
    $description = '&nbsp',
    ) {
        $render = new Article();
    ?>
        <article class="col-12 col-lg-6 article <?php echo $filtr; ?>">
            <a class="box-card__content" target="_blank" href="<?php echo $href; ?>">

                <div class="box-card__img">
                    <img class="img-fluid" src="/images/napsali-o-nas/<?php echo $image; ?>.jpg" alt="<?php echo $title . ' - ' . $description; ?>">
                </div>
                <div class="box-card__title">
                    <h4><?php echo $title; ?></h4>
                    <p><?php echo $description; ?></p>
                </div>

            </a>
        </article>
    <?php
    }




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
        <?php $barva = 2; include_once ('part_logo.php');?>
            <div class="row justify-content-md-center">

                <div class="col-12 col-md-8 text-center">

                    <h1 class="h-1 h-1--dark text-center pb-2">Napsali o nás</h1>

                    <p>Za dobu naší působnosti jsme úspěšně realizovali mnoho staveb, které také zaujaly tuzemské i zahraniční vydavatele magazínů a časopisů, věnující se architektuře a modernímu bydlení. </p>

                </div>

            </div>

        </div>


        <div class="container pt-5 px-lg-5">

            <div class="row justify-content-center pb-5 px-3 px-md-5">

                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr active" data-filter="vse">Vše</a>
                </div>
                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr" data-filter="oceneni">Ocenění</a>
                </div>
                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr" data-filter="knihy">Knihy</a>
                </div>
                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr" data-filter="casopisy">Časopisy</a>
                </div>
                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr" data-filter="internet">Internet</a>
                </div>
                <div class="col-4 col-md-2 p-0">
                    <a class="btn btn__filtr" data-filter="tv">TV</a>
                </div>

            </div>

        </div>


        <div class="container pt-2 pb-5">

            <div class="row py-3 g-4 box-card">

                

                <?php
                setArticle(
                    $filtr = 'knihy', 
                    $image = '47', 
                    $href = '/pdf/99-domu-3-p.pdf',
                    $title = 'Kniha 99 DOMŮ 3',
                    $description = 'Rodinný dům P',
                );
                
                setArticle(
                    $filtr = 'knihy', 
                    $image = '47', 
                    $href = '/pdf/99-domu-3-p.pdf',
                    $title = 'Kniha 99 DOMŮ 3',
                    $description = 'Rodinný dům Měchenice',
                );
                
                setArticle(
                    $filtr = 'casopisy', 
                    $image = '63', 
                    $href = '/pdf/dum-a-zahrada-11-2021.pdf',
                    $title = 'Časopis Dům a zahrada',
                    $description = '07-2021',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '42', 
                    $href = '/pdf/dum-a-zahrada-11-2020.pdf',
                    $title = 'Časopis Dům a zahrada',
                    $description = '11-2020',
                );

                setArticle(
                    $filtr = 'internet', 
                    $image = '41', 
                    $href = 'https://www.novinky.cz/bydleni/tipy-a-trendy/clanek/poctu-ceske-komory-architektu-si-vyslouzil-zdenek-zavrel-seznamte-se-s-jeho-praci-40337675',
                    $title = 'Novinky.cz',
                    $description = 'pocta České komory architektů',
                );

                setArticle(
                    $filtr = 'internet', 
                    $image = '40', 
                    $href = 'http://www.earch.cz/cs/architektura/z-tovarny-galerie-soucasneho-umeni-zona-pro-umeni-8smicka-v-humpolci',
                    $title = 'Internetový deník EARCH',
                    $description = '8smička',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '39', 
                    $href = 'http://www.dumazahrada.cz/casopis/archiv/26658-dumzahrada-1-20/',
                    $title = 'Časopis Dům a zahrada',
                    $description = '1-2020',
                );

                setArticle(
                    $filtr = 'tv', 
                    $image = '38', 
                    $href = 'http://www.cestykuspechu.cz/videa/18-serie/imp-building',
                    $title = 'TV Prima',
                    $description = 'Cesty k úspěchu',
                );

                setArticle(
                    $filtr = 'internet', 
                    $image = '37', 
                    $href = 'http://www.earch.cz/cs/architektura/prosklene-steny-rodinneho-domu-nad-rekou-od-ok-plan-architects-ramuji-vyhledy-do',
                    $title = 'Internetový deník EARCH',
                    $description = 'Měchenice',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '62', 
                    $href = '/pdf/okpa-2014-vestec.pdf',
                    $title = 'OK PLAN ARCHITECTS 2014-2019',
                    $description = 'Rodinný dům Vestec',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '61', 
                    $href = '/pdf/okpa-2014-mechenice.pdf',
                    $title = 'OK PLAN ARCHITECTS 2014-2019',
                    $description = 'Rodinný dům Měchenice',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '60', 
                    $href = '/pdf/okpa-2014-8smicka.pdf',
                    $title = 'OK PLAN ARCHITECTS 2014-2019',
                    $description = 'Galerie 8smička',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '36', 
                    $href = '/pdf/casopis-muj-dum-2019.pdf',
                    $title = 'Časopis Můj dům',
                    $description = '2019',
                );

                setArticle(
                    $filtr = 'oceneni', 
                    $image = '35', 
                    $href = '/pdf/grand-prix-2018.pdf',
                    $title = 'Grand Prix architektů',
                    $description = '2018',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '34', 
                    $href = '/pdf/architektura.pdf',
                    $title = 'Architect',
                    $description = '10-2018',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '33', 
                    $href = '/pdf/grand-prix-2018.pdf',
                    $title = 'Magazín Pěkné bydlení',
                    $description = '6-2017',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '32', 
                    $href = '/pdf/dum-a-zahrada-5-2017.pdf',
                    $title = 'Časopis DŮM',
                    $description = 'ZAHRADA 5-2017',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '45', 
                    $href = '/pdf/99-domu-2-ricany.pdf',
                    $title = 'Kniha 99 DOMŮ 2',
                    $description = 'Rodinná vila VI. v Říčanech',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '44', 
                    $href = '/pdf/99-domu-2-svetice.pdf',
                    $title = 'Kniha 99 DOMŮ 2',
                    $description = 'Rodinný dům Světice',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '43', 
                    $href = '/pdf/99-domu-2-orech.pdf',
                    $title = 'Kniha 99 DOMŮ 2',
                    $description = 'Rodinná vila Ořech',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '31', 
                    $href = '/pdf/magazin-interier-exterier-3-2016.pdf',
                    $title = 'Magazín INTERIER',
                    $description = 'EXTERIER 3-2016',
                );

                setArticle(
                    $filtr = 'oceneni', 
                    $image = 'grand-prix1', 
                    $href = '/pdf/grand-prix-2015.pdf',
                    $title = 'Grand Prix architektů',
                    $description = '2015',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '30', 
                    $href = 'dum-a-zahrada-12-2015.pdf',
                    $title = 'Časopis DŮM',
                    $description = 'ZAHRADA 12-2015',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '29', 
                    $href = '/pdf/domov-1-2015.pdf',
                    $title = 'Časopis domov',
                    $description = '1-2015',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '59', 
                    $href = '/pdf/okpa-2009-jevany.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Vila Jevany',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '58', 
                    $href = 'okpa-2009-ricany.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Rodinná vila IV. v Říčanech',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '57', 
                    $href = '/pdf/okpa-2009-praha.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Rodinný dům v Praze',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '56', 
                    $href = '/pdf/okpa-2009-kunratice.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Rodinná vila v Kunraticích',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '55', 
                    $href = '/pdf/okpa-2009-chynice.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Rodinná vila Chýnice',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '54', 
                    $href = '/pdf/okpa-2009-areal.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '2009-2014 - Areál IPM Building',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '28', 
                    $href = '/pdf/casopis-pekne-bydleni-6-2014.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '6-2014',
                );

                setArticle(
                    $filtr = 'oceneni', 
                    $image = '26', 
                    $href = 'https://ct24.ceskatelevize.cz/kultura/1034390-narodni-cena-za-architekturu-2014-jede-do-lazni-v-liberci',
                    $title = 'Grand Prix Architektů',
                    $description = '2014',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '25', 
                    $href = '/pdf/arch-3-2014.pdf',
                    $title = 'Časopis ARCH',
                    $description = '3-2014',
                );

                setArticle(
                    $filtr = 'internet', 
                    $image = '24', 
                    $href = 'https://www.fasada-roku.cz/minule-rocniky/fasada-roku-2013/novostavba-nebytoveho-objektu/',
                    $title = 'Baumit fasáda roku',
                    $description = '2013',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '27', 
                    $href = '/pdf/czech-architecture-2012-2013.pdf',
                    $title = 'Česká architerktura',
                    $description = '2012-2013',
                );

                setArticle(
                    $filtr = 'internet', 
                    $image = '23', 
                    $href = 'https://kolinsky.denik.cz/zpravy_region/ko_stavba_roku_hlasovani_txt.html',
                    $title = 'Stavba roku 2012',
                    $description = 'Kolínsko',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '22', 
                    $href = '/pdf//casopis-pekne-bydleni-5-2012.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '5-2012',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '21', 
                    $href = '/pdf/casopis-pekne-bydleni-3-2012.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '3-2012',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '20', 
                    $href = '/pdf/casopis-domov-8-2011.pdf',
                    $title = 'Časopis domov',
                    $description = '8-2011',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '18', 
                    $href = '/pdf/casopis-pekne-bydleni-5-2011.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '5-2011',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '17', 
                    $href = '/pdf/casopis-domov-1-2011.pdf',
                    $title = 'Časopis domov',
                    $description = '1-2011',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '16', 
                    $href = '/pdf/casopis-pekne-bydleni-10-2010.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '10-2010',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '15', 
                    $href = '/pdf/design-a-home-6-2010.pdf',
                    $title = 'Design a Home',
                    $description = '6-2010',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '14', 
                    $href = '/pdf/mf-plus-3-2010.pdf',
                    $title = 'MF Plus',
                    $description = '3-2010',
                );

                setArticle(
                    $filtr = 'knihy', 
                    $image = '53', 
                    $href = '/pdf/okpa-1999-ricany.pdf',
                    $title = 'OK PLAN ARCHITECTS',
                    $description = '1999-2009 - Rodinná vila II. v Říčanech',
                );

                setArticle(
                    $filtr = 'casopisy', 
                    $image = '13', 
                    $href = '/pdf/casopis-pekne-bydleni-10-2008.pdf',
                    $title = 'Časopis Pěkné bydlení',
                    $description = '10-2008',
                );
                
                setArticle(
                    $filtr = 'casopisy', 
                    $image = '12', 
                    $href = '/pdf/ceska-architektura-2006-2007.pdf',
                    $title = 'Česká architerktura',
                    $description = '2006-2007',
                );


                setArticle (
                    $filtr = 'knihy',
                    $image = '52',
                    $href = '/pdf/domy-zdislava.pdf',
                    $title = 'Domy - 77 rodinných domů',
                    $description = 'Rodinný dům Zdislava',
                );
                
                 setArticle (
                    $filtr = 'knihy',
                    $image = '51',
                    $href = '/pdf/domy-ricany.pdf',
                    $title = 'Domy - 77 rodinných domů',
                    $description = 'Rodinná vila v Říčanech',
                );
                
                 setArticle (
                    $filtr = 'knihy',
                    $image = '50',
                    $href = '/pdf/domy-konarovice.pdf',
                    
                    $title = 'Domy - 77 rodinných domů',
                    $description = 'Rodinný dům v Konárovicích u Kolína',
                 );
                
                 setArticle (
                    $filtr = 'knihy',
                    $image = '49',
                    $href = '/pdf/domy-boomerang.pdf',
                    
                    $title = 'Domy - 77 rodinných domů',
                    $description = 'Rodinná vila Boomerang',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '11',
                    $href = '/pdf/casopis-moderni-byt-12-2006.pdf',
                    
                    $title = 'Časopis Moderní byt',
                    $description = '12-2006',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '10',
                    $href = '/pdf/stavby-1989-2006.pdf',
                    
                    $title = 'Stavby',
                    $description = '1989-2006',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '9',
                    $href = '/pdf/casopis-moderni-byt-10-2006.pdf',
                    
                    $title = 'Časopis Moderní byt',
                    $description = '10-2006',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '8',
                    $href = '/pdf/casopis-muj-dum-1-2006.pdf',
                    
                    $title = 'Časopis Můj dům',
                    $description = '1-2006',
                );
                
                 setArticle (
                    $filtr = 'knihy',
                    $image = '48',
                    $href = '/pdf/ceska-architektura-kostelec.pdf',
                    
                    $title = 'Česká architektura',
                    $description = 'RD Kostelec nad Černými lesy',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '7',
                    $href = '/pdf/ceska-architektura-2004-2005.pdf',
                    
                    $title = 'Česká architektura',
                    $description = '2004-2005',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '6',
                    $href = '/pdf/ceska-architektura-2003-2004.pdf',
                    
                    $title = 'Česká architektura',
                    $description = '2003-2004',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '5',
                    $href = '/pdf/architekt-2-2004.pdf',
                    
                    $title = 'Architekt',
                    $description = '2-2004',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '4',
                    $href = '/pdf/casopis-moderni-byt-2-2004.pdf',
                    
                    $title = 'Časopis Moderní byt',
                    $description = '2-2004',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '3',
                    $href = '/pdf/ceska-architektura-2002-2003.pdf',
                    
                    $title = 'Česká architektura',
                    $description = '2002-2003',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '2',
                    $href = '/pdf/casopis-muj-dum-10-2003.pdf',
                    
                    $title = 'Časopis Můj dům',
                    $description = '10-2003',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '1',
                    $href = '/pdf/ceska-architektura-2001-2002.pdf',
                    
                    $title = 'Česká architektura',
                    $description = '2001-2002',
                );
                
                 setArticle (
                    $filtr = 'casopisy',
                    $image = '0',
                    $href = '/pdf/architekt-8-2002.pdf',
                    
                    $title = 'Architekt',
                    $description = '8-2002',
                );






                
                
                ?>

            </div>

        </div>

    </section>

    <section class="bg-secondary">

        <div class="container py-5">

            <div class="row">

                <div class="d-md-flex justify-content-center align-items-baseline">
                    <h3 class="h-3 h-3--light mb-3 mb-md-0 me-4">Aktuální pracovní přiležitosti u IPM Building
                    </h3>
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