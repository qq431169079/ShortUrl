document.onkeydown = function (e) { 
    var theEvent = window.event || e; 
    var code = theEvent.keyCode || theEvent.which; 
    if (code == 13) { 
        goshorten();
    } 
}
var goshorten = function () {
    var raw_url = $('#url').val();
    if (validator.isURL(raw_url)) {
        var url = encodeURIComponent(raw_url);
        $.getJSON(
            'shorten?url=' + url,
            function (data) {
                if (data.status == 1) {
                    $('#url').val(data.s_url);
                    var qrcode = $('#qrcode');
                    qrcode.qrcode({
                        width: 200,
                        height: 200,
                        text: data.s_url
                    });
                    qrcode.removeClass('am-hide');
                } else {
                    alert(data.msg);
                }
            }
        )
    } else {
        alert('Please enter the correct URL.请输入正确的url.');
    }
};

$('#shorten').click(function(){ goshorten();})


$('#expand').click(function() {
    var s_url = $('#url').val();
    $.getJSON(
        'expand?s_url=' + s_url,
        function(data) {
            if (data.status == 1) {
                $('#url').val(data.url);
                var qrcode = $('#qrcode');
                qrcode.addClass('am-hide');
                qrcode.html('');
            } else {
                alert(data.msg);
            }
        }
    )
});
