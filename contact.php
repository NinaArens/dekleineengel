<?php require_once("cockpit/bootstrap.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>De Kleine Engel - Contact</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/dekleineengel.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-4 hidden-xs hidden-sm bannerright">
				<img src="img/logo.png" />
			</div>
			<div class="col-md-6 bannermiddle" style="padding-top: 92px;">
				<nav class="navbar navbar-default">
					    <div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand hidden-md hidden-lg" href="#">De Kleine Engel</a>
						</div>
						
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li><a href="/" class="menuitem">Home</a></li>
								<li><a href="winkel.php" class="menuitem">Winkel</a></li>
								<li><a href="locatie.php" class="menuitem">Locatie</a></li>
								<li><a href="contact.php" class="menuitem">Contact</a></li>
							  </ul>
						  </div>
				</nav>
			</div>
			<div class="col-md-2 hidden-xs hidden-sm bannerleft" style="padding-top: 142px;">
				<img src="img/wolk.png" style="position: absolute; right: -45px; top: 0px;" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="border"></div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-8">
			<div class="content">
				<h1>Contact</h1>	
				
				<?php form('Contact'); ?>
					<div class="form-group">
						<label for="voornaam">Voornaam</label>
						<input type="text" name="form[voornaam]" id="voornaam" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="naam">Naam</label>
						<input type="text" name="form[Naam]" id="naam" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="emailadres">Email adres</label>
						<input type="text" name="form[emailadres]" id="emailadres" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="telefoon">Telefoon</label>
						<input type="text" name="form[telefoon]" id="telefoon" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="bericht">Vraag of opmerking</label>
						<textarea name="form[bericht]" id="bericht" class="form-control" required></textarea>
					</div>
					<div id="recaptcha_html_element" class="form-group"></div>
					<p>
						<button type="submit" disabled=disabled id="submitbutton">Versturen</button>
					</p>
				</form>
			</div>
		</div>
		  <div class="col-md-4">
			<div class="brownouter">
				<div class="browninner" style="margin-bottom: 0px;">
					<h2>Locatie</h2>
					<p>
						Opperstraat 27<br />
						9180 Moerbeke-Waas<br />
						Tel: +32 486 47 57 63<br />
						<a href="https://www.facebook.com/pages/De-Kleine-Engel/375519499324779" target="_new"><img src="img/facebook.png" width="25" height="25" class="img-responsive" style="margin-top: 5px;" /></a>
					</p>
					<h2>Openingsuren</h2>
						<span class="browntext">Maan-, dins-, donder- vrij- en zaterdag</span><br />
						9U00 - 12U00 | 13U30 - 18U00<br />
						<span class="browntext">Woens-, zon- en feestdagen</span><br />
						Gesloten
				</div>
			</div>
		  </div>
		</div>
	</div>

	<footer class="footer">
	  <div class="container">
		<p>Ontwerp: <a href="http://www.graphiluxe.be" target="_new">Graphiluxe</a> &middot; Webdesign: <a href="http://www.levelupdigital.be" target="_new">Level Up Digital</a></p>
	  </div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=nl" async defer></script>
	<script type="text/javascript">

		var verifyCallback = function(response) {

		document.getElementById('submitbutton').disabled=false;

		};  

		var onloadCallback = function() {

			grecaptcha.render('recaptcha_html_element', {

			'sitekey' : '6LeNsAYTAAAAAHdfl9049UIsIPAwiPZB2KACjnSA',

			'callback' : verifyCallback,

			});

		};

	</script>
  </body>
</html>