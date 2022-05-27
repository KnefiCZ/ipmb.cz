<?php
$patch = $_SERVER['REQUEST_URI'];
$url=explode("/",$patch);
require_once "_mysql.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($url[1])) {$url1 = $url[1];}
if(isset($url[2])) {$url2 = $url[2];}
if(isset($url[3])) {$url3 = $url[3];}

global $url1;
global $url2;
global $url3;

if($url1==""){include "page_home.php";}
elseif($url1=="firma"){include "page_firma.php";}
elseif($url1=="stavime"){include "page_stavime.php";}
elseif($url1=="areal-ipm-building"){include "page_areal-ipm-building.php";}
elseif($url1=="napsali-o-nas"){include "page_napsali-o-nas.php";}
elseif($url1=="rocenka-2021"){include "page_rocenka.php";}
elseif($url1=="ochrana-osobnich-udaju"){include "page_ochrana-osobnich-udaju.php";}
elseif($url1=="kariera"){
    if($url2==""){include "page_kariera.php";}
    elseif($url2=="stavbyvedouci"){include "page_kariera-detail-stavbyvedouci.php";}
    elseif($url2=="zednik"){include "page_kariera-detail-zednik.php";}
    elseif($url2=="stavebni-delnik"){include "page_kariera-detail-stavebni-delnik.php";}
    else{include "page_kariera-detail.php";}
}
elseif($url1=="realizace"){
    if($url2==""){include "page_realizace.php";}
    elseif($url2!=""){include "page_realizace-detail.php";}
    
}
elseif($url1=="kontakt"){include "page_kontakt.php";}

else {include "page_home.php";}


?>