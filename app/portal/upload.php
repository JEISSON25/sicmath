<?php
include('../config.php');
if ($_FILES['file']['name']) {
	if (!$_FILES['file']['error']) {
	   $name = md5($hora);
	   $ext = explode('.', $_FILES['file']['name']);
	   $filename = $name . '.' . $ext[1];
	   $destination = '../files/' . $filename; //change this directory
	   $location = $_FILES["file"]["tmp_name"];
	   move_uploaded_file($location, $destination);
	   echo '../files/' . $filename;//change this URL
	}
	else
	{
	 echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
	}
}