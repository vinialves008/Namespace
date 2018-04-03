<?php 

spl_autoload_register(function($className)
{
	$dirClass = $_SERVER['DOCUMENT_ROOT']."namespace/project/src/";
	$filename = str_replace("\\", DIRECTORY_SEPARATOR, $dirClass . $className.".php");
	if (file_exists($filename)) {
		
		require_once $filename;
	}
});

 ?>