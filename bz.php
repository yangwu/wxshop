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
	public function insertorder($productid,$name,$mobile,$province,$city,$area,$address,$flag) {
		return $this->dbhelper->insertorder($productid, $name, $mobile, $province, $city, $area, $address, $flag);
	}
	
	public function updateOrder($orderid,$productid,$name,$mobile,$province,$city,$area,$address,$flag){
		return $this->dbhelper->updateorder($orderid, $productid, $name, $mobile, $province, $city, $area, $address, $flag);
	}
	public function getfulladdress($provinceid,$cityid,$areaid,$address) {
		$presult = $this->dbhelper->getProvinceName($provinceid);
		if($tempp = mysql_fetch_array($presult)){
			$provincename = $tempp['province'];
		}
		
		$cresult = $this->dbhelper->getCityName($cityid);
		if($tempc = mysql_fetch_array($cresult)){
			$cityname = $tempc['city'];
		}
		
		$aresult = $this->dbhelper->getAreaName($areaid);
		if($tempa = mysql_fetch_array($aresult)){
			$areaname = $tempa['area'];
		}
		
		return $provincename."&nbsp;&nbsp;".$cityname."&nbsp;&nbsp;".$areaname."&nbsp;&nbsp;".$address;
	}
	
	public function getOrderInfo($orderid) {
		$result = $this->dbhelper->getOrderInfo($orderid);
		if($temporder = mysql_fetch_array($result)){
			return $temporder;
		}
		return null;
	}
	
	public function getOrders(){
		$orderslist = array();
		$orders = $this->dbhelper->getorders();
		while($order = mysql_fetch_array($orders)){
			$orderslist[] = $order;
		}
		return $orderslist;
	}
	
}