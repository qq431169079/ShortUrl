<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php if(!empty($hash)){ echo $hash."_";}?>GooNil.com_一个免费的短网址服务网站</title>

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
    <link rel="shortcut icon" href="<?= Flight::get('flight.base_url');?>goonil/favicon.ico" />

</head>
<body>
<a href="https://github.com/qsbaq/Goonil">
    <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
</a>

<div class="header">
    <h1><a href="<?= Flight::get('flight.base_url');?>">GooNil.com</a></h1>
    <p>Url Shorten Service.<br>一个免费的短网址服务网站。</p>
    <hr>
</div>
<?php if (!empty(Flight::get('flight.settings')['ads_top'])): ?>
    <div class="jads"><?= Flight::get('flight.settings')['ads_top'] ?></div>
<?php endif ?>
    
<?php echo $body_content; ?>
    
<?php if (!empty(Flight::get('flight.settings')['ads_bottom'])): ?>
    <div class="jads"><?= Flight::get('flight.settings')['ads_bottom'] ?></div>
<?php endif ?>    
<div class="footer">        
    <p>© <?= date('Y') ?> <a href="<?= Flight::get('flight.base_url');?>" target="_blank">Goonil.com</a> . Licensed under MIT license.</p>
    <div id="content" class="am-u-lg-6 am-u-md-8 am-u-sm-centered"></div>
</div>

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
    <script src="<?= Flight::get('flight.base_url');?><?= Flight::get('flight.settings')['external_js'] ?>"></script>
<?php endif ?>
    
<script type='text/javascript'>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?469f8d6fd30c5d9008ee1202bf4074e3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>