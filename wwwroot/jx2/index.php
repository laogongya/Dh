<?php
if(!empty($_GET['url'])){
	$urls=@$_GET['url'];
}else{
exit(<<<code
<!DOCTYPE html>    
<html><head>     
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <meta name="renderer" content="webkit" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="pragma" content="no-cache" /><meta http-equiv="expires" content="0" />
<meta name="keywords" content="vip视频解析,vip视频在线解析,vip解析,万能vip视频解析,vip视频全能解析,vip视频,手机vip视频解析,手机在线解析vip视频,优酷vip解析,爱奇艺vip解析,腾讯vip解析,乐视vip解析,芒果vip解析" />
<meta name="description" content="智能解析为您免费解析主流视频网站的VIP视频,支持爱奇艺、腾讯、优酷、乐视、芒果、搜狐、PPTV等等，可搜索最新的免费福利视频、电影和电视剧资源，欢迎使用！" />   
<title>jinzhou二次解析</title> 
<style>h1{color:#F8F8FF; text-align:center; font-family: Microsoft Jhenghei;}p{color:#F8F8FF; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style>
</head>
<body bgcolor="#C7636C"><table width="100%" height="100%" align="center"><td align="center"><h1>欢迎使用本站解析系统</h1><h1>您好像没有输入视频链接地址哦</h1><p>本解析只做学习交流，不以盈利为目的使用本接口造成的任何后果概不负责</p><p><font size="2">2018-2020 All Rights Reserved JINZHOU分享二次解析接口<br>JINZHOU解析-为广大用户提供视频地址在线解析服务，用于测试网站视频在线播放等。<br>JINZHOU解析所有资源均来源第三方资源，JINZHOU解析并不提供影片资源存储，也不参与录制、上传相关视频，视频版权归属其合法持有人所有，本站不对使用者的行为负担任何法律责任。<br>如果有因为本站而导致您的权益受到损害，请与我们联系，我们将理性对待，协助你解决相关问题。</font>
</p></table>     
</body>
</html>  	 
code
); 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>JINZHOU解析-快速免费</title>
<script src="jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<style>
#lines .line{
	color:#FFF;
	}
</style>
<iframe width="100%" height="100%" id="myVideo" src="" frameborder="0" border="0" marginwidth="0" marginheight="0" allowfullscreen="true" scrolling="no"></iframe>
<script>
$(function(){
		$(".line:first").css({"margin-color":"#ff0","color":"#ff0"})
	$(".line").click(function(){
		$(".line").css({"margin-color":"#fff","color":"#fff"});
		
		$(this).css({"margin-color":"#ff0","color":"#ff0"})
		})
		 if(window.location.href.indexOf("qq.com")>0){
		$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf("iqiyi.com")>0){
		$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf("youku.com")>0){
		$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>");
		}else if(window.location.href.indexOf(".m3u8")>0){
		$("#myVideo").attr("src","https://m3u8.kongbuya.com/?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf(".mp4")>0){
		$("#myVideo").attr("src","https://m3u8.kongbuya.com/?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf("index.m3u8")>0){
		$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf("kongbuya.com")>0){
		$("#myVideo").attr("src","https://m3u8.kongbuya.com/?url=<?php echo $_GET["url"]; ?>");
		}else  if(window.location.href.indexOf("mgtv.com")>0){
		$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>");
                }else  if(window.location.href.indexOf("bilibili.com")>0){
		$("#myVideo").attr("src","https://www.qianyicp.com/bilibili.php?url=<?php echo $_GET["url"]; ?>");
       	}else  if(window.location.href.indexOf("pptv.com")>0){
		$("#myVideo").attr("src","https://www.playm3u8.cn/jiexi.php?url=<?php echo $_GET["url"]; ?>");
		}	
		else{
				$("#myVideo").attr("src","https://jx.jiubojx.com/vip.php?url=<?php echo $_GET["url"]; ?>"); 
			}
	})
</script>
</body>
</html>