<?php
function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
 
    for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
        for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
            $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
 
   return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
}	

if (isset($_GET["old_era"])) {
	$old_era = true;
}else{
	$old_era = false;
}

if ($old_era) {
	/* frasi 5 Era */
	$array[] ="A Thorvil non acquisti plot, sono i plot ad acquistare te!";
	$array[].="È vero, mangiamo bambini: non hanno la scadenza!";
	$array[].="I modernisti mangeranno pure i bambini...\nMa sono gli unionisti quelli che glieli vendono.";
	$array[].="Un bicchiere di Skebru al giorno toglie il medico di torno.";
	$array[].="In vodka veritas.";
	$array[].="Ora con il 90% in più di mura di neve!";
	$array[].="Scavatori di tutto il mondo, unitevi!";
	$array[].="Il Segretario ti vede!";
	$array[].="È meglio morire per il Modernismo che vivere per sè stessi.";
	$array[].="Gola è qui!";
	$array[].="Qui una volta era tutta cobblestone.";
	$array[].="Qui una volta era tutta neve.";
	$array[].="Goldr, basta.";
	$array[].="Quando c'era Syne i minecart partivano in orario.";
	$array[].="Vezzo NON è Pezzo.";
	$array[].="No, Casi, è una pessima idea.";
	$array[].="A Thorvil è la neve che spala TE.";
	$array[].="Patria del cocomero.";
	$array[].="Più cobblestone per tutti! ";
	$array[].="The Gulash is a lie!";
	$array[].="I modernisti sono come un'idra.\nGli tagli la testa e spunta un Gulag.";
	$array[].="Vinci ora una fantastica vacanza in un Gulag!";
	$array[].="Adegheiz è Putin!";
	$array[].="Vi prometto 80 di cobblestone al giorno!";
	$array[].="Giangi, basta. Sei inutile.";
	$array[].="Raid? Ma hai visto le mura?";
	$array[].="I nostri plotoni di volontari distruggono le forze di elite.\n Pls Nerf Now!";
	$array[].="L'unica città con FeFox!\nPurtroppo...";
	$array[].="Il Partito è tuo amico.\nObbedisci al Partito.";
	$array[].="Sei felice, compagno?\nLa felicità è obbligatoria";
	
	$conteggio = count($array);
	$estrazione = mt_rand(0,$conteggio-1);
	$testo = $array[$estrazione];
	$img = imagecreatefromjpeg('sfondo_5era.jpg');  
	$bianco = imagecolorallocate($img,255,255,255); 
	$nero = imagecolorallocate($img,0,0,0); 
	imagettfstroketext($img,10,0,10,40,$bianco,$nero,"./Red-October-Regular.ttf",$testo,1);

}else{
	/* Frasi 6 Era */
	$array[] ="Stardel non comanda!";
	$array[].="Viva i righelli!";
	$array[].="A Thortuga anche le mucche sono moderniste!";
	$array[].="Compagno,".PHP_EOL."hai rispettato il limite di animali nel tuo plot?";
	$array[].="Il Partito e' tuo amico.".PHP_EOL."Obbedisci al Partito.";
	$array[].="Polentos Pulcianov vive nei nostri cuori!";
	$array[].="E' sempre colpa di Pulcio.";
	$array[].="E' l'aratro che traccia il solco, ma e' la spada che lo difende. ";
	$array[].="Il Partito ha sempre ragione. ";
	$array[].="Fino alla vittoria.";
	$array[].="Il Modernismo desidera la pace, ma non teme la guerra.";
	$array[].="Noi tireremo dritto.";
	$array[].="Anche con l'opera quotidiana, minuta ed oscura, si fa grande il Partito.";
	$array[].="Fioz si lamenta dell'assenza di economia.".PHP_EOL."Per questo Fioz si adopera per raggiungere l'autarchia completa.";
	$array[].="Piergino ha ancora il suo magazzino.";
	
	$conteggio = count($array);
	$estrazione = mt_rand(0,$conteggio-1);
	$testo = $array[$estrazione];
	$img = imagecreatefromjpeg('sfondo.jpg');  
	$bianco = imagecolorallocate($img,255,255,255); 
	$nero = imagecolorallocate($img,0,0,0); 
	imagettfstroketext($img,10,0,10,40,$bianco,$nero,"./EvilofFrankenstein.ttf",$testo,1);
}

header("Content-type: image/png"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Some time in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache"); 
imagepng($img);
imagedestroy($img);
?>
