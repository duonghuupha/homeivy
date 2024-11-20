<?php
session_start();
define('URL', 'http://'.$_SERVER['HTTP_HOST']);
define('URL_IMAGE', 'http://backendhomeivy/public');
$dirtionary = realpath($_SERVER['DOCUMENT_ROOT']); 
$dirtionary = str_replace("homeivy", "backendhomeivy", $dirtionary);
define('DIR_IMAGE', $dirtionary.'/public');
?>
