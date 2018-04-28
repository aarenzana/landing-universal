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

		// $('.invfeed').infiniteScroll({
		// 		// options
		// 		path: '.pagination__next',
		// 		append: '.invcard',
		// 		status: '.scroller-status',
		// 		hideNav: '.pagination',
		// 	});

</script>

<!-- Form Modal and prefill -->
<script>
		$(document).on("click", ".meinteresa", function(){
				var prefill_text = $(this).data("descprefill");
				$("#mamoveranio").html(prefill_text);
				$("#itemContactForm #comentarios").html("Estoy interesado en el " + prefill_text);
		});
</script>

<!-- Landing App Scripts -->
<script src="/landing-v2/assets/js/app.js"></script>


<!-- F O R M U L A R I O S  A D P U N T O -->

<?php //include_once("includes/analyticstracking.php") ?>

<!-- Tracker Adpunto (Requiere jQuery 1+) -->
<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/vendor/cookie.js"></script>
<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-commons.v1.js"></script>
<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-tracker.v1.js"></script>

<!-- API Buzón Adpunto -->
<script src="http://adpdev.com/adp/mx/seguimiento/api-assets/js/adpunto-buzon.v1.js"></script>

<!-- Script personalizado Buzón -->
<script src="/landing-v2/assets/js/custom-form-buzon.js?v=1.01"></script>

<!-- / F O R M U L A R I O S  A D P U N T O -->