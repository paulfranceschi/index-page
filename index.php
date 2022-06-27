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
// beginning of PHP code
<?php
$pattern = "/([àèéìòùA-Za-z]+)/";
$ITwlist = array();
$COwlist = array();
$COtypewlist = array();
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $input = $output = $target = $website = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {    
   if (empty($_POST["input"])) {
   }
   else {
     $input = test_input($_POST["input"]);
     $source = test_input($_POST["source"]);	   	   
     if ($_POST["target"] <> $target) {
	  $target = $_POST["target"];}
    $post = array('action' => 'translate', 'input' => $input, 'target' => $target, 'debug' => 'false');
    $data = http_build_query($post);
    $context = stream_context_create(array('http' => array(
      'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "X-API-Key: PHP-public-okk-xxxxxxxxx\r\n",
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
// end of PHP code	
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
								<span class="byline">Translate from French to Corsican (experimental)</span>
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
							<p>okchakko.com shall not be responsible for any errors or omissions contained in the translations. All translations are provided "AS IS". okchakko.com expressly disclaims all warranties of any kind with regard to the translations, whether express or implied, including, but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. okchakko.com makes no warranty, express or implied, as to the accuracy, completeness or reliability of the translations. okchakko.com does not maintain and does not update or correct any information that appears in the translations. okchakko.com shall not be liable for any damages arising from the translations, including but not limited to direct, indirect, incidental, special, consequential or exemplary damages, whether such damages arise in contract, negligence, tort, under statute, in equity, at law or otherwise.</p>
						</section>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>CITAZIONI</h2>
							</header>
							<ul class="style2">
								<li>
									<p>A jeweler examines an emerald. "Aha," he says, "another green emerald. In all my years in this business, I must have seen thousands of emeralds, and every one has been green." We think the jeweler reasonable to hypothesize that all emeralds are green. Next door is another jeweler having equally comprehensive experience with emeralds. He speaks only the Choctaw Indian language. Color distinctions are not as universal as might be thought. The Choctaw Indians made no distinction between green and blue—the same words applied to both. The Choctaws did make a linguistic distinction between okchamali, a vivid green or blue, and okchakko, a pale green or blue. The Choctaw-speaking jeweler says: All emeralds are okchamali. He maintains that all his years in the jewelry business confirm this hypothesis. (William Poundstone, Labyrinths of reason)</p>
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
