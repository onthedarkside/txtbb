<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *			pmpshow.php  - PBLang
 *				-------------------
 *		see docs/copyright.txt for more details!
 *
*			Last modified 27 February 2005
 ***************************************************************************/

require('header.php');
include($dbpath."/settings/styles/styles.php");
include_once("functions.php");
include_once("ffunctions.php");
include_once("scan.php");
include("obfuscate.php");

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"1","0");
if ($permit=="1") {
     $language=SetLanguage($liusername);
     include("$temppath/pb/language/lang_$language.php");
     writeheader($newestm,0,0,0,$liusername,"1",$SendPM);
//     pmtop($username);
     WriteTableTop('');
	echo '<tr><td class="header" height=15 colspan=4>';
	echo "<a href=\"index.php\">$sitetitle</a><font color=\"$headerfont\"> :: $PrivateMessaging :: $VInbox</font></td></tr>";
	echo "<tr><td class=\"subheader\" colspan=\"4\"><a href=\"pm.php\">$VInbox</a> :: <a href=\"sendpm.php\">$VSendPM</a></td></tr>";

	$num=$_GET['num'];
	$i=$num;
	$u=$liusername;

	$filename = "$dbpath/pm/$liusername"."_$num"."_d";
	if (!file_exists($filename))
	{$filename=str_replace("_"," ",$filename);}
	$fd = fopen ($filename, "r");
	$date = fread ($fd, filesize ($filename));
	fclose ($fd);

	$filename = "$dbpath/pm/$liusername"."_$num"."_a";
	if (!file_exists($filename))
	{$filename=str_replace("_"," ",$filename);}
	$fd = fopen ($filename, "r");
	$auth = fread ($fd, filesize ($filename));
	fclose ($fd);

	$filename = "$dbpath/pm/$liusername"."_$num"."_c";
	if (!file_exists($filename))
	{$filename=str_replace("_"," ",$filename);}
	if (filesize($filename)){
		$fd = fopen ($filename, "r");
		$messg = fread ($fd, filesize ($filename));
		$messg = deobfuscateTextString($messg);
		fclose ($fd);
	}else{
		$messg='';
	}
	$messg=replacestuff($messg);

	$filename = "$dbpath/pm/$liusername"."_$num"."_s";
	if (!file_exists($filename))
		{$filename=str_replace("_"," ",$filename);}
	if (!file_exists($filename) || !filesize($filename)){
		$subj="--- $VNoSubject ---";
	}else{
		$fd = fopen ($filename, "r");
		$subj = fread ($fd, filesize ($filename));
		fclose ($fd);
	}

	$filename = "$dbpath/pm/$liusername"."_$num"."_pmstat";
	$fd = @fopen ($filename, "r");
	$pmstattest = trim(@fread ($fd, filesize ($filename)));
	@fclose ($fd);

	if ($pmstattest=="3"){
		$pmstat="3";
	}else{
		$pmstat="2";        //Nachricht wurde gelesen
		$fp = fopen("$dbpath/pm/$liusername"."_$num"."_pmstat", "w");
		fputs($fp, $pmstat);
		fclose($fp);
	}
	$orig="$liusername"."_$num"."_c";
//     pmshow($auth,$pmstat,$messg,$subj,$date,$i,$u,$orig);

	$date=strftime($DateFormat2,$date);
	echo "<tr bgcolor=\"$subheadercolor\" valign=\"top\"> ";
	echo "<td height=\"2\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"18%\">\n";
	$filename=$dbpath."/members/".$auth;
	if (file_exists($filename)){
		include ($filename);
		$author=$useralias;
	}else{
		$author=$VRemoved;
	}
	echo "<p>$VFrom: $author</p>\n";
	if ($pmstat=="2"){
		echo "<b>$VRead</b>";
	}elseif ($pmstat=="3"){
		echo "<b>$VReplied</b>";
	}
	echo "<br><a href=\"sendpm.php?to=$auth&subj=$subj&num=$i&orig=$orig\" title=\"$VSendPM $VTo $author\" alt=\"$VSendPM $VTo $author\">$VReply</a><BR>\n";
	echo "<a href=\"delpm.php?id=$i&a=$u\">$VDelete</a><BR><BR>$date</td>\n";
	echo "<td height=\"2\" bgcolor=\"$menucolor\" width=\"82%\">";
	if ($subj)
	{
			$subj = deobfuscateTextString($subj);
			echo "<P>$VSubject: <b>$subj</b></p>\n";
	}
	echo "<p>$messg</td></tr>\n";

	echo "</table></td></tr></table></td></tr></table>";
	writefooter($newestm);
}else{
     include("login.php");
}
ob_end_flush();
?>
