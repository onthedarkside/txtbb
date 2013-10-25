<?php

/**
 * Copyleft (C) 2013 txtBB
 * */


/***************************************************************************
 *                            confirm.php  - PBLang
 *                            -------------------
 *              see the file db/copyright.txt for more details
 *
*			Last modified 27 February 2005
***************************************************************************/


require ('header.php');
include_once("functions.php");
include_once("ffunctions.php");

$username=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($username,"0","1");

if ($loggedin=="1") {
	writeheader($newestm,0,0,0,$username,"1",$VConfirmation);
	ErrorMessage($AlreadyLoggedIn,$username);
	exit;
} else {
	if ($allowreg!="1") {
			writeheader($newestm,0,0,0,$username,"0",$VConfirmation);
			ErrorMessage($NoNewUsers,$username);
			exit;
	//Here begins the action!
	} else {
		$regcode=$_GET['code'];
		$user=$_GET['user'];
		writeheader($newestm,0,0,0,$username,"0",$VConfirmation);
		$filename=$dbpath."/members/pending/".$regcode;
		if (!file_exists($filename)){
				ErrorMessage($VWrongConfirmationCode,$username);
				exit;
		} else {
			include($filename);
			if ($username==$user){
				copy($filename,$dbpath."/members/".$user);
				@unlink ($filename);
				SetLock();
				$filename = $dbpath."/mems";
				$fd = fopen ($filename, "r");
				$n = fread ($fd, filesize ($filename));
				fclose ($fd);
				$n++;
				$fp = fopen($dbpath."/mems", "w");
				fputs($fp, $n);
				fclose($fp);

				$zero="0";
				$fp = fopen($dbpath."/pm/".$user, "w");
				fputs($fp, $zero);
				fclose($fp);
				$fp = fopen($dbpath."/pm/".$user."_tot", "w");
				fputs($fp, $zero);
				fclose($fp);

				$fp = fopen($dbpath."/settings/newestm", "w");
				fputs($fp, $user);
				fclose($fp);

				$fp = fopen($dbpath."/memss/".$user, "w");
				fputs($fp, $zero);
				fclose($fp);
				Unlock();
				regdone($user,0,$userlang);
			} else {
				writeheader($newestm,0,0,0,$username,"0",$VConfirmation);
				ErrorMessage($VConfirmationError,$username);
			}
		}
	}
}
writefooter($newestm);


ob_end_flush();
?>
