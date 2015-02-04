<?php 
	function getIfIssetGet($getvar, $default){
		if(isset($_GET[$getvar])){
			$out = $_GET[$getvar];
		} else {
			$out = $default;
		}
		return $out;
	}
	
	function getIfIssetCookie($cookievar, $default){
		if(isset($_COOKIE[$cookievar])){
			$out = $_COOKIE[$cookievar];
		} else {
			$out = $default;
		}
		return $out;
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.75" /> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<link rel="stylesheet" href="/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<link rel="stylesheet" href="/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<link rel="stylesheet" href="/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			google.maps.event.addDomListener(window, 'load', initialize);
			$(document).ready(function() {
				$(".fancybox").fancybox();	
				browseToPage(<?php echo getIfIssetCookie('pageID','1'); ?>);
				resizeDivs();
				debug = <?php echo getIfIssetGet("debug", "false"); ?>;
			});
		</script>
		<title>Woongroep Tuinwijk</title>
	</head>
	<body id="container" onLoad="" onResize="resizeDivs();">
		<div id="container">
			<div id="header">
				<div id="headerbar">
					<h2>Woongroep Tuinwijk</h2><h4>Stad Utrecht</h4>
				</div>
				<div id="headerimages">
					<table id="headertable">
						<tr>
							<td id="header1" style="background-image: url(img/grey/header1.jpg); background-size: auto 100%; background-repeat: no-repeat; background-position: center; border-radius: 15px 0px 0px 15px;"></td>
							<td id="header2" style="background-image: url(img/grey/header2.jpg); background-size: auto 100%; background-repeat: no-repeat; background-position: center; border-radius: 0;"></td>
							<td id="header3" style="background-image: url(img/grey/header3.jpg); background-size: auto 100%; background-repeat: no-repeat; background-position: center; border-radius: 0px 15px 15px 0px;"></td>
						</tr>
					</table>
				</div>
			</div>
			<div id="lowerabdomen">
				<div id="leftpane">
					<h2>Contact:</h2>
					<p>Woongroep Tuinwijk<br>
					van Esveldstraat 33<br>
					3572 KK Utrecht</p>
					<p>Telefoon: 030 228 35 25</p>
					<p>Email: <a class="small" href="mailto: info@woongroeptuinwijk.nl">info@woongroeptuinwijk.nl</a></p>
				</div>
				<div id="rightpane">
					<div id="navbar">
						<table class="links">
							<tr>
								<td><a onClick="browseToPage(1)" id="1" style="background-color: rgb(255,82,99);" href="#informatie"><h4>Informatie</h4></a></td>
								<td><a onClick="browseToPage(2)" id="2" style="background-color: rgb(121,194,105); margin-left: 10px; margin-right: 10px;" href="#afbeeldingen"><h4>Afbeeldingen</h4></a></td>
								<td><a onClick="browseToPage(3)" id="3" style="background-color: rgb(255,125,8);" href="#contact"><h4>Contact</h4></a></td>
							</tr>
						</table>
					</div>
					<div id="content">
					</div>
				</div>
			</div>
		</div>
		<div class="gone" id="page1text">
			<h4>Zelfstandig en toch gezamenlijk wonen voor 55+</h4>
			<p>Sinds 2003 heeft de Woongroep Tuinwijk in het wooncomplex Nieuw Bleyenburg haar 'plek' gevonden. Er zijn 25  driekamerappartementen op de onderste drie etages en een eigen gemeenschappelijke ruimte. De appartementen zijn van Woonzorg Nederland. Deze vallen onder de categorie sociale huurwoningen.</p>
			<h4>Doelstelling:</h4>
			<p>'Zelfstandig wonen en toch samen': dat wil zeggen je privacy blijft gewaarborgd en je hebt de keuze een aantal dingen samen te doen.<br>Daarbij kun je denken aan:</p>
			<ul>
				<li><p>eens in de week koffie drinken</p></li>
				<li><p>een aantal gezamenlijke maaltijden</p></li>
				<li><p>meerdere binnen en/of buitenactiviteiten</p></li>
			</ul>
			<p>Voor alle activiteiten binnen onze groep is ieders inzet van belang.</p>
			<h4>Saamhorigheid: Het 'omzien-naar-elkaar'.</h4>
			<h4>Wachtlijst:</h4>
			<p>In onze groep is plaats op de wachtlijst. Zowel voor (echt)paren als voor alleengaanden vanaf 55 tot 67 jaar. Dit i.v.m. de leeftijdsopbouw voor de continuïteit van de woongroep.</p>
		</div>
		<div class="gone" id="page2text">
			<p style="width: 100%; text-align:center; ">Klik op de afbeeldingen om ze te vergroten.</a>
			<table style="width: 100%; margin-left: auto; margin-right: auto;">
				<tr>
					<td>
						<a class="fancybox" rel="group" style="float:left;" href="img/img1.jpg">
							<img class="fullwidth" src="img/header1.jpg">
						</a>
					</td>
					<td>
						<a class="fancybox" rel="group" style="float:left;" href="img/img2.jpg">
							<img class="fullwidth" src="img/header2.jpg">
						</a>
					</td>
					<td>
						<a class="fancybox" rel="group" style="float:left;" href="img/img3.jpg">
							<img class="fullwidth" src="img/header3.jpg">
						</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="gone" id="page3text">
			<table style="width: 100%;">
				<tr>
					<td id="scrolldown" colspan="2" style="display: none;"><p style="width: 100%; margin: 0; padding: 0; text-align: center; font-size: x-small;">Scroll naar beneden voor meer!</p></td>
				</tr>
				<tr>
					<td id="infotd" style="vertical-align: top; width: 220px;">
						<h2>Contact:</h2>
						<p>Woongroep Tuinwijk<br>
						van Esveldstraat 33<br>
						3572 KK Utrecht</p>
						<p>Telefoon: 030 228 35 25</p>
						<p>Email: <a class="small" href="mailto: info@woongroeptuinwijk.nl">info@woongroeptuinwijk.nl</a></p>
					</td>
					<td id="maptd" style="float: right; margin-right: 1px;">
						<div id="map-canvas"></div>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>