<!DOCTYPE HTML>
<!--
Copyright (c) ockchakko.com
-->
<html>
	<head>
		<title>Okchakko.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Okchakko.com Italian to Corsican translation (for testing purposes)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Translation from Italian to Corsican" />
    <meta name="description" content="Translation from Italian to Corsican" />
    <meta name="keywords" content="Italian to Corsican translation, Italian to Corsican, translation, translate, corsican, italian, languages, artificial intelligence, IA, free, free translation, Babel, endangered languages, language extinction, machine translation" />
    <meta name="language" content="en" />
    <meta name="subject" content="Translate Italian into Corsican" />
    <meta name="copyright" content="okchakko.com" />
    <meta name="abstract" content="Translation from Italian to Corsican" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>

<body>	
<?php
include 'it-cot.php';
$pattern = "/([àèéìòùA-Za-z]+)/";
$ITwlist = array();
$COwlist = array();
$COtypewlist = array();
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $input = $output = $target = $website = "";
// $italiano = test_input($_POST["italiano"]);
// $source = test_input($_POST["source"]);
// $output = TranslateITxCO($italiano);
 if ($_SERVER["REQUEST_METHOD"] == "POST") {    
   if (empty($_POST["input"])) {
// the following line prevents the browser from parsing this as HTML.
//    header('Content-Type: text/plain');
	$headers = get_headers('http://it.wikipedia.org/wiki/Speciale:PaginaCasuale', 1);
    $pagetitle = $headers[Location];	   	   
	$pagetitle = str_replace('wiki/', '/w/index.php?title=', $pagetitle) . '&action=edit';
	$randompage = file_get_contents($pagetitle); // get random page from it wk.
	$textbegin = strpos($randompage, '"mw-ui-input">') + strlen('"mw-ui-input">'); // 'wpTextbox1');
	$textend = strpos($randompage, "<div class='editOptions'>");
	$randompage = substr($randompage, $textbegin, strlen($randompage)-$textend);
	$input = $randompage;	   
    $website = "";
   } else {
     $input = test_input($_POST["input"]);
     $source = test_input($_POST["source"]);	   	   
     if ($_POST["target"] <> $target) {
	  $target = $_POST["target"];}
    $post = array('action' => 'translate', 'input' => $input, 'target' => $target, 'debug' => 'false');
    $data = http_build_query($post);
    $context = stream_context_create(array('http' => array(
      'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "X-API-Key: PHP-public-okk-22mPl8nTe4\r\n",
      'method' => "POST",
      'content' => $data)));
    $output = file_get_contents('http://www.okchakko.com/api/V6/translate.php', FALSE, $context);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }
   }
} 

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}


?>
</body>	
	<body class="homepage">

	<!-- Header -->
		<div id="header">
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">
				
			<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="6u">
						<section>
							<header>
								<h2>OKCHAKKO.COM</h2>
								<span class="byline">Traducia da u francesu à u corsu (sperimintali)</span>
							</header>
							<p></p>
							
<!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
<form method="post">							
   <select name="source">
   <option selected="selected" value="FR">français</option>
   </select><br /><br />
   <textarea name="input" id="input" rows="12" cols="80"><?php echo $input;?></textarea>
   <br><br>
   <select name="target" id="target">
   <option value="CIS" <?php if($target == 'CIS') { echo 'selected="selected"'; } ?>>cismuntincu</option>
   <option value="SAR" <?php if($target == 'SAR') { echo 'selected="selected"'; } ?>>sartinesu</option>
   <option value="TAR" <?php if($target == 'TAR') { echo 'selected="selected"'; } ?>>taravesu</option>
   </select><br /><br />
   <textarea name="output" id="output" rows="12" cols="80"><?php echo $output;?></textarea>
   <br><br>
   <div id="div1"></div>
   <br><br>	
   <input type="submit" name="submit" value="Traducia" onclick="PostData()">
   <br /><br />
</form>
 <h3>AVVIRTIMENTU</h3>
							<p>okchakko.com ùn sarà micca rispunsevuli par evintuali arrori o omissioni cuntinuti in i traduzioni. Tutti i traduzioni sò furniti "TALI È QUALI". okchakko.com declina di manera espressa tutti i garantiti d'ogni tipu riguardu à i traduzioni, ch'eddi siini espliciti o impliciti, cumpresu, ma non solu, i garantiti impliciti di cummerciabilità, iduneità par un scopu particulari è non viulazioni. okchakko.com ùn dà nisciuna garantita, espressa o implicita, riguardu à l'asatezza, a cumplittezza o l'affidabilità di i traduzioni. okchakko.com ùn manteni micca nè curreghji l'infurmazioni chì sò cuntinuti in i traduzioni. okchakko.com ùn sarà micca rispunsevuli d'evintuali danni divuti à i traduzioni, inclusi ma micca limitati à danni, indiretti, incidentali, danni spiciali, cunsequinziali o esimplari, ch'è 'ssi danni aghjini a so urighjini in qualsiasi modu.</p>
						</section>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>CITAZIONI</h2>
							</header>
							<ul class="style2">
								<li>
									<p>Un ghjuviddaru asamineghja un smiraldu. "Aha," dici, "un antru smiraldu verdi. In tutti i me anni in stu sittori, devu avè vistu migliai di smiraldi, è ognunu hè statu verdi." Pinsemu ch'è u ghjuviddaru hè raghjunevuli di fà l'iputesa ch'è tutti i smiraldi sò verdi. Accantu si trova un antru ghjuviddaru chì t'hà listessu tipu di spirienza incù i smiraldi. Ma parla solu a lingua indiana Choctaw. I distinzioni di culori ùn sò micca univirsali com'eddu si pudaria pinsà. L'indiani Choctaw ùn facini nisciuna distinzioni trà verdi è turchinu - listessi paroli sò appiicati à tremindù. I Choctaw facini una distinzioni linguistica trà "okchamali", un verdi o turchinu scuru, è "okchakko", un verdi o turchinu chjaru. U ghjuviddaru di lingua Choctaw dici : "Tutti i smiraldi sò okchamali". Susteni ancu eddu ch'è tutti i so anni in u sittori di a ghjuviddaria cunfermani 'ss' iputesa. (William Poundstone, I labirinti di a raghjoni)</p>
								</li>
							</ul>						
						</section>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>Lingua corsa</h2>
							</header>
							<ul class="style1">
								<li><a href="http://www.adecec.net">ADECEC</a></li>
								<li><a href="http://infcor.adecec.net/index.php">INFCOR</a></li>								
								<li><a href="http://www.apiazzetta.com/">A Piazzetta</a></li>
								<li><a href="http://co.wikipedia.org/">Wikipedia in lingua corsa</a></li>
								<li><a href="http://accademiacorsa.org">Accademia corsa di Nizza</a></li>
								<li><a href="https://www.praticalingua.com">Praticalingua</a></li>											<li><a href="http://www.centreculturelvoce.org/">Centru Culturale Voce</a></li>																
							</ul>
						</section>
						<section class="sidebar">
							<header>
								<h2>Fonti di testi in talianu</h2>
							</header>
							<ul class="style1">
								<li><a href="http://it.wikisource.org">Wikisource in talianu</a></li>
								<li><a href="https://it.wikipedia.org">Wikipedia in talianu</a></li>
							</ul>
						</section>						
						<section class="sidebar">
							<header>
								<h2>Lingui in priculu di sparizioni</h2>
							</header>
							<ul class="style1">
								<li><a href="http://www.unesco.org/new/en/culture/themes/endangered-languages/">UNESCO: lingui in priculu di sparizioni</a></li>
								<li><a href="http://www.ethnologue.com/endangered-languages">Ethnologue: lingui in priculu di sparizioni</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
			<!-- Main -->

		</div>
	<!-- /Main -->

	<!-- Featured -->
	<!-- /Featured -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>
	<!-- /Footer -->

</body>	

</html>
