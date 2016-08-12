<?php 
include_once dirname ( '__FILE__' ) . '/./bz.php';

$bz = new bz();
$orderid = $_GET['o'];
if(isset($orderid)){
	$orderinfo = $bz->getOrderInfo($orderid); 
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>盛世玫瑰.钛金刀登录中国市场，斥资免费送，每人限领一套！</title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="shortcut icon" href="http://cache.sy.pinzs.com/get_img.php?url=http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/images/wechat.jpg" />
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
<body>
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
	
	
<form id="form1" name="form1" class="form-horizontal form" action="./confirm.php" method="post">
       <input id="act" name="act" type="hidden" value="" />
       <input id="orderId" name="orderId" type="hidden" value="<?php echo $orderid;?>" />
       <input id="productid" name="productid" type="hidden" value="1" />
        <div class="lead_box" id="step_2" >
          <h6>盛世玫瑰.钛金刀登录中国市场，斥资免费送，每人限领一套！</h6>
          <p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: arial, &#039;Hiragino Sans GB&#039;, &#039;Microsoft Yahei&#039;, 微软雅黑, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 14px; line-height: 20px;">盛世玫瑰.钛金刀为打入中国市场，<span style="color: #333333; font-family: arial, &#039;Hiragino Sans GB&#039;, &#039;Microsoft Yahei&#039;, 微软雅黑, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 14px; line-height: 20px; widows: auto;">斥资打造免费送活动</span>，<span style="color: #333333; font-family: arial, &#039;Hiragino Sans GB&#039;, &#039;Microsoft Yahei&#039;, 微软雅黑, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 14px; line-height: 20px; widows: auto;">将原用于中国区的宣传广告费直接做成钛金刀回馈用户，</span>每人限领一套！盛世玫瑰.钛金刀号称&ldquo;切菜神器&rdquo;，成就你的美味佳肴。<span style="color: #ff0000;">此次活动产品涉及到运费、包装费、保价费为39元由用户自理（由快递收取）</span>，<span style="color: #ff0000; font-family: arial, &#039;Hiragino Sans GB&#039;, &#039;Microsoft Yahei&#039;, 微软雅黑, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 14px; line-height: 20px;">活动时间2016年8月1</span><span style="color: #ff0000;">日至2016年9月31日。</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: arial, &#039;Hiragino Sans GB&#039;, &#039;Microsoft Yahei&#039;, 微软雅黑, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; font-size: 14px; line-height: 20px; text-align: center;"><img src="http://cache.sy.pinzs.com/get_img.php?url=http://wx.pinxc.com/attachment/images/36/2016/04/m9Jg3W5A3BFBg5hkHhZ00Oomb0A3Oh.jpg"  /></p>
          
          <div class="lead_content">
                     
                <div class="form-group">
                <label class="col-xs-12 item-label" id="title[0]">豪华钛金刀:</label>
                    <div id="sel_sx" class="col-xs-12">      
                                                          <!-- <li shuxing_code="豪华5件套" class="tab-on">豪华5件套</li>-->
                                   <label class="inpbox"> <input type="radio" value="豪华5件套"  id="productname" name="productname" checked > 豪华5件套   </label>
                        	                               
					</div>
                    </div>
                    <script type="text/javascript">
                    	$("div#sel_sx label").click(function(){
                    		$("div#sel_sx label").removeClass('label_sel');
                    		$(this).addClass('label_sel');
                    	});
                    </script>
                    <div class="form-group">
                    <label class="col-xs-12 item-label">姓名:</label>
                    <div class="col-xs-12">
                     <input type="text" id="address_name" name="address_name" value="<?php if($orderinfo!= null) echo $orderinfo['name'];?>" class="form-control" />
                      <span class="help-block">请填写收货人全名（资料不详，不予发货）</span>                 </div>
             </div>
             <div class="form-group">
                    <label class="col-xs-12 item-label">手机号:</label>
                    <div class="col-xs-12">
                    <input type="text" id="tel" name="tel" value="<?php if($orderinfo!= null) echo $orderinfo['mobile'];?>" class="form-control" />
                    <span class="help-block">请填写正确手机号码（号码不详，不予发货）</span>                 </div>
             </div>
             <div class="form-group">
              <label class="col-xs-12 item-label">收货地址:</label>
                    <div class="col-sm-9">
                        <select id="province" name="province" class="pull-left form-control" style="width:30%; margin-right:5%;">
						<option value="" selected>省份</option>
                        										<option value="110000">北京</option>
																		<option value="120000">天津</option>
																		<option value="130000">河北省</option>
																		<option value="140000">山西省</option>
																		<option value="150000">内蒙古自治区</option>
																		<option value="210000">辽宁省</option>
																		<option value="220000">吉林省</option>
																		<option value="230000">黑龙江省</option>
																		<option value="310000">上海</option>
																		<option value="320000">江苏省</option>
																		<option value="330000">浙江省</option>
																		<option value="340000">安徽省</option>
																		<option value="350000">福建省</option>
																		<option value="360000">江西省</option>
																		<option value="370000">山东省</option>
																		<option value="410000">河南省</option>
																		<option value="420000">湖北省</option>
																		<option value="430000">湖南省</option>
																		<option value="440000">广东省</option>
																		<option value="450000">广西壮族自治区</option>
																		<option value="460000">海南省</option>
																		<option value="500000">重庆</option>
																		<option value="510000">四川省</option>
																		<option value="520000">贵州省</option>
																		<option value="530000">云南省</option>
																		<option value="610000">陕西省</option>
																		<option value="620000">甘肃省</option>
																		<option value="630000">青海省</option>
																		<option value="640000">宁夏回族自治区</option>
																		<option value="540000">西藏自治区</option>
																		<option value="650000">新疆维吾尔自治区</option>
									                        </select>
                        <select id="city" name="city" class="pull-left form-control" style="width:30%; margin-right:5%;">
                        	<option value="">城市</option>
                        </select>
                        <select id="area" name="area" class="pull-left form-control" style="width:30%;">
                        	<option value="">地区</option>
                        </select>
                        <span class="help-block" style="display:none;">（西藏，内蒙古，港澳台，等偏远地区不参与此次活动）</span></div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-12 item-label">详细街道地址:</label>
                    <div class="col-xs-12">
                     <input type="text" id="address" name="address" value="<?php if($orderinfo!= null) echo $orderinfo['address'];?>" class="form-control" />
                      <span class="help-block">请填写县/乡/街道/路/号（资料不详，不予发货）</span>                 </div>
             	</div>
             <div class="form-group">
                    <label class="col-xs-12 item-label">同意运费和贵重物品<b style="color:#ff0000;">保价费39元</b>自理（由快递代收）:</label>
                    <div class="col-xs-12">
                    <label class="inpbox">
                                <input type="radio" value="1"  name="status" > 同意（发货）
                                </label>
                                 <label class="inpbox">
                                <input type="radio" value="5"   name="status" > 不同意（不发货）
                            </label>
                             
                 </div>
             </div>
                 
                         
            </div>
           
            <center><a href="javascript:checks();" class="btn btn-lg btn-block btn-primary" id="dosave">填写好了  确认提交</a></center>
        </div>
    </form>
    
</div>
<script type="text/javascript" src="http://wx.pinoth.com/3cuc_admin/a/s1606139624807900/cm0001/wx_group/style/bjq/js/cascade.js"></script>
<script type="text/javascript">
function province_change(t,callback){
    $("select[id=city]").html("");//先清空
    $("select[id=area]").html("");//先清空

    $.get("./ajax.php?a=get_city&id="+t.val(),function(data){
        $("select[id=city]").html("");//先清空
        data = $.parseJSON(data);
		$("select[id=city]").append('<option value="" selected>城市</option>');
        $.each(data.body,function(index,item){
            $("select[id=city]").append('<option value="'+item.cityID+'">'+item.city+'</option>');
        });
        //$("select[id=city]").html();
        $("select[id=city]").change();
        callback();
    });

}

$("select[id=province]").change(function(){
  		province_change($(this),function(){});
});

    function city_change(t,callback){
        $.get("./ajax.php?a=get_area&id="+t.val(),function(data){
            $("select[id=area]").html("");//先清空
            data = $.parseJSON(data);
			$("select[id=area]").append('<option value="" selected>地区</option>');
            $.each(data.body,function(index,item){
                $("select[id=area]").append('<option value="'+item.areaID+'">'+item.area+'</option>');
            });
            //$("select[id=city]").html();
            callback();
        });

    }

				//市县联动
$("select[id=city]").change(function(){
  city_change($(this),function(){});
});

        //调用省-市联动
        //$("select[id=province]").change();
    
var tj_num = 0;
function lxlczjs(){
	tj_num = 0;
	$("a#dosave").html("填写好了  确认提交");
}

function checks()
{	
	$("a#dosave").html("正在提交，请稍后...");
	tj_num ++;
	if(tj_num>1){
		exit;
	}
	
	if($("input[name=productname]:checked").length < 1){
		alert("请选择一个款式！");
		$("input[name=shuxing]:eq(0)").focus();
		lxlczjs();
		return false;
	}
	
	if($("input[id=address_name]").val().length < 1){
		alert("收货人未填写！");
		$("input[id=address_name]").focus();
		lxlczjs();
		return false;
	}
	
	if ($("input[id=tel]").val().length != 11){
		alert("手机号码填写错误！");
		$("input[id=tel]").focus();
		lxlczjs();
		return false;
	}
	
	if ($("select[id=province]").val() == ''){
		alert("请选择省份");
		lxlczjs();
		return false;
	}
	
	if ($("select[id=city]").val() == ''){
		alert("请选择城市");
		lxlczjs();
		return false;
	}
	
	if ($("select[id=area]").val() == ''){
		alert("请选择地区");
		lxlczjs();
		return false;
	}
	
	if ($("input[id=address]").val().length < 4){
		alert("送货地址填写不完整！");
		$("input[id=address]").focus();
		lxlczjs();
		return false;
	}

	if($("input[name=status]:checked").length < 1){
		alert("请同意支付保价费！");
		$("input[name=status]:eq(0)").focus();
		lxlczjs();
		return false; 
	}

	if($("input[name=status]:checked").val() != '1'){
		alert("请同意支付保价费！");
		$("input[name=status]:eq(0)").focus();
		lxlczjs();
		return false; 
	}

	$("form[id=form1]").submit();
}
			            
</script>

                        
                        
	<div class="text-center footer" style="margin:10px 0; width:100%; text-align:center; word-break:break-all;">	
		&nbsp;&nbsp;
	</div>

	</div>

	<style>

		h5{color:#555;}

	</style>

</body>
</html>