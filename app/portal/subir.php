<!DOCTYPE html>
<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
		<title>Mini Ajax File Upload Form</title>
		<link href="../librerias/bower_components/uploader/assets/css/style.css" rel="stylesheet" />
	</head>

	<body>

		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="drop">
				Arrastre Archivo  aquí
<br>
			  <a>Cargar Archivo</a>
				<input type="file" name="upl"  />
			</div>

			<ul>
            				<!-- The file uploads will be shown here -->
			</ul>
	
		</form><br>
<strong><center>
<br>
Extensión: (.png,jpg,jpeg).

</center></strong>		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>		
		<script src="../librerias/bower_components/uploader/assets/js/jquery.knob.js"></script>
		<!-- jQuery File Upload Dependencies -->
		<script src="../librerias/bower_components/uploader/assets/js/jquery.ui.widget.js"></script>
		<script src="../librerias/bower_components/uploader/assets/js/jquery.iframe-transport.js"></script>
		<script src="../librerias/bower_components/uploader/assets/js/jquery.fileupload.js"></script>		
		<!-- Our main JS file -->
		<script src="../librerias/bower_components/uploader/assets/js/script.js"></script>
		<!-- Only used for the demos. Please ignore and remove. --> 

	</body>
</html>