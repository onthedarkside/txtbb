<?php

/**
 * Copyleft (C) 2013 txtBB
 * */
 
/***************************************************************************
 *                           setcookie.php - part of PBLang
 *                            -------------------
 *              see docs/copyright.txt for more details
 *
 *			Last modified 27 February 2005
***************************************************************************/


require('header.php');
include_once("functions.php");
include_once("ffunctions.php");

$usrname=$_GET['u'];
@include($dbpath.'/'.$usrname.'temp');
@unlink($dbpath.'/'.$usrname.'temp');

$username=$_COOKIE[$cookieid];
if ($username=="") {
	$loggedin="0";
	$admin="0";
} else {
	$filename = $dbpath."/members/".$username;
	if (!file_exists($filename)) {
		$loggedin="0";
	} else {
		include($dbpath."/members/".$username);
		$admin=$useradmin;
		$ban=$userban;
	}
}
$language=SetLanguage($username);
include($temppath."/pb/language/lang_".$language.".php");
if ($ban=="1") {
	setcookie ($cookieid, "$username",-3600,"/");
	setcookie ('PBLsecid'.$cookieid, "", time() - 3600, "/");
	writeheader('',0,0,0,'',0,$VBanned);
	ErrorMessage($banreason,$username);
	exit;
} else {
	if ($loggedin=="1" && ($maint!="1" || $admin=="1")) {
		echo "<meta http-equiv=\"Refresh\" content=\"0; URL=index.php\">";
	} else {
		$filename = "$dbpath/members/$u";
		if (!file_exists($filename)) {
			writeheader('',0,0,0,'',0,$VError);
			ErrorMessage($NoSuchUser,$username);
			exit;
		} else {
			include($dbpath."/members/".$u);
			if ($password==$p) {
				if ($maint=="1"){
					if (!$useradmin) {
						echo "<meta http-equiv=\"Refresh\" content=\"0; URL=logout.php\">";
						exit;
					}
				}
				setcookie ($cookieid, "$u",mktime(0,0,0,1,1,2020),"/");
				$secid=hash("ripemd160", $p.$u);
				setcookie ('PBLsecid'.$cookieid, "$secid",mktime(0,0,0,1,1,2020),"/");
				include($dbpath."/members/".$u);
				$userip=GetIPAddress();
				WriteUserInfo($u);
				echo "<meta http-equiv=\"Refresh\" content=\"0; URL=index.php?cookie=1\">";
			} else {
				writeheader('',0,0,0,'',0,$VError);
				ErrorMessage($InvalidPassword,$username);
			}
		}
	}
}
ob_end_flush();
?>
