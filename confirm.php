<?php 
include_once dirname ( '__FILE__' ) . '/./bz.php';


	$productname = $_POST['productname'];
	$productid = $_POST['productid'];
	$name = $_POST['address_name'];
	$mobile = $_POST['tel'];
	$province = $_POST['province'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$address = $_POST['address'];
	$flag = $_POST['status'];

	$currentorderid = $_POST['orderId'];
	
	$bz = new bz();
	
	$result = false;
	if($currentorderid != null && $currentorderid>0){
		if($bz->updateOrder($currentorderid, $productid, $name, $mobile, $province, $city, $area, $address, $flag))
			$result = true;	
	}else{
		$orderid = $bz->insertorder($productid, $name, $mobile, $province, $city, $area, $address, $flag);
		if($orderid>0)
			$result = true;
	}
?>
<html lang="zh-cn"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>盛世玫瑰.钛金刀登录中国市场，斥资免费送，每人限领一套！</title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="shortcut icon" href="http://cache.sy.pinzs.com/get_img.php?url=http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/images/wechat.jpg">
	<link href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://apps.bdimg.com/libs/animate.css/3.1.0/animate.min.css" rel="stylesheet">
	<link href="http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/css/common.css" rel="stylesheet">
	<link href="http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/css/app.css" rel="stylesheet">
	<script src="http://apps.bdimg.com/libs/require.js/2.1.11/require.min.js"></script>
	<script src="http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/js/config.js"></script>
	<script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
		}
	}
	</script>
	
	<script>
	function _removeHTMLTag(str) {
		if(typeof str == 'string'){
			str = str.replace(/<script[^>]*?>[\s\S]*?<\/script>/g,'');
			str = str.replace(/<style[^>]*?>[\s\S]*?<\/style>/g,'');
			str = str.replace(/<\/?[^>]*>/g,'');
			str = str.replace(/\s+/g,'');
			str = str.replace(/&nbsp;/ig,'');
		}
		return str;
	}
	</script>
	<style type="text/css">
		#form1 p img{
			width: 100%!important;
			height: auto!important;
		}
		label.label_sel{
		   background: #428bca!important;
		   color: #fff!important;
		}
	</style>
</head>
<body style="zoom: 1;">
<div class="container container-fill">
<link href="http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
    .intors img{ max-width: 100%;}
    .tips{margin-left: auto;margin-right: auto;box-sizing: border-box;border: 1px solid #428bca;padding: 12px}
    .tips legend{border-bottom: 0;width: auto;margin-bottom: 0px}
    .color-r{color:#FEA233}
    .color-b{color: #428bca}
    .explain {margin-top:5px;text-indent: 10px }
    #change .btn{font-size: 16px;}
</style>

<div class="container">
	
			<div class="lead_box" id="success_box">
			<?php if($result){
				echo "<fieldset class=\"tips\" id=\"value\">";
				echo "<legend class=\"color-r\">恭喜您，领取成功！</legend>";
				echo "<p style=\"font-size: 16px;color: red\">请确认以下信息：</p>";
				echo "<p><span class=\"color-b\">款式</span>：".$productname."</p>";
				echo "<p><span class=\"color-b\">收货人</span>：".$name."</p>";
 				echo "<p><span class=\"color-b\">电话</span>：".$mobile."</p>";
				echo "<p><span class=\"color-b\">地址</span>：".$bz->getfulladdress($province, $city, $area, $address)."</p>"; 
				echo "<p style=\"color: red\">恭喜：您已申请成功，公司将会尽快发货，请耐心等待！</p>";  
				echo "</fieldset>";
				echo "<p class=\"color-b explain\" id=\"status\"></p>";
				echo "<div id=\"change\">";
				echo "<a href=\"./index.php\" class=\"btn btn-success btn-block\">确认无误，返回首页</a>";
				echo "<a href=\"./address.php?o=".$orderid."\" class=\"btn btn-danger btn-block\">有问题，重新填写</a>";
				echo "</div>";				
			}else{
				echo "<div id=\"change\">";
				echo "<legend class=\"color-r\">提交信息出错</legend>";
				echo "<a href=\"./address.php\" class=\"btn btn-danger btn-block\">有问题，重新填写</a>";
				echo "</div>";
			}?>
				
	    </div>
	    
		
		</div></div></body></html>