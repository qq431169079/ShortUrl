<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?= $hash;?>_Goonil.com_一个免费的短网址服务网站</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>

    <meta name="msapplication-TileColor" content="#0e90d2">

    <link href="//cdn.bootcss.com/amazeui/2.5.2/css/amazeui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= Flight::get('flight.base_url');?>public/css/app.css">
</head>
<body>

<div class="header">
        <h1>Goonil.com</h1>
        <p>Url Shorten Service.<br>一个免费的短网址服务网站。</p>
    <hr/>
</div>
<div class="container">
    <?php if (!empty(Flight::get('flight.settings')['ads_top'])): ?>
        <div class="jads"><?= Flight::get('flight.settings')['ads_top'] ?></div>
    <?php endif ?>   
    
    <h2 id="show"></h2> 
    <h3><?= $url;?></h3>
    
    <p>If there is no automatic Jump, please <a href="javascript:showUrl()" title="<?= $url;?>">click here.</a> </p>
    <p>如未能自动跳转，请<a href="javascript:showUrl()" title="<?= $url;?>">点击这里!</a></p>
    
    <?php if (!empty(Flight::get('flight.settings')['ads_bottom'])): ?>
        <div class="jads"><?= Flight::get('flight.settings')['ads_bottom'] ?></div>
    <?php endif ?>    
    <div id="content" class="am-u-lg-6 am-u-md-8 am-u-sm-centered"></div>
    <hr/>
</div>
<div class="footer">
    <p>© <?= date('Y') ?> <a href="<?= Flight::get('flight.base_url');?>" target="_blank">Goonil.com</a> . Licensed under MIT license.</p>
</div>    
<script type="text/javascript"> 
var _u = "<?= $url ?>";
var t= <?= Flight::get('flight.settings')['jsec'];?>;
setInterval("refer()",1000);
function refer(){  
    if(t==0){ 
        window.location=_u;
    } 
    document.getElementById('show').innerHTML=""+t+" (s) will will automatically jump.";
    t--; 
} 
function showUrl() {  
	window.location.href=_u;
}  
</script> 

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.4.2/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="//cdn.bootcss.com/amazeui/2.5.2/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/validator/4.0.5/validator.min.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="<?= Flight::get('flight.base_url');?>public/js/index.js"></script>
<?php if (!empty(Flight::get('flight.settings')['external_js'])): ?>
    <script src="<?= Flight::get('flight.settings')['external_js'] ?>"></script>
<?php endif ?>
</body>
</html>