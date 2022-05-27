<?php

if ( isset($footer) && $footer == false ) {
    // Nothing happens
} else {
    ?>
    <!-- FOOTER - start -->
    <footer>

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
    <?php
}

?>


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<!-- Custom -->
<script src="/js/custom.js" type="text/javascript"></script>

<?php

if ( isset($fullpage) && $fullpage != '' ) {
    ?>
    <!-- FullPage -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php
    if ( !isset($anchors) || empty($anchors) ) {
        $anchors = 'anchors: []';
    }
    $callbacks = 'afterLoad: function() {
        // Do nothing
    }';
    if ( $url1 == '' ) {
        $anchors = "anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'footer']";
    }

    // if ( $url1 == 'o-nas' ) {
    //     $anchors = "anchors: ['section1', 'section2', 'section3', 'section4', 'section5']";
    // }

    if ( $url1 == 'areal-ipm-building' ) {
        $anchors = "anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7', 'section8', 'section9']";

        $callbacks = '
        afterLoad: function() {
            var slide = $(".section.active");

            if ( slide.hasClass("bg-light") ) {

                // Looks for the menu links
                var links = $(".nav-link");

                // Looks for the logo
                var logo = $(".navbar-brand img");

                links.each(function() {

                    var link = $(this);

                    link.css("color", "#333");

                    if ( link.hasClass("active") ) {
                        link.css("border-color", "#333");
                    }

                });

                logo.attr("src", "/images/logo-ipm-02.svg")
                
            } else {
                
                // Looks for the menu links
                var links = $(".nav-link");

                // Looks for the logo
                var logo = $(".navbar-brand img");

                links.each(function() {

                    var link = $(this);

                    link.css("color", "#fff");

                    if ( link.hasClass("active") ) {
                        link.css("border-color", "#fff");
                    }

                });

                logo.attr("src", "/images/logo-ipm-01.svg")

            }
        }
        ';
    }

    if ( $url1 == 'realizace' && $url2 != '' ) {

        $callbacks = '
        afterLoad: function() {
            var slide = $(".section.active");

            if ( slide.hasClass("bg-light") ) {

                // Looks for the menu links
                var links = $(".nav-link");

                // Looks for the logo
                var logo = $(".navbar-brand img");

                links.each(function() {

                    var link = $(this);

                    link.css("color", "#333");

                    if ( link.hasClass("active") ) {
                        link.css("border-color", "#333");
                    }

                });

                logo.attr("src", "/images/logo-ipm-02.svg")
                
            } else {
                
                // Looks for the menu links
                var links = $(".nav-link");

                // Looks for the logo
                var logo = $(".navbar-brand img");

                links.each(function() {

                    var link = $(this);

                    link.css("color", "#fff");

                    if ( link.hasClass("active") ) {
                        link.css("border-color", "#fff");
                        slidesNavigation = false;
                    }

                });

                logo.attr("src", "/images/logo-ipm-01.svg")

            }
        }
        ';
        
    }

    ?>
       
    
    <script>
        new fullpage('#fullPage', {
            autoScroling: true,
            navigation: true,
            scrollingSpeed: 1000,
            scrollOverflow:true,
            <?php echo $anchors; ?>,
            <?php echo $callbacks; ?>,
        })
    </script>
    <style>
        body.fp-viewing-realizace00 #fp-nav{
            display: none !important;
        }
        body.fp-viewing-footer #fp-nav{
            display: none !important;
        }
    </style>
    <?php
}

if ( isset($slick_slider) && $slick_slider != '' ) {
    ?>
    <!-- slick -->
    <script type="text/javascript" src="/libraries/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/slick-config.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/vendors/scrolloverflow.min.js"></script>
    <?php
}

if ( isset($fancybox) && $fancybox != '' ) {
    ?>
    <!-- fancyBox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" type="text/javascript"></script>
    <?php
}

?>

<!-- Bootstrap -->
<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>