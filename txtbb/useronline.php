<?php

/**
 * Copyleft (C) 2013 txtBB
 * */
 
 
/***************************************************************************
 *                            useronline.php
 *                            -------------------
 *
 *             see docs/copyright.txt for more details
 *
 *			Last modified 27 February 2005
 ***************************************************************************/

require('header.php');
include_once("functions.php");
include_once("ffunctions.php");

$username=@$_COOKIE[$cookieid];
$permit=CheckLoginStatus($username,"0","0");
if ($permit=="1") {
	$language=SetLanguage($username);
	include($temppath."/pb/language/lang_".$language.".php");
	$mem=@$_COOKIE[$cookieid];
	if ($mem=="") {
	} else {
		$time = @time();
		$a = fopen($dbpath."/online/".$mem, "w");
		fputs($a, $time);
		fclose($a);
	}
	$count=0;
	$handle = opendir($dbpath.'/online');
	while ($file = readdir($handle)) {
		if ($file != "." && $file != ".." && $file != ".htaccess" && $file != "index.html") {
			$count++;
		}
	}
	closedir($handle);
	if ($count>1 || $count==0) {
		echo "<table cellspacing=0 cellpadding=0><tr><td width=\"30%\" valign=\"top\">$VThereAre $count ";
		$ph = get_phrase_for_num('$VMembers', $count,$username);    //this will figure out which plural form to use
		echo "$ph ";
	} else {
		echo "<table cellspacing=0 cellpadding=0><tr><td width=\"30%\">$VThereIs $count ";
		$ph = get_phrase_for_num('$VMembers', $count,$username);    //this will return the singular form
		echo "$ph ";
	}
	if ($groupcolors=="1"){
		$group1=GetRank("1");
		$group2=GetRank("2");
		$group3=GetRank("3");
		$group4=GetRank("4");
		$group5=GetRank("5");
		$group6=GetRank("10");
		$group7=GetRank("11");
		$group8=GetRank("12");
		echo "$VLoggedIn:</td><td width=\"70%\"> [&nbsp;<span class=\"group1\">$group1</span>&nbsp;]
			[&nbsp;<span class=\"group2\">$group2</span>&nbsp;]";
		echo " [&nbsp;<span class=\"group3\">$group3</span>&nbsp;] [&nbsp;<span class=\"group4\">$group4</span>&nbsp;]";
		echo " [&nbsp;<span class=\"group5\">$group5</span>&nbsp;]<BR>[&nbsp;<span class=\"group10\">$group6</span>&nbsp;]";
		echo " [&nbsp;<span class=\"group11\">$group7</span>&nbsp;]
			[&nbsp;<span class=\"group12\">$group8</span>&nbsp;] [&nbsp;<span class=\"moderator\">$VModerator</span>&nbsp;]";
		echo " [&nbsp;<span class=\"admin\">$VAdministrator</span>&nbsp;]</td></tr></table>";
	}else{
		echo "$VLoggedIn:</td><td width=\"50%\"> [&nbsp;<span class=\"user\">$VUser</span>&nbsp;]
		[&nbsp;<span class=\"moderator\">$VModerator</span>&nbsp;] [&nbsp;<span class=\"admin\">$VAdministrator</span>&nbsp;]</td></tr></table>";
	}
	$thiscount=0;
	$handle = opendir($dbpath.'/online');
	while ($file = readdir($handle)) {
		if ($file != "." && $file != ".." && $file!=".htaccess" && $file!="index.htm") {
			include("$dbpath/members/$file");
			if ($loggedin){               //don't allow profile access when not logged in
					echo "<a href=\"profile.php?u=$file\">";
			}
			if ($usermod=="1") {
				echo "<span class=\"moderator\">";
			}
			if ($useradmin=="1") {
				echo "<span class=\"admin\">";
			}
			if ($groupcolors=="1"){
				if ($userrank=="1") {
					echo "<span class=\"group1\">";
				}
				if ($userrank=="2") {
					echo "<span class=\"group2\">";
				}
				if ($userrank=="3") {
					echo "<span class=\"group3\">";
				}
				if ($userrank=="4") {
					echo "<span class=\"group4\">";
				}
				if ($userrank=="5") {
					echo "<span class=\"group5\">";
				}
				if ($userrank=="10") {
					echo "<span class=\"group10\">";
				}
				if ($userrank=="11") {
					echo "<span class=\"group11\">";
				}
				if ($userrank=="12") {
					echo "<span class=\"group12\">";
				}
			}elseif ($useradmin!="1" && $usermod!="1"){
				echo "<span class=\"user\">";
			}
			include($dbpath."/members/".$file);
			echo "$useralias</span>";
			if ($loggedin){
				echo "</a>";
			}
			$thiscount++;
			if ($count>1 && $count !=$thiscount){        //no comma after the last logged on member
				echo ", ";
			}
		}
	}
	closedir($handle);

	$handle = opendir($dbpath.'/online');
	while ($file = readdir($handle)) {
		if ($file != "." && $file != "..") {
			$timer=5;
			$timeout = time()-(60*$timer);
			$filename = $dbpath."/online/".$file;
			$fd = fopen ($filename, "r");
			$ct = fread ($fd, filesize ($filename));
			fclose ($fd);
			if ($ct < $timeout) {
				unlink($dbpath."/online/".$file);
			}
		}
	}
	closedir($handle);
}
ob_end_flush();
?>


