<?php
		// Obtiene la lista de vehículos desde la api del inventario adpunto
		if(!isset($_GET['p'])){
			$_GET['p'] = 1;
		}

		// $id_seminuevos  = "36";    // need to make these dynamic
		// $id_cartas      = "28";    // need to make these dynamic
		$root = './';

		require('./app/functions.php');




		// Filters
		$filter_model = (isset($_GET['smodel'])) ? "&smodel=".$_GET['smodel'] : "";
		$filter_year  = (isset($_GET['myear'])) ? "&myear=".$_GET['myear'] : "";
		$filter_version  = (isset($_GET['version'])) ? "&version=".$_GET['version'] : "";
		$filters = $filter_model.$filter_year.$filter_version;


		// Inventory
		$lista_api = "http://adpdev.com/adp/mx/seminuevos/api.php?action=list-new-special-vehicles-agency-page&id_dealer=".$id_seminuevos."&p=".$_GET['p'].$filters."&sort=year&order=asc";
		// var_dump($lista_api);die();
		$lista_raw = file_get_contents($lista_api);
		$lista = json_decode($lista_raw,true);
		$vehiculos =$lista["dataset"];
		// var_dump($vehiculos);


		// Dealer Location Info
		$agenciavars_api = "http://adpdev.com/landing-v2/app/agenciavars.php?id_cartas=".$id_cartas;
		$agenciavars_raw = file_get_contents($agenciavars_api);
		$agenciavars = json_decode($agenciavars_raw, true);
		$Agencia = $agenciavars["dataset"];
		// var_dump($Agencia);
		// //die();
		

		// conteos api
		$conteos_api = "http://adpdev.com/adp/mx/seminuevos/api.php?action=count-new-special-vehicles-agency&id_dealer=".$id_seminuevos.$filters;
		$conteos_raw = file_get_contents($conteos_api);
		$conteos = json_decode($conteos_raw,true);
		$conteos = $conteos["dataset"];
		$paginas = $conteos["total_paginas"];
		$autos   = $conteos["total_vehiculos"];


		// Item Detail by ID
		$item_api = "http://adpdev.com/adp/mx/seminuevos/api.php?action=get-listing-by-id&idx=".$idx."&slug=".$slug."&location=".$id_seminuevos;
		// var_dump($item_api);die();
		$item_raw = file_get_contents($item_api);
		$item = json_decode($item_raw,true);
		$itemdetail = $item["dataset"];




		// Functions
		function doUrl($idx, $slug) {
				return 'item.php/' . $idx . '/' . $slug;
		}

?>