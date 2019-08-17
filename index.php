<?php

	$api_controller = ($_GET['dev'] == "true") ? "app/api-controller/controller.dev.php" : "app/api-controller/controller.php";
	$is_admin       = ($_GET['admin'] == "adpQS1k6R") ? "&admin=adpQS1k6R" : "/#top";
	$show_admin     = ($_GET['admin'] == "adpQS1k6R") ? "show-admin-data" : "";

	include($api_controller);

	// $meta_title = "Porsche Centre San Ángel";
	// $meta_desc  = "Agencia Porsche Centre San Ángel, Ciudad de México. Insurgentes Sur 2336, Álvaro Obregón, Chimalistac, 01070 CDMX.  Teléfono: (55) 5662 0838";
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

<?php getCustomModule('header', $id_cartas) ?>

<!-- [[ Default Banner ]] -->
<section id="herobanner" class="container-fluid" style="background:#e2e2e2; min-height:400px">
		<div class="container" style="padding-top:10em">
			<h2 class="display-5">Banner Callout Text</h2>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			<a class="btn btn-primary waves-effect waves-light">CTA with waves</a>
		</div>
</section>


<?php //getCustomModule('testmodule', $id_cartas) ?>

<!-- [[ Quicklink Section Cards ]] -->
<section id="quicklinkcards" style="margin:3em 0; display:none">
	<div class="container">
		<div class="row">
			<!--Card group-->
			<div class="card-deck">

				<!--Card-->
				<div class="card mb-4 col-xs-12">

					<!--Card image-->
					<div class="view overlay">
							<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
							<a href="#!">
									<div class="mask rgba-white-slight"></div>
							</a>
					</div>
					<!--Card image-->

					<!--Card content-->
					<div class="card-body">

							<!--Title-->
							<h4 class="card-title">Card title</h4>

							<!--Text-->
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

							<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
							<button type="button" class="btn btn-light-blue btn-md">Read more</button>
					</div>
					<!--Card content-->

    		</div>
    		<!--Card-->

				<!--Card-->
				<div class="card mb-4 col-xs-12">

						<!--Card image-->
						<div class="view overlay">
								<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
								<a href="#!">
										<div class="mask rgba-white-slight"></div>
								</a>
						</div>
						<!--Card image-->

						<!--Card content-->
						<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								
								<!-- this is a new comment -->

								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

								<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
								<button type="button" class="btn btn-light-blue btn-md">Read more</button>
						</div>
						<!--Card content-->

				</div>
				<!--Card-->

				<!--Card-->
				<div class="card mb-4 col-xs-12">

						<!--Card image-->
						<div class="view overlay">
								<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
								<a href="#!">
										<div class="mask rgba-white-slight"></div>
								</a>
						</div>
						<!--Card image-->

						<!--Card content-->
						<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>

								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

								<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
								<button type="button" class="btn btn-light-blue btn-md">Read more</button>
						</div>
						<!--Card content-->

				</div>
				<!--Card-->

				<!--Card-->
				<div class="card mb-4 col-xs-12">

						<!--Card image-->
						<div class="view overlay">
								<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
								<a href="#!">
										<div class="mask rgba-white-slight"></div>
								</a>
						</div>
						<!--Card image-->

						<!--Card content-->
						<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>

								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

								<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
								<button type="button" class="btn btn-light-blue btn-md">Read more</button>
						</div>
						<!--Card content-->

				</div>
				<!--Card-->

			</div>
			<!--Card group-->
		</div>
	</div>
</section>



<!-- [[ Model Filter ]]  -->
<section id="modelfilter" style="display:none">
</section>


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


<!-- [[ Item Counter ]]  -->
<section id="itemcounter" style="display:none">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="itemcounter--txt">
					Contamos con <b><?=$autos?></b> autos en nuestro inventario, descubrelos &nbsp;
					<span style="font-size:15px; padding-left:4px;" id="counterinfo"></span>
				</p>
			</div>			
		</div>
	</div>
</section>


<!-- [[ Inventario ]] -->
<section id="inventario" style="display:none">
	<script id="listing-template" type="text/x-handlebars-template">

			<div class="container">
	
					<!-- ** START ITEM CARD **  -->
					<div class="card invcard" id="itemid-{{id}}" style="margin:2em 0;">
						<div class="row">

							<!-- Item Description and Thumb -->
							<div class="col-sm-6 col-md-4">
								<div class="itemdesc--modelname">
									<h4>
										{{model}}&nbsp;-&nbsp;
										{{stock_id}}
										<span>&nbsp;&nbsp;{{year}}</span>
									</h4>
									
								</div>
								<div class="invcard--thumb">
									<img src="http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/{{thumb}}" width="100%" />
								</div>
								<div class="invcard--interior" style="display:none">
									<img src="http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/pics{{id}}/{{interior}}" width="100%"/>
								</div>
								<div class="itemdesc--color">
									<ul class="list-group list-group-flush">
											<li class="list-group-item">
												<span><strong>Color: </strong>&nbsp;&nbsp;{{color_e}}</span>
											</li>
											<li class="list-group-item">
												<span><strong>Interiores: </strong>&nbsp;&nbsp;{{color_i}}</span>
											</li>
									</ul>
								</div>
							</div>

							<!-- Item Details -->
							<div class="col-sm-6 col-md-5">
								<div class="itemdesc--details">
										<h5>
												{{#if engine}}
														Motor {{engine}} &nbsp;/&nbsp;
												{{/if}}
												
												{{#if horse_power}}
														{{horse_power}}HP de Potencia
												{{/if}}
												
												<br />

												{{#if trans_name}}
														{{trans_name}}
												{{/if}}
										</h5>

										<div class="viewmore" style="display:none">
											<span class="viewmore--text">&nbsp;</span>
										</div>

									<div class="featurelist">
										<ul class="list-group list-group-flush">
												<!-- Features go here -->
												{{#each features}}
														{{#if this}}
																<li class="list-group-item">
																		{{this}}
																</li>
														{{/if}}
												{{/each}}
										</ul>
									</div>								
								</div>
							</div>

							<!-- Price / Item CTA's / Gallery -->
							<div class="col-sm-12 col-md-3 text-center">

								<!-- Price -->
								<div class="itemdesc--price">
									<h3 class="desde-precio">
										<span style="font-size:15px;">Desde&nbsp;</span> 
										{{price_sale}}
									</h3>
									<span style="color:#666; font-size:11px;">*Consulte Disponibilidad</span>									
								</div>

								<!-- CTA's -->
								<div class="itemdesc--ctas">

									<!-- Interesa Form Button -->
									<div 
											class="meinteresa btn btn-primary waves-effect waves-light" 
											data-descprefill="{{make}} {{model}} - {{stock_id}} {{year}}"
											data-toggle="modal"
											data-target="#itemContactForm"
									>
										Me Interesa
									</div>
									

									<!-- Boton Galeria Fotos -->
									<div class="itemgallery-{{i}} gallery--btn btn btn-dark waves-effect waves-light" data-gallery={{i}}>
										Ver galería
									</div>

									<!-- Ver Detalle Button -->
									<a href="javascript:;" class="btn btn-primary waves-effect waves-light" onclick="doItemUrl('{{idx}}', '{{slug}}')">
											Ver Detalle
									</a>

								</div>

								<!-- Promo Area -->
								<div></div>

							</div>

						</div>
					</div>
					<!-- ** END ITEM CARD **  -->
						
			</div>
	</script>

	<!-- status elements -->
	<!-- <div class="scroller-status">
		<div class="infinite-scroll-request loader-ellips">
			...
		</div>
		<p class="infinite-scroll-last">End of content</p>
		<p class="infinite-scroll-error">No more pages to load</p>
	</div> -->

	<!-- pagination has path -->
	<!-- <p class="pagination">
		<a class="pagination__next" href="index.php?p=2">Next page</a>
	</p> -->
</section>


<!-- [[ Item Interest Form ]] -->
<div class="modal fade" id="itemContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width:600px !important">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold">Interesado en el <span id="mamoveranio"></span></h4>				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form id="contact-nuevo" class="contact contact-nuevo">
					
				<!-- Modal Body -->
				<div class="modal-body mx-3">				
					<div class="col-sm-12">
						Llene el siguiente formulario y nos pondremos en contacto con usted.
					</div>
					
					<div class="row">
						<div class="col-sm-6">
							<div class="md-form mb-5">
								<input type="text" id="nombre" class="form-control validate" required>
								<label data-error="error" data-success="" for="nombre">Nombre*</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="md-form mb-5">
								<input type="text" id="apellidos" class="form-control validate" required>
								<label data-error="error" data-success="" for="apellidos">Apellidos*</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="md-form mb-5">
								<input type="email" id="email" class="form-control validate">
								<label data-error="error" data-success="" for="email">E-mail</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="md-form mb-5">
								<input type="tel" id="telefono" class="form-control validate required">
								<label data-error="error" data-success="" for="telefono">Teléfono</label>
							</div>
						</div>
					</div>

					<div class="md-form">
						<textarea type="text" id="comentarios" class="md-textarea form-control" rows="4">Interesado en este modelo</textarea>
						
						<label data-error="error" data-success="" for="comentarios">Tu comentario</label>
					</div>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer d-flex justify-content-center">
					<button name="submit" type="submit" id="boton-enviar" class="btn btn-unique" data-submit="...Enviando">Solicitar Información</button>
				</div>
			</form>

		</div>
	</div>
</div>

<?php include('default/footer.tmpl.php'); ?>



				<!-- Fecha y horario sugeridos -->
				<!-- <p class="fs-13">Fecha sugerida:</p>
				<div id="fecha_radioset">
					<input type="radio" id="radio1" name="fecha" value="lo más pronto posible"><label for="radio1" data-parsley-required class="f_75">LO MÁS PRONTO POSIBLE</label>
					<input type="radio" id="radio2" name="fecha" value="la próxima semana" checked="checked"><label for="radio2" class="f_75">LA PRÓXIMA SEMANA</label>
					<input type="radio" id="radio3" name="fecha" value="en 15 días"><label for="radio3" class="f_75">EN 15 DÍAS</label>
				</div>
				<br><br />

				<p class="fs-13">Horario sugerido</p>
				<div id="hora_radioset">
					<input type="radio" id="radio4" name="hora" value="por la mañana"><label for="radio4" data-parsley-required>MAÑANA</label>
					<input type="radio" id="radio5" name="hora" value="a medio día" checked="checked"><label for="radio5">MEDIO DÍA</label>
					<input type="radio" id="radio6" name="hora" value="en la tarde"><label for="radio6">TARDE</label>
				</div> -->
				<!-- / Fecha y horario sugeridos -->


				<!-- <div class="spacer-10"></div>
				<div class="ui checkbox">
					<input id="id_newsletterEstado" type="checkbox" name="example">
					<label >Recibir promociones especiales en mi E-mail</label>
				</div>
				<br />
					Al dar clic en Agendar prueba de manejo aceptas nuestras <a href="<?=$Agencia['url_privacidad']?>" target="_blank" class="f-blue">políticas de privacidad</a>
				<div class="spacer-10"></div><br />
				<fieldset class="p_25">
					<button  name="submit" type="submit" id="boton-enviar" data-submit="...Enviando">Solicitar información</button>
				</fieldset>
			</form>
		</div>
	</div>
</section> -->




<!-- [[ Scripts ]] -->

<?php include('app/scripts.php'); ?>




<!-- [[ Page Specific Scripts ]] -->
<!-- Fancybox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script>
		$(document).on("click", ".gallery--btn", function(){
				var i = $(this).attr('data-gallery');
				var item = Inventario.json[i];
				var galleries = Inventario.json[i].galleries_full;
				var gals_root = 'http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/pics';
				// console.log(i);

				$.fancybox.open([
								{src : gals_root+item.id+'/'+galleries[0]},
								{src : gals_root+item.id+'/'+galleries[1]},
								{src : gals_root+item.id+'/'+galleries[2]},
								{src : gals_root+item.id+'/'+galleries[3]},
								{src : gals_root+item.id+'/'+galleries[4]},
						], {
								loop : false,
								infobar: true
				});
		});
</script>


<script>
		$(document).ready(function(){
				appInit(Inventario);
		});
</script>

</body>
</html>
