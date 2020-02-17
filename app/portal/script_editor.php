<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../librerias/css/froala_editor.css">
  <link rel="stylesheet" href="../librerias/css/froala_style.css">
  <link rel="stylesheet" href="../librerias/css/plugins/code_view.css">
  <link rel="stylesheet" href="../librerias/css/plugins/colors.css">
  <link rel="stylesheet" href="../librerias/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../librerias/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../librerias/css/plugins/image.css">
  <link rel="stylesheet" href="../librerias/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../librerias/css/plugins/table.css">
  <link rel="stylesheet" href="../librerias/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../librerias/css/plugins/video.css">
  <link rel="stylesheet" href="../librerias/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../librerias/css/plugins/file.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../librerias/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../librerias/js/plugins/fullscreen.min.js"></script>

  <script>

var Base64 = (function() {
    "use strict";

    var _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

    var _utf8_encode = function (string) {

        var utftext = "", c, n;

        string = string.replace(/\r\n/g,"\n");

        for (n = 0; n < string.length; n++) {

            c = string.charCodeAt(n);

            if (c < 128) {

                utftext += String.fromCharCode(c);

            } else if((c > 127) && (c < 2048)) {

                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);

            } else {

                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);

            }

        }

        return utftext;
    };

    var _utf8_decode = function (utftext) {
        var string = "", i = 0, c = 0, c1 = 0, c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {

                string += String.fromCharCode(c);
                i++;

            } else if((c > 191) && (c < 224)) {

                c1 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c1 & 63));
                i += 2;

            } else {

                c1 = utftext.charCodeAt(i+1);
                c2 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c1 & 63) << 6) | (c2 & 63));
                i += 3;

            }

        }

        return string;
    };

    var _hexEncode = function(input) {
        var output = '', i;

        for(i = 0; i < input.length; i++) {
            output += input.charCodeAt(i).toString(16);
        }

        return output;
    };

    var _hexDecode = function(input) {
        var output = '', i;

        if(input.length % 2 > 0) {
            input = '0' + input;
        }

        for(i = 0; i < input.length; i = i + 2) {
            output += String.fromCharCode(parseInt(input.charAt(i) + input.charAt(i + 1), 16));
        }

        return output;
    };

    var encode = function (input) {
        var output = "", chr1, chr2, chr3, enc1, enc2, enc3, enc4, i = 0;

        input = _utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output += _keyStr.charAt(enc1);
            output += _keyStr.charAt(enc2);
            output += _keyStr.charAt(enc3);
            output += _keyStr.charAt(enc4);

        }

        return output;
    };

    var decode = function (input) {
        var output = "", chr1, chr2, chr3, enc1, enc2, enc3, enc4, i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = _keyStr.indexOf(input.charAt(i++));
            enc2 = _keyStr.indexOf(input.charAt(i++));
            enc3 = _keyStr.indexOf(input.charAt(i++));
            enc4 = _keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output += String.fromCharCode(chr1);

            if (enc3 !== 64) {
                output += String.fromCharCode(chr2);
            }
            if (enc4 !== 64) {
                output += String.fromCharCode(chr3);
            }

        }

        return _utf8_decode(output);
    };

    var decodeToHex = function(input) {
        return _hexEncode(decode(input));
    };

    var encodeFromHex = function(input) {
        return encode(_hexDecode(input));
    };

    return {
        'encode': encode,
        'decode': decode,
        'decodeToHex': decodeToHex,
        'encodeFromHex': encodeFromHex
    };
}());
</script>