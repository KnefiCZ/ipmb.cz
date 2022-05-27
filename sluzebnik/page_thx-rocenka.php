<?php

//ODESLANI EMAILU START
//ODESLANI EMAILU START
//ODESLANI EMAILU START

/*
*****Manuál*****
do nového projektu nakopíruj složku "workoholix knihovna" v té je uložen PHP skript který zpracovává odeslání emailu. V sekci NASTAVENÍ na této stránce uprav příjemce, předmět a režim odesílání. V "Sestavení emailu" připrav informace do emailu.
odeslání emailu funguje přes databázi. Samotné odeslání provádí automat jednou za 10 minut = než přijde email může to trvat klidně 15 minut.
emaily chodí z emailu sluzebnik@workoholix.cz
*/

//Nastavení - nastavit na každém projektu
$prijemceKlient = ""; //email klienta
$prijemceTest = "podpora@workoholix.cz"; //Testovací email - vývojář k testování
$predmet = "Poptávka z webových stránek"; //Za předmět emailu se automaticky dopisuje doména a časové razítko přijetí emailu
$rezim = 2; //0 = email na vyvojare, 1 = email na klienta, 2 = email na klienta i vyvojare

//Základní proměné - NEUPRAVUJ
if(isset($_POST['jmeno'])) {$jmeno = $_POST['jmeno'];} else{$jmeno="";}
if(isset($_POST['ulice'])) {$adresa = $_POST['adresa'];} else{$adresa="";}
if(isset($_POST['psc'])) {$psc = $_POST['psc'];} else{$psc="";}
/*if(isset($_POST['tel'])) {$tel = $_POST['tel'];} else{$tel="";}
if(isset($_POST['email'])) {$email = $_POST['email'];} else{$email="";}
if(isset($_POST['kontaktos'])) {$kontaktos = $_POST['kontaktos'];} else{$kontaktos="";}*/
//Další proměné - Sem dopiš další, pokud potřebuješ překlopit více formulářových polí.
//if(isset($_POST['typ_poptavky'])) {$typ_poptavky = $_POST['typ_poptavky'];} else{$typ_poptavky="";}




//Sestaveni emailu - do proměné $obsah zapiš požadovaný formát emailu a proměné.
$obsah ="
Jméno firmy: $jmeno<br />
Adresa: $adresa<br />
PSČ: $psc<br />
";

//zavolani funkce pro odeslani emailu
require "workoholix-knihovna/email/odeslatEmail.php"; //Nalinkuj knihovnu pro odeslání emailu.
odeslat($email,$predmet,$obsah,$prijemceKlient,$prijemceTest,$rezim,$kontaktos);

//ODESLANI EMAILU STOP
//ODESLANI EMAILU STOP
//ODESLANI EMAILU STOP





?>
<?php 
$title = "Děkujeme";
include "_top.php"; 
?>
    <section class="g-py-150--xl g-py-50 g-pos-rel g-flex-centered ie-flex-centered" style="min-height: 100vh;">
        <div class="container-fluid container-px-150-xl container-fluid-max-width-1920">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                    <h1 class="h1 g-mb-30"><span class="g-color-primary">Děkujeme</span>, ozveme se hned jak to bude možné.</h1>
                    <a href="/" class="col-12 g-mb-35 g-color-black g-font-weight-700 g-font-size-22">
              <svg width="35px" height="20px" viewBox="0 0 42 22" class="g-mr-25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                                                    <g transform="matrix(0.787324,0,0,0.787324,-533.554,-1147.41)">
                                                        <g transform="matrix(0.879446,0,0,0.879446,118.881,252.896)">
                                                            <path class="arrow-right-hover-stroke" d="M637.566,1385.44L692.889,1385.44" style="fill:rgb(220,25,34);stroke:rgb(220,25,34);stroke-width:3.02px;"></path>
                                                        </g>
                                                        <g transform="matrix(0.203758,0.203758,-1.24365,1.24365,2310.06,-392.87)">
                                                            <path class="arrow-right-hover-stroke" d="M637.566,1385.44L692.889,1385.44" style="fill:rgb(220,25,34);stroke:rgb(220,25,34);stroke-width:2.02px;"></path>
                                                        </g>
                                                        <g transform="matrix(0.203758,-0.203758,-1.24365,-1.24365,2310.06,3335.5)">
                                                            <path class="arrow-right-hover-stroke" d="M637.566,1385.44L692.889,1385.44" style="fill:rgb(220,25,34);stroke:rgb(220,25,34);stroke-width:2.02px;"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                <span class="g-color-black g-font-weight-700 g-font-size-22">Zpět na hlavní stránku</span>
              </a>
                </div>
            </div>
        </div>
        <div class="g-pos-abs" style="top: 0px; left: -10px; z-index: -1;">
            <img src="/img/bg/bg-lines03.png" alt="Promapy.cz" width="110%">
        </div>
    </section>
<?php include "_bottom.php"; ?>