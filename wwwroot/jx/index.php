<?php include ('./data/beipy.inc.php');

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
<meta name="description" content="<?php echo $aik['description'];?>" />
<title><?php echo $aik['sitename'];?></title>
<link href="pucms.css" rel="stylesheet">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="pucms.js" type="text/javascript"></script>

</head>
<body style="overflow-y:hidden;">
<div class="panel">
    <a href="javascript:QQ('<?php echo $aik['jiexi1'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi1name'];?></a>
    <a href="javascript:QQ('<?php echo $aik['jiexi2'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi2name'];?></a>
    <a href="javascript:QQ('<?php echo $aik['jiexi3'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi3name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi4'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi4name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi5'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi5name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi6'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi6name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi7'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi7name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi8'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi8name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi9'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi9name'];?></a> 
</div>
<p class="slide">
    <a class="WANG-WANG"><?php echo $aik['jiekou'];?></a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0"
            src="<?php echo $aik['maurl']?><?php echo $_GET["url"]; ?>"width="100%" scrolling="no" height="100%" align="middle" frameborder="no" hspace="0" vspace="0" allowFullscreen="true" marginheight="0" marginwidth="0" name="tv"></iframe>
    <script type="text/javascript"> function QQ(url) {
            $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
        } </script>
		
</div>

<style>
    .margingT {
        margin-bottom: 80px;
    }
    .bottomAD {
        -webkit-box-sizing: border-box;
        height: 34%;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 1000;
        padding: 0 10px;
        overflow: hidden;
        width: 100%;
        background-color:black;
        
        /* background: rgba(0, 0, 0, .8); */
    
        }

    .bottomtxt {
        padding-top: 17%;
        text-align:center;
        font-size: 18px;
        color: #fff;
    }
</style>
<script type="text/javascript">
        function browserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            /* document.writeln("您的浏览设备为："); */
            if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                document.writeln("<a href=\'http://quan.noome.cn\' target='_blank'><div class=\'bottomAD\' id=\'bottomAD\'><div class=\'bottomtxt\' i
    </script>		
		
<?php echo $aik['tongji'];?>


</body>
</html>

