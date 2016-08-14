<?php
include_once dirname ( '__FILE__' ) . '/./bz.php';
header ( "Content-Type: text/html;charset=utf-8" );
$bz = new bz();
$orders = $bz->getOrders();
$count = count($orders);
for($k=0;$k<$count;$k++){
	$temporder = $orders[$k];
	echo "<br/>".$temporder['createtime']."   ".$temporder['name']."   ".$temporder['mobile']."    "
			.$bz->getfulladdress($temporder['provinceid'],$temporder['cityid'],$temporder['areaid'], $temporder['address']);
}