<?php
include_once dirname ( '__FILE__' ) . '/./bz.php';
$command = $_GET['a'];
$id = $_GET['id'];

$bz = new bz();
if(strcmp($command,"get_city") == 0 ){
	echo $bz->getJSONCitys($id);
}else if(strcmp($command,"get_area") == 0){
	echo $bz->getJSONArea($id);		
}