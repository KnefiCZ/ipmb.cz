<meta http-equiv=Content-Type content="text/html; charset=utf-8">
Zpracování odeslání emailů<br />
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$dbservername = "localhost";
$dbusername = "workoholixSluzeb";
$dbpassword = "JZsddd+BZbzáí98b+";
$dbname = "workoholix_net";

$mysqli = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
$mysqli->set_charset("utf8");

require "src/SMTP.php";
$datum = Date("d.m.Y H:i:s", Time());

//Vybere řádky z DB která ještě nebyla odeslána
$vysledek = $mysqli->query("SELECT * FROM `kontaktform` WHERE `odeslano_stav` = 0 AND `zprava_spamdetekce` = 0;");
while ($data = $vysledek->fetch_assoc()) {

    echo $id = $data['id'];
    $hash = $data['hash'];
    $domena = $data['domena'];
    $zprava_rezim = $data['zprava_rezim'];
    $zprava_email = $data['zprava_email'];
    $zprava_predmet = $data['zprava_predmet'];
    $zprava_obsah = $data['zprava_obsah'];
    $zprava_url1 = $data['zprava_url1'];
    $odeslano_klient = $data['odeslano_klient'];
	$odeslano_klient2 = $data['odeslano_klient2'];
    $odeslano_vyvojar = $data['odeslano_vyvojar'];


//Odešle SMTP START
//Odešle SMTP START
//Odešle SMTP START


$mail = new \MailCLient\SMTP(
	'smtp.seznam.cz',
	'465',
	'ssl', // null, 'ssl', or 'tls'
	true, // true if authorization required
	'sluzebnik@workoholix.cz',
	'SlWo98255+9'
);

// zapnuti debug modu
$mail->setDebugMode(true);

// komu jde e-mail
if($zprava_rezim==0){
  $mail->to($odeslano_vyvojar);
  }
elseif($zprava_rezim==1){
  $mail->to($odeslano_klient);
  $mail->to($odeslano_klient2);
}
elseif($zprava_rezim==2){
  $mail->to($odeslano_klient);
  $mail->to($odeslano_klient2);
  //$mail->to($odeslano_vyvojar);
  $mail->bcc($odeslano_vyvojar);
}
//$mail->to('lubor@lubormaly.cz');

// kopie
//$mail->cc('lubor@lubormaly.cz');

// skryta kopie
//$mail->bcc('lubor@lubormaly.cz');

// komu se bude odpovidat
//$mail->replyto('lukas.kupr@gmail.com', 'Lukas Kupr');
$mail->replyto($zprava_email);

// kdo je odesilatel
$mail->from('sluzebnik@workoholix.cz', 'Služebník WORKOHOLIX');

// predmet
//$mail->subject(sprintf('Nejaky predmet %s', (new DateTime('now', new DateTimeZone('CET')))->format('d.m.Y H:i:s')));
$mail->subject($zprava_predmet);

// telo mailu
$mail->body("
<body>
$zprava_obsah
<br>
<hr>
<p>Tento email byl odeslán z adresy $zprava_url1<br /></p>
</body>
");

// priloha
//$mail->attach($path);

// odeslani
$result = $mail->send();
//Odešle SMTP STOP
//Odešle SMTP STOP
//Odešle SMTP STOP

echo "$id<br />";

$mysqli->query("UPDATE `kontaktform` SET `odeslano_stav` = '1', `odeslano_datum` = CURRENT_TIMESTAMP WHERE `kontaktform`.`id` = $id;");

}