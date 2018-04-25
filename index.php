<?php

	$api_controller = ($_GET['dev'] == "true") ? "app/api-controller/controller.dev.php" : "app/api-controller/controller.php";
	$is_admin       = ($_GET['admin'] == "adpQS1k6R") ? "&admin=adpQS1k6R" : "/#top";
	$show_admin     = ($_GET['admin'] == "adpQS1k6R") ? "show-admin-data" : "";

	require($api_controller);

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
<section id="inventario">
	<script id="listing-template" type="text/x-handlebars-template">
		<p>{{ id }}</p>
		<p>{{ color_e }}</p>
		<p>{{ color_i }}</p>
	</script>
	<div class="container invfeed">
			
			<?php
					$j=0;
					foreach($vehiculos as $vehiculo):
						//var_dump($vehiculo);
						 echo '<!--Auto '.$j.'-->';
			?>
					
					<!-- ** START ITEM CARD **  -->
					<div class="card invcard" id="itemid-<?=$vehiculo['id']?>" style="margin:2em 0;">
						<div class="row">

							<!-- Item Description and Thumb -->
							<div class="col-sm-6 col-md-4">
								<div class="itemdesc--modelname">
									<h4>
										<?=$vehiculo['nombre_modelo']?>&nbsp;-&nbsp;
										<?=$vehiculo['stock_id']?>
										<span>&nbsp;&nbsp;<?=$vehiculo['year']?></span>
									</h4>
									
								</div>
								<div class="invcard--thumb">
									<img src="http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/pics<?=$vehiculo["id"]?>/<?=$vehiculo['galleries'][0]?>" width="100%" />
								</div>
								<div class="itemdesc--color">
									<ul class="list-group list-group-flush">
											<li class="list-group-item">
												<span><strong>Color: </strong>&nbsp;&nbsp;<?=$vehiculo['color_e']?></span>
											</li>
											<li class="list-group-item">
												<span><strong>Interiores: </strong>&nbsp;&nbsp;<?=$vehiculo['color_i']?></span>
											</li>
									</ul>
								</div>
							</div>

							<!-- Item Details -->
							<div class="col-sm-6 col-md-5">
								<div class="itemdesc--details">
										<h5>
												<?php if($vehiculo['engine'] !== ''): ?>
														Motor <?=strtoupper($vehiculo['engine'])?> &nbsp;/&nbsp;
												<?php endif; ?>

												<?php if($vehiculo['horse_power'] !== ''): ?>
														<?=strtoupper($vehiculo['horse_power'])?>HP de Potencia
												<?php endif; ?>
												<br />

												<?php
														$transtype = $vehiculo['trans_name'];
														$transtype = str_replace("VEL", "velocidades", $transtype);
												?>
												<?=$transtype?>
										</h5>

										<div class="viewmore" style="display:none">
											<span class="viewmore--text">&nbsp;</span>
										</div>

									<div class="featurelist">
										<ul class="list-group list-group-flush">
												<?php
														// $arr_features = $vehiculo['features'];
														// $feature_limit = array_slice($arr_features, 0, 5);

														$vehiculo["body"] = str_replace(array("\n", "\r"), '', $vehiculo["body"]);
														$destacados = explode(",",$vehiculo["body"]);
														$feature_limit = array_slice($destacados, 0, 7);

														foreach($feature_limit as $feature):

															$pattern = "/\&lt;\/p&gt;/";
															$feature = preg_replace($pattern, "", $feature);?>

															<li class="list-group-item">
																<span class="featurelist--item"><?=ucfirst(ltrim($feature))?></span>
															</li>
												<?php endforeach;?>
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
										<?=$vehiculo['price_sale']?>
									</h3>
									<span style="color:#666; font-size:11px;">*Consulte Disponibilidad</span>									
								</div>

								<!-- CTA's -->
								<div class="itemdesc--ctas">

									<!-- Interesa Form Button -->
									<div 
											class="meinteresa btn btn-primary waves-effect waves-light" 
											data-descprefill="<?=$vehiculo['nombre_marca']?> <?=$vehiculo['nombre_modelo']?> - <?=$vehiculo['stock_id']?> <?=$vehiculo['year']?>"
											data-toggle="modal"
											data-target="#itemContactForm"
									>
										Me Interesa
									</div>
									

									<!-- Boton Galeria Fotos -->
									<div class="itemgallery-<?=$j?> gallery--btn btn btn-dark waves-effect waves-light">
										Ver galería
									</div>

									<!-- Ver Detalle Button -->
									<a href="<?=doUrl($vehiculo['idx'], $vehiculo['slug'])?>" class="btn btn-primary waves-effect waves-light">
											Ver Detalle
									</a>

								</div>

								<!-- Promo Area -->
								<div></div>

							</div>

						</div>
					</div>
					<!-- ** END ITEM CARD **  -->
						
			<?php
					$j=$j+1;
					endforeach;
			?>

	</div>

	<!-- status elements -->
	<div class="scroller-status">
		<div class="infinite-scroll-request loader-ellips">
			...
		</div>
		<p class="infinite-scroll-last">End of content</p>
		<p class="infinite-scroll-error">No more pages to load</p>
	</div>

	<!-- pagination has path -->
	<p class="pagination">
		<a class="pagination__next" href="index.php?p=2">Next page</a>
	</p>
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


<!-- [[ Footer ]] -->
<footer class="container bg-footer" id="footer">
	<script id="footer-template" type="text/x-handlebars-template">
		<div class="spacer-20"></div>
		<div class="container-1200 center-content flex flex-wrap">

			<!-- Address -->
			<div class="i-b lg4 md4 sm6 ph12 p_75">
				<p class="f-white f1">
					<a href="" style="f-white f1">Aviso de privacidad</a>
					<br><br><strong>{{ agencia }}</strong>
					<br>
					{{ dir_l1 }}<br />
					{{ dir_l2 }}<br />
					{{ dir_l3 }}<br />
					<br>
					<strong class="f1">Teléfono<br></strong>{{ telefono_track }}
				</p>
			</div>

			<!--Social Links-->
			<div class="i-b lg4 md4 sm6 ph12 p_75">
				&nbsp;
			</div>

			<!--Redes sociales-->
			<div class="i-b lg4 md4 sm6 ph12 p_5">
				<div class="flex flex-wrap">
					<div class="center center-content">
						<a href="{{ facebook }}" target="_blank" class="i-b p_5">
							<div class="btn-media">
								<i class="glyph-icon flaticon-facebook-logo"></i>
								{{ facebook }}
							</div>
						</a>
						<a href="{{ twitter }}" target="_blank" class="i-b p_5">
							<div class="btn-media">
								<i class="glyph-icon flaticon-twitter-logo-silhouette"></i>
								{{ twitter }}
							</div>
						</a>
						<a href="{{ youtube }}" target="_blank" class="i-b p_5">
							<div class="btn-media">
								<i class="glyph-icon flaticon-youtube"></i>
								{{ youtube }}
							</div>
						</a>
						<a href="{{ instagram }}" target="_blank" class="i-b p_5">
							<div class="btn-media">
								<i class="glyph-icon flaticon-instagram-logo"></i>
								{{ instagram }}
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="ph12 bg-gray-audi">
			<div class="container-1200 center-content flex flex-wrap">
				<div class="i-b ph12 sm12 md8 lg8 center-content">
					<p class="f-white center f10"><br><br>CRM automotriz es una herramienta de <a href="http://adpunto.mx/contact/" target="_blank" class="f10">adpunto.mx</a> ® 2017 Todos los derechos reservados.&nbsp; <strong class="f10">Teléfono</strong> &nbsp;(55) 5536 6156</p>
				</div>
			</div>
			<div class="spacer-20"></div>
		</div>
	</script>
</footer>



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


<script>
	//Initialization
	$(document).ready(function () {
		// AppInit();
		

		Waves.attach('.btn, .btn-floating', ['waves-light']);
		Waves.attach('.view .mask', ['waves-light']);
		Waves.attach('.waves-light', ['waves-light']);
		Waves.attach('.navbar-nav a, .nav-icons li a, .navbar form, .nav-tabs .nav-item', ['waves-light']);
		Waves.attach('.navbar-brand', ['waves-light']);
		Waves.attach('.pager li a', ['waves-light']);
		Waves.attach('.pagination .page-item .page-link', ['waves-effect']);
		Waves.init();//Preloading script
	});

		$('.invfeed').infiniteScroll({
				// options
				path: '.pagination__next',
				append: '.invcard',
				status: '.scroller-status',
				hideNav: '.pagination',
			});





</script>
            


<!-- Checkbox -->
<!-- <script src="assets/js/jquery-ui.js"></script>
<script>
		$( "#fecha_radioset" ).buttonset();
		$( "#hora_radioset" ).buttonset();
</script> -->

<!-- <script>
		$('.viewmore').on('click', function(){
				$('.feature-list, .viewmore').toggleClass('active');
		});
</script> -->


<!-- Custom scripts -->
<script src="assets/js/app.js"></script>

<!-- Fancybox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script>
		<?php
		$j=0;
		foreach($vehiculos as $vehiculo):
		?>
				$(".itemgallery-<?=$j?>, #itemid-<?=$vehiculo['id']?> .invcard--thumb").click(function(){
					$.fancybox.open([
						<?php foreach($vehiculo['galleries_alt'] as $image):  ?>
						{
							src : 'http://www.adpdev.com/adp/mx/seminuevos/uploads/listings/pics<?=$vehiculo["id"]?>/<?=$image?>',
							opts : {
								closeClickOutside : false
							}
						},
						<?php	endforeach;?>

					], {
					loop : false,
					infobar: true
					});
				});

				// // iPhone interiors hover fix
				// $('#flexiselDemo<?=$j?> div:nth-child(2)').on('click', function(){
				// 	$(this).toggleClass('int-closeup');
				// });

		<?php
		$j=$j+1;
		endforeach;
		?>
</script>



<!-- Script pop-up -->
<script>
		$(".meinteresa").click(function(){
				var prefill_text = $(this).data("descprefill");
				$("#mamoveranio").html(prefill_text);
				$("#itemContactForm #comentarios").html("Estoy interesado en el " + prefill_text);
		});
</script>



	<!-- F O R M U L A R I O S  A D P U N T O -->



	<?php //include_once("includes/analyticstracking.php") ?>

	<!-- Tracker Adpunto (Requiere jQuery 1+) -->
	<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/vendor/cookie.js"></script>
	<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-commons.v1.js"></script>
	<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-tracker.v1.js"></script>

	<!-- API Buzón Adpunto -->
	<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-buzon.v1.js"></script>

	<!-- Script personalizado Buzón -->
	<script src="assets/js/custom-form-buzon.js?v=1.01"></script>

	<!-- / F O R M U L A R I O S  A D P U N T O -->

</body>
</html>
