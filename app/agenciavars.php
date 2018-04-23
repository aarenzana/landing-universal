<?php
    if($_POST['id_cartas']!="")
      $id_cartas = $_POST['id_cartas'];
    else
      $id_cartas = $_GET['id_cartas'];

    /*  DB CONNECTION  */
    $hostname="localhost";
    $database="adpdev_cartas";
    $user="adpdev_cadp13";
    $pass="crm09cartasadp";

    $link=mysql_connect($hostname,$user,$pass);
    mysql_set_charset("utf8",$link);
    mysql_select_db($database,$link) OR die ("No es posible conectar con la base de datos.");


    /*  DATASET  */
    function JsonResponse($dataset){
      	header('Content-Type: application/json');
      	header('Access-Control-Allow-Origin: *');
      	echo json_encode($dataset);
      	exit();
    }

    // $data = [];
    $sql = "SELECT * FROM agencias WHERE id = ".$id_cartas;
    $result=mysql_query ($sql) or die (mysql_error());

    $data = mysql_fetch_assoc($result);

    // while ($row = mysql_fetch_assoc($result)) {
    //     $data[] = $row;
    // }

    JsonResponse(["status"=>"ok","info"=>"Consulta hecha satisfactoriamente","dataset"=>$data]);

?>
