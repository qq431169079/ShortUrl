<div class="container">
    <h2 id="show"></h2> 
    <h3><?= $url;?></h3>
    
    <p>If there is no automatic Jump, please <a href="javascript:showUrl()" title="<?= $url;?>">click here.</a> </p>
    <p>如未能自动跳转，请<a href="javascript:showUrl()" title="<?= $url;?>">点击这里!</a></p>

    <hr/>
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
