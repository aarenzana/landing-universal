<?php
		// Obtiene la lista de vehículos desde la api del inventario adpunto
		if(!isset($_GET['p'])){
			$_GET['p'] = 1;
		}

		// Filters
		$filter_model = (isset($_GET['smodel'])) ? "&smodel=".$_GET['smodel'] : "";
		$filter_year  = (isset($_GET['myear'])) ? "&myear=".$_GET['myear'] : "";
		$filter_version  = (isset($_GET['version'])) ? "&version=".$_GET['version'] : "";
		$filters = $filter_model.$filter_year.$filter_version;

		$lista_api = "http://adpdev.com/adp/mx/seminuevos/api.php?action=list-new-special-vehicles-agency-page&id_dealer=".$agency_id."&p=".$_GET['p'].$filters."&sort=year&order=asc";
		
		$lista_raw = file_get_contents($lista_api);
		$lista = json_decode($lista_raw,true);
		$vehiculos =$lista["dataset"];

		function viewJson($lista_api){
			header('Location: '.$lista_api);	
		}
		
		viewJson($lista_api);

		// conteos api
		$conteos_api = "http://adpdev.com/adp/mx/seminuevos/api.php?action=count-new-special-vehicles-agency&id_dealer=".$agency_id.$filters;


		$conteos_raw = file_get_contents($conteos_api);
		$conteos = json_decode($conteos_raw,true);
		$conteos = $conteos["dataset"];
		$paginas = $conteos["total_paginas"];
		$autos   = $conteos["total_vehiculos"];

		// echo '<script type="text/javascript">alert("You are viewing a Development Version of this page!");</script>';
		
		// $domain = $_SERVER['HTTP_HOST'];
		// if (strpos($domain, 'porsche-sanangel') !== false){
		// 	header("Location: http://adpdev.com/landing/porsche-optima/?id_cartas=28");
		// } 
		// else if(strpos($domain, 'porsche-santafe') !== false){
		// 	header("Location: http://adpdev.com/landing/porsche-optima/?id_cartas=31");
		// }
?>