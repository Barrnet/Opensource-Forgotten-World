<?php 
header("Content-type: image/png"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Some time in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache"); 

function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
    for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
        for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
            $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
 
   return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
}	

/**
* PNG ALPHA CHANNEL SUPPORT for imagecopymerge();
* by Sina Salek
*
* Bugfix by Ralph Voigt (bug which causes it
* to work only for $src_x = $src_y = 0.
* Also, inverting opacity is not necessary.)
* 08-JAN-2011
*
**/
function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct){
    // creating a cut resource
    $cut = imagecreatetruecolor($src_w, $src_h);
    // copying relevant section from background to the cut resource
    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
    // copying relevant section from watermark to the cut resource
    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);  
    // insert cut resource to destination image
    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
} 

//1494115200 7 maggio 2017 00:00 -> Anno 2961 1 settimana di Spes giorno di Darbis -> Inizio 6° Era UTC
$offset_fondazione = 1494115200;
$anno_minecraft = 270000;
//offset anni: anni dalla fondazione - 1 per via dell'arrotondamento
$offeset_anni_minecraft = 2960;

if (isset($_GET["timestamp"])) {
	$tempo_reale = (int) $_GET["timestamp"];
}else{
	$tempo_reale = time();
}

$time = $tempo_reale - $offset_fondazione;
//echo "[Debug] Timestamp con offset: $time<br>";
//arrotondo per ottenere l'anno corrente
// 1 anno = 3 giorni e 3 ore -> 270000 secondi
$anno = ceil($time/$anno_minecraft)+$offeset_anni_minecraft;
//ottengo i giorni restanti
$resto_anni = $time / $anno_minecraft;
$resto_anni = $resto_anni - floor($resto_anni);
$resto_in_secondi = $resto_anni * $anno_minecraft;

//inizia il DISAGIO per calcolare il mese
//calcolo il numero di giorni, arrotondato per difetto
//1 giorno = 1200 secondi
$numero_giorni = ceil($resto_in_secondi / 1200);
//inizio una serie di if incrementali, calcolando ogni volta il numero minimo di giorni per essere in un determinato mese. DIO CANE CHE SISTEMA DI MERDA

$array_mesi = array("Spes", "Venes", "Falam", "Mos", "Varpu", "Viljan", "Daudar", "Vannu", "Bacal", "Staildur");
$mese = "";
$inizio_mese = 0;
foreach ($array_mesi as $key_mese) {
	if ($numero_giorni >= $inizio_mese) $mese = "I Settimana di $key_mese";
	if ($numero_giorni > $inizio_mese + 5) $mese = "II Settimana di $key_mese";
	if ($numero_giorni > $inizio_mese + 10) $mese = "III Settimana di $key_mese";
	if ($numero_giorni > $inizio_mese + 15) $mese = "IV Settimana di $key_mese";
	if ($numero_giorni > $inizio_mese + 20) $mese = "V Settimana di $key_mese";
	$inizio_mese = $inizio_mese + 25;
}

if ($numero_giorni < 1) {
	$giorno_mese =1;
}else{
	$giorno_mese = ceil($numero_giorni % 25);
}

$giorno_settimana = "$numero_giorni";
if ($giorno_mese == 1 or $giorno_mese == 6 or $giorno_mese == 11 or $giorno_mese == 16  or $giorno_mese == 21) $giorno_settimana = "Darbis";
if ($giorno_mese == 2 or $giorno_mese == 7 or $giorno_mese == 12 or $giorno_mese == 17  or $giorno_mese == 22) $giorno_settimana = "Kasbis";
if ($giorno_mese == 3 or $giorno_mese == 8 or $giorno_mese == 13 or $giorno_mese == 18  or $giorno_mese == 23) $giorno_settimana = "Simbis";
if ($giorno_mese == 4 or $giorno_mese == 9 or $giorno_mese == 14 or $giorno_mese == 19  or $giorno_mese == 24) $giorno_settimana = "Dakbis";
if ($giorno_mese == 5 or $giorno_mese == 10 or $giorno_mese == 15 or $giorno_mese == 20 or $giorno_mese == 25) $giorno_settimana = "Lebis";


//Debug date
//echo "[Debug] numero di giorni: $numero_giorni <br>";
//echo "[Debug] Resto dell'anno: $resto_anni <br>";
//echo "[Debug]Anno ".$anno. " d.F.". PHP_EOL . PHP_EOL ."$mese, Giorno di $giorno_settimana";

$img = imagecreatefromjpeg('sfondo.jpg');  
$png = imagecreatefrompng('logo.png');
$bianco = imagecolorallocate($img,255,255,255); 
$nero = imagecolorallocate($img,0,0,0);
$oro = imagecolorallocate($img,226,193,0); 
$testo = "Anno ".$anno. " d.F.". PHP_EOL . PHP_EOL ."$mese, Giorno di $giorno_settimana"; 
$testo_intestazione = "Ufficio Tecnico di Thortuga";
imagettfstroketext($img,12,0,5,55,$bianco,$nero,"./EvilofFrankenstein.ttf",$testo,1);
imagettfstroketext($img,16,0,5,25,$oro,$nero,"./EvilofFrankenstein.ttf",$testo_intestazione,1);
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($png);
$sy = imagesy($png);
imagecopymerge_alpha($img, $png, imagesx($img) - $sx - $marge_right, imagesy($img) - $sy - $marge_bottom, 0, 0, imagesx($png), imagesy($png), 100);
imagepng($img);
imagedestroy($img);
imagedestroy($png);

?>