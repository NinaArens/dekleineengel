<?php require_once("cockpit/bootstrap.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>De Kleine Engel - Home</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/dekleineengel.css" rel="stylesheet" type="text/css" />
	<link href="css/responsiveslides.css" rel="stylesheet" type="text/css" />

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
			<ul class="rslides">
				<?php foreach(gallery('Slider') as $image): ?>

					<li><img src="<?php echo str_replace("site:", "", $image["path"]) ?>" /></li>

				<?php endforeach;?>
			</ul>
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
						<span class="browntext">Maan-, dins-, donder- en vrijdag</span><br />
						9:00 - 14:30 | 16:00 - 18:00<br />
						<span class="browntext">Zaterdag</span><br />
						9:00 - 12:00 | 13:30 - 18:00<br />
						<span class="browntext">Woens-, zon- en feestdagen</span><br />
						Gesloten
				</div>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-4">
			<div class="browninner">
				<h2>Wij verkopen</h2>
				<p>
					Dameskledij<br />
					Herenkledij<br />
				</p>
				<p>Mogelijk om alles te	personaliseren met borduurwerk.</p>
			</div>
		  </div>
		  <div class="col-md-4">
			<div class="browninner">
				<h2>En ook...</h2>
				<p>
					Sierraden<br />
					Accessoires<br />
				</p>
				<p>Op onze winkelpagina kan je al onze merken ontdekken.</p>
			</div>
		  </div>
		  <div class="col-md-4">
			<div class="browninner">
				<h2>Nog meer...</h2>
				<p>
					Borduurwerken<br />
					Houten speelgoed
				</p>
				<p>Bij ons vind je de leukste geschenken voor iedere gelegenheid.</p>
			</div>
		  </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="nieuws">
					<img src="img/sterren.png" style="position: absolute; right: 0px; top: -20px;" />
					<h2>Nieuws</h2>
					<?php foreach(collection("Nieuws")->find()->sort(["Datum"=>-1]) as $item): ?>
						<div>
							<h3><?php echo $item["Titel"];?></h3>
							<p>
								<i>Geplaatst op 
									<?php 
									$date = date_create($item["Datum"]);
									echo date_format($date, "d-m-Y");
									?>
								</i>
							</p>
							<?php echo $item["Bericht"];?>
						</div>
						<hr />
					<?php endforeach;?>
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
	<script src="js/responsiveslides.min.js"></script>
	<script>
	  $(function() {
		$(".rslides").responsiveSlides();
	  });
	</script>
  </body>
</html>