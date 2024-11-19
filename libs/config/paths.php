<?php
session_start();
define('URL', 'https://'.$_SERVER['HTTP_HOST']);
define('URL_IMAGE', 'https://images.ivyvet.com.vn');
$dirtionary = realpath($_SERVER['DOCUMENT_ROOT']); 
$dirtionary = str_replace("ivyvet.com.vn", "quantri_ivy", $dirtionary);
define('DIR_IMAGE', $dirtionary.'/public');
?>
