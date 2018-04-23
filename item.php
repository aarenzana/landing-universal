<?php

	$api_controller = ($_GET['dev'] == "true") ? "app/api-controller/controller.dev.php" : "app/api-controller/controller.php";
	$is_admin       = ($_GET['admin'] == "adpQS1k6R") ? "&admin=adpQS1k6R" : "/#top";
	$show_admin     = ($_GET['admin'] == "adpQS1k6R") ? "show-admin-data" : "";

	$url = $_SERVER['REQUEST_URI'];
	$url = rtrim($url, "/");
	$paths = explode('/', $url);

	$idx = $paths[sizeof($paths)-2];
	$slug = $paths[sizeof($paths)-1];


	require($api_controller);

?>

<!doctype html>
<html lang="es">
<head>
	<title>Porsche Optima</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- Core Landings CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/core.css">


	<!--Checkbox radio-->
	<!-- <link href="assets/css/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.10">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script> -->
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> -->

</head>

<body>

<!-- [[ Default Site Header ]] -->
<header id="header">

	<!-- Contact Fixed Bar Mobile -->
	<div id="fixed-contact-area" class="d-block d-sm-none">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a href="tel:<?=$Agencia['telefono_tracking']?>">
						<p id="phone-hours-mob">
							<i class="flaticon-phone-receiver"></i>&nbsp;
							<strong>Marque ahora <?=$Agencia['telefono_tracking']?></strong>
						</p>
					</a>
				</div>
				<div class="col-sm-12">
					<p id="offhours-contact-mob">
						<strong>
							<a data-fancybox data-src="#gen-contact-form" href="javascript:;">CONTÁCTANOS</a>
						</strong>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Default Header -->
	<div id="site-header-default" class="__fixed-top">
		<div id="nav-mob">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<!-- Logo / Dealer Location -->
				<div class="container">
					<a class="navbar-brand" href="#">
						<img src="/adp/cartas/logos/<?=$Agencia['logo']?>" alt="<?=$Agencia['logo']?>" />
						<p><?=$Agencia['agencia']?></p>
					</a>
					
					<a href="tel:<?=$Agencia['telefono_tracking']?>"><?=$Agencia['telefono_tracking']?></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Inventario <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Promociones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Prueba de Manejo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Servicio</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>

<section id="details">
	<div class="container">
		<div class="itemdetails">
				<script id="item-template" type="text/x-handlebars-template">

					<div class="col-sm-12">					
							
						<div class="row">
							<div class="col-sm-12">
								<h3>{{title}} {{stock_id}} {{year}}</h3>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<img src="http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/{{thumb}}" width="100%">

								<ul>
									{{#each features}}
											{{#if this}}
													<li>
															{{this}}
													</li>
											{{/if}}
									{{/each}}
								</ul>
							</div>
							<div class="col-sm-6">
								<ul class="list-group">
									{{#each detail_items}}
											{{#if this}}
													<li class="list-group-item">
															<b>{{@key}}:</b> {{this}}
													</li>
											{{/if}}
									{{/each}}
								</ul>

								
							</div>
						</div>	

					</div>			

				</script>

		</div>
	</div>
</section>

<!-- [[ Scripts ]] -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
<!-- Infinite Scroll -->
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<!-- Handlebars JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>

<!-- Custom scripts -->
<script src="http://adpdev.com/landing-v2/assets/js/app.js"></script>






<script>

	// Utils
	function safehtmlArray(array_in){
			array_out = [];

			$(array_in).each(function(i){
					array_out.push($('<textarea />').html(array_in[i]).text());
			});

			return array_out;
	};

	// JSON parse
	$(document).ready(function(){
		 
			idx= '<?=$idx?>';
			slug = '<?=$slug?>';
			processData(Item, true)
	});

</script>

</body>
</html>