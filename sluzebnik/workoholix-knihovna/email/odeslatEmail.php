<?php
function odeslat($email,$predmet,$obsah,$prijemceKlient,$prijemceTest,$rezim,$kontaktos){

//Zakladni promene
$ip = $_SERVER['REMOTE_ADDR'];
$datum = Date("d.m.Y H:i:s", Time());
$hash = md5(time().rand(1,99999999999));
$zpravaURL1 = $_SERVER['HTTP_REFERER'];
$domena = $_SERVER['HTTP_HOST'];
$predmet = "$predmet - $domena $datum";


//Antipsam - zakladni nastaveni
$spamdetekce = 0;

//Antispam - minimalni 3 znaky v obsahu
$znaky = strlen($obsah); //spocita pocet znaku v obsahu
if($znaky <= 3){$spamdetekce=1;} // pokud je malo znaku oznaci za spam

//Antispam - kontrola azbuky
if(preg_match('/[\p{Cyrillic}]/u', $obsah)){$spamdetekce=1;}
if(preg_match('/[\p{Cyrillic}]/u', $email)){$spamdetekce=1;}

//Antispam - kontrola fake pole
if($kontaktos!=""){$spamdetekce=1;} //podvržené pole musí být prázdné, jinak ho vyplnil robot


//Nastaveni DB
$dbservername = "localhost";
$dbusername = "workoholixSluzeb";
$dbpassword = "JZsddd+BZbzáí98b+";
$dbname = "workoholix_net";

//Pripojeni DB
$mysqli = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$mysqli->set_charset("utf8");

//zapise do DB
$sql="INSERT INTO `kontaktform` (`id`, `hash`, `domena`, `zprava_rezim`, `zprava_spamdetekce`, `zprava_datum`, `zprava_ip`, `zprava_predmet`, `zprava_email`, `zprava_obsah`, `zprava_url1`, `odeslano_stav`, `odeslano_klient`, `odeslano_vyvojar`) VALUES (NULL, '$hash', '$domena', '$rezim', '$spamdetekce', CURRENT_TIMESTAMP, '$ip', '$predmet', '$email', '$obsah', '$zpravaURL1', '0', '$prijemceKlient', '$prijemceTest');";

$vysledek = $mysqli->query($sql);

//return $sql;
return $spamdetekce;
}


/*
$email = "a";
$predmet = "b";
$obsah = "c";
*/

//echo (odeslat($email,$predmet,$obsah));
