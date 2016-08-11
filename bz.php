<?php
include_once dirname ( '__FILE__' ) . '/./db.php';
class bz{
	private $dbhelper;
	
	public function __construct() {
		$this->dbhelper = new db();
	}
	public function getJSONCitys($provinceid){
		$result = $this->dbhelper->getcitys($provinceid);
		$provincecitys = array();
		$citys = array();
		while($tempcity = mysql_fetch_array($result)){
			$currcity = array();
			$currcity['id'] = $tempcity['id'];
			$currcity['cityID'] = $tempcity['cityID'];
			$currcity['city'] = $tempcity['city'];
			$currcity['father'] = $tempcity['father'];
			
			$citys[] = $currcity;
		}
		
		$provincecitys['sign'] = 'ok';
		$provincecitys['body'] = $citys;
		
		return json_encode($provincecitys);
	}
	
	public function getJSONArea($cityid){
		$result = $this->dbhelper->getareas($cityid);
		$resultareas = array();
		$areas = array();
		while($temparea = mysql_fetch_array($result)){
			$currarea = array();
			$currarea['id'] = $temparea['id'];
			$currarea['areaID'] = $temparea['areaID'];
			$currarea['area'] = $temparea['area'];
			$currarea['father'] = $temparea['father'];
			
			$areas[] = $currarea;
		}
		
		$resultareas['sign'] = 'ok';
		$resultareas['body'] = $areas;
		
		return json_encode($resultareas);
	}
}