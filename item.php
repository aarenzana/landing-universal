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

	<script>
		idx = '<?=$idx?>';
		slug = '<?=$slug?>';
		slug = slug.split("?");
		slug = slug[0];
	</script>

</head>

<body>

<?php getCustomModule('header', $id_cartas) ?>

<!-- [[ Loader ]]  -->
<section id="loader" style="display:none; height:60vh; padding:8em;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Loading ...</h2>
			</div>
		</div>
	</div>
</section>

<!-- [[ Item Details ]]  -->
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

<!-- [[ Footer ]] -->
<?php getCustomModule('footer', $id_cartas) ?>

<!-- [[ Scripts ]] -->
<?php include('app/scripts.php'); ?>



<script>
		$(document).ready(function(){
				appInit(Item);
				// processData(Item);
		});
</script>

</body>
</html>