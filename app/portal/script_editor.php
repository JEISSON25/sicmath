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

  <script src="https://cdn.tiny.cloud/1/04y83kdqct0olqbwvv1w5380ovlja5nfi52o3l6lfam53myc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
 <!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../plugins/summernote/extens.js"></script>
 

<script>
Base64 = {
    
    _keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    
    encode : function (input) {
       var output = "";
       var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
       var i = 0;
    
       input = Base64._utf8_encode(input);
    
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
    
           output = output +
           this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
           this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
    
       }
    
       return output;
    },
    
    
    decode : function (input) {
       var output = "";
       var chr1, chr2, chr3;
       var enc1, enc2, enc3, enc4;
       var i = 0;
    
       input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
    
       while (i < input.length) {
    
           enc1 = this._keyStr.indexOf(input.charAt(i++));
           enc2 = this._keyStr.indexOf(input.charAt(i++));
           enc3 = this._keyStr.indexOf(input.charAt(i++));
           enc4 = this._keyStr.indexOf(input.charAt(i++));
    
           chr1 = (enc1 << 2) | (enc2 >> 4);
           chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
           chr3 = ((enc3 & 3) << 6) | enc4;
    
           output = output + String.fromCharCode(chr1);
    
           if (enc3 != 64) {
               output = output + String.fromCharCode(chr2);
           }
           if (enc4 != 64) {
               output = output + String.fromCharCode(chr3);
           }
    
       }
    
       output = Base64._utf8_decode(output);
    
       return output;
    
    },
    
    
    _utf8_encode : function (string) {
       string = string.replace(/\r\n/g,"\n");
       var utftext = "";
    
       for (var n = 0; n < string.length; n++) {
    
           var c = string.charCodeAt(n);
    
           if (c < 128) {
               utftext += String.fromCharCode(c);
           }
           else if((c > 127) && (c < 2048)) {
               utftext += String.fromCharCode((c >> 6) | 192);
               utftext += String.fromCharCode((c & 63) | 128);
           }
           else {
               utftext += String.fromCharCode((c >> 12) | 224);
               utftext += String.fromCharCode(((c >> 6) & 63) | 128);
               utftext += String.fromCharCode((c & 63) | 128);
           }
    
       }
    
       return utftext;
    },
    _utf8_decode : function (utftext) {
       var string = "";
       var i = 0;
       var c = c1 = c2 = 0;
    
       while ( i < utftext.length ) {
    
           c = utftext.charCodeAt(i);
    
           if (c < 128) {
               string += String.fromCharCode(c);
               i++;
           }
           else if((c > 191) && (c < 224)) {
               c2 = utftext.charCodeAt(i+1);
               string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
               i += 2;
           }
           else {
               c2 = utftext.charCodeAt(i+1);
               c3 = utftext.charCodeAt(i+2);
               string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
               i += 3;
           }
    
       }
    
       return string;
    }
    
    }

</script>
<!-- 
<script>
tinymce.init({
  selector: '#titulo',
  plugins: 'image code',
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  height: 500,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste imagetools wordcount"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});

tinymce.init({
  selector: '#ayuda',
  plugins: 'image code',
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  height: 500,
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table paste imagetools wordcount"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});
</script> -->