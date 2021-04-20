<?php 

require "logicBackend.php";

$idTransaksi = $_GET["idTransaksi"];

var_dump($idTransaksi);

$dataTransaksi = queryingProcess("SELECT * FROM detailtransaksi WHERE IDTRANSAKSI = '$idTransaksi' ");

//var_dump($dataTransaksi);

?>