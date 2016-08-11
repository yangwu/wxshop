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
}