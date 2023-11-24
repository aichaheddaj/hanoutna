<?php
include_once("bd.php");
$path=$_SERVER["REQUEST_URI"];
header("Content-type: application/json");


$p=getProducts();
$p=json_encode($p);
echo $p;
