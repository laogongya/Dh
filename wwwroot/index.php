<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<?php
$conf['qqjump']=1;if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false && $conf['qqjump']==1){$siteurl='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];echo '<html>
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
        body,html{width:100%;height:100%}
        *{margin:0;padding:0}
        body{background-color:#fff}
        #browser img{
            width:50px;
        }
        #browser{
            margin: 0px 10px;
            text-align:center;
        }
        #contens{
            font-weight: bold;
            margin:-285px 0px 10px;
            text-align:center;
            font-size:20px;
            margin-bottom: 125px;
        }
        .top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角<img src="//gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<a style="display: none;" href="" id="vurl" rel="noreferrer"></a>
<div id="contens">
1.防止腾讯屏蔽本站链接<br /><br />
2.建议用QQ浏览器打开效果最佳<br /><br />

<!--</div>
<script type="text/javascript">$.getScript("http://cn.battleofballs.com/share?type=1&id=45302205",function(data){});</script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
  <script src="//www.7nys.com/static/js/layer.js"></script>
<a data-clipboard-text="'.$siteurl.'" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
  new ClipboardJS(".app-download-btn");
  $(".app-download-btn").click(function() {
layer.tips("复制成功，么么哒", ".app-download-btn", {
  tips: [3, "rgb(38,111,250)"],
  time:500
});})-->
</script>
<script type="text/javascript">$.getScript("http://cn.battleofballs.com/share?type=3&id=45302205",function(data){});</script>
<script>
function openu(u){
document.getElementById("vurl").href= u;
document.getElementById("vurl").click();
}
var url = window.location.href;
    if(navigator.userAgent.indexOf("QQ/")> -1){
        openu("ucbrowser://"+url);
        openu("mttbrowser://url="+url);
        openu("baiduboxapp://browse?url="+url);
        openu("googlechrome://browse?url="+url);
        openu("mibrowser:"+url);
        openu("taobao://"+url.split("://")[1]);
        openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        $("html").on("click",function(){
            openu("ucbrowser://"+url);
            openu("mttbrowser://url="+url);
            openu("baiduboxapp://browse?url="+url);
            openu("googlechrome://browse?url="+url);
            openu("mibrowser:"+url);
            openu("taobao://"+url.split("://")[1]);
            openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        });
    }else if(navigator.userAgent.indexOf("MicroMessenger") > -1){
        if(navigator.userAgent.indexOf("Android") > -1){
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            document.body.appendChild(iframe);
        }else{
             
        }
    }
</script>
</html>';exit; } ?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="vip视频解析,vip视频在线解析,vip视频在线观看，蓝光电视剧网站，蓝光电影网站，最新电视剧在线观看，jinzhou分享影院，金周分享" />
<meta name="description" content="JINZHOU分享在线观看VIP视频网站的VIP视频,支持爱奇艺、腾讯、优酷、乐视、芒果、搜狐、PPTV等等、电影和电视剧资源，欢迎使用！jinzhou分享影院(www.jinzhou.gq)每天实时抓取最新的电视剧、电影、综艺、动漫免费在线观看！jinzhou分享影院还为影迷提供全网最全最高清无广告电影电视剧解析接口，给用户最完美的观看体验！" /> 
  <title>
JINZHOU分享
  </title>
  <link rel="shortcut icon" href="css/logo.png">
  <link rel="stylesheet" href="http://www.bootcss.com/p/buttons/css/buttons.css">
  <link rel="stylesheet" id="patternfly-adjusted-css" href="css/app.css"
  type="text/css" media="all">
  <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <script type="text/javascript" src="css/Scripts/jquery.js"></script>

  <script type="text/javascript" src="css/Scripts/bootstrap.min.js"></script>
  <style>
    #main article { border-bottom: none; }
	body{
		    font: 500 .875em PingFang SC,Lantinghei SC,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans;
        background-color: #07040e;
	}
  #canvas {
                position: absolute;
    z-index: 10;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    cursor: none;
        }
        .content{
      position: absolute;
    z-index: 11;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
}
.splash{
  position: relative;
  }
  img#qq {
    width: 128px;
    background-size: cover;
    border-radius: 200px;
    box-shadow: 0px 0px 40px rgba(63, 81, 181, 0.72);
    border: 3px solid #00a0ff;
    opacity: 1;
    margin: 0 auto;
    margin-top: 20px;
	margin-bottom: 20px;
	transition: all 1.0s;  
}
#qq:hover {
    box-shadow: 0 0 10px #fff;
    -webkit-box-shadow: 0 0 19px #fff;
    transform:rotate(360deg);
    -ms-transform:rotate(360deg); 	/* IE 9 */
    -moz-transform:rotate(360deg); 	/* Firefox */
    -webkit-transform:rotate(360deg); /* Safari 和 Chrome */
    -o-transform:rotate(360deg); 	/* Opera */
    filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
  </style>

  
</head>
<body class="home page page-id-194 page-template page-template-page-homepage page-template-page-homepage-php custom-background" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
  <header role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          <a class="navbar-brand" id="logo" title="HY-PHP" href="css/logo.png">
          
          </a>
        </div>
        <!-- end .navbar-header -->
        <div class="navbar-collapse collapse">
          <ul id="menu-primary" class="nav navbar-nav navbar-right">
         
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="https://ljz.rthe.net/" class="dropdown-toggle">
               JINZHOU分享官网
              </a>
            </li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="http://www.jinzhou.gq/DG/VIP.html" class="dropdown-toggle" target="_blank">
               买钻网
              </a>
            </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="http://www.jinzhou.gq/jx/?url=" class="dropdown-toggle" target="_blank">
                解析接口
              </a>
            </li>
			<!--li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="http://www.jinzhou.gq/jx/?url=" class="dropdown-toggle" target="_blank">
                解析接口2
              </a-->
            </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="https://www.niuzhanw.com/" class="dropdown-toggle" target="_blank">
               牛站网址导航
              </a>
            </li> 
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
              <a href="https://lynnconway.me/joinchat/3n21tJB24ijdQdOjzglxDw" class="dropdown-toggle" target="_blank">
                交流群
              </a>
            </li>
            
              
       
          </ul>
        </div>
        <!-- end .navbar-collapse -->
      </div>
      <!-- end .container -->
    </nav>
    <!-- end .navbar -->
  </header>
  <!-- end header -->
  <div class="jumbotron">
    <div class="container">
      <div class="splash">
        <div class="content">
          <img src="css/logo.png" alt="PatternFly logo" id="qq" class="wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown;">
          <h1 class="wow fadeIn animated" data-wow-delay="750ms" style="visibility: visible; animation-delay: 750ms; animation-name: fadeIn;">
            JINZHOU分享-为您导航
          </h1>
          <p class="description wow fadeIn animated" data-wow-delay="1250ms" style="visibility: visible; animation-delay: 1250ms; animation-name: fadeIn;">
            声明：本站仅用于学习交流,请在遵守法律的前提下使用，本站不负任何责任！
          </p>
		  <a href="http://www.jinzhou.gq/svip/index.html" class="button button-glow button-border button-rounded button-primary"><i class="fa fa-vimeo-square"></i> SVIP影院</a>&nbsp&nbsp&nbsp&nbsp
		  <a href="http://www.jinzhou.gq/vip/index.php/" class="button button-glow button-border button-rounded button-primary"><i class="fa fa-video-camera"></i> JINZHOU影院（完善中）</a>&nbsp&nbsp&nbsp&nbsp
		  <a href="https://ljz.rthe.net/" class="button button-glow button-border button-rounded button-primary"><i class="fa fa-cloud"></i> JINZHOU分享官网</a>&nbsp&nbsp&nbsp&nbsp
		  <a href="https://qm.qq.com/cgi-bin/qm/qr?k=yVqtwjyMPUhBB00w1pTYQ9pjJwTff5uD&noverify=0

"class="button button-glow button-border button-rounded button-primary"><i class="fa fa-qq"></i> 联系我吧</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		  <div style="
    width: 100%;
    bottom: 30px;
    box-sizing: border-box;
    left: 0;
">Copyright © 2020 <a href="#" class="dropdown-toggle">
               JINZHOU分享
              </a>
            </li>
 All Rights<script type="text/javascript" src="https://s9.cnzz.com/z_stat.php?id=1279185473&web_id=1279185473"></script> Reserved. 
 </div>            
        </div>
      </div>
    </div>
  <canvas id="canvas" width="100%" height="100%"></canvas>
  <!-- <div id="css/particles-js"></div> -->
  </div>

<script src="css/hovertreewelcome.js"></script>
<script type="text/javascript">

// particlesJS('particles-js',
//   {
//     "particles": {
//       "number": {
//         "value": 110,
//         "density": {
//           "enable": true,
//           "value_area": 800
//         }
//       },
//       "color": {
//         "value": "#ffffff"
//       },
//       "shape": {
//         "type": "circle",
//         "stroke": {
//           "width": 0,
//           "color": "#000000"
//         },
//         "polygon": {
//           "nb_sides": 5
//         },
//         "image": {
//           "src": "img/github.svg",
//           "width": 100,
//           "height": 100
//         }
//       },
//       "opacity": {
//         "value": 0.5,
//         "random": false,
//         "anim": {
//           "enable": false,
//           "speed": 1,
//           "opacity_min": 0.1,
//           "sync": false
//         }
//       },
//       "size": {
//         "value": 1,
//         "random": true,
//         "anim": {
//           "enable": false,
//           "speed": 20,
//           "size_min": 0.1,
//           "sync": false
//         }
//       },
//       "line_linked": {
//         "enable": true,
//         "distance": 40,
//         "color": "#fff",
//         "opacity": 1,
//         "width": 1
//       },
//       "move": {
//         "enable": true,
//         "speed": 3,
//         "direction": "none",
//         "random": false,
//         "straight": false,
//         "out_mode": "out",
//         "attract": {
//           "enable": false,
//           "rotateX": 600,
//           "rotateY": 1200
//         }
//       }
//     },
//     "interactivity": {
//       "detect_on": "canvas",
//       "events": {
//         "onhover": {
//           "enable": true,
//           "mode": "grab"
//         },
//         "onclick": {
//           "enable": true,
//           "mode": "push"
//         },
//         "resize": true
//       },
//       "modes": {
//         "grab": {
//           "distance": 120,
//           "line_linked": {
//             "opacity": 1
//           }
//         },
//         "bubble": {
//           "distance": 400,
//           "size": 40,
//           "duration": 2,
//           "opacity": 8,
//           "speed": 3
//         },
//         "repulse": {
//           "distance": 300
//         },
//         "push": {
//           "particles_nb": 4
//         },
//         "remove": {
//           "particles_nb": 2
//         }
//       }
//     },
//     "retina_detect": true,
//     "config_demo": {
//       "hide_card": false,
//       "background_color": "#b61924",
//       "background_image": "",
//       "background_position": "50% 50%",
//       "background_repeat": "no-repeat",
//       "background_size": "cover"
//     }
//   }

// );


        ; (function (window) {

            var ctx,
                hue,
                logo,
                form,
                buffer,
                target = {},
                tendrils = [],
                settings = {};

            settings.debug = true;
            settings.friction = 0.5;
            settings.trails = 20;
            settings.size = 50;
            settings.dampening = 0.25;
            settings.tension = 0.98;

            Math.TWO_PI = Math.PI * 2;

            // ========================================================================================
            // Oscillator 何问起
            // ----------------------------------------------------------------------------------------

            function Oscillator(options) {
                this.init(options || {});
            }

            Oscillator.prototype = (function () {

                var value = 0;

                return {

                    init: function (options) {
                        this.phase = options.phase || 0;
                        this.offset = options.offset || 0;
                        this.frequency = options.frequency || 0.001;
                        this.amplitude = options.amplitude || 1;
                    },

                    update: function () {
                        this.phase += this.frequency;
                        value = this.offset + Math.sin(this.phase) * this.amplitude;
                        return value;
                    },

                    value: function () {
                        return value;
                    }
                };

            })();

            // ========================================================================================
            // Tendril hovertree.com
            // ----------------------------------------------------------------------------------------

            function Tendril(options) {
                this.init(options || {});
            }

            Tendril.prototype = (function () {

                function Node() {
                    this.x = 0;
                    this.y = 0;
                    this.vy = 0;
                    this.vx = 0;
                }

                return {

                    init: function (options) {

                        this.spring = options.spring + (Math.random() * 0.1) - 0.05;
                        this.friction = settings.friction + (Math.random() * 0.01) - 0.005;
                        this.nodes = [];

                        for (var i = 0, node; i < settings.size; i++) {

                            node = new Node();
                            node.x = target.x;
                            node.y = target.y;

                            this.nodes.push(node);
                        }
                    },

                    update: function () {

                        var spring = this.spring,
                            node = this.nodes[0];

                        node.vx += (target.x - node.x) * spring;
                        node.vy += (target.y - node.y) * spring;

                        for (var prev, i = 0, n = this.nodes.length; i < n; i++) {

                            node = this.nodes[i];

                            if (i > 0) {

                                prev = this.nodes[i - 1];

                                node.vx += (prev.x - node.x) * spring;
                                node.vy += (prev.y - node.y) * spring;
                                node.vx += prev.vx * settings.dampening;
                                node.vy += prev.vy * settings.dampening;
                            }

                            node.vx *= this.friction;
                            node.vy *= this.friction;
                            node.x += node.vx;
                            node.y += node.vy;

                            spring *= settings.tension;
                        }
                    },

                    draw: function () {

                        var x = this.nodes[0].x,
                            y = this.nodes[0].y,
                            a, b;

                        ctx.beginPath();
                        ctx.moveTo(x, y);

                        for (var i = 1, n = this.nodes.length - 2; i < n; i++) {

                            a = this.nodes[i];
                            b = this.nodes[i + 1];
                            x = (a.x + b.x) * 0.5;
                            y = (a.y + b.y) * 0.5;

                            ctx.quadraticCurveTo(a.x, a.y, x, y);
                        }

                        a = this.nodes[i];
                        b = this.nodes[i + 1];

                        ctx.quadraticCurveTo(a.x, a.y, b.x, b.y);
                        ctx.stroke();
                        ctx.closePath();
                    }
                };

            })();

            // ----------------------------------------------------------------------------------------

            function init(event) {

                document.removeEventListener('mousemove', init);
                document.removeEventListener('touchstart', init);

                document.addEventListener('mousemove', mousemove);
                document.addEventListener('touchmove', mousemove);
                document.addEventListener('touchstart', touchstart);

                mousemove(event);
                reset();
                loop();
            }

            function reset() {

                tendrils = [];

                for (var i = 0; i < settings.trails; i++) {

                    tendrils.push(new Tendril({
                        spring: 0.45 + 0.025 * (i / settings.trails)
                    }));
                }
            }

            function loop() {

                if (!ctx.running) return;

                ctx.globalCompositeOperation = 'source-over';
                ctx.fillStyle = 'rgba(8,5,16,0.4)';
                ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
                ctx.globalCompositeOperation = 'lighter';
                ctx.strokeStyle = 'hsla(' + Math.round(hue.update()) + ',90%,50%,0.25)';
                ctx.lineWidth = 1;

                if (ctx.frame % 60 == 0) {
                    console.log(hue.update(), Math.round(hue.update()), hue.phase, hue.offset, hue.frequency, hue.amplitude);
                }

                for (var i = 0, tendril; i < settings.trails; i++) {
                    tendril = tendrils[i];
                    tendril.update();
                    tendril.draw();
                }

                ctx.frame++;
                ctx.stats.update();
                requestAnimFrame(loop);
            }

            function resize() {
                ctx.canvas.width = window.innerWidth;
                ctx.canvas.height = window.innerHeight;
            }

            function start() {
                if (!ctx.running) {
                    ctx.running = true;
                    loop();
                }
            }

            function stop() {
                ctx.running = false;
            }

            function mousemove(event) {
                if (event.touches) {
                    target.x = event.touches[0].pageX;
                    target.y = event.touches[0].pageY;
                } else {
                    target.x = event.clientX
                    target.y = event.clientY;
                }
                event.preventDefault();
            }

            function touchstart(event) {
                if (event.touches.length == 1) {
                    target.x = event.touches[0].pageX;
                    target.y = event.touches[0].pageY;
                }
            }

            function keyup(event) {

                switch (event.keyCode) {
                    case 32:
                        save();
                        break;
                    default:
                        // console.log(event.keyCode); hovertree.com
                }
            }

            function letters(id) {

                var el = document.getElementById(id),
                    letters = el.innerHTML.replace('&amp;', '&').split(''),
                    heading = '';

                for (var i = 0, n = letters.length, letter; i < n; i++) {
                    letter = letters[i].replace('&', '&amp');
                    heading += letter.trim() ? '<span class="letter-' + i + '">' + letter + '</span>' : '&nbsp;';
                }

                el.innerHTML = heading;
                setTimeout(function () {
                    el.className = 'transition-in';
                }, (Math.random() * 500) + 500);
            }

            function save() {

                if (!buffer) {

                    buffer = document.createElement('canvas');
                    buffer.width = screen.availWidth;
                    buffer.height = screen.availHeight;
                    buffer.ctx = buffer.getContext('2d');

                    form = document.createElement('form');
                    form.method = 'post';
                    form.input = document.createElement('input');
                    form.input.type = 'hidden';
                    form.input.name = 'data';
                    form.appendChild(form.input);

                    document.body.appendChild(form);
                }

                buffer.ctx.fillStyle = 'rgba(8,5,16)';
                buffer.ctx.fillRect(0, 0, buffer.width, buffer.height);

                buffer.ctx.drawImage(canvas,
                    Math.round(buffer.width / 2 - canvas.width / 2),
                    Math.round(buffer.height / 2 - canvas.height / 2)
                );

                buffer.ctx.drawImage(logo,
                    Math.round(buffer.width / 2 - logo.width / 4),
                    Math.round(buffer.height / 2 - logo.height / 4),
                    logo.width / 2,
                    logo.height / 2
                );

                window.open(buffer.toDataURL(), 'wallpaper', 'top=0,left=0,width=' + buffer.width + ',height=' + buffer.height);

                // form.input.value = buffer.toDataURL().substr(22);
                // form.submit(); hovertree.com
            }

            window.requestAnimFrame = (function () {
                return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (fn) { window.setTimeout(fn, 1000 / 60) };
            })();

            window.onload = function () {

                ctx = document.getElementById('canvas').getContext('2d');
                ctx.stats = new Stats();
                ctx.running = true;
                ctx.frame = 1;

               

                hue = new Oscillator({
                    phase: Math.random() * Math.TWO_PI,
                    amplitude: 85,
                    frequency: 0.0015,
                    offset: 285
                });

             

                document.addEventListener('mousemove', init);
                document.addEventListener('touchstart', init);
                document.body.addEventListener('orientationchange', resize);
                window.addEventListener('resize', resize);
                window.addEventListener('keyup', keyup);
                window.addEventListener('focus', start);
                window.addEventListener('blur', stop);

                resize();

                if (window.DEBUG) {

                    var gui = new dat.GUI();

                    // gui.add(settings, 'debug');
                    settings.gui.add(settings, 'trails', 1, 30).onChange(reset);
                    settings.gui.add(settings, 'size', 25, 75).onFinishChange(reset);
                    settings.gui.add(settings, 'friction', 0.45, 0.55).onFinishChange(reset);
                    settings.gui.add(settings, 'dampening', 0.01, 0.4).onFinishChange(reset);
                    settings.gui.add(settings, 'tension', 0.95, 0.999).onFinishChange(reset);

                    document.body.appendChild(ctx.stats.domElement);
                }
            };

        })(window);

    </script>

<audio autoplay="autoplay">
<source src="http://p2.music.126.net/pOH2QXwQc_7IX4l2sB-iSA==/7954966629620463.mp3" type="audio/mpeg">
</audio>

</body>
</html>