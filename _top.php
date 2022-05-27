<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ( isset($title) && $title != '' ) { echo $title . ' | IPM Building'; } else { echo 'IPM Building'; }?></title>
    <meta name="description" content="<?php if ( isset($description) && $description != '' ) { echo $description; } else { echo 'Atypické stavby | IPM Building';}?>">
    <meta property="og:url" content="https://matej.workoholix.net/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php if ( isset($title) && $title != '' ) { echo $title . ' | IPM Building'; } else { echo 'IPM Building'; }?>">
    <meta property="og:description" content="<?php if ( isset($description) && $description != '' ) { echo $description; } else { echo 'Atypické stavby | IPM Building';}?>">
    <meta property="og:image" content="<?php if ( isset($ogImage) && $ogImage != '' ) { echo $ogImage; } else { echo 'https://www.ipmb.cz/images/og_image.jpg'; }?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <?php
    
    if ( isset($slick_slider) && $slick_slider != '' ) {
        ?>
        <link rel="stylesheet" type="text/css" href="/libraries/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/libraries/slick/slick-theme.css"/>
        <?php
    }
    
    if ( isset($fullpage) && $fullpage != '' ) {
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <?php
    }
    
    if ( isset($fancybox) && $fancybox != '' ) {
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
        <?php
    }
    $barva = 0;
    ?>

    
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>