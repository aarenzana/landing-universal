<!-- [[ Default Site Header ]] -->
<header id="header">
	<script id="header-template" type="text/x-handlebars-template">
		<!-- Contact Fixed Bar Mobile -->
		<div id="fixed-contact-area" class="d-block d-sm-none">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="tel:{{ telefono_track }}">
							<p id="phone-hours-mob">
								<i class="flaticon-phone-receiver"></i>&nbsp;
								<strong>Marque ahora {{ telefono_track }}</strong>
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
						<a class="navbar-brand" href="index.php">
							<img src="http://adpdev.com/adp/cartas/logos/{{ logo }}" alt="{{ logo }}" />
							<p>{{ agencia }}</p>
						</a>
						
						<a href="tel:{{ telefono_track }}">{{ telefono_track }}</a>

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
	</script>
</header>


<!-- [[ Default Banner ]] -->
<section id="herobanner" class="container-fluid" style="background:#e2e2e2; min-height:400px">
		<div class="container" style="padding-top:10em">
			<h2 class="display-5">Banner Callout Text</h2>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			<a class="btn btn-primary waves-effect waves-light">CTA with waves</a>
		</div>
</section>