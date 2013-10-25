<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            error.php  -  PBLang
 *                            -------------------
 *
 *                  see copyright.txt in the docs-folder
 ***************************************************************************/

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

ob_start();

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
                                                     // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");  

define('IN_PB', "true");
define('IN_PBG', "true");

include("global.php");
include($dbpath."/settings.php");
include("functions.php");

$username=$HTTP_COOKIE_VARS[$cookieid];
$language=SetLanguage($username);
include_once("$temppath/pb/language/lang_$language.php");
echo "<html><head>";
echo "<title>$sitetitle :: $VError</title>";
$msg=$e;
errormsg($msg,$username);
ob_end_flush();
?>
