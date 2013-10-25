<?php


/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            logout.php  - PBLang
 *                            -------------------
 *
 *                  see the file copyright.txt in the docs-folder!!!
 *
 *			Last modified 27 February 2005
 ***************************************************************************/

require('header.php');
include_once("functions.php");
include_once("ffunctions.php");

$username=$_COOKIE[$cookieid];
if ($username=="") {
	$loggedin="0";
	$admin="0";
	$allow="1";
} else {
	$allow='1';
	$filename = $dbpath.'/members/'.$username;
	if (!file_exists($filename)) {
		$loggedin="0";
	} else {
		$loggedin="1";
		$language=SetLanguage($username);
		include($temppath.'/pb/language/lang_'.$language.'.php');
		$ip = GetIPAddress();
		include($filename);
		$admin=$useradmin;
		$ban=$userban;
	}
}
if ($ban) {
	writeheader($newestm,$cat,$fid,$pid,$uname,$login,$VBanned);
	ErrorMessage($banreason,$username);
	setcookie ($cookieid, "", time() - 3600, "/");
	setcookie ('PBLsecid'.$cookieid, "",time() - 3600,"/");
	exit;
} else {
	if ($maint=="1" && $admin=="0") {
		writeheader($newestm,$cat,$fid,$pid,$uname,$login,$VMaintenanceMode);
		ErrorMessage($mreason,$username);
		setcookie ($cookieid, "", time() - 3600, "/");
		setcookie ('PBLsecid'.$cookieid, "",time() - 3600,"/");
		exit;
	} else {
		if ($allow=="1") {
			setcookie ($cookieid, "", time() - 3600, "/");
			setcookie ('PBLsecid'.$cookieid, "",time() - 3600,"/");
			@unlink("$dbpath/online/$username");
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=index.php\">";
		}
	}
}
ob_end_flush();
?>
