<?php


/**
 * Copyleft (C) 2013 txtBB
 * */

set_magic_quotes_runtime(0); // Disable magic_quotes_runtime
@ini_set('default_socket_timeout','120');

ob_start();

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                  // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('IN_PB', "true");
define('IN_PBG', "true");
$exectime=microtime();
include("global.php");
include($temppath.'/pb/language/lang_en.php');
include($temppath."/pb/language/lang_".$language.".php");
include($dbpath."/settings.php");
if ($testing){
	error_reporting  (E_ALL);
}else{
	error_reporting ();
}
?>
