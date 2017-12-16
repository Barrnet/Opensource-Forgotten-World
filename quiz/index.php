<html>
<head>
<title>Quiz Modernista</title>
<link rel="stylesheet" media="screen" href="./css/stylesheet.css" />
</head>
<body>
<div id='wrap'>
<h1>Modulo per il censimento delle correnti moderniste</h1>
<?php 
if (!isset($_POST["submit"])) {
?>
<p>Salve compagno. Il partito è impegnato per mezzo di una opera del Sottosegretario Per l'Armonia Modernista in un censimento degli aderenti ad alcune delle più famose correnti moderniste. Sei pregato di consegnare codesto modulo ricompilato in tutte le sue parti al più vicino sportello per gli atti burocratici.</p>
<hr>
<form method="POST" action="">
<label>
<p style='font-weight: bold;' required>Per il tuo anniversario di matrimonio decidi di fare una cenetta con la tua dolce metà, in quale ristorante ti rechi?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='1' value='orto' required>In nessun ristorante, il Partito provvede al mio cibo gratuitamente.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='para' required>In quello che ha il menù più fornito, ordinato e che mi indica gli ingredienti delle pietanze con precisione.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='national' required>Nel ristorante che offre SOLO piatti tipici locali.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='etero' required>In un ristorante etnico, mi piace provare cibi di altre culture.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='unionista' required>Quello dove vado sempre, il migliore della zona.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='attivismo' required>Ovviamente quello che accetta i buoni-lavoro miei e della mia compagna.</li>";
$array_domande[] = "<li><input type='radio' name='1' value='statalismo' required>In un ristorante abbastanza carino ma che possa permettermi, non bisogna sprecare nulla.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>


<label>
<p style='font-weight: bold;' required>Qual è la cosa più importante per il funzionamento di uno stato?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='2' value='orto' required>Lo sviluppo sociale.</li>";
$array_domande[] = "<li><input type='radio' name='2' value='para' required>L'amministrazione.</li>";
$array_domande[] = "<li><input type='radio' name='2' value='national' required>Le forze armate.</li>";
$array_domande[] = "<li><input type='radio' name='2' value='etero' required>La democrazia.</li>";
$array_domande[] = "<li><input type='radio' name='2' value='unionista' required>I soldi</li>";
$array_domande[] = "<li><input type='radio' name='2' value='attivismo' required>Il lavoro.</li>";
$array_domande[] = "<li><input type='radio' name='2' value='statalismo' required>I valori modernisti di ogni singolo cittadino.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Devi andare a trovare un tuo caro amico all'estero, come ti prepari per il viaggio?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='3' value='orto' required>Aspetto che una rivoluzione crei uno stato modernista dove abita.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='para' required>Annuncio le ferie in accordo con il datore di lavoro. Prenoto con largo anticipo, studio il percorso e preparo scrupolosamente la valigia una settimana prima di partire.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='national' required>Non ho amici all'estero.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='etero' required>Mi assicuro di avere con me dei preservativi e guardo se ci sono dei locali interessanti in zona.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='unionista' required>Lascio tutta l'organizzazione al mio maggiordomo. Non posso occuparmi di qualcosa di così futile.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='attivismo' required>Non posso, devo lavorare.</li>";
$array_domande[] = "<li><input type='radio' name='3' value='statalismo' required>Una pala ed un piccone assieme a cianfrusaglie varie...sia mai che trovi una vena di diamante per rimpolpare le casse della mia città.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>


<label>
<p style='font-weight: bold;' required>È piena notte e i tuoi vicini stanno facendo un gran rumore. Cosa fai?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='4' value='orto' required>L'indomani denuncerò all'Assemblea la condotta antimodernista dei miei vicini.</li>";
$array_domande[] = "<li><input type='radio' name='4' value='para' required>Denuncio i vicini per rumori molesti tramite il modulo adeguato che ho pronto nel cassetto.</li>";
$array_domande[] = "<li><input type='radio' name='4' value='national' required>Maledetti immigrati, prendo il manganello e vado ad insegnargli come si fa nell'URMM.</li>";
$array_domande[] = "<li><input type='radio' name='4' value='etero' required>Mi unisco alla festa. Visto che non riesco a dormire, tanto vale divertirmi.</li>";
$array_domande[] = "<li><input type='radio' name='4' value='unionista' required>Impossibile, vivo in una villa isolata su di una collina. .</li>";
$array_domande[] = "<li><input type='radio' name='4' value='attivismo' required>Divento una bestia, perchè se qualcuno alle 3 di notte ascolta musica significa che all'indomani mattina non avrà un cazzo da fare.</li>";
$array_domande[] = "<li><input type='radio' name='4' value='statalismo' required>Porto il caso all'assemblea locale e vado fino in fondo...devono capire i loro sbagli e pagare una multa salata.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Tua zia ti fa un regalo per il compleanno, è un esuberante maglione multicolorato con arcobaleni e gattini disegnati. Come reagisci?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='5' value='orto' required>Grazie zia, donerò questo caldo maglione ad un amico meno fortunato. In questo modo tutti saremo felici.</li>";
$array_domande[] = "<li><input type='radio' name='5' value='para' required>Grazie zia, molto autonoma. Potresti darmi lo scontrino? Nel caso lo voglia cambiare.</li>";
$array_domande[] = "<li><input type='radio' name='5' value='national' required>Grazie zia, è fatto a Thorvil? .</li>";
$array_domande[] = "<li><input type='radio' name='5' value='etero' required>Grazie zia, fantastico! Bellissimo! Lo indosso subito .</li>";
$array_domande[] = "<li><input type='radio' name='5' value='unionista' required>Grazie zia, fantastico! Ma ora tira fuori il vero regalo che lo scherzo è bello finché dura poco.</li>";
$array_domande[] = "<li><input type='radio' name='5' value='attivismo' required>Grazie zia, apprezzo il pensiero ma posso indossare solo la divisa del mio lavoro.</li>";
$array_domande[] = "<li><input type='radio' name='5' value='statalismo' required>Grazie zia! Quanto l'hai pagato?(che poi me lo rivendo).</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Chi è il tuo eroe?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='6' value='orto' required>Il Partito!.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='para' required>Nanni Moretti.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='national' required>Er Duce.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='etero' required>Chiunque se lo meriti.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='unionista' required>Lidia.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='attivismo' required>Il Sottosegretario agli Affari Interni.</li>";
$array_domande[] = "<li><input type='radio' name='6' value='statalismo' required>Thor!</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>A lavoro, un tuo collega scopre un metodo per aumentare notevolmente la produttività, per attuarlo però dovrebbe bypassare alcune importanti regole di sicurezza e chiede aiuto a te. Come ti comporti?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='7' value='orto' required>Lo aiuto, l'efficienza non deve essere fermata dall'eccesso di regole.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='para' required>Gli ricordo che le regole esistono per una ragione e riporto il suo comportamento ad un superiore.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='national' required>Se il collega è modernista lo aiuto, se non lo è segnalo subito la cosa.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='etero' required>Lo ignoro, le sue ragioni sembrano valide ma non voglio rischiare il posto.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='unionista' required>Gli rubo l'idea così dal venire promosso caporeparto.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='attivismo' required>Ricordo al collega che dovrebbe essere felice di avere un lavoro.</li>";
$array_domande[] = "<li><input type='radio' name='7' value='statalismo' required>Dico al mio collega di aspettare, porto il caso al mio superiore e cerco di convincerlo a migliorare la produttività... più efficienza equivale a più soldi nelle casse dello Stato. </li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Qual'è il tuo tipo di parther ideale?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='8' value='orto' required>Rossa di capelli, tette grandi (Donna) o solido e dai lunghi baffi bruni (Uomo).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='para' required>Maestrina sexy (Donna) o ben curato ed elegante (Uomo).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='national' required>Basta che sia modernista (Ambo i sessi).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='etero' required>Non esiste uno standard unico, dev'essere speciale per me. (Ambo i sessi).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='unionista' required>Asiatiche, mi piacciono quelle di Kushima (Donna) o gli uomini ricchi e potenti (Uomo).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='attivismo' required>Con un lavoro (Ambo i sessi).</li>";
$array_domande[] = "<li><input type='radio' name='8' value='statalismo' required>Deve assolutamente avere un bel culo! Il resto è secondario.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Qual'è il tuo cibo preferito?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='9' value='orto' required>Meloni.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='para' required>Qualunque cibo il partito distribuisca.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='national' required>Basta che sia prodotto in un territorio modernista.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='etero' required>Carne.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='unionista' required>Zucca.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='attivismo' required>Il pasto della mensa.</li>";
$array_domande[] = "<li><input type='radio' name='9' value='statalismo' required>Cibo a kilometro zero, costa meno ed aiuta l'economia locale.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<label>
<p style='font-weight: bold;' required>Qual'è il tuo gioco da tavolo preferito?</p>
<ul>
<?php 
$array_domande = array();
$array_domande[] = "<li><input type='radio' name='10' value='orto' required>Dungeons and Dragons.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='para' required>Paranoia.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='national' required>Risiko.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='etero' required>Twister.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='unionista' required>Monopoli.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='attivismo' required>Coloni di Catan.</li>";
$array_domande[] = "<li><input type='radio' name='10' value='statalismo' required>Costano troppo! Con un computer fai tutto.</li>";
shuffle($array_domande);
foreach ($array_domande as $domanda) {
	echo $domanda;
}
?>
</ul></label>

<br>
<div style='margin: 0 auto;text-align:center;'><input type='submit' class='button' value='Invia modulo' name='submit'></div>
</form>
<?php 
}else{
	/* definizione delle variabili per i punteggi */
	$orto = 0;
	$para = 0;
	$national = 0;
	$etero = 0;
	$unionista = 0;
	$attivismo = 0;
	$errore = 0;
	$statalismo = 0;

	for ($i = 1; $i <= 10; $i++) {
		if (!isset($_POST[$i])) {
			$errore = 1;
		}else{
			switch ($_POST[$i]) {
				case 'orto';
					$orto++;  
					break;
				case 'para';
					$para++; 
					break;	
				case 'national';
					$national++; 
					break;	
				case 'etero';
					$etero++; 
					break;	
				case 'unionista';
					$unionista++; 
					break;		
				case 'attivismo';
					$attivismo++; 
					break;			
				case 'statalismo';
					$statalismo++;
					break;
				default:
					//se una domanda è vuota o con risposta non valida, innesco la variabile di errore
					$errore = 1;
			}
		}
	}
	if ($errore) {
		echo "Un bravo modernista compila il modulo in ogni sua parte!";
	}else {
		$array_value['orto'] = $orto;
		$array_value['para'] = $para;
		$array_value['national'] = $national;
		$array_value['etero'] = $etero;
		$array_value['unionista'] = $unionista;
		$array_value['attivismo'] = $attivismo;
		$array_value['statalismo'] = $statalismo;
		arsort($array_value);
		$corrente_att = array_search(max($array_value), $array_value);
		//echo "<pre>";
		//print_r($array_value);
		//echo "</pre>";		
		switch ($corrente_att) {
			case 'orto';
				echo "<h2>Sei un Ortomodernista</h2>";
				echo "<p>Per te il modernismo è l'unica idologia esistente che rappresenta un accesso ad una forma di governo accettabile, e farai qualunque cosa in tuo potere per espandere l'influenza del Modernismo sul mondo. Per il modernismo, non esistono privazioni troppo grandi, trovi accettabili anche le limitazioni alla propria libertà personale o di essere sottoposti alla sorveglianza della Polizia Gialla.<br>
				Non importa in che forme, non importa se deve partire da più focolai indipendenti o deve esserci un unico focolaio in esplosiva espansione, per te il Modernismo deve propagarsi in tutto il mondo come un incendio.</p>";
				break;
			case 'para';
				echo "<h2>Sei un Paramodernista</h2>";
				echo "<p>Per te il Modernismo è soprattutto ordine e razionalità: Per qualunque tua esigenza deve esistere un apposito modulo di richiesta al Partito, che tieni in perfetto ordine tra le tue scartoffie. Trovi assolutamente normale che il governo diffonda forti immagini di propaganda per spingere - Per il bene del Modernismo ovviamente - una ideologia unica in tutto il mondo.<br>
				Spingere gli ideali del Modernismo questo è lo scopo della tua vita. A patto di aver compilato il modulo 53/F sulla dichiarazione delle proprie intenzioni spirituali, si intende.</p>";
				break;
			case 'national';
				echo "<h2>Sei un Nazional modernista</h2>";
				echo "<p>Per te il Modernismo è tutto ciò che riguarda la tua padria, che deve essere difesa dalle ingerenze esterne: In caso di problemi, prima i Modernisti e poi tutti gli altri. La tua priorità è l'ordine e la pace interna, asnche a costo di eliminare eventuali dissidenti. Più che spingere per una diffusione dell'idologia modernista in maniera spontanea, secondo il tuo parere dovrebbe essere il governo modernista ad espandere i propri confini per esportare la propria idologia.<br>
				La tua vita è completa solo in uno stato che ti garantisca pace ed ordine, anche a patto di caricare personalmente contro quegli scansafatiche che protestano contro l'operato modernista.</p>";
				break;
			case 'etero';
				echo "<h2>Sei un Eteromodernista</h2>";
				echo "<p> L'autodeterminazione è il tuo valore fondamentale, consideri la libertà personale sopra ogni cosa e malsopporti la propaganda di stato ed il \"culto del capo\" verso gli organi di stato. Per te il modernismo è una ottima forma di stato, ma - a differenza di altre persone - non la vedi in una ottica quasi relogiosa o mistica: Come ogni cosa, si può sempre migliorare ed il modo migliore per farlo è ascoltare le critiche del popolo, dei dissidenti e cercare ispirazioni nelle forme di governo estero.<br>
				Non sopporti le forme di repressione della Polizia Gialla e lo scopo della tua vita è ottenere un ambiente più libero e rilassato.</p>";
				break;
			case 'unionista';
				echo "<h2>Sei un Moderunionista</h2>";
				echo "<p>Per te il Modernismo è solamente un passo verso un governo migliore, ed aspiri a cercare fattori esterni che possano migliorarlo ed offrirti il meglio. Per te il governo democratico non è la panacea di ogni male, ma aspiri a portare una forma di governo più efficiente che premi gfli uomini migliori: Meglio un organo di governo composto da pochi eletti di intelletto superiore che una intera assemblea di capre belanti.<br>
				Nella tua vita aspiri al meglio per te, e farai tutto quanto è possibile per averlo. Specie se si tratta di potere.</p>";
				break;
			case 'attivismo';
				echo "<h2>Sei un Moderattivista</h2>";
				echo "<p>Per te il Modernismo è sopratutto lavoro, sudore e ancora lavoro, in quanto sai che nel momento in cui il lavoro cessa, tutto andrà in rovina. Scavare una nuova strada o prestare servizio nelle pattuglie dell'Armata Rossa: per te l'importante è avere sempre da fare e solamente quando avrai i calli sulle mani, e nuove opere pubbliche attorno a te, potrai aspirare a prendere la Tessera del Partito Modernista, avendola guadagnata meritatamente.<br>
				Se devi scegliere fra passare le giornate chiuso in uno studio a scrivere o sul campo a lavorare, ti metti a scrivere nelle pause obbligatorie dei pasti, e non un momento prima.</p>";
				break;
			case 'statalismo';
				echo "<h2>Sei uno Statalista</h2>";
				echo "<p>Per lo statalista lo Stato è tutto, l'economia e il comportamento di cittadini deve ruotare attorno alla città ed a tutto ciò che riguarda l'economia e la gestione del mercato.
				Sei contro gli sprechi contro lo sperpero per inutile di denaro in un'ottica non Privata ma pubblica.<br>
				Prima del singolo individuo c'è il bene collettivo della città e di tutto il partito.</p>";
				break;
			default:
			echo "<h2>Nessuna corrente trovata</h2>";
			echo "<p>Il modulo non è riuscito ad assegnarti ad alcuna corrente. Sicuro di averlo compilato correttamente?</p>";
		}
	}
	echo "<br><a href='./index.php'>Torna al questionario.</a>";
}
?>
<p style='text-align:center; font-style: italic;'>Il partito ti ringrazia per la collaborazione! &bull; Il Partito è tuo amico!<br>
Crediti: Barrnet, NihondeBresa, Konrad_Curze, Brodsko e Stardel</p>
</div>
</body>
</html>