<?php

// GLOBAL FUNCTIONS

function setNumber($number) {

    if ( $number < 10 ) {
        $number = '0' . $number;
    }

    return $number;

}

class Render {

    public $number;
    public string $link;
    public string $url;
    
    public function __construct($number = 99, string $link = '01.jpg', $url = 'url-not-found')
    {
        $this->number = $number;
        $this->link = $link;
    }
    
    public function setNumber($number) {

        if ( $number < 10 ) {
            $number = '0' . $number;
        }
    
        return $number;
    
    }
    
    public function setImageLink($url, $link) {
    
        $link = '/images/realizace/' . $url .'/' . $link;
    
        return $link;
    
    }

    public function setsmallImageLink($url, $link) {
    
        $link = '/images/realizace/' . $url .'/' . $link;
    
        return $link;
    
    }
    
    public function setFancyboxLink($url, $link) {

        $link = str_replace(".jpg", "", $link);
    
        $link = '/images/realizace/' . $url .'/' . $link . '-big.jpg';
    
        return $link;
    
    }

}

// END GLOBAL FUNCTIONS

function title(
    $title = 'Přidejte titulek',
    $background = '',
    $url2 = 'url-not-found',
    $tv_link = '',
    $video = '',
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="realizace-bg__style section detail__s1"<?php if ( isset($background) && !empty($background) ) {?> style="background: grey url('<?php echo $render->setImageLink(url: $url2, link: $background); ?>'); background-position: center;" <?php } ?>>

        <?php
        
        if ( isset($video) && !empty($video) ) {
            ?>
                <a data-fancybox="fancybox-media" href="<?php echo $video; ?>">
                    <div class="firma__play-btn"></div>
                </a>
            <?php
        }
        if ( isset($tv_link) && !empty($tv_link) ) {
            ?>
                <a href="<?php echo $tv_link; ?>">
                    <div class="firma__play-btn"></div>
                </a>
            <?php
        }
        
        ?>

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <!-- Bottom - start -->
        <div class="bottom-position">
            <h1 class="h-1 h-1__slide mb-4 text-center"><?php echo $title; ?></h1>
        </div>
        <!-- Bottom - end -->


    </section>
    <?php
    
}

function small_description(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $background = '01.jpg',
    $video = '', 
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="realizace-bg__style section detail__s2"<?php if ( isset($background) && !empty($background) ) {?> style="background: grey url('<?php echo $render->setImageLink(url: $url2, link: $background); ?>');  background-position: center;" <?php } ?>>

        <?php
        
        if ( isset($video) && !empty($video) ) {
            ?>
            <a data-fancybox href="<?php echo $video; ?>">
                <div class="img-box__btn-play"></div>
            </a>
            <?php
        }
        
        ?>

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="label col-10 col-sm-8 col-lg-6 d-xl-flex align-items-center">

                    <span class="label__number"><?php echo $render->setNumber($number); ?>.</span>
                    <div>
                        <h3 class="h-3"><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <?php
}

function extrasmall_description(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $background = '',
    $video = '',
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="realizace-bg__style section detail__s3"<?php if ( isset($background) && !empty($background) ) {?> style="background: grey url('<?php echo $render->setImageLink(url: $url2, link: $background); ?>'); background-position: center;" <?php } ?>>

        <?php
        
        if ( isset($video) && !empty($video) ) {
            ?>
            <a data-fancybox href="<?php echo $video; ?>">
                <div class="img-box__btn-play"></div>
            </a>
            <?php
        }
        
        ?>

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <!-- Bottom - start -->
        <div class="bottom-position container-fluid">

            <div class="row">

                <div class="label col-10 col-sm-8 col-lg-6 col-xxl-4 d-xl-flex align-items-center">

                    <span class="label__number"><?php echo $render->setNumber($number); ?>.</span>
                    <div>
                        <h3 class="h-3"><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bottom - end -->

    </section>
    <?php
}

function double_photo(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $img_left = '',
    $img_alt_left = 'alternativní text',
    $img_right = '',
    $img_alt_right = 'alternativní text',
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <div class="container-fluid label__text--pos">

            <div class="row align-items-center label__img--pos">

                <div class="col-12 col-md-8 d-flex " style="margin-bottom: 50px;">

                    <div data-fancybox="<?php echo $title; ?>" data-src="<?php echo $render->setFancyboxLink(url: $url2, link: $img_left); ?>" data-caption="<?php echo $img_alt_left . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img_alt_left . ' - ipmb.cz' ?>" class="col-6 col-md-5 offset-md-1 p-1 p-sm-2">
                        <img class="img-fluid img-style" src="<?php echo $render->setImageLink(url: $url2, link: $img_left); ?>" alt="<?php echo $img_alt_left . ' - ipmb.cz'; ?>">
                    </div>

                    <div data-fancybox="<?php echo $title; ?>" data-src="<?php echo $render->setFancyboxLink(url: $url2, link: $img_right); ?>" data-caption="<?php echo $img_alt_right . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img_alt_right . ' - ipmb.cz' ?>" class="col-6 col-md-5 p-1 p-sm-2">
                        <img class="img-fluid img-style" src="<?php echo $render->setImageLink(url: $url2, link: $img_right); ?>" alt="<?php echo $img_alt_right . ' - ipmb.cz'; ?>">
                    </div>

                </div>

                <div class="label label--right col-10 col-md-4 d-xl-flex align-items-center me-auto mt-3 mt-md-0">

                    <span class="label__number"><?php echo $render->setNumber($number); ?>.</span>
                    <div>
                        <h3 class="h-3"><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <?php
}

function single_photo(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $img = '',
    $video = '',
    $img_alt = 'ipmb.cz',
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    $reward = '',
    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <div class="container-fluid label__text--pos">

            <div class="row align-items-center label__img--pos">

                <div class="col-12 col-md-8" style="margin-bottom: 50px;">

                    <div data-fancybox="<?php echo $title; ?>" data-src="<?php if ( isset($video) && !empty($video) ) { echo $video; } elseif ( isset($reward) && !empty($reward) ) { echo $reward; }  else { echo $render->setFancyboxLink(url: $url2, link: $img); } ?>" data-caption="<?php echo $img_alt . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img_alt . ' - ipmb.cz' ?>" class=" position-relative col-12 col-md-10 offset-md-1 p-2 p-ms-4">
                        <?php
                        if ( isset($video) && !empty($video) ) {
                            ?>
                                <div class="img-box__btn-play"></div>
                            <?php
                        }
                        ?>
                        <img class="img-fluid img-style" src="<?php echo $render->setImageLink(url: $url2, link: $img); ?>" alt="<?php echo $img_alt . ' - ipmb.cz'; ?>">
                    </div>


                </div>

                <div class="label label--right col-10 col-md-4 d-xl-flex align-items-center me-auto mt-3 mt-md-0">

                    <span class="label__number"><?php echo $render->setNumber($number); ?>.</span>
                    <div>
                        <h3 class="h-3"><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php
}

function photo_slider(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $images = [
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
    ],
    $url2 = 'url-not-found',
    $slider_big = false,
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>


        <div class="container-fluid">

            <div class="row align-items-center justify-content-between">

                <div class="label label--left col-10 col-md-4 d-xl-flex  align-items-center mb-3 mt-mb-0">

                    <span class="label__number"><?php echo $render->setNumber($number); ?>.</span>
                    <div>
                        <h3 class="h-3"><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                    </div>

                </div>

                <!-- carousel gallery - start -->
                    <div class="col-12 col-md-8 pe-0 slider-gallery slick-slider__shadow" style="overflow: visible;z-index: 1;">

                        <div class="<?php if ( $slider_big == false ) { echo 'slick-gallery'; } else { echo 'slick-gallery-big'; } ?>">

                            <?php
                            
                            foreach ($images as $img) {
                                ?>
                                <div data-fancybox="<?php echo $title; ?>" data-src="<?php echo $render->setFancyboxLink(url: $url2, link: $img['src']); ?>" data-caption="<?php echo $img['alt'] . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img['alt'] . ' - ipmb.cz' ?>" class="slider-gallery__img" style="<?php if ( $slider_big != false ) { echo 'width: initial;'; } ?>">
                                    <img src="<?php echo $render->setImageLink(url: $url2, link: $img['src']); ?>" class="img-fluid img-style img-style--big rounded mx-lg-auto mx-md-0 mx-sm-auto d-block" alt="<?php echo $img['alt'] . ' - ipmb.cz'; ?>">
                                </div>
                                <?php
                            }
                            
                            ?>

                        </div>

                        <!-- icon -nav -->
                        <div class="bottom-position row justify-content-center mt-4" style="position: absolute; bottom: 0;right: 0; left: 0; margin: 0 auto;">               
                            <button class="carousel-prev slider-gallery--prev" type="button">
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

    </section>
    <?php
}

function photo_slider2(
    $title = 'Přidejte titulek',
    $description = 'Přidejte popisek',
    $number = 0,
    $images = [
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
        [
            'src' => '',
            'alt' => 'Realizace - ipmb.cz'
        ],
    ],
    $url2 = 'url-not-found',
    $slider_big = false,
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        ?>

        <div class="container-fluid">

            <div class="row">

                <!-- carousel gallery - start -->
                    <div class="col-11 pe-0 slider-gallery-lg slick-slider__shadow" style="overflow: visible; z-index: 1;">

                        <div class="<?php if ( $slider_big == false ) { echo 'slick-gallery'; } else { echo 'slick-gallery-big'; } ?>">

                            <?php
                            
                            foreach ($images as $img) {
                                ?>
                                <div data-fancybox="<?php echo $title; ?>" data-src="<?php echo $render->setFancyboxLink(url: $url2, link: $img['src']); ?>" data-caption="<?php echo $img['alt'] . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img['alt'] . ' - ipmb.cz' ?>" class="slider-gallery__img" style="<?php if ( $slider_big != false ) { echo 'width: initial;'; } ?>">
                                    <img src="<?php echo $render->setImageLink(url: $url2, link: $img['src']); ?>" class="img-fluid img-style img-style--big rounded mx-auto d-block" alt="<?php echo $img['alt'] . ' - ipmb.cz'; ?>">
                                </div>
                                <?php
                            }
                            
                            ?>

                        </div>

                        <!-- icon -nav -->
                        <div class="bottom-position row justify-content-center mt-4" style="position: absolute; bottom: 0;right: 0; left: 0; margin: 0 auto;">               
                            <button class="carousel-prev slider-gallery--prev" type="button">
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


    </section>
    <?php
}

function photo_description(
    $title = 'Přidejte titulek',
    $description = [
        'Vážený pane,',
        'chtěli bychom vám poděkovat za postavení krásného domu. Vytvořili jste pro nás perfektní a kvalitní domov, vždy jste dodrželi slovo a předali projekt před domluveným termínem. Na vaší práci jsme ocenili především:',
        'Lidský a proaktivní přístup. Dodání atypického a technicky složitého domu na klíč, bez stresu a zádrhelů. Schopnost plnit zadání a přání investora. Přístup pana stavbyvedoucího Martina Nawratha, který je velký profesionál. Poctivost a kvalitu provedení jednotlivých řemesel',
        'Posíláme rovněž pozdrav všem, kteří na stavbě pracovali. Vždy vás rádi doporučíme potencionálním investorům a těšíme se, až budeme společně stavět znovu.',
    ],
    $img = '',
    $video = '',
    $even_size = true,
    $img_alt = 'ipmb.cz',
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    $smallimage = "",
    $smallimage_alt = "",
    $smallimage_href = "",
    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        if ( $even_size == true ) {
            $size_classes = [
                'col-12 col-md-7 col-lg-6 p-0',
                'col-12 col-md-5 col-lg-5'
            ];
        } elseif ( $even_size == false ) {
            $size_classes = [
                'col-12 col-md-4 p-0',
                'col-12 col-md-7'
            ];
        }

        ?>


        <div class="container-fluid mt-5">

            <div class="row justify-content-center content px-3 mt-5">
                <!-- data-fancybox="<?php echo $title; ?>" -->
                <div  data-fancybox="<?php echo $title; ?>" data-src="<?php if ( isset($video) && !empty($video) ) { echo $video; } else { echo $render->setFancyboxLink(url: $url2, link: $img); } ?>" data-caption="<?php echo $img_alt . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img_alt . ' - ipmb.cz' ?>" class="position-relative <?php echo $size_classes[0]; ?> content__img">
                    <?php
            
                    if ( isset($video) && !empty($video) ) {
                        ?>
                        <a data-fancybox href="<?php echo $video; ?>">
                            <div class="img-box__btn-play"></div>
                        </a>
                        <?php
                    }
                    
                    ?>
                    <img class="img-fluid" src="<?php echo $render->setImageLink(url: $url2, link: $img); ?>" alt="<?php echo $img_alt; ?>">
                </div>

                <div class="content__box <?php echo $size_classes[1]; ?>">

                    <h4 class="h-4 mb-4"><?php echo $title; ?></h4>

                    <?php
                    
                    foreach ($description as $odstavec) {
                        ?>
                        <p class="content__text"><?php echo $odstavec; ?></p>
                        <?php
                    }

                    if ( isset($smallimage) && !empty($smallimage) ) {
                       ?>

                        <a href="<?php echo $smallimage_href; ?>">
                            <img class="smallimage img-fluid" src="<?php echo $render->setsmallImageLink(url: $url2, link: $smallimage); ?>.jpg" alt="<?php echo $smallimage_alt . ' - ipmb.cz'; ?>">
                        </a>

                       <?php 
                    }  

                    ?>


                </div>

            </div>

        </div>

    </section>
    <?php
}

function photo_description2(
    $title = 'Přidejte titulek',
    $description = [
        'Vážený pane,',
        'chtěli bychom vám poděkovat za postavení krásného domu. Vytvořili jste pro nás perfektní a kvalitní domov, vždy jste dodrželi slovo a předali projekt před domluveným termínem. Na vaší práci jsme ocenili především:',
        'Lidský a proaktivní přístup. Dodání atypického a technicky složitého domu na klíč, bez stresu a zádrhelů. Schopnost plnit zadání a přání investora. Přístup pana stavbyvedoucího Martina Nawratha, který je velký profesionál. Poctivost a kvalitu provedení jednotlivých řemesel',
        'Posíláme rovněž pozdrav všem, kteří na stavbě pracovali. Vždy vás rádi doporučíme potencionálním investorům a těšíme se, až budeme společně stavět znovu.',
    ],
    $img = '',
    $video = '',
    $even_size = false,
    $img_alt = 'ipmb.cz',
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    $smallimage = "",
    $smallimage_alt = "",
    $smallimage_href = "",


    ) {
        $render = new Render();
    ?>
    <section class="section bg-light">

        <?php
        
        if ( isset($arrow) && $arrow == true ) {
            ?>
            <!-- LINE-RIGHT start -->
            <a class="line-arrow line-arrow--dark" href="#section<?php echo $slide + 1; ?>"></a>
            <?php
        }
        
        if ( $even_size == true ) {
            $size_classes = [
                'col-12 col-md-7 col-lg-6 p-0',
                'col-12 col-md-5 col-lg-5'
            ];
        } elseif ( $even_size == false ) {
            $size_classes = [
                'col-12 col-md-4 p-0',
                'col-12 col-md-7'
            ];
        }

        ?>


        <div class="container-fluid">

            <div class="row justify-content-center content px-3 mt-5">

                <div data-fancybox="<?php echo $title; ?>" data-src="<?php if ( isset($video) && !empty($video) ) { echo $video; } else { echo $render->setFancyboxLink(url: $url2, link: $img); } ?>" data-caption="<?php echo $img_alt . ' - ipmb.cz'; ?>" data-gallery="<?php echo $img_alt . ' - ipmb.cz' ?>" class="position-relative <?php echo $size_classes[0]; ?> content__img">
                    <?php
            
                    if ( isset($video) && !empty($video) ) {
                        ?>
                        <a data-fancybox href="<?php echo $video; ?>">
                            <div class="img-box__btn-play"></div>
                        </a>
                        <?php
                    }
                    
                    ?>
                    <img class="img-fluid" src="<?php echo $render->setImageLink(url: $url2, link: $img); ?>" alt="<?php echo $img_alt; ?>">
                </div>

                <div class="content__box <?php echo $size_classes[1]; ?>">

                    <h4 class="h-4 mb-4"><?php echo $title; ?></h4>

                    <?php
                    
                    foreach ($description as $odstavec) {
                        ?>
                        <p class="content__text"><?php echo $odstavec; ?></p>
                        <?php
                    }

                    if ( isset($smallimage) && !empty($smallimage) ) {
                        ?>
 
                         <a href="<?php echo $smallimage_href; ?>" target="_blank">
                             <img class="smallimage img-fluid" src="<?php echo $render->setsmallImageLink(url: $url2, link: $smallimage); ?>.jpg" alt="<?php echo $smallimage_alt . ' - ipmb.cz'; ?>">
                         </a>
 
                        <?php 
                     }  
                    
                    ?>

                </div>

            </div>

        </div>

    </section>
    <?php
    
}

function credits(
    $pozice = '',
    $title = 'Přidejte titulek',
    $decoration = '',
    $decoration2 = '',
    $background = '',
    $btntoggle = true,
    $btn = [
        'Prohlédněte si průběh stavby',
        '/realizace/',
    ],
    $url2 = 'url-not-found',
    $arrow = true,
    $slide = 0,
    ) {
        $render = new Render();
    ?>
    <section class="realizace-bg__style section detail__s4"<?php if ( isset($background) && !empty($background) ) {?> style="background: grey url('<?php echo $render->setImageLink(url: $url2, link: $background); ?>'); background-position: center;
    background-size: auto;
    background-repeat: no-repeat;
    background-size: cover;" <?php } ?>>

        <!-- Bottom - start -->
        <div class="bottom-position d-flex flex-column justify-content-end align-items-between flex-md-row justify-content-md-between align-items-md-end">

            <div>
                <?php
                if ( isset($pozice) && (!empty($pozice) || $pozice != false) ) {
                    ?>
                    <h3 class="h-3 h-3--light ms-4"><?php echo $pozice; ?>:</h3>
                    <?php
                }
                ?>
                <h1 class="h-1 h-1__slide ms-4 mb-3"><?php echo $title; ?></h1>
            </div>
                <?php 

                    if ($btntoggle = true && !empty($btntoggle)) {
                        ?>
                            <a class="corner-btn" href="<?php echo $btn[1]; ?>"><?php echo $btn[0]; ?></a>
                        <?php
                    }

                ?>
            

        </div>
        <!-- Bottom - end -->

        <?php
        if ( isset($decoration) && (!empty($decoration) || $decoration != '') ) {
            ?>
            <!-- h3 rotate  -->
            <h3 class="h-3 h-3--light h-3--rotate h-3--video"><?php echo $decoration; ?></h3>
            <?php
        }
        ?>
         <?php
        if ( isset($decoration2) && (!empty($decoration2) || $decoration2 != '') ) {
            ?>
            <!-- h3 rotate  -->
            <h3 class="h-3 h-3--light h-3--rotate h-3--foto"><?php echo $decoration2; ?></h3>
            <?php
        }
        ?>
        


    </section>
    <?php
}

function realizace_slider(
    $title = 'Další realizace',
    $btn = [
        'Prohlédnout si všechny realizace', '/realizace/'
    ],
    $url2 = 'url-not-found',
    $arrow = false,
    $slide = "realizace",
    ) {
        $render = new Render();
    ?>
    
    <section class="section bg-light" id="realizace">


        <!-- CORNER-BTN start -->
        <div class="bottom-position d-flex justify-content-end">
            <a class="corner-btn" href="/realizace/">Prohlédnout si všechny realizace</a>
        </div>


        <div class="container-fluid">

            <div class="row justify-content-center ms-md-5">

                <?php
                
                if ( isset($title) && (!empty($title) || $title != false) ) {
                    ?>
                    <h1 class="h-1 h-1--grey col-12"><?php echo $title; ?></h1>
                    <?php
                }
                
                ?>

                <!-- carousel gallery - start -->
                <div class="col-12 pe-0 slider-item">

                    <div class="slick-item">

                        <?php

                        require ('_mysql.php');
                        
                        $get_realizace = $mysqli->query("SELECT * FROM `realizace`");

                        if ( mysqli_num_rows($get_realizace) <= 0 ) {
                            
                            echo "Nejsou žádné realizace!";

                        } elseif ( mysqli_num_rows($get_realizace) > 0 ) {

                            // Print slide for each realization registered in the database
                            while ( $realizace = mysqli_fetch_assoc($get_realizace) ) {

                                ?>

                                <a class="slider-item__content" href="/realizace/<?php echo $realizace['url']; ?>/">

                                    <?php if ( $realizace['20_let'] == 1 ) { ?><span class="slider-item__ribbon">Naše realizace po 20 letech</span><?php } ?>

                                    <div class="slider-item__img">
                                        <img class="img-fluid" src="/images/realizace/<?php echo $realizace['url']; ?>/prehled-small.jpg" alt="<?php echo $realizace['nazev'] . ' - ipmb.cz'; ?>">
                                    </div>
                                    <h3 class="slider-item__link"><?php echo $realizace['nazev']; ?></h3>
                                </a>

                                <?php
                            }

                        }
                        
                        ?>


                    </div>

                    <!-- icon -nav -->
                    <div class="bottom-position row mt-4 justify-content-center slick-arrow--align">
                        <button class="carousel-prev slider-item--prev d-none d-md-inline-block" type="button">
                            <span class="carousel-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Další</span>
                        </button>
                        <button class="carousel-next slider-item--next d-none d-md-inline-block" type="button">
                            <span class="carousel-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Předchozí</span>
                        </button>
                    </div>

                </div>
                <!-- carousel gallery - end -->

            </div>

        </div>

    </section>
    <?php
}

?>