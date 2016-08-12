<?php
class db{
	private $db;
	public function __construct() {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpsd = "yangwu";
		$dbname = "wxshop";
	
		$db = mysql_connect ( $dbhost, $dbuser, $dbpsd, true );
		if (! $db) {
			echo "connection failed";
		} else {
			mysql_select_db ( $dbname );
			mysql_query ( "set names 'UTF8'" );
		}
	}
	function __destruct() {
		if (! empty ( $db ))
			mysql_close ( $db );
	}
	
	function getcitys($provinceid){
		$getcitysql = "select * from wx_city where father = ".$provinceid." order by cityID";
		return mysql_query($getcitysql);
	}
	
	function getareas($cityid){
		$getareasql = "select * from wx_area where father = ".$cityid." order by areaID";
		return mysql_query($getareasql);
	}
	
	function insertorder($productid,$name,$mobile,$province,$city,$area,$address,$flag) {
		$insertorder = 'insert into wx_order(productid,name,mobile,provinceid,cityid,areaid,address,flag,createtime) values('.$productid.',"'.mysql_real_escape_string($name).'","'
				.mysql_real_escape_string($mobile).'","'.mysql_real_escape_string($province).'","'.mysql_real_escape_string($city).'","'.mysql_real_escape_string($area)
				.'","'.mysql_real_escape_string($address).'",'.$flag.',  "'.date ( 'Ymd H:i:s' ).'")';
		$result = mysql_query($insertorder);
		return mysql_insert_id ();
	}
	
	function updateorder($orderid,$productid,$name,$mobile,$province,$city,$area,$address,$flag){
		$updatesql = 'update wx_order set productid = '.$productid.', name= "'.$name.'", mobile="'.$mobile.'", provinceid="'.$province.'", cityid="'.$city.'", areaid="'
						.$area.'", address="'.$address.'",flag='.$flag.',createtime="'.date ( 'Ymd H:i:s' ).'"  where id='.$orderid;
		return mysql_query($updatesql);
	}
	
	function getProvinceName($provinceid){
		$psql = 'select * from wx_province where provinceID = "'.$provinceid.'"';
		return mysql_query($psql);
	}
	
	function getCityName($cityid){
		$csql = 'select * from wx_city where cityID = "'.$cityid.'"';
		return mysql_query($csql);
	}
	
	function getAreaName($areaid){
		$asql = 'select * from wx_area where areaID = "'.$areaid.'"';
		return  mysql_query($asql);
	}
	
	function getOrderInfo($orderid) {
		$oinfosql = 'select * from wx_order where id = '.$orderid;
		return mysql_query($oinfosql);
	}
}